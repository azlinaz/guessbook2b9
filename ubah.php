<!-- ubah.php -->
<!-- Interface of update data. -->

<?php
include("dbase.php");

$idURL = $_GET['id'];

$query = "SELECT * FROM book WHERE id = '$idURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in ubah.php");
$row = mysqli_fetch_assoc($result);

$nama = $row['nama'];
$email = $row['email'];
$komen = $row['komen'];

//@mysql_free_result($result);
?>
<html>
<head>
<title>Buku Pelawat Saya</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<form method="post" action="kemaskini.php">
Nama:
<input type ="text" name="nama" size="40" value="<?php echo $nama; ?>">
<br>
Email:
<input type ="text" name="email" size="25" value="<?php echo $email; ?>">
<br>
Catatan: <br>
<textarea name="komen" cols="30" rows="8"><?php echo $komen; ?></textarea>
<br>
<input type ="hidden" name="id" value="<?php echo $idURL; ?>">
<input type ="submit" value="Ubah">
<input type ="reset" value="Semula">
<br>
</form>
<hr>
<div align="centre">[ <a href="papar.php"]>Balik ke Paparan</a> |
<a href="index.php">Balik ke Halaman Utama</a> |
<a href="masuk.php">Tambah Buku Pelawat</a> ] </div>
</body>
</html>