<?php 
//chuyen trang
if(isset($_GET['act'])&&($_GET['act']))
switch ($_GET['act']){
 case 'street':
  include "view/street2point.php";
  break; 
 case 'lienhe':
  include "view/lienhe.php";
  break; case 'info':
   include "view/thongtin.php";
   break; 
   case 'point':
   include "view/timdiadiem.php";
   break;
   case 'login':
    include'model/connect.php';
    include'model/user.php';
    if((isset($_POST['login']))&&($_POST['login'])){
    $u = $_POST['username'];
    $p = $_POST['password'];
    $sql = "select * from user where username='$u' and password='$p' and role='0'";
    $rs = mysqli_query($conn,$sql);
    if(mysqli_num_rows($rs) > 0 ){
     echo "<script>alert('Bạn đã đăng nhập!');</script>";
      header('../view/home.php');
    }else{  
      echo "<script>alert('Không tồn tại người dùng!');</script>";
      header('../login.php');
    }}
   break;
   case 'logout':
    session_start();
    ob_start();
    if((isset($_SESSION['login']))){
     unset($_SESSION['login']);
    }
    header('location:login.php');
   break;
}
//login
?>