<?php
include "../connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="WEB" />
<meta name="author" content="Ahmad Abu Hasan" />
</head>
<body>
  <p><a href="index.php">Back</a></p>
  <h3>Form</h3>
    <form action="" method="POST">
      <label for="nim">NIM:</label><br>
      <input type="number" id="nim" name="nim" ><br>
      <label for="nama">Nama:</label><br>
      <input type="text" id="nama" name="nama" ><br><br>
      <button type="submit" name="update">Update</button>
    </form>
    


</body>
</html>
