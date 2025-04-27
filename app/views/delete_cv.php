<?php
// delete_cv.php

require_once __DIR__ . '/../../config/database.php';

// Start output buffering to prevent stray output
ob_start();

// Set JSON content type
header('Content-Type: application/json');



try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        http_response_code(405);
        throw new Exception('Invalid request method.');
    }

    // Verify user is logged in
    if (!isset($_SESSION['user']['id'])) {
        throw new Exception('User not logged in.');
    }

    // Get input
    $cv_id = $_POST['cv_id'] ?? '';
    $user_id = $_POST['user_id'] ?? '';
    
    if (empty($cv_id) || empty($user_id)) {
        throw new Exception('Missing CV ID or User ID.');
    }

    // Ensure the user_id matches the session user_id for security
    if ($user_id != $_SESSION['user']['id']) {
        throw new Exception('Unauthorized access.');
    }
  
    $query = "DELETE FROM cvs WHERE cv_id = :cv_id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':cv_id', $cv_id, PDO::PARAM_INT);
    $stmt->execute();
    
    // Check if any rows were affected
    if ($stmt->rowCount() === 0) {
        $conn->rollBack();
        throw new Exception('CV not found or you do not have permission to delete it.');
    }

 
    // Clear buffer and send JSON
    ob_end_clean();
    echo json_encode([
        'success' => true,
        'message' => 'CV deleted successfully.'
    ]);

} catch (Exception $e) {
    // Roll back transaction on error
    if (isset($conn) && $conn->inTransaction()) {
        $conn->rollBack();
    }

    // Clear buffer and send error JSON
    ob_end_clean();
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
}
?>