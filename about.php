<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - KigaliTech</title>
    
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

    <!-- About Hero Section -->
    <section class="hero about-hero">
        <div class="container">
            <h1>About Us</h1>
            <p>Building the Future of Digital Experiences</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <h2>Our Story</h2>
            <p>Based in Kigali Heights, we are a team of passionate developers and designers dedicated to creating innovative digital solutions that help businesses thrive in the modern world.</p>
            
            <div class="team-section">
                <h3>Our Team</h3>
                <div class="team-grid">
                    <div class="team-member">
                        <img src="images/profile pictures/salomon musare.jpg" alt="Musare Salomon">
                        <h4>Musare Salomon</h4>
                        <p>Lead Developer</p>
                        <p class="member-description">Full-stack developer with 5+ years of experience in web and mobile application development.</p>
                    </div>
                    <div class="team-member">
                        <img src="images/profile pictures/mucyo maxime.jpg" alt="Mucyo Maxime">
                        <h4>Mucyo Maxime</h4>
                        <p>Creative Director</p>
                        <p class="member-description">UI/UX specialist with a background in graphic design and front-end development.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <h2>Client Testimonials</h2>
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"The price was fair and delivered in 2 weeks each app"</p>
                    </div>
                    <div class="testimonial-author">
                        <h4>Honore Busogo</h4>
                        <p>CEO of Snap Salons & CTO of Live For Others</p>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"He respected the time frame and he made the whole app from designs and codes and logo, I highly recommend"</p>
                    </div>
                    <div class="testimonial-author">
                        <h4>Clifford Selom</h4>
                        <p>CEO of Gold Profiters Ltd</p>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"I highly recommend Kigali Tech, they are cheap and skilled, they deserve the recognition. Also they deliver fast"</p>
                    </div>
                    <div class="testimonial-author">
                        <h4>Aline Uwase</h4>
                        <p>CEO of Kanda Claim</p>
                    </div>
                </div>
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

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/main.js"></script>
</body>
</html> 