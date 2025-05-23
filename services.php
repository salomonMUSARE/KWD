<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - KigaliTech</title>
    
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

    <!-- Services Hero Section -->
    <section class="hero services-hero">
        <div class="container">
            <h1>Our Services</h1>
            <p>We make all kinds of apps - mobile, web, and desktop - to help your business grow!</p>
        </div>
    </section>

    <!-- Services Description -->
    <section class="services-description">
        <div class="container">
            <div class="services-content">
                <h2>What We Do</h2>
                <p>Hey there! We're a cool team of developers who love making apps that help businesses do better. We make:</p>
                
                <div class="service-types">
                    <div class="service-type">
                        <i class="fas fa-mobile-alt"></i>
                        <h3>Mobile Apps</h3>
                        <p>We make awesome apps for your phone that work super fast and look really nice. Whether you need an app for Android or iPhone, we got you covered!</p>
                    </div>
                    
                    <div class="service-type">
                        <i class="fas fa-globe"></i>
                        <h3>Web Apps</h3>
                        <p>Want a website that does cool stuff? We make websites that aren't just pretty - they actually help your business run better and make more money!</p>
                    </div>
                    
                    <div class="service-type">
                        <i class="fas fa-desktop"></i>
                        <h3>Desktop Apps</h3>
                        <p>Need a program that runs on computers? We make those too! They're fast, easy to use, and help you get stuff done quicker.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section class="technologies">
        <div class="container">
            <h2>Technologies We Use</h2>
            <div class="tech-slider">
                <div class="tech-item">
                    <span>Python</span>
                </div>
                <div class="tech-item">
                    <span>React.js</span>
                </div>
                <div class="tech-item">
                    <span>PHP</span>
                </div>
                <div class="tech-item">
                    <span>HTML5</span>
                </div>
                <div class="tech-item">
                    <span>Node.js</span>
                </div>
                <div class="tech-item">
                    <span>Next.js</span>
                </div>
                <div class="tech-item">
                    <span>WordPress</span>
                </div>
                <div class="tech-item">
                    <span>Java</span>
                </div>
                <div class="tech-item">
                    <span>JavaScript</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits">
        <div class="container">
            <h2>Why Work With Us?</h2>
            <div class="benefits-grid">
                <div class="benefit-item">
                    <i class="fas fa-rocket"></i>
                    <h3>Super Fast Delivery</h3>
                    <p>We don't waste time! Most of our apps are done in like 2 weeks, sometimes even faster if you need it quick.</p>
                </div>
                
                <div class="benefit-item">
                    <i class="fas fa-wallet"></i>
                    <h3>Good Prices</h3>
                    <p>We're not those super expensive developers. Our prices are fair and won't break your bank account!</p>
                </div>
                
                <div class="benefit-item">
                    <i class="fas fa-code"></i>
                    <h3>Clean Code</h3>
                    <p>We write code that's easy to understand and fix. That means your app will work great and be easy to update later!</p>
                </div>
                
                <div class="benefit-item">
                    <i class="fas fa-headset"></i>
                    <h3>Always Here to Help</h3>
                    <p>Got a problem? Just call or message us! We're always around to help fix stuff or answer your questions.</p>
                </div>
                
                <div class="benefit-item">
                    <i class="fas fa-magic"></i>
                    <h3>Cool Designs</h3>
                    <p>We make stuff that looks really nice! Your app won't just work good, it'll look awesome too!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <h2>Our Team</h2>
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