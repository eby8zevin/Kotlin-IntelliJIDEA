<?php
$host = "localhost";
$user = "ahmadabuhasan";
$pass = "Salam 1 Jiwa";
$dbnm = "ahmadabu_uas7";

$conn = mysqli_connect($host, $user, $pass, $dbnm);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
