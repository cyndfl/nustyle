<?php
include("header.php");
?>

<body>

<div class="appoint">
</div>
<div class="appoint_overlay">
<p><b>SERVICES</b></p>
</div>

<!--SERVICES-->
<!--HAIR-->
 <section class="log_service">
 <div class="container">
          
<div class="log">
                
<a href="" data-toggle="modal" data-target="#logModal"><img src="assets/img/hair2.jpg" alt=""><b>HAIR</b></a>
            
</div>
>      

<!-- Modal -->
<div class="modal fade" id="logModal" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-dialog">
<div class="modal-content-Log">
<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4 class="modal-title"><b>NU STYLE SALON</b></h4>
</div>
  
<form>
<div class="form-group-uname">
<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="USERNAME">
</div>
<div class="form-group">
<input type="password" class="form-control" id="exampleInputPassword1" placeholder="PASSWORD">
</div>


<div class="button-log modal-footer">
<button type="button" class="btn btn-default col-md-4" data-dismiss="modal">SIGN IN</button>
</div>
</form>
                        
</div>
</div>
</div>
</div>
</div>

</section>

<!--REGISTER-->
 <section class="reg_service">
 <div class="container">
          
<div class="reg">
                
<a href="" data-toggle="modal" data-target="#regModal"><img src="assets/img/hair2.jpg" alt=""><b>HAIR</b></a>
            
</div>
>      

<!-- Modal -->
<div class="modal fade" id="regModal" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-dialog">
<div class="modal-content-Log">
<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4 class="modal-title"><b>NU STYLE SALON</b></h4>
</div>
  
<form>
<div class="form-group-fname">
<input type="text" class="form-control" id="exampleInputPassword1" placeholder="FULLNAME">
</div>
<div class="form-group">
<input type="text" class="form-control" id="exampleInputPassword1" placeholder="USERNAME">
</div>
<div class="form-group">
<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="EMAIL">
</div>
<div class="form-group">
<input type="password" class="form-control" id="exampleInputPassword1" placeholder="PASSWORD">
</div>

<div class="form-group">
<select class="form-control" id="sel1">
<option>GENDER</option>
<option>MALE</option>
<option>FEMALE</option>
</select>
</div>
<div class="form-group">
<input type="text" class="form-control" id="exampleInputPassword1" placeholder="ADDRESS">
</div>
<div class="form-group">
<input type="text" class="form-control" id="exampleInputPassword1" placeholder="CONTACT NUMBER">
</div>

<div class='input-group date' id='datepicker1'>
<input type='text' class="form-control" placeholder="MM/DD/YY"/>
<span class="input-group-addon">
<span class="glyphicon glyphicon-calendar"></span>
</span>
</div>
<div class="form-group-pos">
<select class="form-control" id="sel1">
<option>ADMIN</option>
<option>HAIRSTYLIST</option>
<option>RECEPTIONIST</option>
        
     
</select>
</div>


<div class="button-reg modal-footer">
<button type="button" class="btn btn-default col-md-4" data-dismiss="modal">SIGN UP</button>
<button type="button" class="btn btn-default col-md-3" data-dismiss="modal">CANCEL</button>

</div>
</form>
                        
</div>
</div>
</div>
</div>
</div>

</section>
</body>
<?php
include("footer-book.php");
?>
<?php
include("footer.php");
?>
