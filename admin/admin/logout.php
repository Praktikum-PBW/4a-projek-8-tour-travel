<?php 
session_start();
session_destroy();
$_SESSION['error'] = "Anda telah keluar";
header("location:../signin.php");
?>