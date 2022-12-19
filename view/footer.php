<!DOCTYPE html>
<html lang="en">

<body>
 <footer>
  <div class="footerphoto">
   <img style="height: 230px;width: 1021px;" src="upload/img/footerphoto.png">
  </div>
  <section id="sectionfooter">
   <div class="footertitle">
    <div>
     <h4>VỀ CHÚNG TÔI</h4>
     <ul>
      <li><a href="">GIỚI THIỆU</a></li>
      <li><a href="">CỬA HÀNG PHỤ KIỆN</a></li>
     </ul>
    </div>
    <div>
     <h4>HỖ TRỢ KHÁCH HÀNG</h4>
     <ul>
      <li><a href="">HƯỚNG DẪN MUA HÀNG</a></li>
      <li><a href="">CHÍNH SÁCH BẢO HÀNH</a></li>
      <li><a href="">MUA TRẢ GÓP 0%</a></li>
     </ul>
    </div>
    <div>
     <h4>THÔNG TIN LIÊN HỆ</h4>
     <ul>
      <li><a href=""><i class="fas fa-map-marker-alt"></i> KP6, LINH TRUNG, THỦ ĐỨC, TP HCM</a></li>
      <li><a href=""><i class="far fa-phone-alt"></i> Tư vấn mua: <span style="color: #e26e02;"><a
          style="color: #e26e02;" href="tel:0123456789">0123 456 789</a></span></a></li>
     </ul>
    </div>
    <div>
     <h4><b></b><span style="font-size:90%;color:rgb(255, 130, 14);">ĐƯỜNG ĐẾN PET STORE</span><b></b></h4>
     <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1903.343433065643!2d106.80230080187484!3d10.870012150562223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527587e9ad5bf%3A0xafa66f9c8be3c91!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiDEkEhRRyBUUC5IQ00!5e0!3m2!1svi!2s!4v1634649457242!5m2!1svi!2s"
      width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
   </div>
  </section>

 </footer>
 <div class="gototop" id="gototop">
  <a href="javascript:;" onclick="goToTop()"><img class="mui_ten" src="upload/img/mui-ten.png"></a>
 </div>
 <script>
 window.onscroll = function() {
  var gototop = document.getElementById("gototop");
  if (document.documentElement.scrollTop > 100 || document.body.scrollTop > 100) {
   gototop.style.display = "block";
  } else {
   gototop.style.display = "none";
  }
 }

 function goToTop() {
  var timer = setInterval(function() {
   document.documentElement.scrollTop -= 15;

   if (document.documentElement.scrollTop <= 0)
    clearInterval(timer)
  }, 1)
 }
 </script>
</body>

</html>