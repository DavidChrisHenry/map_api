<?php include'../controller/adminController.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Admin Login</title>
 <link href="../Content/bootstrap.min.css" rel="stylesheet" />
 <link href="view/app.css" type="css">
 <link href="../Content/bootstrap.min.css" rel="stylesheet" />
 <link rel="icon" type="image/x-icon" href="../upload/favicon_admin.ico">
</head>

<body>
 <h5 class="card-title mb-5 fw-light fs-5">Admin Login</h5>
 <form action="index.php?act=login" method="post">
  <input type="text" placeholder="username" name="username">
  <input type="text" placeholder="password" name="password">
  <input type="submit" value="Đăng nhập" name="login">
 </form>
</body>

</html>