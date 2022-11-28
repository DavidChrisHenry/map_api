<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="Content/bootstrap.min.css" rel="stylesheet" />
 <link rel="preconnect" href="https://fonts.gstatic.com" />
 <script src="https://kit.fontawesome.com/ab2155e76b.js" crossorigin="anonymous"></script>
 <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
 <link href="App.css" rel="stylesheet" />
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <title>Maps</title>
</head>

<body>
 <nav class="navbar navbar-default">
  <div class="container-fluid">
   <!-- Brand and toggle get grouped for better mobile display -->
   <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
     data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
     <span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">HOME</a>
   </div>

   <!-- Collect the nav links, forms, and other content for toggling -->
   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
     <li class="active"><a href="index.php?act=info">Thông tin <span class="sr-only">(current)</span></a></li>
     <li class="dropdown">
      <a href="index.php?act=caret" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
       aria-expanded="false">Công cụ <span class="caret"></span></a>
      <ul class="dropdown-menu">
       <li><a href="index.php?act=street">Tìm đường đi</a></li>
       <li role="separator" class="divider"></li>
       <li><a href="index.php?act=point">Tìm địa điểm</a></li>
      </ul>
     </li>
    </ul>
    <form class="navbar-form navbar-left">
     <div class="form-group">
      <input type="text" class="form-control" placeholder="Search">
     </div>
     <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
     <li><a href="index.php?act=lienhe">Liên hệ</a></li>
     <li class="dropdown">
      <a href="index.php?act=them" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
       aria-expanded="false">Thêm <span class="caret"></span></a>
      <ul class="dropdown-menu">
       <li><a href="index.php?act=logout">Đăng xuất</a></li>
       <li><a href="index.php?act=setting">Cài đặt</a></li>
       <li><a href="index.php?act=huongdan">Hướng dẫn</a></li>
      </ul>
     </li>
    </ul>
   </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
 </nav>
</body>

</html>