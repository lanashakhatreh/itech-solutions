
<?php
$servername = "localhost";
$username = "itechjoc_lana";
$password = "lana321";
$dbname = "itechjoc_mg";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

?>