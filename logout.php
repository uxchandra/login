<?php 
// mengaktifkan session silahkan anak2 belajar sesion ya
session_start();
 
// menghapus semua session
session_destroy();
 
// mengalihkan halaman login
header("location:index.php");
?>