<?php 
include'view/nav.php';
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
 }else{
  include "view/home.php";
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Maps</title>
</head>

<body>
</body>

</html>