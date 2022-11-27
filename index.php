<?php 
include'view/nav.php';
if(isset($_GET['act'])){
 switch ($_GET['act']){
  case 'street':
   $kq=getalldm();
   include "street2point.php";
 }
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