<?php
include("header.blade.php");
?>
<!DOCTYPE html>
<html>
<head>
   <style>
       @media only screen and (min-width: 1400px) {
.blockquote-wel{
    margin-left: 620px;
}
.blockquote-news{
    margin-left: 660px;
}
div.btn_welcome a{
    margin-left: 70px;
}
div.services img{
width: 450px;
margin-left: 36px;
}
div.products img{
width: 450px;
margin-left: 20px;
}
div.style img{
width: 450px;
margin-left: 3px;
}
div.services b{
padding-left: 35px;
}
div.products b{
padding-left: 20px;
}
div.style b{
padding-left: 115px;
}
       }
   </style>
</head>


<meta name="viewport" content="width=device-width, initial-scale=1.0">

<section class="hero">
    <div class="container">
        <div class="HeaderText">

            <h1><b>NU STYLE SALON</b></h1>
            <p>One stop shop for hair, nail and body care. In our salons, we are committed to give our clients wonderful salon experience at very affordable prices.</p>
            <div class="row">

            </div>
        </div>
    </div>
</section>
<div class="btn">
    <a class="btn-default" href="booking">BOOK AN APPOINTMENT</a>
</div>

<!--WELCOME-->
<section class="welcome">
    <blockquote class="blockquote-wel">
    </blockquote>
    <h1><b>WELCOME</b></h1>
    <p>In our salons, we are committed to give our clients wonderful salon experience at very affordable prices.<br>Nu Style Salon's first and main branch is in Muntinlupa, followed by Paranaque, Cavite and Laguna. </p>

    <div class="btn_welcome">
        <a class="btn-default" href="about.blade.php">READ MORE</a>
    </div>

</section>

<!--SERVICES_STYLIST_PRODUCTS-->
<section class="pics">
    <div class="pictures">


<!--SERVICES-->
        <div class="services col-md-4">
            <a href="services.blade.php"><img src="img/services.jpg" alt=""><b>SERVICES</b></a>
</div>
<!--PRODUCTS-->
        <div class="products col-md-4">
            <a href="" data-toggle="modal" data-target="#myModalProd"><img src="img/product.jpg" alt=""><b>PRODUCTS</b></a>

        </div>

<!--MODAL-PRODUCTS -->
        <div class="modal fade" id="myModalProd" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 class="modal-title"><b>OUR PRODUCTS</b></h3>
                        </div>
                        <div class="modal-body">
                            <p>Finding a stylist is a little like finding a date; you have to find who is right for you</p>


                            <div class="row">
                                <div class="card col-md-6">
                                    <img src="img/prod.gif" alt="">

                                    <h4><b>KERATIN SHAMPOO</b></h4>
                                    <p>PRICE: 150</p>
                                    <h5>Keratin is a protein that occurs naturally in the body, not only in hair, but also in skin and nails. Made by cells called keratinocytes, it is made up of amino acids. The exact level of these amino acids is what makes the substance hard, as in an animal hoof, or soft and pliable, as in hair.</h5>
                                </div>
                                <div class="card col-md-6">
                                    <img src="img/prod2.gif" alt="">

                                    <h4><b>KERATIN SHINE</b></h4>
                                    <p>PRICE: 150</p>
                                    <h5>Nu Style's Hair shine product will help restore moisture to dry and damaged hair. In turn making it shiny and healthy again.<br><br><br><br><br><br></h5>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="style">

            <a href="" data-toggle="modal" data-target="#myModal"><img src="img/stylist.jpg" alt=""><b>STYLIST</b></a>

        </div>

<!-- MODAL-STYLIST -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3 class="modal-title"><b>KNOW YOUR STYLIST</b></h3>
                        </div>
                        <div class="modal-body">
                            <p>Finding a stylist is a little like finding a date; you have to find who is right for you</p>


                            <div class="row">
                                <div class="card col-md-6">
                                    <img src="img/stylist5.jpg" alt="">

                                    <h4><b>EDGARDO MAGPAYO</b></h4>
                                    <p>Day Off: Wednesday</p>
                                    <p>Branch: Muntinlupa</p>
                                </div>
                                <div class="card col-md-6">
                                    <img src="img/stylist2.jpg" alt="">

                                    <h4><b>MARIFE CABIGON</b></h4>
                                    <p>Day Off: Thursday</p>
                                    <p>Branch: Muntinlupa</p>

                                </div>
                            </div>
                            <div class="row">
                                <div class="card col-md-6">
                                    <img src="img/stylist1.jpg" alt="">

                                    <h4><b>LEONIDA HERNACIO</b></h4>
                                    <p>Day Off: Thursday</p>
                                    <p>Branch: Muntinlupa</p>

                                </div>
                                <div class="card col-md-6">
                                    <img src="img/stylist6.jpg" alt="">

                                    <h4><b>ELSIE VARGAS</b></h4>
                                    <p>Day Off: Wednesday</p>
                                    <p>Branch: Muntinlupa</p>

                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>


<!--NEWS-->
<section class="news">
    <blockquote class="blockquote-news">
    </blockquote>
    <h1><b>NEWS</b></h1>

    <div class="news1 col-md-4">
        <h3><b>JANUARY 12, 2018</b></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, minus.</p>
    </div>
    <div class="news2 col-md-4">
        <h3><b>FEBRUARY 14, 2018</b></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, itaque.</p>
    </div>
    <div class="news3 col-md-4" style="float: right;">
        <h3><b>FEBRUARY 28, 2018</b></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, ea.</p>
    </div>


    <div class="news4 col-md-4" style="float: right;">
        <h3><b>MARCH 15, 2018</b></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, minus.</p>
    </div>
    <div class="news5 col-md-4" style="float: left;">
        <h3><b>MARCH 27, 2018</b></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, itaque.</p>
    </div>
    <div class="news6 col-md-4">
        <h3><b>MARCH 30, 2018</b></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, ea.</p>
    </div>

</section>


<?php
include("footer-book.blade.php");
?>

<?php
include("footer.blade.php");
?>
</html>