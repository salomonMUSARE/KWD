<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found | <?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .error-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 2rem;
            background: linear-gradient(rgba(37, 99, 235, 0.1), rgba(37, 99, 235, 0.05));
        }
        
        .error-content {
            max-width: 600px;
        }
        
        .error-code {
            font-size: 8rem;
            font-weight: 700;
            color: var(--primary-color);
            line-height: 1;
            margin-bottom: 1rem;
        }
        
        .error-message {
            font-size: 2rem;
            color: var(--text-color);
            margin-bottom: 2rem;
        }
        
        .error-description {
            color: var(--light-text);
            margin-bottom: 2rem;
        }
        
        .back-home {
            display: inline-block;
            padding: 1rem 2rem;
            background: var(--primary-color);
            color: white;
            text-decoration: none;
            border-radius: 0.375rem;
            transition: background-color 0.3s ease;
        }
        
        .back-home:hover {
            background: var(--secondary-color);
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-content">
            <div class="error-code">404</div>
            <h1 class="error-message">Page Not Found</h1>
            <p class="error-description">
                The page you are looking for might have been removed, had its name changed,
                or is temporarily unavailable.
            </p>
            <a href="index.php" class="back-home">Back to Homepage</a>
        </div>
    </div>
</body>
</html> 