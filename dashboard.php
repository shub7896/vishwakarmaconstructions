<?php
session_start();
require 'config/db.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: auth/login.php');
    exit();
}
$user_id = $_SESSION['user_id'];
$result = $conn->query("SELECT * FROM posts WHERE user_id = $user_id");
?>
<link rel="stylesheet" href="style.css">
<h2>Your Blog Posts</h2>
<?php while ($row = $result->fetch_assoc()): ?>
  <div class="post">
    <h3><?= $row['title'] ?></h3>
    <p><?= $row['content'] ?></p>
  </div>
<?php endwhile; ?>
<a href="blog/create.php">Create New Post</a><br>
<a href="auth/logout.php">Logout</a>