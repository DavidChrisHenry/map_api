<?php 
//chuyen trang
if(isset($_GET['act'])&&($_GET['act']))
switch ($_GET['act']){
 case 'street':
  include "view/street2point.php";
  break; 
  case 'home':
   include "view/home.php";
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
    include 'model/connect.php';
    include 'model/user.php';
   break;
   case 'logout':
    include 'model/logout.php';
   break;
}
//login
?>