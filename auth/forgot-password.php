<?php
require '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    // Check if email exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $user = $stmt->get_result()->fetch_assoc();

    if ($user) {
        // Redirect to password reset page
        header("Location: reset-password.php?email=" . urlencode($email));
        exit();
    } else {
        $error = "Email not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Forgot Password</title>
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

    input[type="email"] {
      width: 100%;
      padding: 12px;
      margin: 10px 0 20px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    button {
      width: 100%;
      background-color:rgb(255, 174, 0);
      color: white;
      padding: 12px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
    }

    button:hover {
      background-color:hsl(123, 39.70%, 44.90%);
    }

    .error {
      color: red;
      text-align: center;
      margin-bottom: 15px;
    }
  </style>
</head>
<body>

  <form method="POST">
    <h2>Forgot Password</h2>
    <?php if (isset($error)) echo "<div class='error'>$error</div>"; ?>
    <label>Enter your registered email:</label>
    <input type="email" name="email" required>
    <button type="submit">Submit</button>
  </form>

</body>
</html>
