<?php
$conn = new mysqli('sql12.freesqldatabase.com', 'sql12774258', 'TrHXy4r1s6', 'sql12774258');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $conn->prepare("SELECT * FROM blogs WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    session_start(); // Make sure session is started

// Determine the back link
$backLink = isset($_SESSION['admin_id']) ? 'adminDash.php' : 'index.php';

    if ($row = $result->fetch_assoc()) {
        echo '
        <div style="max-width: 800px; margin: 50px auto; font-family: Arial;">
            <h2>' . htmlspecialchars($row['title']) . '</h2>
            <img src="uploads/' . htmlspecialchars($row['image']) . '" style="max-width:100%; height:auto;" />
            <p style="margin-top: 20px;">' . nl2br(htmlspecialchars($row['description'])) . '</p>
        <a href="' . $backLink . '" style="display:inline-block;margin-top:20px;color:blue;">← Back to Blogs</a>
        </div>';
    } else {
        echo "Blog not found.";
    }

    $stmt->close();
} else {
    echo "Invalid request.";
}

$conn->close();
?>
