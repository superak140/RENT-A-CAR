

 <?php
 //Establishing connection with the database
 define('DB_SERVER', 'sql12.freesqldatabase.com');
 define('DB_USERNAME', 'sql12616267');
 define('DB_PASSWORD', 'jxf4LlIcaT');
 define('DB_DATABASE', 'users'); //where customers is the database
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?> 

 

 <!--?php
$servername = "sql12.freesqldatabase.com";
$username = "sql12616267";
$password = "jxf4LlIcaT";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?-->