<?php 
session_start();
$_SESSION['admin_logged_in']=$eid;  
header('location:../index.php'); 
?>