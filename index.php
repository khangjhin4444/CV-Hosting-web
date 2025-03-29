<?php
// Session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_GET['student'])) {
    $_SESSION['student'] = $_GET['student'];
}
if (isset($_GET['year'])) {
    $_SESSION['year'] = $_GET['year'];
}
if (isset($_GET['tempId'])) {
    $_SESSION['tempId'] = $_GET['tempId'];
}

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$page = str_replace('.php', '', $page);

// Đường dẫn tới thư mục chứa các trang
$page_path = "pages/{$page}.php";

// Kiểm tra tệp trang có tồn tại không
if (!file_exists($page_path)) {
    $page_path = "pages/home.php"; // Về trang chủ nếu tệp không tồn tại
}
?>

<?php include $page_path; ?>