<?php 
       if(isset($_SESSION['login'])&&$_SESSION['login'][0]=="admin"){
      }else{
          header('location: login.php');
      }
?>