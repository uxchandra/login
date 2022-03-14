<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "latihan";

	$koneksi = mysqli_connect($host, $user, $pass, $db);
// silahkan anak2 belajar if dan else ya
	if(!$koneksi) {
		die("Koneksi gagal : ".mysql_connect_error());
	}