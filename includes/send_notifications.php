<?php
require_once '../config.php';

function sendEmailNotification($messages) {
    $to = 'salmonmusare@gmail.com';
    $subject = 'New Contact Form Submissions - ' . date('Y-m-d H:i:s');
    
    $message = "<html><body>";
    $message .= "<h2>New Contact Form Submissions</h2>";
    $message .= "<p>The following messages were received:</p>";
    
    foreach ($messages as $msg) {
        $message .= "<div style='margin-bottom: 20px; padding: 15px; border: 1px solid #ddd; border-radius: 5px;'>";
        $message .= "<p><strong>Time:</strong> " . $msg['created_at'] . "</p>";
        $message .= "<p><strong>Name:</strong> " . htmlspecialchars($msg['name']) . "</p>";
        $message .= "<p><strong>Email:</strong> " . htmlspecialchars($msg['email']) . "</p>";
        $message .= "<p><strong>Phone:</strong> " . htmlspecialchars($msg['phone']) . "</p>";
        $message .= "<p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($msg['message'])) . "</p>";
        $message .= "</div>";
    }
    
    $message .= "</body></html>";
    
    $headers = [
        'MIME-Version: 1.0',
        'Content-type: text/html; charset=UTF-8',
        'From: KigaliTech Website <noreply@kigalitech.com>',
        'Reply-To: noreply@kigalitech.com',
        'X-Mailer: PHP/' . phpversion()
    ];
    
    return mail($to, $subject, $message, implode("\r\n", $headers));
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
    
    // Get all unsent messages
    $stmt = $pdo->prepare("
        SELECT * FROM contact_messages 
        WHERE email_notification_status = 1 
        ORDER BY created_at ASC
    ");
    $stmt->execute();
    $messages = $stmt->fetchAll();
    
    if (!empty($messages)) {
        // Send email with all messages
        if (sendEmailNotification($messages)) {
            // Update status for all sent messages
            $stmt = $pdo->prepare("
                UPDATE contact_messages 
                SET email_notification_status = 2 
                WHERE email_notification_status = 1
            ");
            $stmt->execute();
            
            error_log("Successfully sent " . count($messages) . " messages to " . $to);
        } else {
            error_log("Failed to send email notification");
        }
    }
    
} catch (Exception $e) {
    error_log("Error in send_notifications.php: " . $e->getMessage());
} 