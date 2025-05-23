<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header class="main-header">
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <a href="index.php">
                    <img src="images/logos/logo.png" alt="KigaliTech Logo">
                    <span>KigaliTech</span>
                </a>
            </div>
            <button class="mobile-menu-toggle" aria-label="Toggle Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <nav class="main-nav">
                <ul>
                    <li><a href="index.php" class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="services.php" class="<?php echo $current_page == 'services.php' ? 'active' : ''; ?>">Services</a></li>
                    <li><a href="about.php" class="<?php echo $current_page == 'about.php' ? 'active' : ''; ?>">About</a></li>
                    <li><a href="portfolio.php" class="<?php echo $current_page == 'portfolio.php' ? 'active' : ''; ?>">Portfolio</a></li>
                    <li><a href="contact.php" class="<?php echo $current_page == 'contact.php' ? 'active' : ''; ?>">Contact</a></li>
                </ul>
            </nav>
            <div class="header-buttons">
                <a href="contact.php" class="btn btn-primary">Get a Quote</a>
            </div>
        </div>
    </div>
</header> 