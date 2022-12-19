<?php 
//chuyen trang
if(isset($_GET['act'])&&($_GET['act']))
switch ($_GET['act']){
 case 'chocanh':
  include "view/chocanh.php";
  break; 
  case 'home':
   include "view/home.php";
  break;
  case 'meocanh':
    include "view/meocanh.php";
   break;
 case 'canhan':
  include "view/canhan.php";
  break;
 case 'lienhe':
  include "view/lienhe.php";
  break; case 'gioithieu':
   include "view/gioithieu.php";
   break; 
   case 'login':
    include 'model/connect.php';
    include 'model/user_session.php';
   break;
   case 'logout':
    include 'model/logout.php';
   break;
    case 'setting':
      include 'view/setting.php';
    break;
    // case 'muahang':
    //   include 'model/muahang.php';
    //    include 'view/chocanh.php';
    //   break;
    case 'chuongnem':
      include 'view/chuongnem.php';
      break;
      case 'daydan':
        include 'view/daydan.php';
        break;
      case 'giohang':
        include 'view/giohang.php';
        break;
}
//login
?>