CREATE DATABASE cv_hosting;
USE cv_hosting;

-- Bảng users
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255), -- NULL cho tài khoản OAuth
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    role ENUM('user', 'admin') DEFAULT 'user',
    oauth_provider ENUM('local', 'google', 'facebook') DEFAULT 'local',
    oauth_id VARCHAR(255), -- ID từ Google/Facebook
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

