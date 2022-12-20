<?php 
ob_start();
session_start();
if(isset($_GET['id'])&&($_GET['id'])){
 include 'connect.php';
 $name = $_SESSION['login1'][0]; 
 $id = $_GET['id']; 
 $sql = " select * from mua_hang where time=(select max(time) from mua_hang)";
 $result = mysqli_query($conn,$sql);
 $check = mysqli_fetch_array($result);
 $prevhash = $check['hash'];
 $hash = md5("$name + $id + $prevhash");
 $sql1 = "INSERT INTO mua_hang (username, id, hash, prevhash) VALUES (N'$name', N'$id',
 N'$hash',N'$prevhash')";
 $rs = $conn -> query($sql1);
 if($rs == TRUE){
  echo "<script>alert('Bạn đã đặt hàng thành công!')</script>";
 }else{
  echo "<script>alert('Bạn đã mua sản phẩm này rồi!')</script>";
 }}
?>