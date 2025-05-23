-- 1. Create the database (change the name if you want)
CREATE DATABASE IF NOT EXISTS kwp_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE kwp_db;

-- 2. (Optional) Create a user and grant privileges (edit username/password as needed)
-- CREATE USER 'kwp_user'@'localhost' IDENTIFIED BY 'your_strong_password';
-- GRANT ALL PRIVILEGES ON kwp_db.* TO 'kwp_user'@'localhost';
-- FLUSH PRIVILEGES;

-- 3. Create the contact_messages table
CREATE TABLE IF NOT EXISTS `contact_messages` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(150) NOT NULL,
    `phone` VARCHAR(30) DEFAULT NULL,
    `subject` VARCHAR(200) NOT NULL,
    `message` TEXT NOT NULL,
    `email_notification_status` TINYINT(1) NOT NULL DEFAULT 1,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 4. (Optional) Table for logging notification events
CREATE TABLE IF NOT EXISTS `notification_logs` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `contact_message_id` INT UNSIGNED NOT NULL,
    `status` VARCHAR(50) NOT NULL,
    `sent_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`contact_message_id`) REFERENCES `contact_messages`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 5. (Optional) Table for admin users (if you want to expand later)
-- CREATE TABLE IF NOT EXISTS `admin_users` (
--     `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
--     `username` VARCHAR(50) NOT NULL UNIQUE,
--     `password_hash` VARCHAR(255) NOT NULL,
--     `email` VARCHAR(150) NOT NULL,
--     `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
--     PRIMARY KEY (`id`)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; 