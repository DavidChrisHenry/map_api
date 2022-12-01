<?php 
//chuyen trang
if(isset($_GET['act'])&&($_GET['act']))
switch ($_GET['act']){
 case 'admin':
  include "view/home.php";
  break;
 case 'lienhe':
  include "view/lienhe.php";
  break; case 'info':
   include "view/thongtin.php";
   break; 
   case 'login':
    include '../model/connect.php';
    include '../model/admin.php';
   break;
   case 'logout':
    include '../model/admin_logout.php';
   break;
}
   include '../model/admin_session.php';
// login
?>