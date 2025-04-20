<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome | My Website</title>
  <link rel="stylesheet" href="style.css">
  <style>* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Segoe UI", sans-serif;
}

body {
  background: #f5f7fa;
  color: #333;
}

header {
  height: 100vh;
  background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
              url('images/blog-5.jpg') no-repeat center center/cover;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  color: #fff;
}

header .container {
  max-width: 800px;
  padding: 20px;
}

header h1 {
  font-size: 48px;
  margin-bottom: 10px;
}

header p {
  font-size: 20px;
  margin-bottom: 30px;
}

.buttons {
  display: flex;
  justify-content: center;
  gap: 15px;
  flex-wrap: wrap;
}

.btn {
  background: #007bff;
  color: white;
  padding: 12px 25px;
  border-radius: 30px;
  text-decoration: none;
  font-weight: bold;
  transition: 0.3s;
}

.btn:hover {
  background: #0056b3;
}
</style>
</head>
<body>

  <header>
    <div class="container">
      <h1>Welcome to Vishwakarma Construction</h1>
      <p>Your one-stop platform for <b>Build Your Dream</b> and more</p>
      <div class="buttons">
        <a href="auth/login.php" class="btn">Login</a>
        <a href="auth/signup.php" class="btn">Signup</a>
       
      </div>
    </div>
  </header>

  <script src="script.js"></script>
</body>
</html>
