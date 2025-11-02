<?php

echo "Login page loaded!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
    
<form action="login.php" method="post">
    <div class="container">
        <div class="login-box">
            <h2>LogIn</h2>


            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                <span class="icon">👤</span>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <span class="icon">🔒</span>
            </div>

            <button type="submit" class="login-btn">LogIn</button>

            <p class="register-text">
                Don’t have an account? 
                <a href="register.php">Register here</a>
            </p>
        </div>

        <div class="welcome-box">
            <h1>WELCOME<br><span>BACK!</span></h1>
            <div class="circles">
                <div class="circle one"></div>
                <div class="circle two"></div>
                <div class="circle three"></div>
            </div>
        </div>
    </div>
</form>

<script src="../assets/js/login.js"></script>


</body>
</html>
