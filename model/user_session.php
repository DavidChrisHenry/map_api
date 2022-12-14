<?php 
if((isset($_POST['login']))&&($_POST['login'])){
  $u = $_POST['username'];
  $p = $_POST['password'];
  $sql = "select * from user where username='$u' and password='$p' and role='0'";
  $rs = mysqli_query($conn,$sql);
  $object= array($u,$p);
  $_SESSION['login'] = $object;
  if(mysqli_num_rows($rs) > 0 ){
    $object= array($u,$p);
    $_SESSION['login'] = $object;
    echo("<script>alert('Bạn đã đăng nhập!')</script>");
  }else{ header('location: login.php');}
   }
?>