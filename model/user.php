<?php 
session_start();
ob_start();
    if((isset($_POST['login']))&&($_POST['login'])){
      $u = $_POST['username'];
      $p = $_POST['password'];
      $sql = "select * from user where username='$u' and password='$p' and role='0'";
      $rs = mysqli_query($conn,$sql);
      $object= array($u,$p);
      $_SESSION['login'] = $object;
      var_dump($_SESSION['login']);
      if(mysqli_num_rows($rs) > 0 ){
        if(isset($_SESSION['login'])){
        echo "<script>alert('Bạn đã đăng nhập');</script>";
        include 'view/home.php';
      }}else{
          unset($_SESSION['login']);
          header('location: login.php');
        }}
?>