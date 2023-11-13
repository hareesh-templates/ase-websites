 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    color: #fff;
    cursor: default;
    background-color: orange;
    border: 1px solid #ddd;
    border-bottom-color: transparent;
}
 
  #lb-back {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background: rgba(0, 0, 0, 0.5);
  z-index: 999;
  visibility: hidden;
  opacity: 0;
  transition: all ease 0.4s;
}
#lb-back.show {
  visibility: visible;
  opacity: 1;
}

/* [LIGHTBOX IMAGE] */
#lb-img {
  position: relative;
  top: 50%;
  transform: translateY(-50%);
  text-align: center;
}
#lb-img img {
    width: 700px!important;
    height: 700px!important;
    top: -350px!important;
    margin-left: 280px!important;
    left: 0px;
    display: block;
    position: absolute;
    max-width: 10000px;
    z-index: 1;
}
  </style>
  <style type="text/css">
@media screen and (min-width:320px) and (max-width: 359px)
{
    #lb-img img {

   display: none!important;
   }
   #lb-back {
display: none!important;
   }
 div.stickys 
 {
  display: none;
 }
    .sticky 
    {
      height:0px!important;
      margin-top:0px;
      top:0px!important;
      padding:0px!important;
      position: relative!important;
    }
.header_in
{
  position: relative!important;
}
.form-control
{
  float:left;
  width:50%;
}
.pro_list
{
  margin-top:110px!important;
}
.table-responsive{
  max-height: fit-content!important;
  margin-bottom: 0px!important;
}
}
@media screen and (min-width:481px) and (max-width: 570px)
{
    #lb-img img {

   display: none!important;
   }
   #lb-back {
display: none!important;
   }
 div.stickys 
 {
  display: none;
 }
    .sticky 
    {
      height:0px!important;
      margin-top:0px;
      top:0px!important;
      padding:0px!important;
      position: relative!important;
    }
.header_in
{
  position: relative!important;
}
.form-control
{
  float:left;
  width:50%;
}

.table-responsive{
  max-height: fit-content!important;
  margin-bottom: 0px!important;
}
}









@media screen and (min-width:360px) and (max-width: 480px)
{
    #lb-img img {

   display: none!important;
   }
   #lb-back {
display: none!important;
   }
 div.stickys 
 {
  display: none;
 }
    .sticky 
    {
      height:0px!important;
      margin-top:0px;
      top:0px!important;
      padding:0px!important;
      position: relative!important;
    }
.header_in
{
  position: relative!important;
}
.form-control
{
  float:left;
  width:50%;
}

.table-responsive{
  max-height: fit-content!important;
  margin-bottom: 0px!important;
}
}


    .form-inline{
      text-align: center;
    }
 div.stickys {
    top: 21%;
    left: 65%;
    position: fixed;
    
    }
    .sticky {
   height: 60px;
    background-color: #fff;
    position: fixed;
    top: 65px;
    z-index: 1;
    padding: 15px;
    }
    .header_in{
    position: fixed;
    top: 0px;
    z-index: 999;
    }
    .btn-success {
    color: #fff;
    background-color: #a81d22;
}
footer{
  position: absolute;
}
.table-responsive {
    max-height:100px;
}
.progress {
    margin-top: 5px;
    width: 180px;
    display: block;
    height: 6px;
    background: #dedede;
    border-radius: 5px;
    overflow: hidden;
    position: relative;
}

.progress span {
    width: 20%;
    height: 6px;
    background: #ffb100;
    position: absolute;
    top: 0;
    left: 0;
    border-radius: 5px;
}
  </style>

<br>
  <div class="banner" style="display: none;">
      <div class="master-slider ms-skin-black-2 round-skin" id="masterslider">
        <!-- <div class="ms-slide slide-1" style="z-index: 10" data-delay="6"> <img src="images/blank.gif" data-src="<?php echo base_url(); ?>/assets/images/slider/2.jpg" alt="flats for sale in vizag"/>
          <div class="maskDiv"></div>
        </div> -->
        <div class="ms-slide slide-1" style="z-index: 10" data-delay="6"> <img src="images/blank.gif" data-src="<?php echo base_url(); ?>/assets/images/slider/4.jpg" alt="flats for sale in vizag"/>
          <div class="maskDiv"></div>
        </div>
        <div class="ms-slide slide-1" style="z-index: 10" data-delay="6"> <img src="images/blank.gif" data-src="<?php echo base_url(); ?>/assets/images/slider/1.jpg" alt="flats for sale in vizag"/>
          <div class="maskDiv"></div>
        </div>
      </div>
    </div>
    <!-- /banner --><div class="container">
 
 
<br><br>
<br><br>
 <div id="lb-back">
  <div id="lb-img"></div>
</div>
<div class="col-md-12  pro_list" style="margin-top: 70px;">



  <div class="col-md-12" style="">


      <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"><b>Events</b></a></li>
    <li><a data-toggle="tab" href="#menu1"><b>Celebrations</b></a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
           <?php if(!empty($properties)){ foreach ($properties as $properties) { ?>
      <div class="panel panel-default col-md-8">
        <div class="panel-body">
          <div class="col-md-4">
           <img src="<?php echo base_url(); ?>uploads/events/<?php echo $properties['default_image']; ?>" alt="flats for sale in vizag" class="zoom-img zoomD" style="width: 100%;height: 147px;border-radius: 5px;"> 
          </div>
         <div class="col-md-8">
          <h3 style="color: #fcaf37;font-family: 'FontAwesome';"><?php echo $properties['title'] ?></h3><p><?php echo $properties['area'] ?></p>
            <h5 style="font-weight: 600;"><?php echo $properties['event_date'] ?></h5>
           <p><?php echo $properties['content'] ?></p>
           
          </div>
         
          <div class="" style="float: right;">
          <a href="<?php echo base_url('event/eventdetails/'); ?><?php echo $properties['id'] ?>"><button class="btn btn-success">Gallery</button></a>
           
         </div>
        </div>
      </div>
          <?php }}else{
      echo '<div style="height:400px;">No Events found.</div>';
     } ?>
    </div>
    <div id="menu1" class="tab-pane fade">
      <?php if(!empty($celebrations)){ foreach ($celebrations as $celebrations) { ?>
      <div class="panel panel-default col-md-8">
        <div class="panel-body">
          <div class="col-md-4">
           <img src="<?php echo base_url(); ?>uploads/events/<?php echo $celebrations['default_image']; ?>" alt="flats for sale in vizag" class="zoom-img zoomD" style="width: 100%;height: 147px;border-radius: 5px;"> 
          </div>
         <div class="col-md-8">
          <h3 style="color: #fcaf37;font-family: 'FontAwesome';"><?php echo $celebrations['title'] ?></h3><p><?php echo $celebrations['area'] ?></p>
            <h5 style="font-weight: 600;"><?php echo $celebrations['event_date'] ?></h5>
           <p><?php echo $celebrations['content'] ?></p>
           
          </div>
         
          <div class="" style="float: right;">
          <a href="<?php echo base_url('event/eventdetails/'); ?><?php echo $celebrations['id'] ?>"><button class="btn btn-success">Gallery</button></a>
           
         </div>
        </div>
      </div>
          <?php }}else{
      echo '<div style="height:400px;">No Events found.</div>';
     } ?>
    </div>
  </div>



  </div>
  <div class="col-md-4 stickys" style="">
  
            <?php 
        if(!empty($success_msg)){ ?>
          <div class="alert alert-success">
          <?php   echo $success_msg; ?></div>
        <?php }elseif(!empty($error_msg)){ ?>
          <div class="alert alert-success">
          <?php  echo $error_msg; ?></div>
       <?php }
    ?>

    <div class="panel panel-default">
  <div class="panel-heading"><h4>Contact our Real Estate Experts</h4></div>
  <div class="panel-body">
    <form method="post" action="" class="form1">
      <div class="form-group">
        <input type="text" class="form-control" id="email" placeholder="Enter Name" name="name">
        <?php echo form_error('name','<p class="msg2 help-block text-danger">','</p>'); ?>
      </div>
      <div class="form-group">
        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
         <?php echo form_error('email','<p class="msg2 help-block text-danger">','</p>'); ?>
      </div>
       <div class="form-group">
        <input type="text" class="form-control" id="email" placeholder="Enter Mobile" name="phno">
         <?php echo form_error('phno','<p class="msg2 help-block text-danger">','</p>'); ?>
      </div>
      <div class="form-group">
        <textarea class="form-control" id="email" placeholder="Enter Content" name="content"></textarea>
      </div>
       <button type="submit" class="btn btn-success" name="postSubmit" value="Get a Call Back"><i class="fa fa-phone" aria-hidden="true" style="color: #fff;"></i> &nbsp;&nbsp;Get a Call Back</button>
    </form>
  </div>

</div>

  
  </div>

  </div>

</div>

<br>

<script>
$(document).ready(function(){
 $('#country').change(function(){
  var country_id = $('#country').val();
  if(country_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>home/fetch_state",
    method:"POST",
    data:{country_id:country_id},
    success:function(data)
    {
     $('#state').html(data);
     $('#city').html('<option value="">Select City</option>');
    }
   });
  }
  else
  {
   $('#state').html('<option value="">Select City</option>');
   $('#city').html('<option value="">Select Area</option>');
  }
 });


 
});
</script>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
  <script type="text/javascript">
      var zoomImg = function () {
  // Create evil image clone
  var clone = this.cloneNode();
  clone.classList.remove("zoomD");

  // Put evil clone into lightbox
  var lb = document.getElementById("lb-img");
  lb.innerHTML = "";
  lb.appendChild(clone);

  // Show lightbox
  lb = document.getElementById("lb-back");
  lb.classList.add("show");
};

window.addEventListener("load", function(){
  // Attach on click events to all .zoomD images
  var images = document.getElementsByClassName("zoomD");
  if (images.length>0) {
    for (var img of images) {
      img.addEventListener("click", zoomImg);
    }
  }

  // Click event to hide the lightbox
  document.getElementById("lb-back").addEventListener("click", function(){
    this.classList.remove("show");
  })
});
    </script>