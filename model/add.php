<?php 
include '../model/connect.php';
if(isset($_POST['them'])&&($_POST['them'])){
 $id = $_POST['id'];
 $name = $_POST['name'];
 $price = $_POST['price'];
 $img = $_POST['img'];
 $sql = "INSERT INTO san_pham (id, name, price, img) VALUES (N'$id', N'$name',
 N'$price',N'$img')";
 $rs = $conn -> query($sql1);
 if($rs == TRUE){
  echo "<script>alert('Thêm sản phẩm thành công!')</script>";
 }else{
  echo "<script>alert('Thêm thất bại!')</script>";
 }
}
?>