<?php
// Include the database connection file
require_once('Project5.php');

// Check connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Escape user input to prevent SQL injection (highly recommended)
$username = mysqli_real_escape_string($link, $username);
$email = mysqli_real_escape_string($link, $email);
$password = mysqli_real_escape_string($link, $password); // Assuming password is stored securely (e.g., hashed)

// Construct the insert query using escaped data
$queryInsert = "INSERT INTO users (email, password, username) VALUES ('$email', '$password', '$username')";

// Execute the insert query
if (mysqli_query($link, $queryInsert)) {
  header("Location: sort.php");
} else {
  echo "Error: " . $queryInsert . "<br>" . mysqli_error($link);
}


