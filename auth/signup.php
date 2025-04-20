<?php
require '../config/db.php';

$success = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $phone    = trim($_POST['phone']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Basic validation (you can expand this later)
    if ($username && $email && $phone && $_POST['password']) {
        $stmt = $conn->prepare("INSERT INTO users (username, email, password, phone) VALUES (?, ?, ?, ?)");
        
        $stmt->bind_param("ssss", $username, $email, $password, $phone);

        if ($stmt->execute()) {
            $success = "Signup successful. <a href='login.php'>Click here to login</a>";
        } else {
            $error = "Something went wrong. Try again.";
        }
    } else {
        $error = "All fields are required.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup - Vishwakarma Constructions</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
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

        input {
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
            background-color:rgb(255, 217, 0);
            color: #fff;
        }

        button:hover {
            background-color:rgb(255, 174, 0);
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

        .message {
            text-align: center;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>

    <form method="POST">
        <h2>Create an Account</h2>

        <?php if ($success): ?>
            <div class="message success"><?= $success ?></div>
        <?php elseif ($error): ?>
            <div class="message error"><?= $error ?></div>
        <?php endif; ?>

        <input name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email address" required>
        <input type="number" name="phone" placeholder="Phone number" required>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Sign Up</button>

        <p>Already have an account? <a href="login.php">Login</a></p>
    </form>

</body>
</html>
