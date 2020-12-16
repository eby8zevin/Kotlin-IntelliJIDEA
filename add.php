<!DOCTYPE html>
<html lang="en">
<head>
<title>Add</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="WEB" />
<meta name="author" content="Ahmad Abu Hasan" />
</head>
<body>
  <h3>Form</h3>
    <form action="" method="POST">
      <label for="nim">NIM:</label><br>
      <input type="number" id="nim" name="nim"><br>
      <label for="nama">Nama:</label><br>
      <input type="text" id="nama" name="nama"><br>
      <button type="submit" name="simpan">Simpan</button>
    </form>

<?php
  if(isset($_POST['simpan'])) {
  
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
    
  $query = $conn->query("SELECT * FROM data_mhs WHERE data_nim='$nim'");
  if ($query->nuw_rows()==1) {
	  echo "<script>alert('NIM sudah digunakan.')</script>";
	  echo "<meta http-equiv='refresh' content='0;url=add.php?adddata=failed'>";
  } else {
	  $conn->query("INSERT INTO data_mhs (data_nim, data_nama)
	  					VALUES ('$nim',
							'$nama')
							");
	  echo "<script>alert('Data berhasil disimpan.');</script>";
	  echo "<script>location='index.php>=?adddata=succes'</script>";
  }
}
$conn->close();
?>

</body>
</html>
