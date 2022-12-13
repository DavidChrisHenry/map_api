<?php
include 'connect.php';
$sql = "select username from user";
$rs = mysqli_query($conn,$sql);
?>