<?php 
 function checkuser($user,$pass){
  $conn = new mysqli('localhost','root','','map_api');
  $stmt = $conn->prepare("SELECT * FROM user WHERE username='".$user."'AND password='".$pass."'");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq = $stmt->fetchAll();
  return $kq[0].['role'];
 }
?>