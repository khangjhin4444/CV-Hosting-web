<?php
require_once dirname(__DIR__)  . '/app/controllers/HomeController.php';
require_once dirname(__DIR__)  . '/app/controllers/AuthController.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;
    case 'authentication':
        
        $controller = new HomeController();
        $controller->authentication();
        break;
    case 'get_role':
        
        $controller = new HomeController();
        $controller->getRole();
        break;

    case 'admin':
        if (!isset($_SESSION['user'])) {
            header("Location: " . BASE_URL . "/index.php?page=authentication");
            exit();
        }
        $controller = new HomeController();
        $controller->admin();
        break;    
    case 'logout':
        session_destroy();
        header("Location: " . BASE_URL . "/index.php?page=home");
        exit();
        break;
    case 'experience':
        if (!isset($_SESSION['user'])) {
            header("Location: " . BASE_URL . "/index.php?page=authentication");
            exit();
        }
        $controller = new HomeController();
        $controller->experience();
        break;
    case 'select_template':
        if (!isset($_SESSION['user'])) {
            header("Location: " . BASE_URL . "/index.php?page=authentication");
            exit();
        }
        $controller = new HomeController();
        $controller->select_template();
        break;
    case 'information':
        if (!isset($_SESSION['user'])) {
            header("Location: " . BASE_URL . "/index.php?page=authentication");
            exit();
        }
        $controller = new HomeController();
        $controller->information();
        break;
    case 'my_cvs':
        if (!isset($_SESSION['user'])) {
            header("Location: " . BASE_URL . "/index.php?page=authentication");
            exit();
        }
        $controller = new HomeController();
        $controller->myCvs();
        break;

    case 'view_templates':
        if (!isset($_SESSION['user'])) {
            header("Location: " . BASE_URL . "/index.php?page=authentication");
            exit();
        }
        $controller = new HomeController();
        $controller->viewTemplates();
        break;
    case 'generate_share_link':
    
        $controller = new HomeController();
        $controller->generate_share_link();
        break;
        
    default:
        $controller = new HomeController();
        $controller->notFound();
        break;
}
?>