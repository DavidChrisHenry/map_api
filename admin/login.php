<?php
session_start();
ob_start();
include'../model/connect.php';
include'../model/user.php';
if((isset($_POST['signin']))&&($_POST['signin'])){
 $user=$_POST['username'];
 $pass=$_POST['password'];
 $role=checkuser($user,$pass);
 $_SESSION['role']=$role;
 if($role==1) header('location:index.php');
 else header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>login admin</title>
 <link href="../Content/bootstrap.min.css" rel="stylesheet" />
 <link href="view/app.css" type="css">
 <link href="../Content/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
 <h5 class="card-title mb-5 fw-light fs-5">Admin Login</h5>
 <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <input type="text" placeholder="username" name="username">
  <input type="text" placeholder="username" name="password">
  <input type="submit" value="Đăng nhập" name="signin">
 </form>
</body>

</html>