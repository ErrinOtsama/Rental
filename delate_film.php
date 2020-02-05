<?php
include ('koneksi.php');

$kode=$_GET['kode'];

$query="DELETE FROM tb_rental WHERE kode = '$kode' ";
$data= mysqli_query($conn,$query); 


header('location: tampil_rental.php')
?>