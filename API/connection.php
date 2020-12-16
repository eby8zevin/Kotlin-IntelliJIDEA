<?php
$host = "localhost";
$user = "username";
$pass = "password";
$dbnm = "dbname";

// MySQLi Procedural
$conn = mysqli_connect($host, $user, $pass, $dbnm);

// Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?>
