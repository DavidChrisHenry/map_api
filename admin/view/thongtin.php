<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Admin</title>
 <style>
 .custom-table-2 td,
 tr {
  padding: 2px !important;
  border: 1px solid;

 }

 table {
  border-collapse: collapse;
  width: 40%;
 }

 tr:hover {
  background-color: #04AA6D;
  color: #ffffff;
 }
 </style>
</head>

<body>
 <h1>Thông tin</h1>
 <h3>Thông tin tài khoản</h2>
  <?php
include '../model/connect.php'; 
?>
  <?php 
 $sql = "select username,password from user where username <> 'admin'";
 $result = mysqli_query($conn,$sql);
 ?>
  <div style="margin-left:30px;" class="custom-table-2">
   <table>
    <tbody>
     <tr>
      <td><b>Username</b></td>
      <td><b>Password</b></td>
     <tr>
      <?php while($row=mysqli_fetch_assoc($result)):?>
     <tr>
      <td><?=$row['username']?></td>
      <td><?php echo (md5($row['password']))?></td>
     </tr>
     <?php endwhile;?>
    </tbody>
   </table>
  </div>
  <h3>Thông tin đặt hàng</h3>
  <?php 
 $sql = "select * from mua_hang";
 $result = mysqli_query($conn,$sql);
 ?>
  <div style="margin-left:30px;">
   <table>
    <tbody class="custom-table-2">
     <tr>
      <td><b>ID</b></td>
      <td><b>Name</b></td>
      <td><b>Hash</b></td>
      <td><b>PrevHash</b></td>
      <td><b>Time</b></td>
     <tr>
      <?php while($row=mysqli_fetch_assoc($result)):?>
     <tr>
      <td><?=$row['id']?></td>
      <td><?=$row['username']?></td>
      <td><?=$row['hash']?></td>
      <td><?=$row['prevhash']?></td>
      <td><?=$row['time']?></td>
     </tr>
     <?php endwhile;?>
    </tbody>
   </table>
  </div>
</body>

</html>