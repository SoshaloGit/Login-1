<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        .login-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        .login-container h2 {
            margin: 0;
            font-size: 24px;
            position: relative;
            display: inline-block;
        }
        .login-container h2::after {
            content: '';
            display: block;
            width: 50px;
            height: 2px;
            background-color: #333;
            margin: 8px auto 16px;
        }
        .icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            background-color: #333;
            border-radius: 50%;
            margin-right: 10px;
            vertical-align: middle;
        }
        .input-group {
            margin-bottom: 15px;
        }
        .input-group input {
            width: calc(100% - 40px);
            padding: 10px;
            margin-left: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-button {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 10px;
        }
        .login-container a {
            display: block;
            color: #333;
            text-decoration: none;
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>USER LOGIN</h2>
        <div class="input-group">
            <span class="icon"></span>
            <input type="text" placeholder="Username" required>
        </div>
        <div class="input-group">
            <span class="icon"></span>
            <input type="password" placeholder="Password" required>
        </div>
        <div class="input-group">
            <span class="icon"></span>
            <button class="login-button">Login</button>
        </div>
        <a href="#">Forgot Password?</a>
        <a href="#">Sign Up</a>
    </div>
</body>
</html>
