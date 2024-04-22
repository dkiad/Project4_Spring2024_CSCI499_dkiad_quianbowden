<?php

////// Write the Database connection code below (Q1)
$servername = 'localhost'; //for XAMPP we use localhost
   $username = 'root'; //default username in XAMPP
   $password = ''; //default password in XAMPP
   $dbname = 'project5'; //Change this to whatever database name you set in PHPmyAdmin

   $link = mysqli_connect($servername,$username,$password, $dbname);



$queryInsert = "INSERT INTO users (email, password) VALUES ('dentdkia@gmail.com', 'yespassword')"; // this is used to update a row in the database. 

//If you leave this line in here it will fill up the table with the same information every refresh


mysqli_query($link, $queryInsert);

$query = "SELECT * FROM users";

if ($result = mysqli_query($link, $query)) {
    while ($row = mysqli_fetch_array($result)) {
        print_r($row);
    }
    mysqli_free_result($result); // Free result set
}

mysqli_close($link); // Close connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Game Judge: THE ARCADE  </title>
    <link rel="stylesheet" href="STYLE.css">
</head>
    <body>
        <div class="container">
            <h1 class="title">THE ARACADE </h1>
        <form action="signup.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Sign Up</button>
        </form>
            <p>Already have an account? <a href="login.html">Login here</a>.</p>
        </div>
    </body>


</html>

