<?php 
 function checkuser($user,$pass){
  $conn = new mysqli('localhost','root','','map_api');
  $sql = "SELECT * FROM user WHERE username='".$user."'AND password='".$pass."'";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $row=mysqli_fetch_assoc($stmt);
  $kq = $stmt->fetchAll();
  return $kq[0].['role'];
 }
?>