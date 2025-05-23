<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Portfolio - KigaliTech</title>
    
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

    <!-- Portfolio Hero Section -->
    <section class="hero portfolio-hero">
        <div class="container">
            <h1>Our Portfolio</h1>
            <p>Showcasing Our Best Work</p>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <h2>Our Work</h2>
            <p class="section-description">Explore our latest projects and see how we've helped businesses transform their digital presence.</p>
            
            <div class="portfolio-grid">
                <!-- Kanda Technologies -->
                <div class="portfolio-item">
                    <div class="portfolio-overlay" style="background: rgba(0, 0, 0, 0.9);">
                        <h3>Kanda Technologies</h3>
                        <p>Insurance Technology Solutions</p>
                        <div class="portfolio-buttons">
                            <a href="https://kandaclaim.com" target="_blank" class="btn btn-primary">Kanda Claim</a>
                            <a href="https://kandatech.com" target="_blank" class="btn btn-primary">Kanda Tech</a>
                        </div>
                    </div>
                </div>

                <!-- Snap Salons -->
                <div class="portfolio-item">
                    <img src="images/portfolio/snap-salons.jpg" alt="Snap Salons">
                    <div class="portfolio-overlay">
                        <h3>Snap Salons</h3>
                        <p>Salon Management System</p>
                        <a href="https://snapsalons.com" target="_blank" class="btn btn-primary">View Project</a>
                    </div>
                </div>

                <!-- Live For Others -->
                <div class="portfolio-item">
                    <img src="images/portfolio/live-for-others.jpg" alt="Live For Others">
                    <div class="portfolio-overlay">
                        <h3>Live For Others</h3>
                        <p>Charity Management Platform</p>
                        <a href="https://liveforothers.org" target="_blank" class="btn btn-primary">View Project</a>
                    </div>
                </div>

                <!-- Gold Profiters -->
                <div class="portfolio-item">
                    <img src="images/portfolio/gold-profiters.jpg" alt="Gold Profiters">
                    <div class="portfolio-overlay">
                        <h3>Gold Profiters</h3>
                        <p>Investment Management System</p>
                        <a href="https://goldprofiters.com" target="_blank" class="btn btn-primary">View Project</a>
                    </div>
                </div>

                <!-- Kigali Tech Website -->
                <div class="portfolio-item">
                    <img src="images/portfolio/kigali-tech.jpg" alt="Kigali Tech Website">
                    <div class="portfolio-overlay">
                        <h3>Kigali Tech Website</h3>
                        <p>Company Website & Portfolio</p>
                        <a href="https://kigalitech.com" target="_blank" class="btn btn-primary">View Project</a>
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