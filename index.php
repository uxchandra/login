<!DOCTYPE html>
<html>
<head>
	<title>Latihan Login SMA Negeri 1 Bae Kudus</title>
	<link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="overlay"></div>
	<form action="cek.php" method="POST" class="box">
		<div class="header">
        </div>
		<div class="login-area">
		<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?><br>
			<input type="text" class="username" name="username" placeholder="Username" required="" autofocus="">
			<input type="password" class="username" name="password" placeholder="Password" required="">
			<button type="submit" class="submit">LOGIN</button>
		</div>
	</form>
	<!-- Menampung jika ada pesan silahkan anak2 belajar fungsi isset -->
</body>
</html>