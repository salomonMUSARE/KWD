<?php
// Site Configuration
define('SITE_NAME', 'KigaliTech');
define('SITE_URL', 'https://kigalitech.vercel.app');
define('ADMIN_EMAIL', 'salmonmusare@gmail.com');

// Database Configuration (if needed in the future)
define('DB_HOST', 'localhost');
define('DB_NAME', 'kigalitech_db');
define('DB_USER', 'root');
define('DB_PASS', 'Business@me1'); 

// Contact Information
define('CONTACT_PHONE', '+250 782 768 846');
define('CONTACT_EMAIL', 'salmonmusare@gmail.com');
define('CONTACT_ADDRESS', 'Kigali Heights, KG 7 Ave, Kigali');

// Social Media Links
define('SOCIAL_LINKS', [
    'whatsapp' => 'https://wa.me/250782768846',
    'email' => 'mailto:salmonmusare@gmail.com'
]);

// Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Session Configuration
ini_set('session.cookie_httponly', 1);
ini_set('session.use_only_cookies', 1);
ini_set('session.cookie_secure', isset($_SERVER['HTTPS']));

// Time Zone
date_default_timezone_set('Africa/Kigali');

// Security Headers
header('X-Frame-Options: SAMEORIGIN');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Content-Security-Policy: default-src \'self\' https: data: \'unsafe-inline\' \'unsafe-eval\';');

// Helper Functions
function get_site_url() {
    return SITE_URL;
}

function get_contact_info() {
    return [
        'phone' => CONTACT_PHONE,
        'email' => CONTACT_EMAIL,
        'address' => CONTACT_ADDRESS
    ];
}

function get_social_links() {
    return SOCIAL_LINKS;
}

// Sanitization Functions
function sanitize_output($data) {
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Session Management
function start_secure_session() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}

function regenerate_session() {
    if (session_status() === PHP_SESSION_ACTIVE) {
        session_regenerate_id(true);
    }
}

// Flash Messages
function set_flash_message($type, $message) {
    $_SESSION['flash'] = [
        'type' => $type,
        'message' => $message
    ];
}

function get_flash_message() {
    if (isset($_SESSION['flash'])) {
        $flash = $_SESSION['flash'];
        unset($_SESSION['flash']);
        return $flash;
    }
    return null;
}

// Initialize Session
start_secure_session();
?> 