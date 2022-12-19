<?php 
ob_start();
session_start();
include 'view/header.php';
include "controller/userController.php";
include "model/user.php";
?>
<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="shortcut icon" href="upload/favicon-16x16.png" type="image/png">
 <title>Petstore</title>
 <link href="view/css/doan.css" type="text/css" rel="stylesheet">
 <link href="view/css/gototop.css" type="text/css" rel="stylesheet">
</head>

<body>
</body>

</html>
<?php 
include 'view/footer.php';
?>