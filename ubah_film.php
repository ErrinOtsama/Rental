<?php
include ('koneksi.php');

$kode=$_POST['kode'];
$judul=$_POST['judul'];
$genre=$_POST['genre'];
$type=$_POST['type'];
$harga=$_POST['harga'];
$status=$_POST['status'];

$query= "UPDATE tb_rental SET judul='$judul', genre='$genre', type='$type', harga='$harga', status='$status' WHERE kode='$kode' ";
$ubah= mysqli_query($conn,$query);

header('location: tampil_rental.php')

?>