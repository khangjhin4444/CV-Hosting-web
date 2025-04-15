<?php
session_start();
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/constant.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    $email = htmlspecialchars(trim($_POST['email']));
    $stmt = $conn->prepare('SELECT role FROM users WHERE email = :email');
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        echo json_encode(['role' => $user['role']]);
    } else {
        echo json_encode(['role' => 'none']);
    }
} else {
    echo json_encode(['error' => 'Invalid request']);
}
exit;