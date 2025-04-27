<?php
// generate_share_link.php

// Start by preventing unwanted output
ob_start();

// Set JSON content type
header('Content-Type: application/json');



try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        http_response_code(405);
        throw new Exception('Invalid request method.');
    }

    $cv_content = $_POST['cv_html'] ?? '';
    if (empty($cv_content)) {
        throw new Exception('No CV content received.');
    }

    $template_name = $_POST['template'];


    $share_dir = __DIR__ . '/../../public/cv_share/';
    if (!is_dir($share_dir)) {
        if (!mkdir($share_dir, 0755, true)) {
            throw new Exception('Failed to create share directory.');
        }
    }


    if (!is_writable($share_dir)) {
        throw new Exception('Share directory is not writable.');
    }

    $unique_id = uniqid('cv_', true);
    $file_name = $unique_id . '.html';
    $file_path = $share_dir . $file_name;

    $full_html = "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Shared CV</title>
    
    <link rel='stylesheet' href='/CV-Hosting-web-main/public/css/node_modules/bootstrap/dist/css/bootstrap.css'>
    <link rel='stylesheet' href='/CV-Hosting-web-main/public/css/header.css'>
    <link rel='stylesheet' href='/CV-Hosting-web-main/public/css/body.css'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css'>
    <link
        href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap'
        rel='stylesheet'>
</head>
<body class='p-5' style='margin: 0 80px'>
" . $cv_content . "
</body>
</html>";

    // Ghi vào file
    if (file_put_contents($file_path, $full_html) === false) {
        throw new Exception('Failed to write CV file.');
    }

    // Tạo link chia sẻ động
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