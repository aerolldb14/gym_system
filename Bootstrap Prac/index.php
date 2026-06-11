<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #2c3e50;
            color: #ecf0f1;
            font-family: 'Arial', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            background-color: #34495e;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            width: 350px;
            text-align: center;
        }
        .login-container img {
            width: 50px;
            margin-bottom: 20px;
        }
        .form-control {
            background-color: #ecf0f1;
            border: none;
            border-radius: 50px;
            padding: 15px;
            margin-bottom: 20px;
            color: #34495e;
        }
        .btn-login {
            background-color: #3498db;
            border: none;
            border-radius: 50px;
            padding: 10px;
            color: #fff;
            font-weight: bold;
            width: 100%;
            margin-bottom: 20px;
        }
        .login-container a {
            color: #ecf0f1;
            text-decoration: none;
        }
        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="path/to/logo.png" alt="Gym System Logo">
        <h2>GYM SYSTEM</h2>
        <!-- Admin/Staff Login Form -->
        <form method="POST" action="auth/login.php">
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            <input type="hidden" name="role" value="admin_or_staff">
            <button type="submit" class="btn btn-login">Admin Login</button>
        </form>
        <div class="d-flex justify-content-between">
            <a href="#">Customer Login</a>
            <a href="#">Staff Login</a>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

