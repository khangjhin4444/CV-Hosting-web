<?php
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