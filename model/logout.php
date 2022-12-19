<?php 
ob_start();
 unset($_SESSION['login1']);
 header('location: login.php');
?>