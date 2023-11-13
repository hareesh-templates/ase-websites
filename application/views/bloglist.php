 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">

 
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
.pro_list
{
  margin-top:110px!important;
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
.pro_list
{
  margin-top:110px!important;
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
.sec-title h2 {
    position: relative;
    font-size: 36px;
    font-weight: 700;
    color: #1a1d1f;
    line-height: 1.2em;
    padding-bottom: 20px;
    display: inline-block;
}
.sec-title.centered .separator {
    margin: 0 auto;
}
.sec-title .separator {
    position: relative;
    width: 50px;
    height: 4px;
}
.sec-title .separator:before {
    position: absolute;
    content: '';
    left: 0px;
    top: 0px;
    width: 25px;
    height: 4px;
    background-color: #1a1d1f;
}
.sec-title .separator:after {
    position: absolute;
    content: '';
    right: 0px;
    top: 0px;
    width: 25px;
    height: 4px;
    background-color: #dc292e;
}
.sec-title.centered {
    text-align: center;
    margin-top:20px;
    margin-bottom:30px;
}
  </style>

<br>
  <div class="banner" style="display: none;">
      <div class="master-slider ms-skin-black-2 round-skin" id="masterslider">
        <!-- <div class="ms-slide slide-1" style="z-index: 10" data-delay="6"> <img src="images/blank.gif" data-src="<?php echo base_url(); ?>/assets/images/slider/2.jpg" alt="buy a house"/>
          <div class="maskDiv"></div>
        </div> -->
        <div class="ms-slide slide-1" style="z-index: 10" data-delay="6"> <img src="images/blank.gif" data-src="<?php echo base_url(); ?>/assets/images/slider/4.jpg" alt="buy a house"/>
          <div class="maskDiv"></div>
        </div>
        <div class="ms-slide slide-1" style="z-index: 10" data-delay="6"> <img src="images/blank.gif" data-src="<?php echo base_url(); ?>/assets/images/slider/1.jpg" alt="buy a house"/>
          <div class="maskDiv"></div>
        </div>
      </div>
    </div>

    <!-- /banner --><div class="container">
 

 <div id="lb-back">
  <div id="lb-img"></div>
</div>
 <div class="sec-title centered" style="margin-top: 40px;">
<h2 style="text-align: center;">Latest Blogs </h2>
<div class="separator"></div>
                        </div>
<div class="col-md-12  pro_list" style="">

      

  <div class="col-md-12 row" style="">
     <?php if(!empty($properties)){ foreach ($properties as $properties) { ?>
      <div class="panel panel-default col-md-4" style="height: 520px;">
        <div class="panel-body">
          <div class="col-md-12">
          <a href="<?php echo base_url('blog/blogdetails/'); ?><?php echo $properties['key_url'] ?>"> <img src="<?php echo base_url(); ?>uploads/blogs/<?php echo $properties['default_image']; ?>" alt="buy a house" class="zoom-img" style="width: 100%;height: 200px;border-radius: 5px;"></a> 
          </div>
         <div class="col-md-12">
          <h3 style="color: #fcaf37;font-family: 'FontAwesome';"><?php echo substr($properties['title'],0,44) ?></h3><p><?php echo $properties['area'] ?></p>
            <h5 style="font-weight: 600;"><?php echo $properties['event_date'] ?></h5>
           <p><?php echo substr($properties['content'],0,100); ?></p>
           
          </div>
         
          <div class="" style="float: right;">
          <a href="<?php echo base_url('blog/blogdetails/'); ?><?php echo $properties['key_url'] ?>"><button class="btn btn-success">Continue Reading...</button></a>
           
         </div>
        </div>
      </div>
     
          <?php }}else{
      echo '<div style="height:400px;">No Blogs found.</div>';
     } ?>



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