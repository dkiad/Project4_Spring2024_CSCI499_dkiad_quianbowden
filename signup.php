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

$queryInsert = "INSERT INTO users (email, password, username) VALUES ('$email', '$password', '$username')";



