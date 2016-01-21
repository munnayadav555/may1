<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

$user="username";
$pass="password";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
echo 'Couldn connect to the database';
}
mysqli_close($conn);

?>