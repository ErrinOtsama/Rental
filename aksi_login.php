<?php 
include ('koneksi.php');
if (!isset($_SESSION)) {
	session_start();
}

$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);

$query="SELECT * FROM tb_admin WHERE username='$username' AND password='$password' ";
$data=mysqli_query($conn,$query);

$login=mysqli_num_rows($data);

if ($login > 0) {
 	// echo "Selamat datang";
 	$_SESSION['username']=$username;
 	header("location: tampil_rental.php");
 } else {
 	// echo "Gagal login";
 	header("location: login.php");
 }


 ?>