<!--kemaskini.php-->
<!--To update data of ubah.php into database.-->
<?php
include ("dbase.php");

extract ($_POST);

//Dapatkan Tarikh Dan Masa Masuk
$tarikh = date("d-m-Y", time());
$masa = date("H:i:s", time());

$query = "UPDATE book SET nama = '$nama', email = '$email', tarikh = '$tarikh', masa = '$masa', komen = '$komen' WHERE id = '$id'";

$result = mysqli_query($conn,$query) or die ("Could not execute query in ubah.php");
if($result){
 echo "<script type = 'text/javascript'> window.location='papar.php' </script>";
 
}
?>