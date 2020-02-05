<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "rental";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>