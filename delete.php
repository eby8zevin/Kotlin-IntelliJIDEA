<?php
include "../connection.php";

$id = $_GET['id'];

$conn->query("DELETE FROM data_mhs WHERE data_id='$id'");

echo "<script>alert('Data berhasil dihapus.');</script>";
echo "<script>location='index.php?deletedata=succes';</script>";
?>
