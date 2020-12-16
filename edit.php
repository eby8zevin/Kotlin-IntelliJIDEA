<?php
include "../connection.php";

$id = $_GET['id'];

$query = $conn->query("SELECT * FROM data_mhs WHERE data_id='$id'");
$row = $query->fetch_assoc();
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
      <input type="number" id="nim" name="nim" value="<?php echo $row['data_nim']; ?>"><br>
      <label for="nama">Nama:</label><br>
      <input type="text" id="nama" name="nama" value="<?php echo $row['data_nama']; ?>"><br><br>
      <button type="submit" name="update">Update</button>
    </form>
    
<?php
  if (isset($_POST['update']) {
  
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  
  $conn->query("UPDATE data_mhs SET data_nim='$nim',
                                    data_nama='$nama'
                              WHERE data_id='$id'");
  
  echo "<script>alert('Data berhasil diupdate.');</script>";
  echo "<script>location='index.php?editdata=succes';</script>";
  }
  
$conn->close();
?>

</body>
</html>
