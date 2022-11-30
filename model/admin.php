<?php 
    if((isset($_POST['login']))&&($_POST['login'])){
      $u = $_POST['username'];
      $p = $_POST['password'];
      $sql = "select * from user where username='$u' and password='$p' and role='1'";
      $rs = mysqli_query($conn,$sql);
      $data = mysqli_fetch_assoc($rs);
      if(mysqli_num_rows($rs) > 0 ){
        echo "<script>alert('Bạn đang đăng nhập với tư cách Admin!');</script>";
        include 'view/home.php';
      }else{
        echo "<script>alert('Tên người dùng không tồn tại');</script>";
        session_start();
         ob_start();
         if((isset($_SESSION['login']))){
          unset($_SESSION['login']);
         }
          include 'login.php';
        }}
        
?>