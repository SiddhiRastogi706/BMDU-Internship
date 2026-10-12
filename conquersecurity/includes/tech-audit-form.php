<?php
/**
 * Conquer Services - Free Security Technology Audit Request Handler
 * File: includes/tech-audit-form.php
 */

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

function sanitize($input) {
    return htmlspecialchars(strip_tags(trim($input)));
}

$name         = sanitize($_POST['name']         ?? '');
$organisation = sanitize($_POST['organisation'] ?? '');
$phone        = sanitize($_POST['phone']        ?? '');
$email        = sanitize($_POST['email']        ?? '');
$location     = sanitize($_POST['location']     ?? '');

if (empty($name) || empty($organisation) || empty($phone) || empty($location)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Name, Organisation, Phone and Location are required.']);
    exit;
}

if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
    exit;
}

$to      = 'Info@conquerservices.com';
$subject = "New Free Security Technology Audit Request from $name — Conquer Services";

$body  = "New Technology Audit request received from the Technology & Support Services page.\n\n";
$body .= "-------------------------------------------\n";
$body .= "Name          : $name\n";
$body .= "Organisation  : $organisation\n";
$body .= "Phone         : $phone\n";
$body .= "Email         : $email\n";
$body .= "Location      : $location\n";
$body .= "-------------------------------------------\n";
$body .= "Submitted     : " . date('Y-m-d H:i:s') . "\n";
$body .= "IP Address    : " . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . "\n";

$headers  = "From: noreply@conquerservices.com\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $body, $headers)) {
    echo json_encode(['success' => true, 'message' => 'Thank you! Our team will contact you shortly to schedule your free technology audit.']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Unable to send your request. Please call us directly at +91 94306 95171.']);
}