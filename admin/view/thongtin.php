<?php
include '../model/admin_query_user.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <style>
 table {
  border-collapse: collapse;
  width: 30%;
 }

 tr:hover {
  background-color: #04AA6D;
  color: #ffffff;
 }

 td {
  padding: 20px;
 }
 </style>
</head>

<body>
 <h1>Thông tin</h1>
 <h3>Thông tin tài khoản</h2>
  <?php 
 $sql = "select username from user where username <> 'admin'";
 $result = mysqli_query($conn,$sql);
 ?>
  <div style="margin-left:30px;">
   <table>
    <tbody>
     <tr>
      <td><b>Username</b></td>
      <td><b>Password</b></td>
     <tr>
      <?php while($row=mysqli_fetch_assoc($result)):?>
     <tr>
      <td><?=$row['username']?></td>
      <td><?=$row['username']?></td>
     </tr>
     <?php endwhile;?>
    </tbody>
   </table>
  </div>
  <h3>Thông tin tìm kiếm</h2>
   <?php 
 $sql = "select * from search";
 $result = mysqli_query($conn,$sql);
 ?>
   <div style="margin-left:30px;">
    <table>
     <tbody>
      <tr>
       <td><b>Username</b></td>
       <td><b>id Search</b></td>
       <td><b>From</b></td>
       <td><b>To</b></td>
       <td><b>Time</b></td>
       <td><b>Far</b></td>
      <tr>
       <?php while($row=mysqli_fetch_assoc($result)):?>
      <tr>
       <td><?=$row['username']?></td>
       <td><?=$row['id_search']?></td>
       <td><?=$row['from']?></td>
       <td><?=$row['to']?></td>
       <td><?=$row['time']?></td>
       <td><?=$row['far']?></td>
      </tr>
      <?php endwhile;?>
     </tbody>
    </table>
   </div>
</body>

</html>