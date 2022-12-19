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
 </style>
</head>

<body>
 <h1>Giỏ hàng</h1>
 <?php include 'model/connect.php';
 $n = $_SESSION['login1'][0];
 $sql = "select san_pham.name, san_pham.price, san_pham.img, mua_hang.time from san_pham, mua_hang where ((san_pham.id = mua_hang.id) and(mua_hang.username = '$n') )" ;
 $rs = mysqli_query($conn,$sql);?>
 <div style="margin-left:350px;" class="custom-table">
  <table>
   <tbody>
    <tr>
     <td><b>Tên thú cưng</b></td>
     <td><b>Giá</b></td>
     <td><b>Hình ảnh</b></td>
     <td><b>Thời gian đặt hàng</b></td>
    <tr>
     <?php 
    while($row=mysqli_fetch_assoc($rs)):?>
    <tr>
     <td><?=$row['name']?></td>
     <td><?=$row['price']?></td>
     <td><img src="<?=$row['img']?>" style="width:200px;height:200px"></td>
     <td><?=$row['time']?></td>
    </tr>
    <?php endwhile;?>
   </tbody>
  </table>
 </div>
</body>

</html>