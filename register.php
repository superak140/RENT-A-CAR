<!DOCTYPE HTML>
<html>
<body>
<?php

include("DBConnection.php"); // include the connection object from the DBConnection.php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

$fname = mysqli_real_escape_string($conn,$_POST['fname']);
$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$phone = mysqli_real_escape_string($conn,$_POST['phone']);
$email = mysqli_real_escape_string($conn,$_POST['email']);

$sql = "INSERT INTO users (fname,username,password,phone,email) VALUES ('$fname', '$username', '$password','$phone','$email')";
if(mysqli_query($conn, $sql)){
  echo "Account Created successfully. <a href='login-register.html'>Click here to go back to login page</a>";
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}
 ?>
</body>
</html>
