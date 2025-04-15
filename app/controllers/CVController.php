<?php
session_start();
require_once __DIR__ . '/../models/CV.php';

class CVController {
    private $cvModel;

    public function __construct($conn) {
        $this->cvModel = new CV($conn);
    }

    public function createCV() {
        header('Content-Type: application/json');

        if (!isset($_SESSION['user'])) {
            echo json_encode(['success' => false, 'msg' => 'Unauthorized']);
            exit;
        }

        $userId = $_SESSION['user']['id'];

        try {
            // Thu thập dữ liệu từ form (hoặc JSON)
            $heading = $_POST['heading'] ?? [];
            $working_history = $_POST['working_history'] ?? [];
            $education = $_POST['education'] ?? [];
            $skills = $_POST['skills'] ?? [];
            $summary = $_POST['summary'] ?? [];
            $additional = $_POST['additional'] ?? [
                'website' => '',
                'certification' => '',
                'languages' => [],
                'programming_languages' => [],
                'your_own' => ''
            ];

            // Validate dữ liệu cơ bản
            if (empty($heading['name']) || empty($heading['email'])) {
                echo json_encode(['success' => false, 'msg' => 'Name and email are required']);
                exit;
            }

            // Gọi model để lưu CV
            $result = $this->cvModel->createCV($userId, $heading, $working_history, $education, $skills, $summary, $additional);
            echo json_encode($result);
        } catch (Exception $e) {
            error_log("Error saving CV: " . $e->getMessage());
            echo json_encode(['success' => false, 'msg' => 'Error saving CV']);
        }
        exit;
    }

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

        $result = $this->cvModel->getCV($cvId);
        echo json_encode($result);
        exit;
    }

    public function getUserCVs() {
        header('Content-Type: application/json');

        if (!isset($_SESSION['user'])) {
            echo json_encode(['success' => false, 'msg' => 'Unauthorized']);
            exit;
        }

        $userId = $_SESSION['user']['id'];

        $result = $this->cvModel->getUserCVs($userId);
        echo json_encode($result);
        exit;
    }

    public function handleRequest() {
        $action = $_GET['action'] ?? '';
        if ($action === 'createCV' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->createCV();
        } elseif ($action === 'getCV' && $_SERVER['REQUEST_METHOD'] === 'GET') {
            $this->getCV();
        } elseif ($action === 'getUserCVs' && $_SERVER['REQUEST_METHOD'] === 'GET') {
            $this->getUserCVs();
        } else {
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'msg' => 'Invalid action']);
            exit;
        }
    }
}


?>