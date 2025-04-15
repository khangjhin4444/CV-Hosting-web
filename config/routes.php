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
        if (isset($_SESSION['user'])) {
            header("Location: " . BASE_URL . "/index.php?page=my_cvs");
            exit();
        }
        $controller = new HomeController();
        $controller->authentication();
        break;
    
    case 'logout':
        session_destroy();
        header("Location: " . BASE_URL . "/index.php?page=home");
        exit();
        break;
    default:
        $controller = new HomeController();
        $controller->notFound();
        break;
}
?>