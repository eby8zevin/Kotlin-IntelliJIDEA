<?php
include 'connection.php';

$query = "SELECT * FROM data_mhs";
$result = mysqli_query($conn, $query);
$array_data = array();

while($row = mysqli_fetch_assoc($result))
{
  $array_data[]=$row;
}

header('Content-type: text/javascript');
echo json_encode($array_data, JSON_PRETTY_PRINT);
?>
