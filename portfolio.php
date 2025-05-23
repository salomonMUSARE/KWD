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
            <h2>Our Portfolio</h2>
            <div class="portfolio-grid">
                <div class="portfolio-item">
                    <img src="images/SNAP SALOON/OG OG.png" alt="Snap Salon">
                    <div class="portfolio-overlay">
                        <h3>Snap Salon</h3>
                        <p>Mobile App</p>
                        <a href="#" class="btn btn-primary">View Project</a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="images/orgin art/OG OG.png" alt="Orgin Arts">
                    <div class="portfolio-overlay">
                        <h3>Orgin Arts</h3>
                        <p>Web Development</p>
                        <a href="#" class="btn btn-primary">View Project</a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="images/live for others/OG OG.png" alt="Live For Others">
                    <div class="portfolio-overlay">
                        <h3>Live For Others</h3>
                        <p>Nonprofit</p>
                        <a href="#" class="btn btn-primary">View Project</a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="images/GOLD PROFITER/OG OG.jpg" alt="Gold Profiter">
                    <div class="portfolio-overlay">
                        <h3>Gold Profiter</h3>
                        <p>Finance</p>
                        <a href="#" class="btn btn-primary">View Project</a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="images/vivid drive/OG OG.png" alt="Vivid Drive">
                    <div class="portfolio-overlay">
                        <h3>Vivid Drive</h3>
                        <p>Web Application</p>
                        <a href="#" class="btn btn-primary">View Project</a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-overlay" style="background: rgba(0, 0, 0, 0.9);">
                        <h3>Kanda Technologies</h3>
                        <p>Insurance Technology Solutions</p>
                        <div style="display: flex; gap: 1rem; margin-top: 1rem;">
                            <a href="https://kandaclaim.com/" target="_blank" class="btn btn-primary">Kanda Claim</a>
                            <a href="https://kandatechnologies.com/" target="_blank" class="btn btn-primary">Kanda Tech</a>
                        </div>
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

    <!-- Portfolio Gallery Modal -->
    <div class="portfolio-modal">
        <div class="modal-content">
            <div class="modal-title"></div>
            <div class="close-modal">&times;</div>
            <div class="modal-image-container">
                <img src="" alt="">
            </div>
            <button class="nav-btn prev-btn">&lt;</button>
            <button class="nav-btn next-btn">&gt;</button>
        </div>
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
    <script src="assets/js/gallery.js"></script>
</body>
</html> 