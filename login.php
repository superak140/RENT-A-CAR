<!DOCTYPE HTML>
<html>
<body>
  <?php
     include("DBConnection.php");
     session_start();

     if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form

        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);

        $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];

        $count = mysqli_num_rows($result);

        // If result matched $myusername and $mypassword, table row must be 1 row

        if($count == 1) {
        //  session_register("username");
        //   $_SESSION['login_user'] = $username;

           header("location: car-booking.php");
        }else {
         echo  "Your Login Name or Password is invalid ";
        }
     }
  ?>
<a href = "login-register.php"><h4>Enter correct username and password<h4></a>
</body>
</html>
