<?php
include "../connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Web Service</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="WEB" />
<meta name="author" content="Ahmad Abu Hasan" />
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
</head>
<body>
  <center><font color="red" size="100"><b>php.id</b></font></center>
  <div align="center" padding="100px">
    <h3>My Project in PHP.ID<br>jancukers.com</h3>
      <p><?php
        date_default_timezone_set('Asia/Jakarta');
        echo date('d F Y H:i:s'); 
      ?></p>
    <a href="add.php">Add</a> || <a href="https://ahmadabuhasan.me/github/API">API</a> || <a href="https://github.com/eby8zevin/ahmadabuhasan.me">Source Code</a>
    <table border="1" width="700px">
      <thead>
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Name</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; ?>
        <?php $query = $conn->query("SELECT * FROM data_mhs ORDER BY data_nim ASC"); ?>
        <?php while($row = $query->fetch_assoc()) { ?>
        <tr>
          <td style="text-align: center;"><?php echo $no; ?></td>
          <td><?php echo $row['data_nim']; ?></td>
          <td><?php echo $row['data_nama']; ?></td>
          <td>
            <a href="edit.php?editdata&id=<?php echo $row['data_id']; ?>">Edit</a>
            <a href="delete.php?deletedata&id=<?php echo $row['data_id']; ?>" style="float: right;" onclick="return confirm('Are you sure you want to delete name <?php echo $row['data_nama']; ?> ?')">Delete</a>
          </td>
        </tr>
      </tbody>
      <?php $no++ ?>
      <?php } $conn->close(); ?>
    </table>
  </div>
</body>
</html>
