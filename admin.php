<!-- admin.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Add Blog</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: 500;
            color: #333;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-top: 8px;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
        }

        button {
            margin-top: 25px;
            width: 100%;
            padding: 14px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .success {
            text-align: center;
            color: green;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Add New Blog Post</h2>

    <form action="upload_blog.php" method="post" enctype="multipart/form-data">
        <label>Title</label>
        <input type="text" name="title" required>

        <label>Description</label>
        <textarea name="description" rows="5" required></textarea>

        <label>Image</label>
        <input type="file" name="image" accept="image/*" required>

        <button type="submit">Upload Blog</button>
    </form>
</div>

</body>
</html>
