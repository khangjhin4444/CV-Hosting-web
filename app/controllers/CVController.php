<?php
// Ngăn output trước header
ob_start();

session_start();
require_once __DIR__ . '/../models/CV.php';

class CVController {
    private $cvModel;

    public function __construct($conn) {
        // Kiểm tra kết nối database
        if (!$conn) {
            error_log('Database connection failed');
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'msg' => 'Database connection failed']);
            exit;
        }
        $this->cvModel = new CV($conn);
    }

    public function createCV() {
        header('Content-Type: application/json');

        // Debug: Log request
        error_log('createCV called at ' . date('Y-m-d H:i:s'));

        // Kiểm tra session
        if (!isset($_SESSION['user']) || !isset($_SESSION['user']['id'])) {
            error_log('Unauthorized: No user session');
            echo json_encode(['success' => false, 'msg' => 'Unauthorized']);
            exit;
        }

        $userId = $_SESSION['user']['id'];
        error_log("User ID: $userId");

        try {
            // Lấy dữ liệu JSON
            $rawInput = file_get_contents('php://input');
            error_log('Raw input: ' . $rawInput);

            $input = json_decode($rawInput, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                error_log('JSON decode error: ' . json_last_error_msg());
                echo json_encode(['success' => false, 'msg' => 'Invalid JSON data']);
                exit;
            }

            // Debug: Log dữ liệu đã parse
            error_log('Parsed input: ' . print_r($input, true));

            // Gán dữ liệu
            $heading = $input['heading'] ?? [];
            $working_history = $input['working_history'] ?? [];
            $education = $input['education'] ?? [];
            $skills = $input['skills'] ?? [];
            $summary = $input['summary'] ?? [];
            $additional = $input['additional'] ?? [
                'website' => '',
                'certification' => '',
                'languages' => [],
                'programming_languages' => [],
                'your_own' => ''
            ];

            // Validate dữ liệu
            if (empty($heading['name']) || empty($heading['email'])) {
                error_log('Validation failed: Name or email missing');
                echo json_encode(['success' => false, 'msg' => 'Name and email are required']);
                exit;
            }

            // Gọi model để lưu CV
            $result = $this->cvModel->createCV($userId, $heading, $working_history, $education, $skills, $summary, $additional);
            echo json_encode($result);
        } catch (Exception $e) {
            error_log('Error saving CV: ' . $e->getMessage());
            echo json_encode(['success' => false, 'msg' => 'Error saving CV: ' . $e->getMessage()]);
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

// Kiểm tra file tồn tại
if (!file_exists(__DIR__ . '/../models/CV.php')) {
    error_log('CV.php not found');
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'msg' => 'Server error: CV model not found']);
    exit;
}

if (!file_exists(__DIR__ . '/../../config/database.php')) {
    error_log('database.php not found');
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'msg' => 'Server error: Database config not found']);
    exit;
}

// Khởi tạo controller
require_once __DIR__ . '/../../config/database.php';
$controller = new CVController($conn);
$controller->handleRequest();

// Xóa buffer để tránh output ngoài ý muốn
ob_end_flush();
?>