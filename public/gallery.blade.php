<?php
include("header.blade.php");
?>

<div class="gal_pic">
</div>


<div class="gal_overlay">
    <p><b>GALLERY</b></p>
</div>

<div class="container">
<div class="gallery_page">

  <div class="swiper-container gallery-top">
    <div class="swiper-wrapper">
           <div class="swiper-slide" style="background-image:url(img/cavite.jpg)">
            </div>
            <div class="swiper-slide" style="background-image:url(img/munti.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(img/laguna.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(img/p.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(img/n.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(img/f.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(img/r.jpg)"></div>
    </div>
<!--     Add Arrows -->
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
    
    
    
</div>
<div class="swiper-container gallery-thumbs">
    <div class="swiper-wrapper item active">
            <div class="swiper-slide" style="background-image:url(img/cavite.jpg)">
            </div>
            <div class="swiper-slide" style="background-image:url(img/munti.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(img/laguna.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(img/p.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(img/n.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(img/f.jpg)"></div>
            <div class="swiper-slide" style="background-image:url(img/r.jpg)"></div>
    </div>
</div>
  
</div>
    
</div>

<?php
include("footer-book.blade.php");
?>
<?php
include("footer.blade.php");
?>