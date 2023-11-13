 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">

 .zoom2 {
  transition: transform .2s; /* Animation */
}

.zoom2:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
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
    max-height:110px;
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
.notify-badge{
    position: relative;
    z-index: 1;
    background: rgb(168 29 34);
    height:3rem;
    top:1rem;
    left:1.5rem;
    width:6rem;
    text-align: center;
    line-height: 2rem;;
    font-size: 1rem;
    border-radius: 50%;
    color:gold;
    font-weight: 600;
    padding: 5px;
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
 
  <form class="form-inline sticky" action="<?php echo base_url(); ?>property/propertylist" method="post">
    <div class="form-group">
      <select name="country" id="country"  class="form-control">
        <option value="">Select City</option>
        <?php
                    foreach($country as $row)
                    {
                     echo '<option value="'.$row->city.'">'.$row->city.'</option>';
                    }
                    ?>
      </select>
    </div>
    
    <div class="form-group">
      <select  name="location" id="state"  class="form-control">
        <option value="">Select Area</option>
      </select>
    </div>
    <div class="form-group">
      <select  class="form-control"  name="property_type"  id="size_select">
        <option value="">Property Type</option>
                    <option value="Apartments">Apartments</option>
                    <option value="Villas">Villas</option>
                    <option value="Plots">Plots</option>
                    <option value="Individual">Individual Houses</option>
      </select>
    </div>
     <div class="form-group">
      <select  class="form-control">
        <option value="">Rooms</option>
         <option value="1BHK">1BHK</option>
                      <option value="2BHK">2BHK</option>
                      <option value="3BHK">3BHK</option>
                      <option value="4BHK">4BHK</option>
      </select>
    </div>
    <div class="form-group">
      <select  class="form-control" name="price_from">
        <option value="">Budget From</option>
        <option value="100000">100000</option>
                     <option value="500000">500000</option>
                     <option value="1000000">1000000</option>
                     <option value="2000000">2000000</option>
      </select>
    </div>
   <div class="form-group">
      <select  class="form-control" name="price_to">
        <option value="">Budget To</option>
                    <option value="2500000">2500000</option>
                     <option value="5000000">5000000</option>
                     <option value="10000000">10000000</option>
                     <option value="20000000">20000000</option>
      </select>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="email" placeholder="Search by Project Name" name="search_property_name">
    </div>
    <button type="submit" class="btn btn-default" name="Search_property">Search</button>
  </form>
<br><br>
<br><br>
 <div id="lb-back">
  <div id="lb-img"></div>
</div>
<div class="col-md-12 pro_list" style="margin-top: 70px;">
  <div class="col-md-8" style="">
     <?php if(!empty($properties)){ foreach ($properties as $properties) { ?>
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="col-md-4">
            <?php if($properties['property_status'] == 'Sold out'){ ?>
                <div class="notify-badge">Sold out</div>
            <?php } ?>
           <img src="<?php echo base_url(); ?>uploads/images/<?php echo $properties['default_image']; ?>" class="zoom-img zoomD" style="width: 100%;height: 140px;border-radius: 5px;" alt="flats for sale in vizag"> <br>
           <span class="badge badge-primary" style="background-color: #8357d8;"><i class="fa fa-thumbs-o-up" style="color: #fff;"></i>    Featured</span>
           <span class="badge badge-success" style="background-color: #d52c2f;"><i class="fa fa-check" style="color: #fff;"></i>    Assured</span>
          </div>
         <div class="col-md-8">
          <h3 style="font-weight: 600;"><?php echo $properties['title'] ?></h3><p><?php echo $properties['area'] ?>, <?php echo $properties['city'] ?></p>
          <div class="col-md-7">
            <?php if($properties['property_status'] != 'Sold out'){ ?>
            <h5 style="font-weight: 600;">Rs. <?php echo $properties['min_price'] ?> to <?php echo $properties['max_price'] ?></h5>
          <?php }else{ ?>
            <h5 style="font-weight: 600;">Rs. -</h5>
         <?php  } ?>
          </div>

          <?php if($properties['property_status'] == '4 Months Possession'){
            $propery_status = 'Mid Stage';
          }else if($properties['property_status'] == '3 months possission'){
            $propery_status = 'Mid Stage';
          }else if($properties['property_status'] == 'READY TO MOVE'){
            $propery_status = 'Ready to Move';
          }else if($properties['property_status'] == 'Under Construction'){
            $propery_status = 'Under Construction';
          }
          else if($properties['property_status'] == 'Sold out'){
            $propery_status = 'Sold out';
          }else{
            $propery_status = $properties['property_status'];
          } ?>

          <div class="col-md-5">
            <h6><?php echo $propery_status; ?></h6>


          <?php if($properties['property_status'] == '4 Months Possession'){ ?>
               <div class="progress"> 
             <span style="width:75%;background: #43e457fc;"></span>
              </div>
         <?php  }else if($properties['property_status'] == '3 months possission'){ ?>
               <div class="progress"> 
             <span style="width:75%;background: #43e457fc;"></span>
              </div>
         <?php  }else if($properties['property_status'] == 'READY TO MOVE'){ ?>
               <div class="progress"> 
             <span style="width:100%;background: #e84b4b;"></span>
              </div>
         <?php  }else if($properties['property_status'] == 'Sold out'){ ?>
               <div class="progress"> 
             <span style="width:100%;background: #e84b4b8c;"></span>
              </div>
         <?php  }else if($properties['property_status'] == 'Under Construction'){ ?>
               <div class="progress"> 
             <span style="width:50%;background: #fbb344;"></span>
              </div>
         <?php  }else{ ?>
               <div class="progress"> 
             <span style="width:20%;background: #b3b3b3;"></span>
              </div>
         <?php  } ?>
        </div>
            

           
           <p><?php echo $properties['title'] ?> is property at <?php echo $properties['area'] ?> in <?php echo $properties['city'] ?> city... <a style="color: #5a6a6a;" href="<?php echo base_url('property/propertydetails/'); ?><?php echo $properties['id'] ?>">Read More</a></p>
           
          </div>
          <?php 
            $qry = $this->db->query("select p.*, pd.floor, pd.bhk, pd.availability, pd.facing, pd.flat_sqft, pd.undivide_share, pd.totalbuilding_sqyard, pd.price_sqft, pd.amitities, pd.project_status, pd.unit_sale_closedby from property as p join property_details as pd on p.id = pd.property_id where p.id = '".$properties["id"]."'");
            $property_details2 = $qry->result_array();
            ?>
             <?php if($properties['property_status'] != 'Sold out'){ ?>
             <div class="panel-body table-responsive" style="background-color: #f8efc9;">
            <table class="table table-striped" style="">
         
        <tbody>
       <?php foreach ($property_details2 as $property_details2) {
        ?>
        
            <div class="panel panel-danger col-md-6" style="border: 0px solid;padding: 10px;background-color: #f8efc9;">
              <div class="panel-heading zoom2" style="box-shadow: 5px 5px #27262357;background-color: #fff;    border-radius: 15px;"><b><?php echo $property_details2['bhk'].' '.$property_details2['flat_sqft']. ' Sq.Ft'; ?></b><span class="pull-right" style="color: #a81d22;">Rs.<?php echo $property_details2['price_sqft']; ?></span><h5 style="font-size:12px;"><?php echo $property_details2['floor']; ?> Floor (<?php echo $property_details2['facing']; ?> Facing)</h5></div>
             <!--  <div class="panel-body">Panel Content</div> -->
            </div>
        
       
         <?php } ?>
       </tbody>
          </table>
        </div><?php } ?><br>
         <?php if($properties['property_status'] != 'Sold out'){ ?>
          <div class="" style="float: right;">
          <a href="<?php echo base_url('property/propertydetails/'); ?><?php echo $properties['id'] ?>"><button class="btn btn-default">More Details</button></a>
            <a href="<?php echo base_url('contactus'); ?>"><button class="btn btn-success"><i class="fa fa-phone" aria-hidden="true" style="color: #fff;"></i> &nbsp;&nbsp;Get a Call Back</button></a>
         </div>
         <?php } ?>
        </div>
      </div>
          <?php }}else{
      echo '<div style="height:400px;">No Properties found.</div>';
     } ?>



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