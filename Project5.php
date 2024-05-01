<?php
// Database connection code (replace with your credentials)
$servername = "localhost";
$username = 'root';
$password = "";
$dbname = "project5";

// Create connection
$link = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Game Judge: THE ARCADE  </title>
    <link rel="stylesheet" href="STYLE.css">
</head>

<body>
        <h1 class="title">Game Judge: THE ARCADE </h1>
        
        <div class="signup">
            <form action="signup.php" method="POST">
                <label for="username" class="neonText">Username:</label>
                <input type="text" id="username" name='username' required>

                <label for="email" class="neonText">Email:</label>
                <input type="email" id="email" name='email' required>

                <label for="password" class="neonText">Password:</label>
                <input type="password" id="password" name='password' required>

                <button type="submit">Sign Up</button>
            </form>
        </div>

        <div class="login">
            <form action="login.php" method="POST">
                <label for="username" class="neonText">Username:</label>
                <input type="text" id="username" name='username' required>

                <label for="password" class="neonText">Password:</label>
                <input type="password" id="password" name='password' required>

                <button type="submit">Login</button>
            </form>
        </div>

</body>
</html>
