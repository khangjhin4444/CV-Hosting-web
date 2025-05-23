<?php
session_start();
$year = $_SESSION['year'];
// echo $year;
$student = $_SESSION['student'];
// echo $student;
$test = '{
    "name": "John Doe",
    "age": 30,
    "email": "john.doe@example.com",
    "address": {
        "street": "123 Main St",
        "city": "Anytown",
        "state": "CA",
        "zip": "12345"
    }
}';
$heading = [[]];
if (gettype($test) === 'string') {
  $test = json_decode($test, true);
}
foreach ($test as $res)
  if (gettype($res) === 'array') {
    // echo implode(' ', $res);
  } else
    // echo $res;
$heading = [
  'name' => 'Khoa',
  'surname' => 'Huynh',
  'city' => 'Ho Chi Minh',
  'country' => 'Viet Nam',
  'postcode' => '50000',
  'phone' => '(84)932523714',
  'email' => 'huynhkhoa03012004@gmail.com',
  'address' => '273/66 Nguyen Van Dau, Ward 11, Binh Thanh District'
];
$working_history = [
  [
    'title' => 'Fresher',
    'employer' => 'Software Engineer',
    'location' => 'Dream Company',
    'start_date' => '2020-05',
    'end_date' => '2023-08',
  ],
  [
    'title' => 'Freelance',
    'employer' => 'Fullstack Developer',
    'location' => 'Home Company',
    'start_date' => '2023-09',
    'end_date' => 'now',
  ]
];

$education = [
  [
    'insitution' => 'Ho Chi Minh University of Technology',
    'school_location' => 'Ho Chi Minh City, Viet Nam',
    'degree' => 'Bachelor',
    'field_study' => 'Computer Science',
    'gpa' => '',
    'graduation_date' => '2024-06',
  ]
];
$skills = [
  'Teamwork and Collaboration',
  'Friendly, positive attitude',
  'Problem-solving',
  'Test',
  'Test',
  'Test',
  'Test',
  'Test',
];
$summary = [
  'Organized and dependable candidate successful at managing multiple priorities with a positive attitude. Willingness to take on added responsibilities to meet team goals.',
  'Progressively evolve cross-platform ideas before impactful infomediaries.
                            Energistically visualize tactical initiatives before cross-media catalysts for change.',

];
$finalize = [
  'languages' => [
    'html' => 'html',
    'css' => 'css',
    'javascript' => 'javascript',
    'php' => 'php'
  ],
  'tools' => [
    'git' => 'git',
    'github' => 'github',
    'docker' => 'docker',
    'mysql' => 'mysql'
  ]
];

require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../../config/constant.php';

$user = $_SESSION['user'];
$email = htmlspecialchars($user['email']);

// Lấy tên từ DB
$stmt = $conn->prepare('SELECT first_name, last_name FROM users WHERE email = :email');
$stmt->bindParam(':email', $email);
$stmt->execute();
$userData = $stmt->fetch(PDO::FETCH_ASSOC);
// $displayName = htmlspecialchars($userData['first_name'] . ' ' . $userData['last_name']);

$temp = ["id" => 1, "template_name" => "cv_2"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV view</title>
  <link rel="stylesheet" href="/CV-Hosting-web-main/public/css/node_modules/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="/CV-Hosting-web-main/public/css/header.css">
  <link rel="stylesheet" href="/CV-Hosting-web-main/public/css/body.css">
  <!-- <link rel="stylesheet" href="/CV-Hosting-web-main/public/css/select_template.css"> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="/CV-Hosting-web-main/public/css/view_templates.css">
  <link rel="stylesheet" href="/CV-Hosting-web-main/public/css/<?php echo $temp['template_name']?>.css">
  <style>
    .form-floating label::after,
    .form-floating input {
      background-color: #F8F0E5 !important;
    }

    html,
    body {
      font-family: Montserrat;
      margin: 0;
      padding: 0;
      height: 100%;
      background-color: #F8F0E5;
      position: relative;
    }
  </style>

  <link rel="stylesheet" type="text/css" href="/CV-Hosting-web-main/public/css/cv_1.css" media="all" />
  <style>
    
  </style>
</head>

<body>
  <section class="pb-5">
    <div class="container pb-5">
        <span style="grid-area: temp-list;" class="temp-list-grid">
            <?php 
              echo "
            <div class='temp-wrapper'>
              <div class='temp' data-id='".$temp['id']."'>
                ";
                include __DIR__ . "/../../public/templates/".$temp['template_name'].".php";
              echo"
              </div>
            
            </div>
        </div>
        ";
           ?>
        </span>
    </div>
  </section>
  <!-- <script src="/CV-Hosting-web-main/public/js/my_cvs.js"></script> -->
</body>

</html>