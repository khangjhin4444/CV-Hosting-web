<?php

// Kiểm tra quyền admin
if (! isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
    header('Location: /CV-Hosting-web-main/public/index.php');
    exit;
}

// Kết nối database
require_once __DIR__.'/../../config/database.php';


// Lấy danh sách người dùng và số CV
try {
    $stmt = $conn->prepare('
        SELECT u.id, u.email, u.created_at, COUNT(c.cv_id) as cv_count
        FROM users u
        LEFT JOIN cvs c ON u.id = c.user_id
        GROUP BY u.id
    ');
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    error_log('Error fetching users: '.$e->getMessage());
    $users = [];
}



// Xử lý thông báo
$success = isset($_GET['success']) ? htmlspecialchars($_GET['success']) : '';
$error = isset($_GET['error']) ? htmlspecialchars($_GET['error']) : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard - CV Hosting</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background: #f7f7f7; }
    header { background: #2c3e50; color: white; padding: 1rem; text-align: center; }
    nav a { color: white; padding: 1rem; display: block; text-decoration: none; }
    nav a:hover { background: #2c3e50; }
    .nav-custom { background: #34495e; }
    .section { background: white; padding: 1.5rem; border-radius: 8px; margin-bottom: 2rem; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
    button:hover { background: #219150; }
  </style>
</head>
<body>
  <header>
    <h1>Admin Dashboard - CV Hosting</h1>
  </header>

  <nav class="nav nav-custom d-flex flex-wrap">
    <a href="#user-management">User Management</a>
    
  </nav>

  <div class="container my-4">
    <?php if ($success) { ?>
      <div class="alert alert-success"><?php echo $success; ?></div>
    <?php } ?>
    <?php if ($error) { ?>
      <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php } ?>

    <div class="section" id="user-management">
      <h2>User Management</h2>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Email</th>
              <th>Create Date</th>
              <th>Number of created CVs</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php if (empty($users)) { ?>
              <tr>
                <td colspan="5" class="text-center">No users found</td>
              </tr>
            <?php } else { ?>
              <?php foreach ($users as $user) { ?>
                <tr>
                  <td><?php echo htmlspecialchars($user['id']); ?></td>
                  <td><?php echo htmlspecialchars($user['email']); ?></td>
                  <td><?php echo htmlspecialchars($user['created_at']); ?></td>
                  <td><?php echo htmlspecialchars($user['cv_count']); ?></td>
                  <td>
                    
                  <button type="button" class="btn btn-danger btn-sm delete-user" onclick="deleteUser(<?php echo htmlspecialchars($user['id']); ?>)">Delete</button>
                  </td>
                </tr>
              <?php } ?>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- <div class="section" id="system-settings">
      <h2>System Management</h2>
      <form action="/CV-Hosting-web-main/app/controllers/SettingsController.php" method="post">
        <input type="hidden" name="action" value="save_settings">
        <div class="mb-3">
          <label for="cv-limit" class="form-label">Max number CV per account:</label>
          <input type="number" id="cv-limit" name="cv_limit" value="<?php echo htmlspecialchars($cv_limit); ?>" min="1" class="form-control" required />
        </div>

        

      </form>
    </div> -->
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function deleteUser(userId) {
  if (confirm('Are you sure you want to delete this user?')) {
    // Create a form and submit it programmatically
    const form = document.createElement('form');
    form.method = 'POST';
    form.action = '/CV-Hosting-web-main/app/controllers/AdminController.php';
    
    // Create hidden input for user ID
    const userIdInput = document.createElement('input');
    userIdInput.type = 'hidden';
    userIdInput.name = 'user_id';
    userIdInput.value = userId;
    
    // Create hidden input for action
    const actionInput = document.createElement('input');
    actionInput.type = 'hidden';
    actionInput.name = 'action';
    actionInput.value = 'delete_user';
    
    // Append inputs to form
    form.appendChild(userIdInput);
    form.appendChild(actionInput);
    
    // Append form to body and submit
    document.body.appendChild(form);
    form.submit();
  }
}
  </script>
</body>
</html>
