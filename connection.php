<?php
$host = "localhost";
$user = "username";
$pass = "password";
$dbnm = "dbname";

//MySQLi Object-Oriented
$conn = new mysqli($host, $user, $pass, $dbnm);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
