<?php 
session_start();
ob_start();
if((isset($_SESSION['login']))){
 unset($_SESSION['login']);
}
header('location: login.php');
?>