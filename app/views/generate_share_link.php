<?php
// generate_share_link.php

// Start by preventing unwanted output
ob_start();

// Set JSON content type
header('Content-Type: application/json');

// Disable error display (for production, errors should be logged)
ini_set('display_errors', 0);
ini_set('log_errors', 1);
error_reporting(E_ALL);

// Log errors to a file for debugging
ini_set('error_log', __DIR__ . '/error.log');

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        http_response_code(405);
        throw new Exception('Invalid request method.');
    }

    // 1. Nhận dữ liệu CV HTML
    $cv_content = $_POST['cv_html'] ?? '';
    if (empty($cv_content)) {
        throw new Exception('No CV content received.');
    }

    // 2. Sanitize HTML to prevent XSS (basic example)
    $allowed_tags = '<div><p><h1><h2><h3><ul><li><strong><em><span><br><a><img>';
    $cv_content = strip_tags($cv_content, $allowed_tags);

    // 3. Đảm bảo thư mục public/cv_share tồn tại
    $share_dir = __DIR__ . '/../../public/cv_share/';
    if (!is_dir($share_dir)) {
        if (!mkdir($share_dir, 0755, true)) {
            throw new Exception('Failed to create share directory.');
        }
    }

    // Verify directory is writable
    if (!is_writable($share_dir)) {
        throw new Exception('Share directory is not writable.');
    }

    // 4. Tạo một ID duy nhất
    $unique_id = uniqid('cv_', true);
    $file_name = $unique_id . '.html';
    $file_path = $share_dir . $file_name;

    // 5. Bọc nội dung vào HTML đầy đủ
    $full_html = "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Shared CV</title>
    <link rel='stylesheet' href='/CV-Hosting-web-main/public/css/cv_1.css'>
</head>
<body>
" . $cv_content . "
</body>
</html>";

    // 6. Ghi vào file
    if (file_put_contents($file_path, $full_html) === false) {
        throw new Exception('Failed to write CV file.');
    }

    // 7. Tạo link chia sẻ động
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $domain = $protocol . '://' . $_SERVER['HTTP_HOST'];
    $share_link = $domain . '/CV-Hosting-web-main/public/cv_share/' . $file_name;

    // Clear output buffer and send JSON response
    ob_end_clean();
    echo json_encode([
        'success' => true,
        'link' => $share_link
    ]);

} catch (Exception $e) {
    // Clear output buffer and send error JSON
    if (ob_get_length()) {
        ob_end_clean();
    }
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
}
?>