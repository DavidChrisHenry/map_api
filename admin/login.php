<?php 
include "../controller/adminController.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Admin Login</title>
 <link href="view/css/form-login.css" type="css" rel="stylesheet">
 <link href="../content/bootstrap.min.css" rel="stylesheet">
 <link rel="icon" type="image/x-icon" href="../upload/avata/admin.png">

</head>

<body>
 <script>
 $(document).ready(function() {
  // DOM ready

  // Test data
  /*
   * To test the script you should discomment the function
   * testLocalStorageData and refresh the page. The function
   * will load some test data and the loadProfile
   * will do the changes in the UI
   */
  // testLocalStorageData();
  // Load profile if it exits
  loadProfile();
 });

 /**
  * Function that gets the data of the profile in case
  * thar it has already saved in localstorage. Only the
  * UI will be update in case that all data is available
  *
  * A not existing key in localstorage return null
  *
  */
 function getLocalProfile(callback) {
  var profileImgSrc = localStorage.getItem("PROFILE_IMG_SRC");
  var profileName = localStorage.getItem("PROFILE_NAME");
  var profileReAuthEmail = localStorage.getItem("PROFILE_REAUTH_EMAIL");

  if (profileName !== null &&
   profileReAuthEmail !== null &&
   profileImgSrc !== null) {
   callback(profileImgSrc, profileName, profileReAuthEmail);
  }
 }

 /**
  * Main function that load the profile if exists
  * in localstorage
  */
 function loadProfile() {
  if (!supportsHTML5Storage()) {
   return false;
  }
  // we have to provide to the callback the basic
  // information to set the profile
  getLocalProfile(function(profileImgSrc, profileName, profileReAuthEmail) {
   //changes in the UI
   $("#profile-img").attr("src", profileImgSrc);
   $("#profile-name").html(profileName);
   $("#reauth-email").html(profileReAuthEmail);
   $("#inputEmail").hide();
   $("#remember").hide();
  });
 }

 /**
  * function that checks if the browser supports HTML5
  * local storage
  *
  * @returns {boolean}
  */
 function supportsHTML5Storage() {
  try {
   return 'localStorage' in window && window['localStorage'] !== null;
  } catch (e) {
   return false;
  }
 }

 /**
  * Test data. This data will be safe by the web app
  * in the first successful login of a auth user.
  * To Test the scripts, delete the localstorage data
  * and comment this call.
  *
  * @returns {boolean}
  */
 function testLocalStorageData() {
  if (!supportsHTML5Storage()) {
   return false;
  }
  localStorage.setItem("PROFILE_IMG_SRC",
   "//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120");
  localStorage.setItem("PROFILE_NAME", "César Izquierdo Tello");
  localStorage.setItem("PROFILE_REAUTH_EMAIL", "oneaccount@gmail.com");
 }
 </script>
 <!-- <h5 class="card-title text-center mb-5 fw-light fs-5">User Login</h5>
 <form action="index.php?act=login" method="post">
  <input type="text" placeholder="username" name="username">
  <input type="text" placeholder="password" name="password">
  <input type="submit" value="Đăng nhập" name="login1">
 </form> -->
 <div class="container" style="width:30%;margin-top:100px">
  <div class="card card-container">
   <div style="text-align:center">
    <img id="profile-img" class="profile-img-card" src="../upload/avata/admin.png" />
   </div>
   <p id="profile-name" class="profile-name-card"></p>
   <form class="form-signin" action="index.php?act=login" method="post">
    <span id="reauth-email" class="reauth-email"></span>
    <input type="text" name="username" class="form-control" placeholder="Username" autofocus require
     style="margin-bottom:5px">
    <input type="password" name="password" class="form-control" placeholder="Password" require>
    <div id="remember" class="checkbox">
    </div>
    <input class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="login" value="LOGIN">
   </form><!-- /form -->
  </div><!-- /card-container -->
 </div><!-- /container -->
</body>

</html>