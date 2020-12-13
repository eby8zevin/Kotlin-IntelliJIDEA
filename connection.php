<?php
//mendefinisikan konstanta
 define('HOST','localhost');
 define('USER','ahmadabu_uas7');
 define('PASS','Salam 1 Jiwa');
 define('DB','ahmadabu_uas7');

//membuat koneksi dengan database
 $koneksi = new mysqli(HOST, USER, PASS, DB) or die(mysqli_errno());
?>
