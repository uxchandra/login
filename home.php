<?php 
//memulai session yang disimpan pada browser
session_start();

//cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
if($_SESSION['status']!="sudah_login"){
//melakukan pengalihan
header("location:login.php");
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h3>Hai Gaes! Sugeng Rawuh : <?php echo $_SESSION['nama']; ?></h3>
	<a href="logout.php">Logout</a>
</body>
</html>