<?php
// filepath: send-email.php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

$data = json_decode(file_get_contents('php://input'), true);

if (json_last_error() !== JSON_ERROR_NONE) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid JSON data']);
    exit;
}

$requiredFields = ['firstName', 'phone', 'email', 'subject', 'message'];
foreach ($requiredFields as $field) {
    if (empty($data[$field])) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => "Missing required field: $field"]);
        exit;
    }
}

$firstName = htmlspecialchars(strip_tags($data['firstName']), ENT_QUOTES, 'UTF-8');
$phone = htmlspecialchars(strip_tags($data['phone']), ENT_QUOTES, 'UTF-8');
$email = filter_var($data['email'], FILTER_SANITIZE_EMAIL);
$subject = htmlspecialchars(strip_tags($data['subject']), ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars(strip_tags($data['message']), ENT_QUOTES, 'UTF-8');

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid email address']);
    exit;
}

// Email Information - Following BlackKnight's exact format
$email_to = "info@tfdservices.ie";
$email_from = "info@tfdservices.ie";
$email_headers = "MIME-Version: 1.0\r\n";
$email_headers .= "From: TFD Services <info@tfdservices.ie>\r\n";  // Must match -f parameter
$email_headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$email_headers .= "Reply-To: " . $email . "\r\n";  // Customer's email for replies
$email_subject = "New Contact Form: " . $subject;

$email_body = "You have received a new contact form submission from TFD Services website.\n\n";
$email_body .= "Contact Information:\n";
$email_body .= "===================\n";
$email_body .= "Name: $firstName\n";
$email_body .= "Phone: $phone\n";
$email_body .= "Email: $email\n";
$email_body .= "Subject: $subject\n\n";
$email_body .= "Message:\n";
$email_body .= "========\n";
$email_body .= "$message\n\n";
$email_body .= "---\n";
$email_body .= "Sent from: TFD Services Contact Form\n";
$email_body .= "Date/Time: " . date('Y-m-d H:i:s T') . "\n";

// Send Email - Following BlackKnight's exact format
$mailerResult = @mail($email_to, $email_subject, $email_body, $email_headers, '-f ' . $email_from);

// Enhanced logging
$logData = [
    'timestamp' => date('Y-m-d H:i:s T'),
    'to' => $email_to,
    'from' => $email_from,
    'subject' => $email_subject,
    'customer_email' => $email,
    'customer_name' => $firstName,
    'result' => $mailerResult ? 'SUCCESS' : 'FAILED'
];

if (!$mailerResult) {
    $lastError = error_get_last();
    $logData['error'] = $lastError['message'] ?? 'Unknown error';
}

file_put_contents('email_debug.log', json_encode($logData) . "\n", FILE_APPEND | LOCK_EX);

// Check For Errors - Following BlackKnight's format
if ($mailerResult) {
    echo json_encode([
        'success' => true, 
        'message' => 'Thank you for your message! We will get back to you soon.'
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        'success' => false, 
        'message' => 'Failed to send message. Please try again.'
    ]);
}
?>
