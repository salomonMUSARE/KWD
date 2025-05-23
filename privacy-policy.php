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

    <!-- Privacy Policy Hero Section -->
    <section class="hero privacy-hero">
        <div class="container">
            <h1>Privacy Policy</h1>
            <p>Your Privacy Matters to Us</p>
        </div>
    </section>

    <!-- Privacy Policy Content -->
    <section class="privacy-content">
        <div class="container">
            <div class="content-wrapper">
                <h2>Privacy Policy</h2>
                <p class="last-updated">Last Updated: <?php echo date('F d, Y'); ?></p>

                <div class="policy-section">
                    <h3>1. Introduction</h3>
                    <p>At KigaliTech, we take your privacy seriously. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website or use our services.</p>
                </div>

                <div class="policy-section">
                    <h3>2. Information We Collect</h3>
                    <p>We collect information that you provide directly to us, including:</p>
                    <ul>
                        <li>Name and contact information</li>
                        <li>Email address</li>
                        <li>Phone number</li>
                        <li>Project requirements and specifications</li>
                        <li>Communication preferences</li>
                    </ul>
                </div>

                <div class="policy-section">
                    <h3>3. How We Use Your Information</h3>
                    <p>We use the information we collect to:</p>
                    <ul>
                        <li>Provide and maintain our services</li>
                        <li>Respond to your inquiries and requests</li>
                        <li>Send you updates and marketing communications</li>
                        <li>Improve our website and services</li>
                        <li>Comply with legal obligations</li>
                    </ul>
                </div>

                <div class="policy-section">
                    <h3>4. Information Sharing</h3>
                    <p>We do not sell, trade, or rent your personal information to third parties. We may share your information with:</p>
                    <ul>
                        <li>Service providers who assist in our operations</li>
                        <li>Professional advisors and consultants</li>
                        <li>Law enforcement when required by law</li>
                    </ul>
                </div>

                <div class="policy-section">
                    <h3>5. Data Security</h3>
                    <p>We implement appropriate security measures to protect your personal information. However, no method of transmission over the Internet is 100% secure.</p>
                </div>

                <div class="policy-section">
                    <h3>6. Your Rights</h3>
                    <p>You have the right to:</p>
                    <ul>
                        <li>Access your personal information</li>
                        <li>Correct inaccurate information</li>
                        <li>Request deletion of your information</li>
                        <li>Opt-out of marketing communications</li>
                    </ul>
                </div>

                <div class="policy-section">
                    <h3>7. Contact Us</h3>
                    <p>If you have any questions about this Privacy Policy, please contact us at:</p>
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