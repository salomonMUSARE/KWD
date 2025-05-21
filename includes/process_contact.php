<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Function to sanitize input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form data
    $name = sanitize_input($_POST['name'] ?? '');
    $email = sanitize_input($_POST['email'] ?? '');
    $phone = sanitize_input($_POST['phone'] ?? '');
    $message = sanitize_input($_POST['message'] ?? '');
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format";
        header("Location: ../index.php#contact");
        exit();
    }
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        $_SESSION['error'] = "All fields are required";
        header("Location: ../index.php#contact");
        exit();
    }
    
    // Prepare email content
    $to = "salmonmusare@gmail.com"; // Replace with your email
    $subject = "New Contact Form Submission from KigaliTech Website";
    
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n\n";
    $email_content .= "Message:\n$message\n";
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        $_SESSION['success'] = "Thank you for your message. We will get back to you soon!";
    } else {
        $_SESSION['error'] = "Sorry, there was an error sending your message. Please try again later.";
    }
    
    // Redirect back to the contact form
    header("Location: ../index.php#contact");
    exit();
} else {
    // If not a POST request, redirect to home page
    header("Location: ../index.php");
    exit();
}
?> 