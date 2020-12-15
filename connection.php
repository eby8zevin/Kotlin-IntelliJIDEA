<?php
//mendefinisikan konstanta
$host = "localhost";
$user = "ahmadabuhasan";
$pass = "Salam 1 Jiwa";
$dbnm = "ahmadabu_uas7";

//membuat koneksi dengan database
$conn = mysqli_connect($host, $user, $pass, $dbnm);

// Check connection
// if ($conn->connect_error) {
//  die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
// //mysqli_close($conn);
// echo "<br>";
// print_r(PDO::getAvailableDrivers());
?>
