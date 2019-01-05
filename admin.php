
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cars";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM cbook";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Pick Address</th><th>Drop Address</th><th>Pick Date</th><th>Drop Date</th><th>Pick Time</th><th>Drop Time</th><th>Name</th><th>Number</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["paddress"]. "</td><td>" . $row["daddress"]. "</td><td> " . $row["pdate"]. "</td><td> " . $row["ddate"]. "</td><td> " . $row["ptime"]. "</td><td> " . $row["dtime"]. "</td> <td> " . $row["fname"]. "</td>
        <td> " . $row["pnumber"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
