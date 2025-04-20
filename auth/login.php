<?php
session_start();
require '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    if (isset($_POST['admin_login'])) {
        $stmt = $conn->prepare("SELECT * FROM admins WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $admin = $stmt->get_result()->fetch_assoc();

        if ($admin && password_verify($password, $admin['password'])) {
            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['is_admin'] = true;
            $_SESSION['admin_email'] = $admin['email'];
            $_SESSION['admin_username'] = $admin['username'] ?? '';

            header('Location: ../adminDash.php');
            exit;
        } else {
            $error = "Invalid admin credentials.";
        }
    } else {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $user = $stmt->get_result()->fetch_assoc();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['username'] = $user['username'] ?? '';

            header('Location: ../index.php');
            exit;
        } else {
            $error = "Invalid user credentials.";
        }
    }
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Vishwakarma Constructions</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #e0e0e0, #f9f9f9);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        form {
            background: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 26px;
            color: #333;
            text-align: center;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        button[name="user_login"] {
            background-color:rgb(255, 174, 0);
            color: #fff;
        }

        button[name="admin_login"] {
            background-color:rgb(0, 0, 0);
            color: #fff;
        }

        button:hover {
            opacity: 0.9;
        }

        p {
            text-align: center;
            margin-top: 15px;
        }

        a {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }

        a:hover {
            text-decoration: underline;
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
        <h2>Login</h2>

        <?php if (!empty($error)): ?>
            <div class="error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <input name="email" type="email" placeholder="Email address" required>
        <input name="password" type="password" placeholder="Password" required>

        <button type="submit" name="user_login">Login as User</button>
        <button type="submit" name="admin_login">Login as Admin</button>

        <p><a href="forgot-password.php">Forgot Password?</a></p>
    </form>

</body>
</html>
