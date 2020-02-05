<?php 
include('koneksi.php');

$kode=$_POST['kode'];
$judul=$_POST['judul'];
$genre=$_POST['genre'];
$type=$_POST['type'];
$harga=$_POST['harga'];
$status=$_POST['status'];

$query= "INSERT INTO tb_rental VALUES ('$kode','$judul','$genre','$type','$harga','$status')";
$simpan= mysqli_query($conn,$query);

header('location: tampil_rental.php')
 ?>