<?php
// Get the current page name
$current_page = basename($_SERVER['PHP_SELF'], '.php');
$page_title = '';
$page_description = '';
$page_keywords = '';

// Set meta information based on the current page
switch ($current_page) {
    case 'index':
        $page_title = 'KigaliTech - Leading Web & Mobile App Development Company in Rwanda';
        $page_description = 'Expert web development, mobile app development, and software solutions in Rwanda. Transform your business with our innovative digital solutions.';
        $page_keywords = 'web development Rwanda, mobile app development Kigali, software development Rwanda, website design Kigali, app developers Rwanda';
        break;
    case 'services':
        $page_title = 'Our Services - Web & Mobile App Development in Rwanda | KigaliTech';
        $page_description = 'Comprehensive web development, mobile app development, and software solutions. Custom websites, mobile apps, and enterprise software development in Rwanda.';
        $page_keywords = 'web development services Rwanda, mobile app development Kigali, custom software development, website design services, app development Rwanda';
        break;
    case 'about':
        $page_title = 'About KigaliTech - Your Trusted Tech Partner in Rwanda';
        $page_description = 'Learn about KigaliTech, Rwanda\'s leading web and mobile app development company. Our team of experts delivers innovative digital solutions.';
        $page_keywords = 'about KigaliTech, web developers Rwanda, mobile app developers Kigali, software company Rwanda, tech experts Kigali';
        break;
    case 'portfolio':
        $page_title = 'Our Portfolio - Web & Mobile App Development Projects | KigaliTech';
        $page_description = 'Explore our portfolio of successful web development and mobile app projects. See how we\'ve helped businesses in Rwanda transform digitally.';
        $page_keywords = 'web development portfolio Rwanda, mobile app projects Kigali, software development portfolio, website design examples, app development showcase';
        break;
    case 'contact':
        $page_title = 'Contact KigaliTech - Web & Mobile App Development in Rwanda';
        $page_description = 'Get in touch with KigaliTech for expert web development and mobile app development services in Rwanda. Let\'s discuss your project.';
        $page_keywords = 'contact web developers Rwanda, mobile app development contact, software development Kigali, website design consultation, app development inquiry';
        break;
    default:
        $page_title = 'KigaliTech - Web & Mobile App Development in Rwanda';
        $page_description = 'Leading web development and mobile app development company in Rwanda. Transform your business with our innovative digital solutions.';
        $page_keywords = 'web development Rwanda, mobile app development Kigali, software development Rwanda, website design, app developers';
}
?>

<!-- Primary Meta Tags -->
<title><?php echo $page_title; ?></title>
<meta name="title" content="<?php echo $page_title; ?>">
<meta name="description" content="<?php echo $page_description; ?>">
<meta name="keywords" content="<?php echo $page_keywords; ?>">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo SITE_URL . '/' . $current_page . '.php'; ?>">
<meta property="og:title" content="<?php echo $page_title; ?>">
<meta property="og:description" content="<?php echo $page_description; ?>">
<meta property="og:image" content="<?php echo SITE_URL; ?>/images/logos/logo.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="<?php echo SITE_URL . '/' . $current_page . '.php'; ?>">
<meta property="twitter:title" content="<?php echo $page_title; ?>">
<meta property="twitter:description" content="<?php echo $page_description; ?>">
<meta property="twitter:image" content="<?php echo SITE_URL; ?>/images/logos/logo.png">

<!-- Additional Meta Tags -->
<meta name="robots" content="index, follow">
<meta name="language" content="English">
<meta name="revisit-after" content="7 days">
<meta name="author" content="KigaliTech">
<meta name="geo.region" content="RW">
<meta name="geo.placename" content="Kigali">
<meta name="geo.position" content="-1.9536;30.0582">
<meta name="ICBM" content="-1.9536, 30.0582">

<!-- Canonical URL -->
<link rel="canonical" href="<?php echo SITE_URL . '/' . $current_page . '.php'; ?>"> 