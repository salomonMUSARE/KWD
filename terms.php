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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- Terms Hero Section -->
    <section class="hero terms-hero">
        <div class="container">
            <h1>Terms of Service</h1>
            <p>Our Terms and Conditions</p>
        </div>
    </section>

    <!-- Terms Content -->
    <section class="terms-content">
        <div class="container">
            <div class="content-wrapper">
                <h2>Terms of Service</h2>
                <p class="last-updated">Last Updated: <?php echo date('F d, Y'); ?></p>

                <div class="terms-section">
                    <h3>1. Agreement to Terms</h3>
                    <p>By accessing or using KigaliTech's services, you agree to be bound by these Terms of Service. If you disagree with any part of the terms, you may not access our services.</p>
                </div>

                <div class="terms-section">
                    <h3>2. Services</h3>
                    <p>KigaliTech provides web development, mobile app development, and software solutions. Our services include but are not limited to:</p>
                    <ul>
                        <li>Website design and development</li>
                        <li>Mobile application development</li>
                        <li>Custom software development</li>
                        <li>UI/UX design</li>
                        <li>Technical consulting</li>
                    </ul>
                </div>

                <div class="terms-section">
                    <h3>3. Project Terms</h3>
                    <p>For each project, we will:</p>
                    <ul>
                        <li>Provide a detailed proposal and timeline</li>
                        <li>Require a signed agreement before starting work</li>
                        <li>Follow an agreed-upon payment schedule</li>
                        <li>Deliver work according to specifications</li>
                        <li>Provide support and maintenance as agreed</li>
                    </ul>
                </div>

                <div class="terms-section">
                    <h3>4. Intellectual Property</h3>
                    <p>Upon full payment:</p>
                    <ul>
                        <li>You own the final deliverables</li>
                        <li>We retain rights to underlying code and frameworks</li>
                        <li>We may use your project in our portfolio</li>
                        <li>You grant us permission to display your logo and project details</li>
                    </ul>
                </div>

                <div class="terms-section">
                    <h3>5. Payment Terms</h3>
                    <p>Our standard payment terms include:</p>
                    <ul>
                        <li>50% deposit before project start</li>
                        <li>25% at project midpoint</li>
                        <li>25% upon project completion</li>
                        <li>Payment within 14 days of invoice</li>
                    </ul>
                </div>

                <div class="terms-section">
                    <h3>6. Confidentiality</h3>
                    <p>We agree to:</p>
                    <ul>
                        <li>Keep your information confidential</li>
                        <li>Use information only for project purposes</li>
                        <li>Not disclose information to third parties</li>
                        <li>Return or destroy confidential information upon request</li>
                    </ul>
                </div>

                <div class="terms-section">
                    <h3>7. Limitation of Liability</h3>
                    <p>KigaliTech shall not be liable for any indirect, incidental, special, consequential, or punitive damages resulting from your use of our services.</p>
                </div>

                <div class="terms-section">
                    <h3>8. Changes to Terms</h3>
                    <p>We reserve the right to modify these terms at any time. We will notify you of any changes by posting the new terms on this page.</p>
                </div>

                <div class="terms-section">
                    <h3>9. Contact Us</h3>
                    <p>If you have any questions about these Terms, please contact us at:</p>
                    <ul>
                        <li>Email: <?php echo CONTACT_EMAIL; ?></li>
                        <li>Phone: <?php echo CONTACT_PHONE; ?></li>
                        <li>Address: <?php echo CONTACT_ADDRESS; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/main.js"></script>
</body>
</html> 