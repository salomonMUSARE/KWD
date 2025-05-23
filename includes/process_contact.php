<?php
require_once '../config.php';

// Set content type to JSON for AJAX requests
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    header('Content-Type: application/json');
}

try {
    // Validate input
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Invalid request method');
    }

    $required_fields = ['name', 'email', 'subject', 'message'];
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            throw new Exception("$field is required");
        }
    }

    // Sanitize input
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phone'] ?? '', FILTER_SANITIZE_STRING);
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Invalid email format');
    }

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
        INSERT INTO contact_messages (name, email, phone, subject, message, email_notification_status)
        VALUES (:name, :email, :phone, :subject, :message, 1)
    ");

    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':phone' => $phone,
        ':subject' => $subject,
        ':message' => $message
    ]);

    // Trigger notification script
    include_once 'send_notifications.php';

    // Send success response
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        echo json_encode([
            'success' => true,
            'message' => 'Message sent successfully'
        ]);
    } else {
        $_SESSION['success'] = "Thank you for your message. We will get back to you soon!";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;
    }

} catch (Exception $e) {
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        http_response_code(400);
        echo json_encode([
            'success' => false,
            'message' => $e->getMessage()
        ]);
    } else {
        $_SESSION['error'] = $e->getMessage();
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;
    }
}
?> 