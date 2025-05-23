<?php
require_once 'config.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $_SESSION['error'] = "Please fill in all required fields.";
        header("Location: contact.php");
        exit;
    }
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Please enter a valid email address.";
        header("Location: contact.php");
        exit;
    }
    
    // Prepare email content
    $to = "salmonmusare@gmail.com";
    $email_subject = "New Contact Form Submission: $subject";
    
    $email_body = "You have received a new message from your website contact form.\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    if (!empty($phone)) {
        $email_body .= "Phone: $phone\n";
    }
    $email_body .= "Subject: $subject\n\n";
    $email_body .= "Message:\n$message\n";
    
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";
    
    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        $_SESSION['success'] = "Thank you for your message. We will get back to you soon!";
    } else {
        $_SESSION['error'] = "Sorry, there was an error sending your message. Please try again later.";
    }
    
    // Redirect back to contact page
    header("Location: contact.php");
    exit;
} else {
    // If not a POST request, redirect to contact page
    header("Location: contact.php");
    exit;
}
?> 