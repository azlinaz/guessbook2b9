<!-- index.php -->
<!-- Homepage of the guestbook system. -->
<html>
<head>
<title>Guest Book</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style3
{font-familly:Verdana, Arial, Helvetica, sans-serif;
font-siize: 12px;
font-weight: bold;
}
-->
</style>
</head>

<body>
<?php
// set the default time zone to use in Malaysia
date_default_timezone_set('Asia/Kuala_Lumpur');
?>
<div align="center">
<table width="379" height="286" border="3" bordercolor="#666666">
  <tr>
    <td height="190" bgcolor="#999999"><p align="center" class="style1"><strog>My Guestbook</strong></p>
      <div align="center">
        <span class="style3">Tarikh : <?php echo date("d-m-Y"); ?></span>
      </div>
      	<p align="center" class="style1"></p>
 	<div align="center">
          <span class="style3">Masa : <?php echo date("H:i", time()); ?></span>
      	</div>
	<p align="center" class="style1">
	  [<a href="masuk.php">Masuk Data Baru</a> | <a href="papar.php">Paparan Data</a> ]
	</p>
  </tr>
</table>
<p class="style1">&nbsp;</p>
</div>
</body>
</html>
