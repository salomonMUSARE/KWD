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

// Get the current page title
$page_title = isset($page_title) ? $page_title . ' - ' . SITE_NAME : SITE_NAME;
$page_description = isset($page_description) ? $page_description : 'Leading web development and mobile app development company in Rwanda. Transform your business with our innovative digital solutions.';
$current_url = SITE_URL . $_SERVER['REQUEST_URI'];
$logo_url = SITE_URL . '/images/logos/logo.png';
?>

<!-- Primary Meta Tags -->
<title><?php echo $page_title; ?></title>
<meta name="title" content="<?php echo $page_title; ?>">
<meta name="description" content="<?php echo $page_description; ?>">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo $current_url; ?>">
<meta property="og:title" content="<?php echo $page_title; ?>">
<meta property="og:description" content="<?php echo $page_description; ?>">
<meta property="og:image" content="<?php echo $logo_url; ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:site_name" content="<?php echo SITE_NAME; ?>">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="<?php echo $current_url; ?>">
<meta property="twitter:title" content="<?php echo $page_title; ?>">
<meta property="twitter:description" content="<?php echo $page_description; ?>">
<meta property="twitter:image" content="<?php echo $logo_url; ?>">

<!-- WhatsApp -->
<meta property="og:image:secure_url" content="<?php echo $logo_url; ?>">
<meta property="og:image:type" content="image/png">
<meta property="og:image:alt" content="<?php echo SITE_NAME; ?> Logo">

<!-- Additional Meta Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="index, follow">
<meta name="language" content="English">
<meta name="revisit-after" content="7 days">
<meta name="author" content="<?php echo SITE_NAME; ?>">

<!-- Canonical URL -->
<link rel="canonical" href="<?php echo SITE_URL . '/' . $current_page . '.php'; ?>"> 