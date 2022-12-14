<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>
 <h1>Hello</h1>
 <?php
echo "<b>Username is </b>" . $_SESSION['login'][0] . ".<br>";
?>
 <?php
echo "<b>Password is </b>" . $_SESSION['login'][1] . ".<br>";
?>
</body>

</html>