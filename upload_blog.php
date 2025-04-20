<?php
$conn = new mysqli('sql12.freesqldatabase.com', 'sql12774258', 'TrHXy4r1s6', 'sql12774258');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$title = $_POST['title'];
$description = $_POST['description'];
$imageName = $_FILES['image']['name'];
$imageTmp = $_FILES['image']['tmp_name'];

$targetDir = "uploads/";
$imagePath = $targetDir . basename($imageName);

// Start output buffering to avoid header issues
ob_start();

if (move_uploaded_file($imageTmp, $imagePath)) {
    $stmt = $conn->prepare("INSERT INTO blogs (title, description, image) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $description, $imageName);
    
    if ($stmt->execute()) {
        // Success → redirect to blog section in admin dashboard
        header('Location: adminDash.php?upload=success'); 
        exit(); // Always exit after redirect
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Failed to upload image.";
}

$conn->close();
ob_end_flush();
?>
