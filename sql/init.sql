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

-- Bảng CVs
CREATE TABLE cvs (
    cv_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,   
    content TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE personal_info (
    personal_info_id INT AUTO_INCREMENT PRIMARY KEY,
    cv_id INT NOT NULL,
    name VARCHAR(100) NOT NULL,
    surname VARCHAR(100) NOT NULL,
    city VARCHAR(100),
    country VARCHAR(100),
    postcode VARCHAR(20),
    phone VARCHAR(20),
    email VARCHAR(255) NOT NULL,
    FOREIGN KEY (cv_id) REFERENCES cvs(cv_id) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE working_history (
    work_id INT AUTO_INCREMENT PRIMARY KEY,
    cv_id INT NOT NULL,
    title VARCHAR(100),
    employer VARCHAR(100) ,
    location VARCHAR(100),
    start_date VARCHAR(255), -- Định dạng YYYY-MM
    end_date VARCHAR(255), -- Định dạng YYYY-MM hoặc 'now'
    FOREIGN KEY (cv_id) REFERENCES cvs(cv_id) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE education (
    education_id INT AUTO_INCREMENT PRIMARY KEY,
    cv_id INT NOT NULL,
    institution VARCHAR(255),
    school_location VARCHAR(100),
    degree VARCHAR(100),
    field_study VARCHAR(100),
    gpa VARCHAR(10),
    graduation_date VARCHAR(255), 
    FOREIGN KEY (cv_id) REFERENCES cvs(cv_id) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE skills (
    skill_id INT AUTO_INCREMENT PRIMARY KEY,
    cv_id INT NOT NULL,
    skill_name TEXT,
    FOREIGN KEY (cv_id) REFERENCES cvs(cv_id) ON DELETE CASCADE
) ENGINE=InnoDB;;

CREATE TABLE summaries (
    summary_id INT AUTO_INCREMENT PRIMARY KEY,
    cv_id INT NOT NULL,
    summary_text TEXT,
    FOREIGN KEY (cv_id) REFERENCES cvs(cv_id) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE additional (
    additional_id INT AUTO_INCREMENT PRIMARY KEY,
    cv_id INT NOT NULL,
    website VARCHAR(255),
    certification VARCHAR(255),
    languages VARCHAR(255),
    programming_languages VARCHAR(255),
    your_own TEXT,
    FOREIGN KEY (cv_id) REFERENCES cvs(cv_id) ON DELETE CASCADE
) ENGINE=InnoDB;