# CV Hosting Website

The **CV Hosting Website** is a web-based application designed to allow users to create, manage, and share professional CVs online. Developed as part of the Web Programming course at Ho Chi Minh University of Technology, this project was completed by students Nguyễn Lê Duy Khang, Huỳnh Ngọc Khoa, and Lê Đức Nghĩa. The platform supports three user roles: Administrators, Registered Users, and Guests, providing a secure, responsive, and user-friendly experience for CV management.

## Table of Contents

- [Project Overview](#project-overview)
- [Features](#features)
- [Technology Stack](#technology-stack)
- [Architecture](#architecture)
- [Database Schema](#database-schema)
- [Setup Instructions](#setup-instructions)
- [Usage](#usage)
- [Contributors](#contributors)
- [License](#license)

## Project Overview

The CV Hosting Website enables job seekers to create up to three professional CVs, select from predefined templates, and share them via unique URLs. Administrators can manage users and templates, while guests can view public CVs without authentication. The project follows the Software Development Life Cycle (SDLC) methodology, ensuring a structured approach to planning, design, development, testing, and deployment. The application is built using the Model-View-Controller (MVC) architecture for modularity and maintainability.

## Features

### Core Functionalities
- **Administrator**:
  - Manage user accounts (view, suspend, delete).
  - Configure system settings and manage CV templates.
- **Registered User**:
  - **Authentication**: Sign up/login via email or social media (Google, Facebook), and logout.
  - **CV Creation**: Create up to three CVs with details including personal info, education, work experience, skills, certifications, and summaries.
  - **CV Management**: Edit, delete, or name CVs, each assigned a unique CV ID.
  - **Template Selection**: Choose from multiple student-designed CV templates.
  - **CV Sharing**: Generate and copy unique URLs (e.g., `http://domainname/CV_id`) for sharing CVs.
- **Guest**:
  - View public CVs via unique URLs without requiring authentication.

### Non-Functional Requirements
- **Security**: Passwords are hashed before storage to ensure user data protection.
- **Usability**: Intuitive and easy-to-navigate interface for all user types.
- **Responsiveness**: Fully functional across devices (desktops, tablets, smartphones).
- **Scalability**: Supports multiple concurrent users with potential for future growth.

## Technology Stack

- **Frontend**:
  - HTML: For structuring web pages.
  - CSS (Bootstrap): For responsive and modern styling.
  - JavaScript (jQuery): For dynamic content and interactivity.
- **Backend**:
  - PHP: For server-side logic and request handling.
- **Database**:
  - MySQL (InnoDB): For structured data storage and integrity.
- **Tools**:
  - Visual Studio Code: For coding and development.
  - XAMPP: For local PHP and MySQL testing.
  - Git: For version control.
  - Chrome DevTools: For responsive design testing.

## Architecture

The CV Hosting Website is built using the **Model-View-Controller (MVC)** architecture to ensure modularity, scalability, and maintainability:

- **Model**: Manages data and business logic, interacting with the MySQL database to store and retrieve user and CV data.
- **View**: Handles the user interface, rendered using HTML, CSS (Bootstrap), and JavaScript for dynamic content.
- **Controller**: Processes user requests, coordinates between the Model and View, and manages application flow using PHP scripts.

### System Components
- **Frontend**: Static and dynamic pages for user interaction, enhanced with Bootstrap for responsiveness and jQuery for interactivity.
- **Backend**: PHP scripts handle authentication, CV creation, template rendering, and database interactions.
- **Database**: MySQL stores user data, CVs, and related information, ensuring data integrity with InnoDB.

## Database Schema

The MySQL database (`cv_hosting`) is designed to support user authentication, CV creation, management, and sharing. Key tables include:

- **users**:
  - Columns: `id` (PK), `email` (UNIQUE), `password`, `first_name`, `last_name`, `role` (user/admin), `oauth_provider`, `oauth_id`, `created_at`, `updated_at`.
  - Purpose: Stores user data for authentication and role-based access.
- **cvs**:
  - Columns: `cv_id` (PK), `user_id` (FK), `content`, `created_at`, `updated_at`.
  - Purpose: Stores core CV records, with a limit of three CVs per user.
- **personal_info**:
  - Columns: `personal_info_id` (PK), `cv_id` (FK), `name`, `surname`, `city`, `country`, `postcode`, `phone`, `email`.
  - Purpose: Stores personal details for CVs.
- **working_history**:
  - Columns: `work_id` (PK), `cv_id` (FK), `title`, `employer`, `location`, `start_date`, `end_date`.
  - Purpose: Manages work experience, supporting ongoing jobs (`end_date` as 'now').
- **education**:
  - Columns: `education_id` (PK), `cv_id` (FK), `institution`, `school_location`, `degree`, `field_study`, `gpa`, `graduation_date`.
  - Purpose: Stores educational qualifications.
- **skills**:
  - Columns: `skill_id` (PK), `cv_id` (FK), `skill_name` (TEXT).
  - Purpose: Lists skills for CVs.
- **summaries**:
  - Columns: `summary_id` (PK), `cv_id` (FK), `summary_text` (TEXT).
  - Purpose: Stores optional CV profile summaries.
- **additional**:
  - Columns: `additional_id` (PK), `cv_id` (FK), `website`, `certification`, `languages`, `programming_languages`, `your_own` (TEXT).
  - Purpose: Stores miscellaneous CV data (e.g., certifications, languages).

## Setup Instructions

### Prerequisites
- PHP 7.4+
- MySQL 5.7+
- XAMPP (or similar local server environment)
- Git
- Node.js (optional, for frontend dependencies like Bootstrap)
- Visual Studio Code (recommended)

### Installation Steps
1. **Clone the Repository**:
   ```bash
   git clone https://github.com/khangjhin4444/CV-Hosting-web
   cd CV-Hosting-web
   ```

2. **Set Up the Local Server**:
   - Install and configure XAMPP (or equivalent) to run PHP and MySQL.
   - Start the Apache and MySQL modules in XAMPP.

3. **Configure the Database**:
   - Create a MySQL database named `cv_hosting`:
     ```sql
     CREATE DATABASE cv_hosting;
     ```
   - Import the provided SQL script (e.g., `database.sql`) to create tables and populate sample data:
     ```bash
     mysql -u root -p cv_hosting < database.sql
     ```
   - Update database connection settings in the PHP configuration file (e.g., `config.php`):
     ```php
     <?php
     define('DB_HOST', 'localhost');
     define('DB_USER', 'root');
     define('DB_PASS', '');
     define('DB_NAME', 'cv_hosting');
     ?>
     ```

4. **Install Frontend Dependencies** (if applicable):
   - If using npm for Bootstrap or other JavaScript libraries:
     ```bash
     npm install
     ```

5. **Place Project Files**:
   - Copy the project files to the XAMPP `htdocs` directory (e.g., `C:\xampp\htdocs\cv-hosting`).

6. **Run the Application**:
   - Access the website via a browser at `http://localhost/cv-hosting`.
   - Ensure the Apache and MySQL services are running in XAMPP.

## Usage

1. **Administrator**:
   - Log in with admin credentials to access the admin dashboard.
   - Manage user accounts, templates, and system settings.
2. **Registered User**:
   - Sign up or log in using email or social media (Google, Facebook).
   - Create up to three CVs using the CV creation form, selecting from available templates.
   - Edit, delete, or share CVs via unique URLs.
3. **Guest**:
   - Access public CVs by visiting shared URLs (e.g., `http://localhost/cv-hosting/CV_id`).

## Contributors

| Name                  | Student ID | Role                | Contribution                              |
|-----------------------|------------|---------------------|-------------------------------------------|
| Nguyễn Lê Duy Khang   | 2252303    | Frontend Developer  | Interface design, responsive UI/UX        |
| Lê Đức Nghĩa          | 2252527    | Backend Developer   | PHP logic, database connectivity          |
| Huỳnh Ngọc Khoa       | 2211591    | Full Stack          | System integration, template design       |

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

### Notes for Customization
- **Logo**: Replace `path/to/logo.png` with the actual path to your project logo or remove the image if not applicable.
- **Repository URL**: Update the `git clone` URL with your actual GitHub repository link.
- **Database Script**: Ensure the `database.sql` file is included in your repository or provide instructions for manual table creation.
- **Configuration File**: Adjust the `config.php` example if your project uses a different file or structure for database configuration.
- **Future Deployment**: If you plan to deploy the project (as mentioned in the report), you can add a section with instructions for deploying to a hosting platform (e.g., Heroku, AWS).
- **License**: If you prefer a different license, update the `License` section accordingly.

Let me know if you need additional sections, specific details, or further refinements for the README!
