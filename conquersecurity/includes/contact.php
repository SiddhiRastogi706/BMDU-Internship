<?php
header('Content-Type: application/json');

require __DIR__ . '/PHPMailer/PHPMailer.php';
require __DIR__ . '/PHPMailer/SMTP.php';
require __DIR__ . '/PHPMailer/Exception.php';
require __DIR__ . '/db.php'; // provides $pdo

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ─────────────────────────────────────────────────────────
// SMTP credentials now live in .env (never in this file / never in git).
// Copy .env.example to .env in the project root and fill in real values.
// ─────────────────────────────────────────────────────────
require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->safeLoad();

$SMTP_EMAIL    = $_ENV['SMTP_EMAIL'] ?? '';
$SMTP_PASSWORD = $_ENV['SMTP_PASSWORD'] ?? '';
$TO_EMAIL      = $_ENV['LEAD_TO_EMAIL'] ?? '';
$TO_NAME       = $_ENV['LEAD_TO_NAME'] ?? 'Conquer Services';

if ($SMTP_EMAIL === '' || $SMTP_PASSWORD === '' || $TO_EMAIL === '') {
    error_log('contact.php: SMTP_EMAIL / SMTP_PASSWORD / LEAD_TO_EMAIL missing from .env');
    echo json_encode([
        'success' => false,
        'message' => 'Unable to send email. Please call us directly at +91 94306 95171.'
    ]);
    exit;
}
// ─────────────────────────────────────────────────────────

// Basic validation — every form on the site sends at least name + phone
if (empty($_POST['name']) || empty($_POST['phone'])) {
    echo json_encode([
        'success' => false,
        'message' => 'Name and phone are required.'
    ]);
    exit;
}

// Build a readable label for each known field, in a sensible order.
// Any extra/unexpected POST field still gets included automatically below.
$field_labels = [
    'form_type'    => 'Form Type',
    'name'         => 'Name',
    'phone'        => 'Phone',
    'email'        => 'Email',
    'company'      => 'Company / Society Name',
    'location'     => 'Location',
    'service'      => 'Service Required',
    'society_size' => 'Society Size',
    'message'      => 'Message',
];

$form_type = $_POST['form_type'] ?? 'General Enquiry';

$body_rows = '';
foreach ($field_labels as $key => $label) {
    if (!empty($_POST[$key])) {
        $value = htmlspecialchars($_POST[$key], ENT_QUOTES, 'UTF-8');
        $body_rows .= "<tr><td style='padding:8px 12px;font-weight:bold;border:1px solid #eee;'>{$label}</td><td style='padding:8px 12px;border:1px solid #eee;'>{$value}</td></tr>";
    }
}
// Catch any other fields not in the list above, so nothing silently gets dropped
foreach ($_POST as $key => $value) {
    if (!array_key_exists($key, $field_labels) && $value !== '') {
        $safeKey   = htmlspecialchars(ucwords(str_replace('_', ' ', $key)), ENT_QUOTES, 'UTF-8');
        $safeValue = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
        $body_rows .= "<tr><td style='padding:8px 12px;font-weight:bold;border:1px solid #eee;'>{$safeKey}</td><td style='padding:8px 12px;border:1px solid #eee;'>{$safeValue}</td></tr>";
    }
}

$email_body = "
<h2 style='font-family:sans-serif;'>New Lead — {$form_type}</h2>
<table style='border-collapse:collapse;font-family:sans-serif;font-size:14px;'>{$body_rows}</table>
<p style='font-family:sans-serif;color:#888;font-size:12px;margin-top:16px;'>Submitted from " . htmlspecialchars($_SERVER['HTTP_REFERER'] ?? 'website') . " at " . date('d M Y, h:i A') . "</p>
";

// ── Save lead to database first, so it's never lost even if email sending fails ──
try {
    $stmt = $pdo->prepare(
        "INSERT INTO leads (form_type, name, phone, email, company, location, service, message, source_url)
         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)"
    );
    $stmt->execute([
        $form_type,
        $_POST['name'],
        $_POST['phone'],
        $_POST['email'] ?? null,
        $_POST['company'] ?? null,
        $_POST['location'] ?? null,
        $_POST['service'] ?? ($_POST['society_size'] ?? null),
        $_POST['message'] ?? null,
        $_SERVER['HTTP_REFERER'] ?? null,
    ]);
} catch (PDOException $e) {
    error_log('Lead DB insert failed: ' . $e->getMessage());
    // Don't stop execution — still try to send the email even if DB insert fails
}

$mail = new PHPMailer(true);

try {
    // SMTP config — Gmail
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = $SMTP_EMAIL;
    $mail->Password   = $SMTP_PASSWORD;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom($SMTP_EMAIL, $_POST['name'] ?? 'Website Lead');
    $mail->addAddress($TO_EMAIL, $TO_NAME);
    if (!empty($_POST['email'])) {
        $mail->addReplyTo($_POST['email'], $_POST['name']);
    }

    $mail->isHTML(true);
    $mail->Subject = "New Website Lead — {$form_type}";
    $mail->Body    = $email_body;

    $mail->send();

    echo json_encode([
        'success' => true,
        'message' => 'Thank you! We will get back to you shortly.'
    ]);
} catch (Exception $e) {
    error_log('Mail send failed: ' . $mail->ErrorInfo);
    echo json_encode([
        'success' => false,
        'message' => 'Unable to send email. Please call us directly at +91 94306 95171.'
    ]);
}