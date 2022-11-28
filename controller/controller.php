<?php 
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
}else{
 include "view/home.php";
}
?>