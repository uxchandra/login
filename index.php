<!DOCTYPE html>
<html>
<head>
	<title>Latihan Login SMA Negeri 1 Bae Kudus</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="cek.php" method="POST">
		<h1>LOGIN</h1>
		<input type="text" name="username" placeholder="Username" required="" autofocus="">
		<br>
		<input type="password" name="password" placeholder="Password" required="">
		<br>
		<button type="submit">LOGIN</button>
	</form>
	<!-- Menampung jika ada pesan silahkan anak2 belajar fungsi isset -->
	<?php if(isset($_GET['pesan'])) {  ?>
	<label style="color:red;"><?php echo $_GET['pesan']; ?></label>
	<?php } ?>	
</body>
</html>