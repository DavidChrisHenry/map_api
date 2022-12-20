<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Admin</title>
 <link rel="stylesheet" href="css/custom-table.css">
</head>

<body>
 <h1>Quản lý sản phẩm</h1>
 <?php 
include '../model/connect.php';
 $sql = "select * from san_pham";
 $result = mysqli_query($conn,$sql);
 ?>
 <div style=" margin-left:350px;" class="custom-table">
  <table>
   <tbody>
    <tr>
     <td><b>Tên thú cưng</b></td>
     <td><b>Giá</b></td>
     <td><b>Hình ảnh</b></td>
    <tr>
     <?php 
    $i=1;
    while($row=mysqli_fetch_assoc($result)):?>
    <tr>
     <td><?=$row['name']?></td>
     <td><?=$row['price']?></td>
     <td><img src="../<?=$row['img']?>" style="width:200px;height:200px"></td>
     <td><a href="index.php?act=sua"><input type="submit" name="<?php echo($i) ?>" value='Sửa'></a></td>
     <td><a href="index.php?act=delete"><input type="submit" name="<?php echo($i) ?>" value='Xóa'></a></td>
    </tr>
    <?php $i++; endwhile;?>
   </tbody>
  </table>
  <div style="margin-left:300px; margin-top:30px">
   <a href="index.php?act=add"><input type="button" value="Thêm"></a>
  </div>
 </div>

</body>

</html>