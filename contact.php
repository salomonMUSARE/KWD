<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - KigaliTech</title>
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- Contact Hero Section -->
    <section class="hero contact-hero">
        <div class="container">
            <h1>Contact Us</h1>
            <p>Let's Build Something Amazing Together</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="container">
            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success">
                    <?php 
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </div>
            <?php endif; ?>

            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-error">
                    <?php 
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                </div>
            <?php endif; ?>

            <div class="contact-grid">
                <!-- Left Side: Contact Information -->
                <div class="contact-info">
                    <div class="contact-info-content">
                        <h2>Get in Touch</h2>
                        <p class="contact-intro">Have a project in mind? We'd love to hear from you. Choose your preferred way to reach us.</p>
                        
                        <div class="contact-methods">
                            <div class="contact-method">
                                <div class="contact-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-details">
                                    <h3>Call Us</h3>
                                    <a href="tel:+250782768846" target="_blank">+250 782 768 846</a>
                                    <p>Available Monday to Friday, 9 AM - 5 PM</p>
                                </div>
                            </div>
                            
                            <div class="contact-method">
                                <div class="contact-icon">
                                    <i class="fab fa-whatsapp"></i>
                                </div>
                                <div class="contact-details">
                                    <h3>WhatsApp</h3>
                                    <a href="https://wa.me/250782768846?text=Hello%20Kigali%20website%20designers" target="_blank">Chat with us</a>
                                    <p>Quick responses during business hours</p>
                                </div>
                            </div>
                            
                            <div class="contact-method">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-details">
                                    <h3>Email</h3>
                                    <a href="mailto:salmonmusare@gmail.com" target="_blank">salmonmusare@gmail.com</a>
                                    <p>We'll respond within 24 hours</p>
                                </div>
                            </div>
                            
                            <div class="contact-method">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-details">
                                    <h3>Visit Us</h3>
                                    <p>Kigali Heights, KG 7 Ave</p>
                                    <p>Kigali, Rwanda</p>
                                </div>
                            </div>
                        </div>

                        <div class="contact-social">
                            <h3>Follow Us</h3>
                            <div class="social-links">
                                <a href="#" target="_blank" class="social-link">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="#" target="_blank" class="social-link">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" target="_blank" class="social-link">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="#" target="_blank" class="social-link">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Contact Form -->
                <div class="contact-form-container">
                    <div class="form-wrapper">
                        <h2>Send us a Message</h2>
                        <p class="form-intro">Fill out the form below and we'll get back to you as soon as possible.</p>
                        <form id="contactForm" class="contact-form" action="includes/process_contact.php" method="POST">
                            <div class="form-group">
                                <input type="text" id="name" name="name" required placeholder=" ">
                                <label for="name">Name</label>
                            </div>
                            
                            <div class="form-group">
                                <input type="email" id="email" name="email" required placeholder=" ">
                                <label for="email">Email</label>
                            </div>
                            
                            <div class="form-group">
                                <input type="tel" id="phone" name="phone" placeholder=" ">
                                <label for="phone">Phone (Optional)</label>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" id="subject" name="subject" required placeholder=" ">
                                <label for="subject">Subject</label>
                            </div>
                            
                            <div class="form-group">
                                <textarea id="message" name="message" rows="5" required placeholder=" "></textarea>
                                <label for="message">Message</label>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <h2>Our Location</h2>
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.5089353517!2d30.0582!3d-1.9536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMcKwNTcnMTMuMCJTIDMwwrAwMycxOS41IkU!5e0!3m2!1sen!2srw!4v1620000000000!5m2!1sen!2srw" 
                    width="100%" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </section>

    <!-- Floating Contact Button -->
    <div class="floating-contact-btn">
        <i class="fas fa-comment-dots"></i>
    </div>

    <!-- Contact Popup -->
    <div class="contact-popup-overlay"></div>
    <div class="contact-popup">
        <h3>Get in Touch</h3>
        <p>Choose your preferred way to contact us</p>
        <div class="contact-popup-buttons">
            <a href="tel:+250782768846" target="_blank" class="contact-popup-btn phone">
                <i class="fas fa-phone"></i>
                Call Us
            </a>
            <a href="https://wa.me/250782768846?text=Hello%20Kigali%20website%20designers" target="_blank" class="contact-popup-btn whatsapp">
                <i class="fab fa-whatsapp"></i>
                WhatsApp
            </a>
            <a href="mailto:salmonmusare@gmail.com" target="_blank" class="contact-popup-btn email">
                <i class="fas fa-envelope"></i>
                Email
            </a>
        </div>
    </div>

    <!-- Form Success Message and Overlay -->
    <div class="form-success" style="display:none;">
        <p style="font-size:1.5rem; font-weight:bold; margin-bottom:1rem;">Email successfully sent!</p>
        <button class="close-btn" style="font-size:1.2rem; padding:0.75rem 2.5rem; background:#007bff; color:#fff; border:none; border-radius:6px; cursor:pointer;">OK</button>
    </div>
    <div class="form-success-overlay" style="display:none;"></div>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/main.js"></script>
</body>
</html> 