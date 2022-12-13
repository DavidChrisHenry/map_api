<?php 
session_start();
       if(isset($_SESSION['login'])){
        echo "<script>alert('Bạn đã đang đăng nhập với tư cách admin');</script>";
        include 'view/home.php';
      }else{
          header('location: login.php');
      }
?>