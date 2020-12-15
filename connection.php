<?php
//mendefinisikan konstanta
 define('HOST','localhost');
 define('USER','ahmadabu_uas7');
 define('PASS','Salam 1 Jiwa');
 define('DB','ahmadabu_uas7');

//membuat koneksi dengan database
 $conn = new mysqli(HOST, USER, PASS, DB);

// Check connection
 if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
 }
  echo "Connected successfully";
 //mysqli_close($conn);
print_r(PDO::getAvailableDrivers());
?>
