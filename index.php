<?php
include '/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Web Service</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <center><font color="red" size="100"><b>M A I N T E N A N C E</b></font></center>
  <div align="center">
    <h3>My Project in PHP.ID<br>jancukers.com</h3>
      <p><?php
        date_default_timezone_set('Asia/Jakarta');
        echo date('d F Y H:i:s'); 
      ?></p>
    <table border="1" width="700px">
      <thead>
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; ?>
        <?php $query = $conn->query("SELECT * FROM data_mhs ORDER BY data_nim ASC"); ?>
        <?php while($row = $query->fetch_assoc()) { ?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['data_nim']; ?></td>
          <td><?php echo $row['data_nama']; ?></td>
        </tr>
      </tbody>
      <?php $no++ ?>
      <?php } ?>
    </table>
  </div>

</body>
</html>
