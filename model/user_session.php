<?php
if((isset($_POST['login']))&&($_POST['login'])){
 $u = $_POST['username'];
 $p = $_POST['password'];
 $object= array($u,$p);
 $_SESSION['login'] = $object;
 if(!(isset($_SESSION['login']))){
  unset($_SESSION['login']);
  echo "Bạn cần đăng nhập";
  include 'login.php';
 }
}
?>