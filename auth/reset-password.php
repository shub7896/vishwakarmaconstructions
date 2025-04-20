<?php
require '../config/db.php';

if (isset($_GET['email'])) {
    $email = $_GET['email'];
} else {
    die("Invalid request.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
    $stmt = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
    $stmt->bind_param("ss", $new_password, $email);
    $stmt->execute();
    echo "<p class='success'>Password reset successfully. <a href='login.php'>Login here</a></p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reset Password</title>
  <link rel="stylesheet" href="../style.css">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f0f2f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    form {
      background: white;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
    }

    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #333;
    }

    input[type="password"] {
      width: 100%;
      padding: 12px;
      margin: 10px 0 20px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    button {
      width: 100%;
      background-color:hsl(122, 39.40%, 49.20%);
      color: white;
      padding: 12px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
    }

    button:hover {
      background-color: #45a049;
    }

    .success {
      background: #d4edda;
      color: #155724;
      padding: 12px;
      border-radius: 6px;
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>
<body>

  <form method="POST">
    <h2>Reset Password</h2>
    <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
    <label>New Password</label>
    <input type="password" name="new_password" required>
    <button type="submit">Reset Password</button>
  </form>

</body>
</html>
