<?php 
function checkuser($user,$pass){
if((isset($_POST['login']))&&($_POST['login'])){
 $u = $_POST[$user];
 $p = $_POST[$pass];
 $sql = "select * from user where username='$u' and password='$p' and role='1'";
 $rs = mysqli_query($conn,$sql);
 if(mysqli_num_rows($rs) > 0 ){
   echo "<script>alert('Bạn đã đăng nhập với tư cách Admin!');</script>";
   header('../view/home.php');
 }else{  
   echo "<script>alert('Không tồn tại người dùng!');</script>";
   header('../login.php');
 }}}
?>