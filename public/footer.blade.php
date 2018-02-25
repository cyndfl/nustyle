<footer class="ftr">


    <div class="container">
        <div class="row">

            <!--LOGO-->
            <div class="col-md-3">
                <img class="ftr__logo" src="img/logo.png" alt="">

            </div>

            <!--HOURS-->
            <div class="footer_hours col-xs-6 col-sm-6">
                <div class="col-md-5">
                    <h3>BUSINESS HOURS</h3>
                    <div class="row">

                        <div class="menu_name col-md-12">
                            <p>MONDAY-SATURDAY: 9:30AM-8:30PM</p>
                            <p>SUNDAY: 10:00AM-8:30PM</p>
                        </div>

                    </div>
                </div>


                <div class="footer_location col-md-5">
                    <h3>LOCATION</h3>
                    <div class="row">

                        <div class="menu_name col-md-12">
                            <p>126E SDY BLDG, NATIONAL ROAD, BAYANAN, MUNTINLUPA CITY</p>
                        </div>

                    </div>
                </div>

            </div>


            <!--CONTACT-->
            <div class="footer_contact col-md-3">
                <h3>YOU CAN ALSO CONTACT US ON:</h3>
                <div class="col-md-12">
                    <div class="row">
                        <div class="menu_name col-md-6">
                            <p>MUNTINLUPA: 0917-568-2479</p>
                            <p>PARANAQUE: 0917-568-2631</p>
                        </div>


                        <div class="ftr_name col-md-6">
                            <p>CAVITE: 0917-568-2745</p>
                            <p>LAGUNA: 0917-854-8288</p>

                        </div>
                        <div class="ftr_email col-md-12">
                            <p>nustylecorp.salonspa@yahoo.com.ph</p>

                        </div>

                    </div>

                </div>


                <!--END-->

            </div>
        </div>


    </div>


</footer>



<!--SWIPER-->
<script src="js/swiper.min.js"></script> 
<script>
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      centeredSlides: true,
      slidesPerView: 'auto',
      touchRatio: 0.2,
      slideToClickedSlide: true,
    });
    galleryTop.controller.control = galleryThumbs;
    galleryThumbs.controller.control = galleryTop;
  </script>

<!--MODAL-->
<script>
    var span = document.getElementsByClassName("close")[0];
    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

</script>

<!--GOOGLE_MAP-->
<script>
function myMap() {
    
var mapProp= {
    center:new google.maps.LatLng(14.405989, 121.047074),
//    center:new google.maps.LatLng(14.589279,120.973635),
    zoom:17,
    mapTypeId:google.maps.MapTypeId.ROADMAP 
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:mapProp});
  marker.setMap(map); 
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6h4b1gEYmI8FORXP7D0gxt9M-4bFMVB0&callback=myMap"></script>

<!--COLLAPSE-->
<script>
   $(document).ready(function() {
       $('a[href*=#]').click(function() {
           if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
               location.hostname == this.hostname) {
               var $target = $(this.hash);
               $target = $target.length && $target ||
                   $('[name=' + this.hash.slice(1) + ']');
               if ($target.length) {
                   var targetOffset = $target.offset().top;
                   $('html,body')
                       .animate({
                           scrollTop: targetOffset
                       }, 1000);
                   return false;
               }
           }
       });
   });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!--DATEPICKER-->
   <script type="text/javascript">
            $(function () {
                $('#datepicker1').datepicker();
            });
        </script>