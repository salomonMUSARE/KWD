<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/meta.php'; ?>
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Structured Data for Organization -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "KigaliTech",
        "url": "https://kigalitech.vercel.app",
        "logo": "https://kigalitech.vercel.app/images/logos/logo.png",
        "description": "Leading web development and mobile app development company in Rwanda. Transform your business with our innovative digital solutions.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Kigali Heights, KG 7 Ave",
            "addressLocality": "Kigali",
            "addressCountry": "RW"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+250782768846",
            "contactType": "customer service",
            "email": "salmonmusare@gmail.com",
            "availableLanguage": ["English"]
        },
        "sameAs": [
            "https://wa.me/250782768846"
        ]
    }
    </script>

    <!-- Structured Data for Local Business -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "KigaliTech",
        "image": "https://kigalitech.vercel.app/images/logos/logo.png",
        "description": "Expert web development, mobile app development, and software solutions in Rwanda.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Kigali Heights, KG 7 Ave",
            "addressLocality": "Kigali",
            "addressCountry": "RW"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": -1.9536,
            "longitude": 30.0582
        },
        "url": "https://kigalitech.vercel.app",
        "telephone": "+250782768846",
        "priceRange": "$$",
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday"
            ],
            "opens": "09:00",
            "closes": "17:00"
        }
    }
    </script>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Innovative Solutions for the Digital Age</h1>
            <p>We build mobile, web, and desktop applications tailored to your business needs. We work in Kigali height building KG 7 Ave, Kigali</p>
            <div class="hero-buttons">
                <a href="#contact" class="btn btn-primary">Get Started</a>
                <a href="#portfolio" class="btn btn-secondary">View Our Work</a>
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section class="technologies">
        <div class="container">
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

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <h2>About Us</h2>
            <h3>Building the Future of Digital Experiences</h3>
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
                    <div class="portfolio-overlay" style="opacity: 1; background: rgba(0, 0, 0, 0.9);">
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

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="container">
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

    <?php include 'includes/footer.php'; ?>

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

    <script src="assets/js/main.js"></script>
    <script src="assets/js/gallery.js"></script>
</body>
</html> 