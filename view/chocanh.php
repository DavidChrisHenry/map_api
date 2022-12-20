<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <style>
 .custom-table td,
 th {
  padding: 20px;
 }

 .custom-table {
  font-size: 20px;
  text-align: center;
 }

 .custom-muahang {
  padding: 10px;
  background-color: #80ff87;
 }

 .custom-muahang:hover {
  padding: 13px;
  background-color: #32fb3d;
 }

 .word {
  border: rgb(133, 0, 0) solid 10px;
  background-color: rgb(133, 0, 0);
 }
 </style>
</head>

<body>
 <div class="photocat">
  <img src="upload/img/cho-canh.jpg">
 </div>
 <div class="word">
  <h1 style="font-size: 130%; color:white; text-align: center ;">TRANG TRẠI CHÓ CẢNH</h1>
 </div>
 <!-- <div style="text-align:center">
  <h2>Chọn mặt hàng cần mua tho số thứ tự (1 - Cún con, 2 - Husky ...)</h2>
  <input type="text" id="number">
  <input type="submit" value="Đặt hàng" onclick="Insert();">
 </div> -->
 <?php 
include 'model/connect.php';
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
     <td><img src="<?=$row['img']?>" style="width:200px;height:200px"></td>
     <td><a href="model/muahang.php?id=<?php echo $row['id'] ?>"><input type="submit" value='Đặt hàng'><a>
     </td>
    </tr>

    </script>
    <?php $i++; endwhile;?>
   </tbody>
  </table>
 </div>
</body>

</html>