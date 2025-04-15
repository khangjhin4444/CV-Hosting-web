<?php

class CV{
    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }

    

    public function createCV($userId, $heading, $workingHistory, $education, $skills, $summary, $finalize) {
        try {
            $this->conn->beginTransaction();

            // Tạo CV
            $stmt = $this->conn->prepare("INSERT INTO cvs (user_id) VALUES (:user_id)");
            $stmt->execute(['user_id' => $userId]);
            $cvId = $this->conn->lastInsertId();

            // Lưu thông tin cá nhân
            $stmt = $this->conn->prepare("
                INSERT INTO personal_info (cv_id, name, surname, city, country, postcode, phone, email, address)
                VALUES (:cv_id, :name, :surname, :city, :country, :postcode, :phone, :email, :address)
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
                'address' => $heading['address'] ?? '',
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
                    INSERT INTO education (cv_id, institution, school_location, degree, field_study, gpa, graduation_date)
                    VALUES (:cv_id, :institution, :school_location, :degree, :field_study, :gpa, :graduation_date)
                ");
                $stmt->execute([
                    'cv_id' => $cvId,
                    'institution' => $edu['institution'] ?? '',
                    'school_location' => $edu['school_location'] ?? '',
                    'degree' => $edu['degree'] ?? '',
                    'field_study' => $edu['field_study'] ?? '',
                    'gpa' => $edu['gpa'] ?? '',
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

            // Lưu ngôn ngữ lập trình
            foreach ($finalize['languages'] as $lang) {
                if (!empty($lang)) {
                    $stmt = $this->conn->prepare("
                        INSERT INTO languages (cv_id, language_name)
                        VALUES (:cv_id, :language_name)
                    ");
                    $stmt->execute([
                        'cv_id' => $cvId,
                        'language_name' => $lang,
                    ]);
                }
            }

            // Lưu công cụ
            foreach ($finalize['tools'] as $tool) {
                if (!empty($tool)) {
                    $stmt = $this->conn->prepare("
                        INSERT INTO tools (cv_id, tool_name)
                        VALUES (:cv_id, :tool_name)
                    ");
                    $stmt->execute([
                        'cv_id' => $cvId,
                        'tool_name' => $tool,
                    ]);
                }
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

            // Lấy ngôn ngữ
            $stmt = $this->conn->prepare("SELECT language_name FROM languages WHERE cv_id = :cv_id");
            $stmt->execute(['cv_id' => $cvId]);
            $cv['finalize']['languages'] = array_column($stmt->fetchAll(PDO::FETCH_ASSOC), 'language_name');

            // Lấy công cụ
            $stmt = $this->conn->prepare("SELECT tool_name FROM tools WHERE cv_id = :cv_id");
            $stmt->execute(['cv_id' => $cvId]);
            $cv['finalize']['tools'] = array_column($stmt->fetchAll(PDO::FETCH_ASSOC), 'tool_name');

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