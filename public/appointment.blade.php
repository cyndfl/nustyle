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
 <section class="hair_service">
 <div class="container">
          
<div class="hair">
                
<a href="" data-toggle="modal" data-target="#hairModal"><img src="assets/img/hair2.jpg" alt=""><b>HAIR</b></a>
            
</div>
>      

<!-- Modal -->
<div class="modal fade" id="hairModal" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-dialog">
<div class="modal-content1">
<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h4 class="modal-title"><b>APPOINTMENT FORM</b></h4>
</div>
<div class="modal-body">
<form>
<div class="form-group">
<label>APPOINTMENT DATE</label>
 
<div class='input-group date' id='datepicker1'>
<input type='text' class="form-control" placeholder="MM/DD/YY"/>
<span class="input-group-addon">
<span class="glyphicon glyphicon-calendar"></span>
</span>
</div>
    
 
</div>
<div class="form-group">
<label for="sel1">APPOINTMENT TIME</label>
<select class="form-control" id="sel1" placeholder="MM/DD/YY" >
        <option>SELECT TIME</option>
       <option>09:30 AM</option>
        <option>10:30 AM</option>
        <option>11:30 AM</option>
        <option>12:30 PM</option>
        <option>01:30 PM</option>
        <option>02:30 PM</option>
        <option>03:30 PM</option>
        <option>04:30 PM</option>
        <option>05:30 PM</option>
        <option>06:30 PM</option>
        <option>07:30 PM</option>
 </select>
</div>
<div class="form-group">
<label>HAIRSTYLIST</label>
<select class="form-control" id="sel1" placeholder="CHOOSE HAIRSTYLIST">
        <option>CHOOSE HAIRSTYLIST</option>
       <option>EDGARDO MAGPAYO</option>
        <option>MARIFE CABIGON</option>
        <option>LEONIDA HERNACIO</option>
        <option>ELSIE VARGAS</option>
     
</select>
</div>
 
<div class="form-group">
<label>SERVICE</label>
 <select class="form-control" id="sel1" placeholder="SERVICE">
        <option>SERVICE</option>
        <option>HAIRCUT</option>
        <option>HOTOIL</option>
        <option>HAIRSPA</option>
        <option>HAIR REVITALIZE</option>
        <option>INTENSIVE TREATMENT</option>
        <option>SEMIDELINO (1 VIAL)</option>
        <option>SEMIDELINO (2 VIAL)</option>
        <option>CELLOPHANE</option>
         <option>HAIR DYE</option>
        <option>HIGHLIGHTS</option>
        <option>PERMING</option>
        <option>HAIR RELAX + KERATIN</option>
        <option>HAIR RELAX + CELLOPHANE</option>
</select>
</div>
</form>

<div class="form-group">
<label for="exampleFormControlTextarea1">ADDITIONAL INFO (optional)</label>
<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="COMMENTS, REQUESTS, ETC."></textarea>
</div>
   
<div class="modal-header">
<h4 class="modal-title"><b>CUSTOMER'S INFORMATION</b></h4>
</div>   
<form>
<div class="form-group">
<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NAME">
</div>
<div class="form-group">
<input type="password" class="form-control" id="exampleInputPassword1" placeholder="EMAIL-ADDRESS">
</div>
<div class="form-group">
<input type="password" class="form-control" id="exampleInputPassword1" placeholder="MOBILE NUMBER">
</div>
<div class="form-group">
<select class="form-control" id="sel1">
<option>GENDER</option>
<option>MALE</option>
<option>FEMALE</option>
        
     
</select>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default col-md-4" data-dismiss="modal">BOOK  NOW</button>
<button type="button" class="btn btn-default col-md-3" data-dismiss="modal">CANCEL</button>
</div>
</form>
                        
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!--HAND,FOOT&NAILS-->
  <section class="foot_service">
        <div class="container">
          
            <div class="foot">
                
                <a href="" data-toggle="modal" data-target="#footModal"><img src="assets/img/hand&foot.jpg" alt=""><b>HAND, FOOT AND NAILS</b></a>
            
            </div>
            

            <!-- Modal -->
            <div class="modal fade" id="footModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-dialog">
                        <div class="modal-content2">
                            <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title"><b>APPOINTMENT FORM</b></h4>
                            </div>
                            <div class="modal-body">
                                <form>
  <div class="form-group">
    <label>APPOINTMENT DATE</label>
 
   <div class='input-group date' id='datepicker1'>
 <input type='text' class="form-control" placeholder="MM/DD/YY"/>
  <span class="input-group-addon">
  <span class="glyphicon glyphicon-calendar"></span>
</span>
</div>
    
 
  </div>
  <div class="form-group">
   <label for="sel1">APPOINTMENT TIME</label>
      <select class="form-control" id="sel1" placeholder="MM/DD/YY" >
        <option>SELECT TIME</option>
       <option>09:30 AM</option>
        <option>10:30 AM</option>
        <option>11:30 AM</option>
        <option>12:30 PM</option>
        <option>01:30 PM</option>
        <option>02:30 PM</option>
        <option>03:30 PM</option>
        <option>04:30 PM</option>
        <option>05:30 PM</option>
        <option>06:30 PM</option>
        <option>07:30 PM</option>
      </select>
      </div>

 
  <div class="form-group">
    <label>SERVICE</label>
     <select class="form-control" id="sel1" placeholder="SERVICE">
        <option>SERVICE</option>
       <option>MANICURE</option>
        <option>PEDICURE</option>
        <option>FOOT SPA</option>
        <option>FOOT PARAPHIN</option>
     <option>FOOT MASSAGE</option>
        <option>HAND PARAPHIN</option>
      </select>
  </div>
</form>

<div class="form-group">
    <label for="exampleFormControlTextarea1">ADDITIONAL INFO (optional)</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="COMMENTS, REQUESTS, ETC."></textarea>
  </div>
   
 <div class="modal-header">
 <h4 class="modal-title"><b>CUSTOMER'S INFORMATION</b></h4>
 </div>   
 <form>
  <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NAME">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="EMAIL-ADDRESS">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="MOBILE NUMBER">
  </div>
   <div class="form-group">
     <select class="form-control" id="sel1">
        <option>GENDER</option>
       <option>MALE</option>
        <option>FEMALE</option>
        
     
      </select>
  </div>
  <div class="modal-footer">
<button type="button" class="btn btn-default col-md-4" data-dismiss="modal">BOOK  NOW</button>
<button type="button" class="btn btn-default col-md-3" data-dismiss="modal">CANCEL</button>
</div>
</form>



                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

<!--BODY-->
  <section class="body_service">
        <div class="container">
          
            <div class="body">
                
                <a href="" data-toggle="modal" data-target="#bodyModal"><img src="assets/img/body.jpg" alt=""><b>BODY</b></a>
            
            </div>
            

            <!-- Modal -->
            <div class="modal fade" id="bodyModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-dialog">
                        <div class="modal-content3">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title"><b>APPOINTMENT FORM</b></h4>
                            </div>
                            <div class="modal-body">
                                <form>
  <div class="form-group">
    <label>APPOINTMENT DATE</label>
 
   <div class='input-group date' id='datepicker1'>
 <input type='text' class="form-control" placeholder="MM/DD/YY"/>
  <span class="input-group-addon">
  <span class="glyphicon glyphicon-calendar"></span>
</span>
</div>
    
 
  </div>
  <div class="form-group">
   <label for="sel1">APPOINTMENT TIME</label>
      <select class="form-control" id="sel1" placeholder="MM/DD/YY" >
        <option>SELECT TIME</option>
       <option>09:30 AM</option>
        <option>10:30 AM</option>
        <option>11:30 AM</option>
        <option>12:30 PM</option>
        <option>01:30 PM</option>
        <option>02:30 PM</option>
        <option>03:30 PM</option>
        <option>04:30 PM</option>
        <option>05:30 PM</option>
        <option>06:30 PM</option>
        <option>07:30 PM</option>
      </select>
      </div>

 
  <div class="form-group">
    <label>SERVICE</label>
     <select class="form-control" id="sel1" placeholder="SERVICE">
        <option>SERVICE</option>
       <option>BODY MASSAGE</option>
        <option>BODY SCRUB</option>
        <option>BODY MASSAGE + BODY SCRUB</option>
      </select>
  </div>
</form>

<div class="form-group">
    <label for="exampleFormControlTextarea1">ADDITIONAL INFO (optional)</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="COMMENTS, REQUESTS, ETC."></textarea>
  </div>
   
 <div class="modal-header">
 <h4 class="modal-title"><b>CUSTOMER'S INFORMATION</b></h4>
 </div>   
 <form>
  <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NAME">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="EMAIL-ADDRESS">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="MOBILE NUMBER">
  </div>
   <div class="form-group">
     <select class="form-control" id="sel1">
        <option>GENDER</option>
       <option>MALE</option>
        <option>FEMALE</option>
        
     
      </select>
  </div>
  <div class="modal-footer">
<button type="button" class="btn btn-default col-md-4" data-dismiss="modal">BOOK  NOW</button>
<button type="button" class="btn btn-default col-md-3" data-dismiss="modal">CANCEL</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
 </div>
</section>

<!--FACE-->
  <section class="face_service">
        <div class="container">
          
            <div class="face">
                
                <a href="" data-toggle="modal" data-target="#faceModal"><img src="assets/img/face.jpg" alt=""><b>FACE</b></a>
            
            </div>
            

            <!-- Modal -->
            <div class="modal fade" id="faceModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-dialog">
                        <div class="modal-content4">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title"><b>APPOINTMENT FORM</b></h4>
                            </div>
                            <div class="modal-body">
                                <form>
  <div class="form-group">
    <label>APPOINTMENT DATE</label>
 
   <div class='input-group date' id='datepicker1'>
 <input type='text' class="form-control" placeholder="MM/DD/YY"/>
  <span class="input-group-addon">
  <span class="glyphicon glyphicon-calendar"></span>
</span>
</div>
    
 
  </div>
  <div class="form-group">
   <label for="sel1">APPOINTMENT TIME</label>
      <select class="form-control" id="sel1" placeholder="MM/DD/YY" >
        <option>SELECT TIME</option>
       <option>09:30 AM</option>
        <option>10:30 AM</option>
        <option>11:30 AM</option>
        <option>12:30 PM</option>
        <option>01:30 PM</option>
        <option>02:30 PM</option>
        <option>03:30 PM</option>
        <option>04:30 PM</option>
        <option>05:30 PM</option>
        <option>06:30 PM</option>
        <option>07:30 PM</option>
      </select>
      </div>

 
  <div class="form-group">
    <label>SERVICE</label>
     <select class="form-control" id="sel1" placeholder="SERVICE">
        <option>SERVICE</option>
       <option>FACIAL</option>
      </select>
  </div>
</form>

<div class="form-group">
    <label for="exampleFormControlTextarea1">ADDITIONAL INFO (optional)</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="COMMENTS, REQUESTS, ETC."></textarea>
  </div>
   
 <div class="modal-header">
 <h4 class="modal-title"><b>CUSTOMER'S INFORMATION</b></h4>
 </div>   
 <form>
  <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NAME">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="EMAIL-ADDRESS">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="MOBILE NUMBER">
  </div>
   <div class="form-group">
     <select class="form-control" id="sel1">
        <option>GENDER</option>
       <option>MALE</option>
        <option>FEMALE</option>
        
     
      </select>
  </div>
  <div class="modal-footer">
<button type="button" class="btn btn-default col-md-4" data-dismiss="modal">BOOK  NOW</button>
<button type="button" class="btn btn-default col-md-3" data-dismiss="modal">CANCEL</button>
</div>
</form>
</div>
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
