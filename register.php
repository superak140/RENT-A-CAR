<!DOCTYPE HTML>
<html>
<body>
<?php

include("DBConnection.php"); // include the connection object from the DBConnection.php

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

$fname = mysqli_real_escape_string($db,$_POST['fname']);
$username = mysqli_real_escape_string($db,$_POST['username']);
$password = mysqli_real_escape_string($db,$_POST['password']);
$phone = mysqli_real_escape_string($db,$_POST['phone']);
$email = mysqli_real_escape_string($db,$_POST['email']);

$sql = "INSERT INTO users (fname,username,password,phone,email) VALUES ('$fname', '$username', '$password','$phone','$email')";
if(mysqli_query($db, $sql)){
  echo "Account Created successfully. <a href='login-register.php'>Click here to go back to login page</a>";
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
}
 ?>
</body>
</html>
