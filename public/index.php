<?php



require_once  __DIR__ . '/../config/constant.php';





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

?>