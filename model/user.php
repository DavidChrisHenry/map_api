<?php 
ob_start();
include 'connect.php';
       if(isset($_SESSION['login1'])){
      }else{
          header('location: login.php');
      }
?>