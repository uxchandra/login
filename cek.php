 <?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$password = validate($_POST['password']);

	if (empty($username)) {
		header("Location: index.php?error=Username diperlukan");
	    exit();
	}else if(empty($password)){
        header("Location: index.php?error=Password diperlukan");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

		$result = mysqli_query($koneksi, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['nama'] = $row['nama'];
            	$_SESSION['status'] = "sudah_login";
				$_SESSION['id_login'] = $data['id'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error=Gagal login data tidak ditemukan!");
		        exit();
			}
		}else{
			header("Location: index.php?error=Gagal login data tidak ditemukan!");
	        exit();
		}
	}

} else {
	header("location:index.php?error=gagal login data tidak ditemukan.");
}
?>