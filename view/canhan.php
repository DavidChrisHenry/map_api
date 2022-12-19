<?php
// Kiểm tra xem biểu mẫu đã được gửi chưa
if($_SERVER["REQUEST_METHOD"] == "POST"){
     // Kiểm tra xem tệp đã được tải lên mà không có lỗi hay không
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
        $n = $_SESSION['login1'][0];
        // Xác minh phần mở rộng tệp
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Lỗi: Vui lòng chọn định dạng tệp hợp lệ.");
    
        // Xác minh kích thước tệp - tối đa 5MB
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Lỗi: Kích thước tệp lớn hơn giới hạn cho phép.");
        // Xác minh loại MIME của tệp
        if(in_array($filetype, $allowed)){
            // Kiểm tra xem tệp có tồn tại hay không trước khi tải lên
            if(file_exists("upload/avata/" . $filename)){
                echo "<script>alert('Cập nhật ảnh đại diện thành công!')</script>";
                include 'model/connect.php';
                $sql = "update user SET img = 'upload/avata/$filename' where username='$n'";
                mysqli_query($conn,$sql);
            } else{
				if(move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/avata/" . $filename)){ // có thể có lỗi
					echo "<script>alert('Cập nhật ảnh đại diện thành công!')</script>";
     include 'model/connect.php';
     $sql = "update user SET img = 'upload/avata/$filename' where username='$n'";
     mysqli_query($conn,$sql);
				}else{
					echo "<script>alert('Đã xảy ra lỗi!')</script>";
				}
            } 
        } else{
         echo "<script>alert('Đã xảy ra lỗi!')</script>";
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <style>
 </style>
</head>

<body>
 <h1>Cá Nhân</h1>
 <div style="display:grid; grid-template-columns:1fr 1fr;">
  <div style="margin-left:200px">
   <h2>Thông tin cá nhân</h2>
   <?php
echo "<b>Username is </b><a>" . $_SESSION['login1'][0] . "</a>.<br>";
?>
   <?php
echo "<b>Password is </b> <a>" . $_SESSION['login1'][1] . "</a>.<br>";
?>
  </div>
  <div style="margin-left:200px">
   <h2>Ảnh đại diện</h2>
   <?php 
 include 'model/connect.php';
 $n = $_SESSION['login1'][0];
$sql = "select img from user where username= '$n' ";
$rs = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($rs);
$r = $row['img'];
echo "<img src='$r' style='width:100px; height:100px'>";
?>
  </div>
 </div>
 <div style="margin-left:400px">
  <form action="" method="post" enctype="multipart/form-data">
   <h2> Tải ảnh đại diện </h2>
   <label for="fileSelect"> Tên tệp: </label>
   <input type="file" name="photo" id="fileSelect">
   <input type="submit" name="submit" value="Tải lên">
   <p> <strong> Lưu ý: </strong> Chỉ cho phép các định dạng .jpg, .jpeg, .gif, .png với kích thước tối đa là 5 MB.
   </p>
  </form>
 </div>
</body>

</html>