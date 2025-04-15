<?php
require_once __DIR__ . '/../models/CV.php';

class CVController {
    private $cvModel;

    public function __construct($conn) {
        $this->cvModel = new CV($conn);
    }

    /**
     * Xử lý yêu cầu tạo CV
     * @return void
     */
    public function createCV() {
        header('Content-Type: application/json');

        if (!isset($_SESSION['user'])) {
            echo json_encode(['success' => false, 'msg' => 'Unauthorized']);
            exit;
        }

        $userId = $_SESSION['user']['id'];

        try {
            // Thu thập dữ liệu từ form
            $heading = $_POST['heading'] ?? [];
            $working_history = $_POST['working_history'] ?? [];
            $education = $_POST['education'] ?? [];
            $skills = $_POST['skills'] ?? [];
            $summary = $_POST['summary'] ?? [];
            $finalize = $_POST['finalize'] ?? ['languages' => [], 'tools' => []];

            // Validate dữ liệu cơ bản
            if (empty($heading['name']) || empty($heading['email'])) {
                echo json_encode(['success' => false, 'msg' => 'Name and email are required']);
                exit;
            }

            // Gọi model để lưu CV
            $result = $this->cvModel->createCV($userId, $heading, $working_history, $education, $skills, $summary, $finalize);
            echo json_encode($result);
        } catch (Exception $e) {
            error_log("Error saving CV: " . $e->getMessage());
            echo json_encode(['success' => false, 'msg' => 'Error saving CV']);
        }
        exit;
    }

    /**
     * Xử lý yêu cầu lấy CV
     * @return void
     */

    public function getCV() {
        header('Content-Type: application/json');

        if (!isset($_SESSION['user'])) {
            echo json_encode(['success' => false, 'msg' => 'Unauthorized']);
            exit;
        }

        $userId = $_SESSION['user']['id'];
        $cvId = $_GET['cv_id'] ?? null;

        if (empty($cvId)) {
            echo json_encode(['success' => false, 'msg' => 'CV ID is required']);
            exit;
        }

        // Gọi model để lấy CV
        $result = $this->cvModel->getCV($cvId);
        echo json_encode($result);
        exit;
    }

    /**
     * Xử lý yêu cầu lay CV theo userId
     * @return void
     */

    public function getUserCVs() {
        header('Content-Type: application/json');

        if (!isset($_SESSION['user'])) {
            echo json_encode(['success' => false, 'msg' => 'Unauthorized']);
            exit;
        }

        $userId = $_SESSION['user']['id'];

        // Gọi model để lấy CV
        $result = $this->cvModel->getUserCVs($userId);
        echo json_encode($result);
        exit;
    }
}