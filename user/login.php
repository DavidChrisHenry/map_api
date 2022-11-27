<?php 
session_start();
ob_start();
      include'../model/user.php';
      include'../model/connect.php';
 if((isset($_POST['signin']))&&($_POST['signin'])){
  $user=$_POST['username'];
  $user=$_POST['password'];
  $role=checkuser($user,$pass);
  $_SESSION['role']=$role;
  if($role==0) {header('index.php');
  }
  else header('login.php');
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
 <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
 <form>
  <input type="text" placeholder="username" name="username">
  <input type="text" placeholder="username" name="password">
  <input type="submit" value="Đăng nhập" name="signin">
  <script>
  console.log('username')
  </script>
 </form>
</body>

</html>