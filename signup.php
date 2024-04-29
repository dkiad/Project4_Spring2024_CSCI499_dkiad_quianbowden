<html>
<body>

<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$queryInsert = "INSERT INTO users (email, password, username) VALUES ('$email', '$password', '$username')";

// Check if query execution is successful
if (mysqli_query($link, $queryInsert)) {
echo "New record created successfully";
} else {
echo "Error: " . $queryInsert . "<br>" . mysqli_error($link);
}


?>

</body>
</html>