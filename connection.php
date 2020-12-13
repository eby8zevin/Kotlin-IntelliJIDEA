<?php
//mendefinisikan konstanta
 define('HOST','localhost');
 define('USER','ahmadabuhasan');
 define('PASS','Salam 1 Jiwa');
 define('DB','ahmadabu_uas7');

//membuat koneksi dengan database
 $koneksi = mysqli_connect(HOST, USER, PASS, DB) or die(mysqli_errno());
?>
