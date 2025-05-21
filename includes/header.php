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
            <nav class="main-nav">
                <ul>
                    <li><a href="index.php" class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <div class="header-buttons">
                <a href="#contact" class="btn btn-primary">Get a Quote</a>
                <button class="mobile-menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
</header> 