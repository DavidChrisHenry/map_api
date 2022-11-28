<?php include'view/nav.php'?>
<?php 
if(isset($_GET['act'])&&($_GET['act']))
switch ($_GET['act']){
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
 <link href="view/app.css" type="css">
 <link href="../Content/bootstrap.min.css" rel="stylesheet" />
 <title>Admin</title>
</head>

<body>
</body>

</html>