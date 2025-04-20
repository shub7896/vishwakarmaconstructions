<?php
session_start();
require '../config/db.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: ../auth/login.php');
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title   = $_POST['title'];
    $content = $_POST['content'];
    $user_id = $_SESSION['user_id'];
    $stmt = $conn->prepare("INSERT INTO posts (user_id, title, content) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $user_id, $title, $content);
    $stmt->execute();
    echo "Post created successfully!";
}
?>
<link rel="stylesheet" href="../style.css">
<form method="POST">
  <h2>Create Post</h2>
  Title: <input name="title" required><br>
  Content: <textarea name="content" required></textarea><br>
  <button type="submit">Post</button>
</form>