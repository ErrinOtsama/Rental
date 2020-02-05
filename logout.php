<?php 
if (!isset($_SESSION)) {
	session_start();
}

$_SESSION['username']=NULL;
session_unset($_SESSION['username']);

session_destroy();
header("location: login.php");
 ?>