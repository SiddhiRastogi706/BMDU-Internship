<?php
/**
 * Conquer Services - Blog Lead Magnet (Security Checklist Download) Handler
 * File: includes/lead-magnet.php
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

$name  = sanitize($_POST['name']  ?? '');
$phone = sanitize($_POST['phone'] ?? '');
$email = sanitize($_POST['email'] ?? '');

if (empty($name) || empty($phone) || empty($email)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Name, Phone and Email are required.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
    exit;
}

$to      = 'Info@conquerservices.com';
$subject = "New Security Checklist Download Request from $name — Conquer Services";

$body  = "A visitor downloaded the free security checklist from the blog page.\n\n";
$body .= "-------------------------------------------\n";
$body .= "Name       : $name\n";
$body .= "Phone      : $phone\n";
$body .= "Email      : $email\n";
$body .= "-------------------------------------------\n";
$body .= "Submitted  : " . date('Y-m-d H:i:s') . "\n";
$body .= "IP Address : " . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . "\n";

$headers  = "From: noreply@conquerservices.com\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Path to the actual PDF checklist — upload your file here and update the path.
$download_url = 'assets/downloads/security-checklist.pdf';

if (mail($to, $subject, $body, $headers)) {
    echo json_encode([
        'success'      => true,
        'message'      => 'Thank you! Your download will begin shortly.',
        'download_url' => $download_url,
    ]);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Unable to process your request. Please call us directly at +91 94306 95171.']);
}