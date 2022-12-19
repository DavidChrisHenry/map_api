<?php 
include "controller/userController.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>User Login</title>
 <link href="../Content/bootstrap.min.css" rel="stylesheet" />
 <link href="view/app.css" type="css">
 <link href="../Content/bootstrap.min.css" rel="stylesheet" />
 <link rel="icon" type="image/x-icon" href="upload/img/PS_paw_logo_48f63a06-e9cf-4e19-a8f5-91c93a764bf5_32x32.png">
</head>

<body>
 <h5 class="card-title text-center mb-5 fw-light fs-5">User Login</h5>
 <form action="index.php?act=login" method="post">
  <input type="text" placeholder="username" name="username">
  <input type="text" placeholder="password" name="password">
  <input type="submit" value="Đăng nhập" name="login1">
 </form>
</body>

</html>