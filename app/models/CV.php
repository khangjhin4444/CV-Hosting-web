<?php

class CV {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function createCV($userId, $heading, $workingHistory, $education, $skills, $summary, $additional) {
        try {
            $this->conn->beginTransaction();

            // Tạo CV
            $templateId = $_SESSION['user']['template_id'];
            $stmt = $this->conn->prepare("INSERT INTO cvs (user_id, content) VALUES (:user_id, :content)");
            $stmt->execute(['user_id' => $userId, 'content' => $templateId,]);
            $cvId = $this->conn->lastInsertId();

            // Lưu thông tin cá nhân
            $stmt = $this->conn->prepare("
                INSERT INTO personal_info (cv_id, name, surname, city, country, postcode, phone, email)
                VALUES (:cv_id, :name, :surname, :city, :country, :postcode, :phone, :email)
            ");
            $stmt->execute([
                'cv_id' => $cvId,
                'name' => $heading['name'] ?? '',
                'surname' => $heading['surname'] ?? '',
                'city' => $heading['city'] ?? '',
                'country' => $heading['country'] ?? '',
                'postcode' => $heading['postcode'] ?? '',
                'phone' => $heading['phone'] ?? '',
                'email' => $heading['email'] ?? '',
            ]);

            // Lưu lịch sử làm việc
            foreach ($workingHistory as $work) {
                $stmt = $this->conn->prepare("
                    INSERT INTO working_history (cv_id, title, employer, location, start_date, end_date)
                    VALUES (:cv_id, :title, :employer, :location, :start_date, :end_date)
                ");
                $stmt->execute([
                    'cv_id' => $cvId,
                    'title' => $work['title'] ?? '',
                    'employer' => $work['employer'] ?? '',
                    'location' => $work['location'] ?? '',
                    'start_date' => $work['start_date'] ?? '',
                    'end_date' => $work['end_date'] ?? '',
                ]);
            }

            // Lưu học vấn
            foreach ($education as $edu) {
                $stmt = $this->conn->prepare("
                    INSERT INTO education (cv_id, institution, school_location, degree, field_study, graduation_date)
                    VALUES (:cv_id, :institution, :school_location, :degree, :field_study, :graduation_date)
                ");
                $stmt->execute([
                    'cv_id' => $cvId,
                    'institution' => $edu['institution'] ?? '',
                    'school_location' => $edu['school_location'] ?? '',
                    'degree' => $edu['degree'] ?? '',
                    'field_study' => $edu['field_study'] ?? '',
                    'graduation_date' => $edu['graduation_date'] ?? '',
                ]);
            }

            // Lưu kỹ năng
            foreach ($skills as $skill) {
                if (!empty($skill)) {
                    $stmt = $this->conn->prepare("
                        INSERT INTO skills (cv_id, skill_name)
                        VALUES (:cv_id, :skill_name)
                    ");
                    $stmt->execute([
                        'cv_id' => $cvId,
                        'skill_name' => $skill,
                    ]);
                }
            }

            // Lưu tóm tắt
            foreach ($summary as $sum) {
                if (!empty($sum)) {
                    $stmt = $this->conn->prepare("
                        INSERT INTO summaries (cv_id, summary_text)
                        VALUES (:cv_id, :summary_text)
                    ");
                    $stmt->execute([
                        'cv_id' => $cvId,
                        'summary_text' => $sum,
                    ]);
                }
            }

            // Lưu additional
            if (!empty($additional)) {
                $stmt = $this->conn->prepare("
                    INSERT INTO additional (cv_id, website, certification, languages, programming_languages, your_own)
                    VALUES (:cv_id, :website, :certification, :languages, :programming_languages, :your_own)
                ");
                $stmt->execute([
                    'cv_id' => $cvId,
                    'website' => $additional['website'] ?? '',
                    'certification' => $additional['certification'] ?? '',
                    'languages' => !empty($additional['languages']) ? implode(',', $additional['languages']) : '',
                    'programming_languages' => !empty($additional['programming_languages']) ? implode(',', $additional['programming_languages']) : '',
                    'your_own' => $additional['your_own'] ?? '',
                ]);
            }

            $this->conn->commit();
            return ['success' => true, 'cv_id' => $cvId];
        } catch (Exception $e) {
            $this->conn->rollBack();
            error_log("Error creating CV: " . $e->getMessage());
            return ['success' => false, 'msg' => 'Error creating CV: ' . $e->getMessage()];
        }
    }

    public function getCV($cvId) {
        try {
            $cv = [];

            // Lấy thông tin cá nhân
            $stmt = $this->conn->prepare("SELECT * FROM personal_info WHERE cv_id = :cv_id");
            $stmt->execute(['cv_id' => $cvId]);
            $cv['personal_info'] = $stmt->fetch(PDO::FETCH_ASSOC);

            // Lấy lịch sử làm việc
            $stmt = $this->conn->prepare("SELECT * FROM working_history WHERE cv_id = :cv_id");
            $stmt->execute(['cv_id' => $cvId]);
            $cv['working_history'] = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Lấy học vấn
            $stmt = $this->conn->prepare("SELECT * FROM education WHERE cv_id = :cv_id");
            $stmt->execute(['cv_id' => $cvId]);
            $cv['education'] = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Lấy kỹ năng
            $stmt = $this->conn->prepare("SELECT skill_name FROM skills WHERE cv_id = :cv_id");
            $stmt->execute(['cv_id' => $cvId]);
            $cv['skills'] = array_column($stmt->fetchAll(PDO::FETCH_ASSOC), 'skill_name');

            // Lấy tóm tắt
            $stmt = $this->conn->prepare("SELECT summary_text FROM summaries WHERE cv_id = :cv_id");
            $stmt->execute(['cv_id' => $cvId]);
            $cv['summary'] = array_column($stmt->fetchAll(PDO::FETCH_ASSOC), 'summary_text');

            // Lấy additional
            $stmt = $this->conn->prepare("SELECT * FROM additional WHERE cv_id = :cv_id");
            $stmt->execute(['cv_id' => $cvId]);
            $additional = $stmt->fetch(PDO::FETCH_ASSOC);
            $cv['additional'] = $additional ? [
                'website' => $additional['website'] ?? '',
                'certification' => $additional['certification'] ?? '',
                'languages' => $additional['languages'] ? explode(',', $additional['languages']) : [],
                'programming_languages' => $additional['programming_languages'] ? explode(',', $additional['programming_languages']) : [],
                'your_own' => $additional['your_own'] ?? ''
            ] : [];

            return ['success' => true, 'data' => $cv];
        } catch (Exception $e) {
            error_log("Error fetching CV: " . $e->getMessage());
            return ['success' => false, 'msg' => 'Error fetching CV: ' . $e->getMessage()];
        }
    }

    public function getUserCVs($userId) {
        try {
            $stmt = $this->conn->prepare("SELECT cv_id, created_at FROM cvs WHERE user_id = :user_id");
            $stmt->execute(['user_id' => $userId]);
            return ['success' => true, 'data' => $stmt->fetchAll(PDO::FETCH_ASSOC)];
        } catch (Exception $e) {
            error_log("Error fetching user CVs: " . $e->getMessage());
            return ['success' => false, 'msg' => 'Error fetching user CVs: ' . $e->getMessage()];
        }
    }
}
?>