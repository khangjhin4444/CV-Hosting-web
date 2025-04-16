<?php

require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../config/constant.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['user'])) {
    $userId = $_SESSION['user']['id'];
    $userRole = $_SESSION['user']['role'];

    // return the user role
    echo json_encode(['success' => true, 'role' => $userRole]);

} else {
    echo json_encode(['success' => false, 'msg' => 'Unauthorized']);
    
} 
exit;