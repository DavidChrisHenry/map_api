<?php include'connect.php' ?>
<?php 
 if($conn->connect_error){
   die('Connect Failed :'.$conn->connect_error);
  }else{
   echo"<script language='javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyA7RR9q56mFM_0PJTKOR5m2yZD8aIltnEE&libraries=places'>
 </script>
 ";
 function checkuser($user,$pass){
  $stmt = $conn->prepare("SELECT * FROM user WHERE username='".$user."'AND password='".$pass."'");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq = $stmt->fetchAll();
  return $kq[0].['role'];
 }
  };
?>