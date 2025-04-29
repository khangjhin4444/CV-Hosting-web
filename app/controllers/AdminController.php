<?php


require_once __DIR__.'/../../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = isset($_POST['action']) ? $_POST['action'] : '';
    
    switch ($action) {
        case 'delete_user':
            deleteUser();
            break;
        default:
            redirectWithError('Invalid action');
            break;
    }
} else {
    redirectWithError('Invalid request method');
}

function deleteUser() {
    global $conn;
    
    // Get user ID
    $userId = isset($_POST['user_id']) ? intval($_POST['user_id']) : 0;
    
    if ($userId <= 0) {
        redirectWithError('Invalid user ID');
        return;
    }
    
    try {
        $conn->beginTransaction();

        $stmtDeleteUser = $conn->prepare('DELETE FROM users WHERE id = :user_id');
        $stmtDeleteUser->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $stmtDeleteUser->execute();
        

        $conn->commit();
        
        redirectWithSuccess('User deleted successfully');
    } catch (PDOException $e) {
        $conn->rollBack();
        error_log('Error deleting user: ' . $e->getMessage());
        redirectWithError('Error deleting user: ' . $e->getMessage());
    }
}

function redirectWithError($message) {
    header('Location: /CV-Hosting-web-main/public/index.php?page=admin&error=' . urlencode($message));
    exit;
}

function redirectWithSuccess($message) {
    header('Location: /CV-Hosting-web-main/public/index.php?page=admin&success=' . urlencode($message));
    exit;
}