<?php

session_start();

require_once __DIR__ . '/../config/constant.php';





if (isset($_GET['student'])) {
    $_SESSION['student'] = htmlspecialchars(trim($_GET['student']));
}
if (isset($_GET['year'])) {
    $_SESSION['year'] = htmlspecialchars(trim($_GET['year']));
}
if (isset($_GET['tempId'])) {
    $_SESSION['tempId'] = htmlspecialchars(trim($_GET['tempId']));
}

require_once __DIR__ . '/../config/routes.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        require_once __DIR__ . '/../app/views/home.php';
        break;
    case 'authentication':
        require_once __DIR__ . '/../app/views/authentication.php';

        break;

    case 'get_role':
        require_once __DIR__ . '/../app/views/get_role.php';
        break;
    
    case 'admin':
        if (!isset($_SESSION['user'])) {
            header("Location: " . BASE_URL . "/index.php?page=authentication");
            exit();
        }
        require_once __DIR__ . '/../app/views/admin.php';
        break;
    case 'logout':
        session_destroy();
        header("Location: " . BASE_URL . "/index.php?page=home");
        exit();
    case 'experience':
        if (!isset($_SESSION['user'])) {
            header("Location: " . BASE_URL . "/index.php?page=authentication");
            exit();
        }
        require_once __DIR__ . '/../app/views/experience.php';
        break;

    case 'select_template':
        if (!isset($_SESSION['user'])) {
            header("Location: " . BASE_URL . "/index.php?page=authentication");
            exit();
        }
        require_once __DIR__ . '/../app/views/select_template.php';
        break;
    case 'information':
        if (!isset($_SESSION['user'])) {
            header("Location: " . BASE_URL . "/index.php?page=authentication");
            exit();
        }
        require_once __DIR__ . '/../app/views/information.php';
        break;
    case 'my_cvs':
        if (!isset($_SESSION['user'])) {
            header("Location: " . BASE_URL . "/index.php?page=authentication");
            exit();
        }
        require_once __DIR__ . '/../app/views/my_cvs.php';
        break;
    case 'view_templates':
        if (!isset($_SESSION['user'])) {
            header("Location: " . BASE_URL . "/index.php?page=authentication");
            exit();
        }
        require_once __DIR__ . '/../app/views/view_templates.php';
        break;
    case 'generate_share_link':
        require_once __DIR__ . '/../app/views/generate_share_link.php';
        break;
    case 'delete_cv':
        require_once __DIR__ . '/../app/views/delete_cv.php';
        break;
    default:

        break;
}

?>