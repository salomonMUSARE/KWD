<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KigaliTech - Innovative Solutions for the Digital Age</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
                    <img src="assets/images/tech/python.png" alt="Python">
                    <span>Python</span>
                </div>
                <div class="tech-item">
                    <img src="assets/images/tech/react.png" alt="React.js">
                    <span>React.js</span>
                </div>
                <div class="tech-item">
                    <img src="assets/images/tech/php.png" alt="PHP">
                    <span>PHP</span>
                </div>
                <div class="tech-item">
                    <img src="assets/images/tech/html.png" alt="HTML">
                    <span>HTML</span>
                </div>
                <div class="tech-item">
                    <img src="assets/images/tech/node.png" alt="Node.js">
                    <span>Node.js</span>
                </div>
                <div class="tech-item">
                    <img src="assets/images/tech/next.png" alt="Next.js">
                    <span>Next.js</span>
                </div>
                <div class="tech-item">
                    <img src="assets/images/tech/wordpress.png" alt="WordPress">
                    <span>WordPress</span>
                </div>
                <div class="tech-item">
                    <img src="assets/images/tech/java.png" alt="Java">
                    <span>Java</span>
                </div>
                <div class="tech-item">
                    <img src="assets/images/tech/javascript.png" alt="JavaScript">
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
                        <img src="assets/images/team/musare.jpg" alt="Musare Salomon">
                        <h4>Musare Salomon</h4>
                        <p>Lead Developer</p>
                        <p class="member-description">Full-stack developer with 5+ years of experience in web and mobile application development.</p>
                    </div>
                    <div class="team-member">
                        <img src="assets/images/team/maxime.jpg" alt="Mucyo Maxime">
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
                    <img src="assets/images/portfolio/snap-salon.jpg" alt="Snap Salon">
                    <div class="portfolio-overlay">
                        <h3>Snap Salon</h3>
                        <p>Mobile App</p>
                        <a href="#" class="btn btn-primary">View Project</a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="assets/images/portfolio/orgin-arts.jpg" alt="Orgin Arts">
                    <div class="portfolio-overlay">
                        <h3>Orgin Arts</h3>
                        <p>Web Development</p>
                        <a href="#" class="btn btn-primary">View Project</a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="assets/images/portfolio/live-for-others.jpg" alt="Live For Others">
                    <div class="portfolio-overlay">
                        <h3>Live For Others</h3>
                        <p>Nonprofit</p>
                        <a href="#" class="btn btn-primary">View Project</a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="assets/images/portfolio/gold-profiter.jpg" alt="Gold Profiter">
                    <div class="portfolio-overlay">
                        <h3>Gold Profiter</h3>
                        <p>Finance</p>
                        <a href="#" class="btn btn-primary">View Project</a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="assets/images/portfolio/vivid-drive.jpg" alt="Vivid Drive">
                    <div class="portfolio-overlay">
                        <h3>Vivid Drive</h3>
                        <p>Web Application</p>
                        <a href="#" class="btn btn-primary">View Project</a>
                    </div>
                </div>
                <div class="portfolio-item">
                    <img src="assets/images/portfolio/kanda-tech.jpg" alt="Kanda Technologies">
                    <div class="portfolio-overlay">
                        <h3>Kanda Technologies</h3>
                        <p>Web Development</p>
                        <a href="#" class="btn btn-primary">View Website</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <h2>Get in Touch</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <h3>Phone</h3>
                        <p><?php echo CONTACT_PHONE; ?></p>
                    </div>
                    <div class="info-item">
                        <i class="fab fa-whatsapp"></i>
                        <h3>WhatsApp</h3>
                        <p>Chat with us</p>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <h3>Email</h3>
                        <p><?php echo CONTACT_EMAIL; ?></p>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <h3>Address</h3>
                        <p><?php echo CONTACT_ADDRESS; ?></p>
                    </div>
                </div>
                <div class="contact-form">
                    <form action="includes/process_contact.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="phone" placeholder="Phone Number" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/main.js"></script>
</body>
</html> 