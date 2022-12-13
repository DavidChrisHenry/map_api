<?php 
       if(isset($_SESSION['login'])){
        echo "<script>alert('Bạn đã đăng nhập');</script>";
        include 'view/home.php';
      }else{
          header('location: login.php');
      }
?>