<?php
// Include the database connection file
require_once('Project5.php');

// Check connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}

//Fetch data
$username = mysqli_real_escape_string($link, $_POST['username']);
$password = mysqli_real_escape_string($link, $_POST['password']);

$sql = "SELECT COUNT(*) FROM users WHERE username = '$username'";
$result = $link->query($sql);
$count = $result->fetch_assoc()["COUNT(*)"];

$sql2 = "SELECT COUNT(*) FROM users WHERE password = '$password'";
$result2 = $link->query($sql2);
$count2 = $result2->fetch_assoc()["COUNT(*)"];

if ($count > 0) {
  if($count2 > 0){
    echo "Login Success";
  }else{
    echo "Incorrect Password";
  }
} else {
  echo "No match for username found";
}