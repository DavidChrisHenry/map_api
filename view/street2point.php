<!DOCTYPE html>
<html>

<head>
 <meta charset="utf-8" />
 <title>Tìm đường đi giữa 2 thành phố</title>
 <link href="../Content/bootstrap.min.css" rel="stylesheet" />
 <link rel="preconnect" href="https://fonts.gstatic.com" />
 <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
 <link href="view/css/App.css" rel="stylesheet" />

</head>

<body>
 <div class="jumbotron">
  <div class="container-fluid">
   <h1>Tìm kiếm đường đi</h1>
   <p>Tìm đường đi ngắn nhất và tính toán thời gian.</p>
   <div class="custom-dropdown">
    <select class="form-select" id="choose-trans" aria-label="Default select example">
     <option selected value="DRIVING">Ô tô, Xe máy</option>
     <option value="WALKING">Đi bộ</option>
     <option value="BYCYCLING">Xe đạp</option>
     <option value="TRANSIT">Quá cảnh</option>
    </select>
   </div>
   <form class="form-horizontal">
    <div class="form-group">
     <label for="from" class="col-xs-2 control-label"><i class="far fa-dot-circle"></i></label>
     <div class="col-xs-4">
      <input type="text" id="from" name="from" placeholder="Xuất phát" class="form-control" />
     </div>
    </div>
    <div class="form-group">
     <label for="to" class="col-xs-2 control-label"><i class="fas fa-map-marker-alt"></i></label>
     <div class="col-xs-4">
      <input type="text" id="to" name="to" placeholder="Đích" class="form-control" />
     </div>
    </div>
   </form>
   <div class="col-xs-offset-2 col-xs-10">
    <button type="submit" name="submit" class="btn btn-info btn-lg" onclick="calcRoute();">
     <i class="fas fa-map-signs"></i>
    </button>
   </div>
  </div>
  <div class="container-fluid">
   <div id="googleMap"></div>
   <div id="output"></div>
  </div>
 </div>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

 </script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed 
 -->
 <script src="Scripts/jquery-3.1.1.min.js"></script>
 <script src="view/js/Main.js"></script>
</body>

</html>