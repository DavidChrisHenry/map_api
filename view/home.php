<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Home</title>
</head>



<body>
 <!-- ảnh trung tâm -->
 <section id="centerphoto">
  <div class="photo">
   <img src="upload/img/wallpaper/wallpaper_pug.jfif">
   <img src="upload/img/wallpaper/wallpaper1.jfif">
   <img src="upload/img/wallpaper/wallpaper2.jfif">
   <img src="upload/img/wallpaper/wallpaper3.jfif">
   <img src="upload/img/wallpaper/photo-1598134493179-51332e56807f.jfif">
  </div>



  <div>
   <div class="dot-container">
    <div class="dot active"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
   </div>

  </div>

 </section>

 <script>
 window.addEventListener("scroll", function() {})
 const imgPosition = document.querySelectorAll(".photo img")
 const imgContainer = document.querySelector(".photo")
 const dotItem = document.querySelectorAll(".dot")
 let imgNumber = imgPosition.length
 let index = 0

 //console.log(imgPosition)
 imgPosition.forEach(function(image, index) {
  image.style.left = index * 100 + "%"
  dotItem[index].addEventListener("click", function() {
   photo(index)
  })
 })


 function imgSlide() {
  index++;
  console.log(index)
  if (index >= imgNumber) {
   index = 0
  }
  photo(index)
 }


 function photo(index) {
  imgContainer.style.left = "-" + index * 100 + "%"
  const dotActive = document.querySelector('.active')
  dotActive.classList.remove("active")
  dotItem[index].classList.add("active")
 }

 setInterval(imgSlide, 5000)
 </script>



 <!------------------------------------- -trang trại chó cảnh-------------------------------- -->



 <div class="section-title-center-dog">

  <h3 class="title-center-dog">

   <a href="" style="font-size: 130%; color: azure;">TRANG TRẠI CHÓ CẢNH <i class="fas fa-caret-right"></i></span>

  </h3>

 </div>

 <section class="section" id="dog-title-picture">

  <div class="row row-full-width">

   <div class="col medium-6">

    <div id="imagecorgi">

     <a class="" target="_blank" rel="noopener noreferrer">

      <img width="1920" height="721" src="upload/img/wallpaper/corgi.jpg" title="Chó Corgi"
       class="attachment-original size-original" alt="corgi" loading="lazy"
       srcset="upload\img\wallpaper\corgi.jpg 1920w, upload\img\wallpaper\corgi-300x113.png 300w, upload\img\wallpaper\corgi-1024x385.png 1024w, upload\img\wallpaper\corgi-768x288.png 768w, upload\img\wallpaper\corgi-1536-577.png 1536w, upload\img\wallpaper\corgi-510x192192.png 510w"
       sizes="(max-width: 1920px) 100vw, 1920px">

     </a>

    </div>

   </div>

   <div class="col medium-6">

    <div id="imagephocsoc">

     <a class="">

      <img width="1920" height="721" src="upload/img/wallpaper/phocsoc.jpg" title="Chó phốc sóc"
       class="attachment-original size-original" alt="phocsoc" loading="lazy"
       srcset="upload\img\wallpaper\phocsoc.jpg 1920w, upload\img\wallpaper\phocsoc-300x113.png 300w, upload\img\wallpaper\phocsoc-1024x385.png 1024w, upload\img\wallpaper\phocsoc-768x288.png 768w, upload\img\wallpaper\phocsoc-1536x577.png 1536w, upload\img\wallpaper\phocsoc-510x192.png 510w"
       sizes="(max-width: 1920px) 100vw, 1920px">

     </a>

    </div>

   </div>

   <div id="col" class="col medium-4">

    <div id="imagepoodle">

     <a class="" target="_blank" rel="noopener noreferrer">

      <img width="1920" height="721" src="upload/img/wallpaper/poodle.jpg" title="Chó Poodle"
       class="attachment-original size-original" alt="poodle" loading="lazy"
       srcset="upload\img\wallpaper\poodle.jpg 1920w, upload\img\wallpaper\poodle-300x113.jpg 300w, upload\img\wallpaper\poodle-1024x385.jpg 1024w, upload\img\wallpaper\poodle-768x288.jpg 768w, upload\img\wallpaper\poodle-1536-577.jpg 1536w, upload\img\wallpaper\poodle-510x192.jpg 510w"
       sizes="(max-width: 1920px) 100vw, 1920px">

     </a>

    </div>

   </div>

   <div id="col" class="col medium-4">

    <div id="imagebull">

     <a class="">

      <img width="1920" height="721" src="upload/img/wallpaper/bull.png" title="Chó Bull"
       class="attachment-original size-original" alt="bull" loading="lazy"
       srcset="upload\img\wallpaper\bull.png 1920w, upload\img\wallpaper\bull-300x113.png 300w, upload\img\wallpaper\bull-1024x385.png 1024w, upload\img\wallpaper\bull-768x288.png 768w, upload\img\wallpaper\bull-1536x577.png 1536w, upload\img\wallpaper\bull-510x192.png 510w"
       sizes="(max-width: 1920px) 100vw, 1920px">

     </a>

    </div>

   </div>

   <div id="col" class="col medium-4 small-6 large-4">

    <div id="imagechowchow">

     <a class="">

      <img width="1920" height="721" src="upload/img/wallpaper/chowchow.jpg" title="Chó Chow Chow"
       class="attachment-original size-original" alt="chowchow" loading="lazy"
       srcset="upload\img\wallpaper\chowchow.jpg 1920w, upload\img\wallpaper\chowchow-300x113.jpg 300w, upload\img\wallpaper\chowchow-1024x385.jpg 1024w, upload\img\wallpaper\chowchow-768x288.jpg 768w, upload\img\wallpaper\chowchow-1536x577.jpg 1536w, upload\img\wallpaper\chowchow-510x192.jpg 510w"
       sizes="(max-width: 1920px) 100vw, 1920px">

     </a>

    </div>

   </div>

  </div>

 </section>



 <section id="dog">



  <div class="section-dog-cat">

   <div class="picture">

    <a href="">

     <img src="upload/img/dog/alaska.png" alt="alaska">

    </a>

    <div class="desc">ALASKA</div>

   </div>

  </div>



  <div class="section-dog-cat">

   <div class="picture">

    <a href="">

     <img src="upload/img/dog/golden.png" alt="Golden">

    </a>

    <div class="desc">GOLDEN</div>

   </div>

  </div>



  <div class="section-dog-cat">

   <div class="picture">

    <a href="">

     <img src="upload/img/dog/husky.png" alt="Husky">

    </a>

    <div class="desc">HUSKY</div>

   </div>

  </div>



  <div class="section-dog-cat">

   <div class="picture">

    <a href="">

     <img src="upload/img/dog/shiba.png" title="Chó Shiba" alt="shiba">

    </a>

    <div class="desc">SHIBA</div>

   </div>

  </div>



  <div class="section-dog-cat">

   <div class="picture">

    <a href="">

     <img src="upload/img/dog/pug.png" title="Chó Pug" alt="pug">

    </a>

    <div class="desc">PUG</div>

   </div>

  </div>



  <div class="clearfix"></div>



 </section>



 <!------------------------------------- -trang trại mèo cảnh-------------------------------- -->



 <div class="section-title-center-cat">

  <h3 class="title-center-cat">

   <a href="" style="font-size: 130%; color: azure;">TRANG TRẠI MÈO CẢNH <i class="fas fa-caret-right"></i></a>

  </h3>

 </div>



 <section id="catcenterphoto">

  <div class="photocat">

   <img src="upload/img/wallpaper/home-picture-cat-1.jpg">

   <img src="upload/img/wallpaper/home-picture-cat-2.jpg">

   <img src="upload/img/wallpaper/home-picture-cat-3.jpg">

   <img src="upload/img/wallpaper/home-picture-cat-4.jpg">

  </div>

  <div>

   <div class="dot-containercat">

    <div class="dotcat activecat"></div>

    <div class="dotcat"></div>

    <div class="dotcat"></div>

    <div class="dotcat"></div>

   </div>

  </div>

 </section>



 <script>
 const imgPositioncat = document.querySelectorAll(".photocat img")

 const imgContainercat = document.querySelector(".photocat")

 const dotItemcat = document.querySelectorAll(".dotcat")

 let imgNumbercat = imgPositioncat.length

 let indexcat = 0



 imgPositioncat.forEach(function(image, indexcat) {

  image.style.left = indexcat * 100 + "%"

  dotItemcat[indexcat].addEventListener("click", function() {

   photocat(indexcat)

  })

 })



 function imgSlidecat() {

  indexcat++;

  console.log(indexcat)

  if (indexcat >= imgNumbercat) {

   indexcat = 0

  }

  photocat(indexcat)

 }



 function photocat(indexcat) {

  imgContainercat.style.left = "-" + indexcat * 100 + "%"

  const dotActivecat = document.querySelector('.activecat')

  dotActivecat.classList.remove("activecat")

  dotItemcat[indexcat].classList.add("activecat")

 }

 setInterval(imgSlidecat, 4000)
 </script>



 <section id="cat">

  <div class="section-dog-cat">

   <div class="picture">

    <a href="">

     <img src="upload/img/cat/meo-anh-long-ngan.png" alt="meoanhlongngan">

    </a>

    <div class="desc">MÈO ANH</div>

   </div>

  </div>



  <div class="section-dog-cat">

   <div class="picture">

    <a href="">

     <img src="upload/img/cat/maincoon.png" alt="maincoon">

    </a>

    <div class="desc">MAINCOON</div>

   </div>

  </div>



  <div class="section-dog-cat">

   <div class="picture">

    <a href="">

     <img src="upload/img/cat/meo-xiem.png" alt="meoxiem">

    </a>

    <div class="desc">MÈO XIÊM</div>

   </div>

  </div>



  <div class="section-dog-cat">

   <div class="picture">

    <a href="">

     <img src="upload/img/cat/Scottish-gold.png" alt="Scottishgold">

    </a>

    <div class="desc">SCOTTISH GOLD</div>

   </div>

  </div>



  <div class="section-dog-cat">

   <div class="picture">

    <a href="">

     <img src="upload/img/cat/meo-ba-tu.png" alt="meobatu">

    </a>

    <div class="desc">MÈO BA TƯ</div>

   </div>

  </div>

 </section>

</body>



</html>