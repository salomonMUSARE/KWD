<?php
require_once '../config.php';

header('Content-Type: application/json');

// Check if it's a POST request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

// Get and sanitize input
$name = sanitize_input($_POST['name'] ?? '');
$email = sanitize_input($_POST['email'] ?? '');
$phone = sanitize_input($_POST['phone'] ?? '');
$message = sanitize_input($_POST['message'] ?? '');

// Validate input
if (empty($name) || empty($email) || empty($phone) || empty($message)) {
    http_response_code(400);
    echo json_encode(['error' => 'All fields are required']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid email address']);
    exit;
}

try {
    // Connect to database
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );

    // Insert into database
    $stmt = $pdo->prepare("
        INSERT INTO contacts (name, email, phone, message)
        VALUES (:name, :email, :phone, :message)
    ");

    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':phone' => $phone,
        ':message' => $message
    ]);

    // Send email notification
    $to = ADMIN_EMAIL;
    $subject = "New Contact Form Submission from " . SITE_NAME;
    $headers = [
        'From' => $email,
        'Reply-To' => $email,
        'X-Mailer' => 'PHP/' . phpversion(),
        'Content-Type' => 'text/html; charset=UTF-8'
    ];

    $emailBody = "
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Message:</strong></p>
        <p>" . nl2br(htmlspecialchars($message)) . "</p>
    ";

    mail($to, $subject, $emailBody, $headers);

    // Return success response
    echo json_encode([
        'success' => true,
        'message' => 'Thank you for your message. We will get back to you soon.'
    ]);

} catch (PDOException $e) {
    // Log error but don't expose details to user
    error_log("Database error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode(['error' => 'An error occurred. Please try again later.']);
} catch (Exception $e) {
    // Log error but don't expose details to user
    error_log("General error: " . $e->getMessage());
    http_response_code(500);
    echo json_encode(['error' => 'An error occurred. Please try again later.']);
}

// Function to sanitize input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?> 