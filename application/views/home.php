<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  .servives_top{
      width: 1000px;
      border-radius: 10px;
      margin-top: -100px;
      margin-left: 5%;
       background-color: #f3f1ec99;

    }
    .servives_top_serv a{
      color: #fff;
      text-decoration: none;
    }
    .servives_top_serv h4{
      font-size: 12px;
      color: #4a0609;
    }
   
   .servives_top_serv {
    padding: 5px;
  transition: transform .5s ease;
}
.servives_top_serv:hover img {
  transform: scale(1.5);
}
.latestblog_a {
  display: inline-block;
  font-size: 15px;
  font-weight: 600;
      font-size: 17px;
    line-height: 18px;
    color: #555;
    padding-bottom: 4px;
    font-family: 'Roboto', sans-serif;
}
.marquees:hover span {
  animation-play-state: paused;
}
   .topprojets_h3{
    font-size: 30.5px;
    line-height: 30px;
  }
  .topprojects_P{
    line-height: 18px;
    color: #747474;
  }
  .topprojects_p_p{
        font-family: ui-serif;
        margin-top: 5px;
        font-size: 16.5px;
        font-weight: 600;
  }
  .topprojects_div img{
    width: 100%;
    height: 300px;
    border-radius: 10px;
}
    .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    border-radius: 20px;
    color: #fff;
    cursor: default;
    background-color: #ca2429;
    border: 1px solid #ddd;
    border-bottom-color: transparent;
}
.nav-tabs>li>a, .nav-tabs>li>a:focus, .nav-tabs>li>a:hover{
    font-weight: bold;
    color: #000;
    text-decoration: none;
  }

   
  .nav-tabs {
    border-bottom: 1px solid #fff;
}
.top_local_img{
  width: 100px;
  height: 60px;
    margin-top: 13px;
    border-radius: 10px;
}

 /* Slideshow container */
.slideshow-container {
  position: relative;
}

/* Slides */
.mySlides {
  display: none;
  padding: 80px;
  text-align: center;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}


/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: cornflowerblue;}
#preloader {
    width: 100%;
    height: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: #fff;
    z-index: 11000;
    position: fixed;
    display: block
}

.preloader {
    position: absolute;
    margin: 0 auto;
    left: 1%;
    right: 1%;
    top: 45%;
    width: 95px;
    height: 95px;
    background: center center no-repeat none;
    background-size: 95px 95px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%
}
.newpanel_sp{
color: #333;
    font-size: 14px;
    white-space: nowrap;
    font-weight: 600;
}
.newpanel{
  border-radius: 8px;
    box-shadow: 0 4px 18px 0 #0000005c;
    border: solid 1px #f2f2f2;
    background-color: #fff;
}
.newpanel_p{
      padding-top: 13px;
    font-size: 13px;
    line-height: 22px;
    color: #666;
}
.newpanel_h2{
  padding: 0 0 15px;
    display: block;
    font-size: 26px;
    color: #333;
    line-height: 22px;
    text-align: center;
}
</style>
<script type="text/javascript">
  $(window).on('load', function() { 
    $('.preloader').fadeOut(); 
    $('#preloader').delay(550).fadeOut('slow'); 
    $('body').delay(450).css({'overflow':'visible'});
  })
</script>
 <div id="preloader">
        <img class="preloader" src="<?php echo base_url(); ?>assets/images/E.png" alt="Flats in Visakhapatnam">
    </div><!-- end loader -->
    <!-- /header_in -->
    <div class="search_col">
      <div class="pageWidth">
        <div class="hotel_booking">
               <div class="row servives_top" style="display:none;">
    <div class="col-sm-2 servives_top_serv" style="padding-left: 20px;">
     <a href="#property_finding"><img src="<?php echo base_url(); ?>/assets/images/b1.png" alt="Flats in Visakhapatnam" width="40px" height="40px" style="margin-left: 20px;"/>
      <h4>Property Finding</h4></a>
    </div>
    <div class="col-sm-2 servives_top_serv">
     <a href="#property_site_visit"><img src="<?php echo base_url(); ?>/assets/images/b3.png" alt="Flats in Visakhapatnam" width="40px" height="40px" style="margin-left: 20px;"/>
      <h4>Property Site Visit</h4></a>
    </div>
    <div class="col-sm-2 servives_top_serv">
        <a href="#property_booking"><img src="<?php echo base_url(); ?>/assets/images/b4.png" alt="Flats in Visakhapatnam" width="40px" height="40px" style="margin-left: 20px;"/>
      <h4>Property Booking</h4></a>
    </div>
  
    <div class="col-sm-2 servives_top_serv">
      <a href="#home_loan"> <img src="<?php echo base_url(); ?>/assets/images/b2.png" alt="Flats in Visakhapatnam" width="40px" height="40px" style="margin-left: 20px;"/>
      <h4>Home Loan</h4></a>
    </div>
     <div class="col-sm-2 servives_top_serv">
       <a href="#property_valuation"> <img src="<?php echo base_url(); ?>/assets/images/b6.png" alt="Flats in Visakhapatnam" width="40px" height="40px" style="margin-left: 20px;"/>
     <h4>Property Valuation</h4></a>
    </div>
    <div class="col-sm-2 servives_top_serv">
       <a href="#property_registeration" > <img src="<?php echo base_url(); ?>/assets/images/b7.png" alt="Flats in Visakhapatnam" width="40px" height="40px" style="margin-left: 20px;"/>
      <h4>Registeration</h4></a>
    </div>
  </div>
          <!-- <div class="title_col"> <i class="fa fa-search"></i>
            <h2>Search Here</h2>
          </div> -->
         <!--  <div class="caption">Whoever you are, whatever you seek, it's all starts here.</div> -->
          <div class="find_hotel">
            <form action="property/propertylist" method="post">
              <ul class="liststyle_none">
                <li>
                  <label style="margin-left: 43px;">City</label>
                 <select name="country" id="country" class="">
                    <option value="">Select City</option>
                    <?php
                    foreach($country as $row)
                    {
                     echo '<option value="'.$row->city.'">'.$row->city.'</option>';
                    }
                    ?>
                   </select>
                </li>
                <li>
                  <label style="margin-left: 43px;">Area</label>
                 <select name="location" id="state" class="">
                  <option value="">Select Area</option>
                 </select>
                </li>
              <!-- </ul> -->
             <!--  <ul class="liststyle_none"> -->
                <li>
                  <label style="margin-left: 27px;">Price From</label>
                  <select name="price_from">
                    <option value="">Select Price</option>
                    <option value="100000">100000</option>
                     <option value="500000">500000</option>
                     <option value="1000000">1000000</option>
                     <option value="2000000">2000000</option>
                  </select>
                 <!--  <input type="range" id="rangeInput" name="rangeInput" min="100000" max="2000000" value="0" oninput="amount.value=rangeInput.value" style="background-color: #1f608845;border: none;">   
                  <input type="text" name="price_from" id=amount  for="rangeInput"  readonly="" style="background: rgb(83 119 48 / 0%); border: rgb(83 119 48 / 0%); color: #fff;"> -->
                 <!--  <select name="pricefrom">
                    <option value="">Select</option>
                    <option value="10000">10000</option>
                    <option value="20000">20000</option>
                    <option value="30000">30000</option>
                    <option value="40000">40000</option>
                    <option value="50000">50000</option>
                    <option value="60000 ">60000</option>
                  </select>  --></li>
                <li>
                   <label style="margin-left: 27px;">Price To</label>
                    <select name="">
                    <option value="500000">Select Price</option>
                    <option value="2500000">2500000</option>
                     <option value="5000000">5000000</option>
                     <option value="10000000">10000000</option>
                     <option value="20000000">20000000</option>
                  </select>
                   <!-- <input type="range" id="rangeInput_to" name="rangeInput_to" min="500000" max="50000000" value="0" oninput="amountto.value=rangeInput_to.value" style="background-color: #1f608845;border: none;">    
                  <input type="text" name="price_to" id=amountto  for="rangeInput_to"   readonly="" style="background: rgb(83 119 48 / 0%); border: rgb(83 119 48 / 0%); color: #fff;"></li> -->
           <!-- </ul> 
              <ul class="liststyle_none"> -->
                 <li>
                  <label style="margin-left: 30px;">Types</label>
                  <select name="property_type"  id="size_select">
                    <option value="">All Type</option>
                    <option value="Apartments">Apartments</option>
                    <option value="Villas">Villas</option>
                    <option value="Plots">Plots</option>
                    <option value="Individual">Individual Houses</option>

                  </select>
                </li>
                <li>
                 <!--Size dropdown content-->
                  <div id="Apartments" class="size_chart">
                   <label style="margin-left: 30px;">Rooms</label>
                    <select name="">
                      <option value="1BHK">1BHK</option>
                      <option value="2BHK">2BHK</option>
                      <option value="3BHK">3BHK</option>
                      <option value="4BHK">4BHK</option>
                    </select>
                  </div>
                  <div id="Villas" class="size_chart">
                   <label style="margin-left: 30px;">Rooms</label>
                    <select name="">
                      <option value="1BHK">1BHK</option>
                      <option value="2BHK">2BHK</option>
                      <option value="3BHK">3BHK</option>
                      <option value="4BHK">4BHK</option>
                    </select>
                  </div>
                  <div id="Plots" class="size_chart">
                    <label style="margin-left: 30px;">Plots</label>
                    <select name="">
                      <option value="OpenSites">OpenSites</option>
                      <option value="Layouts">Layouts</option>
                    </select>
                  </div>
                  <div id="Individual" class="size_chart">
                    <label style="margin-left: 30px;">Rooms</label>
                    <select name="">
                      <option value="1BHK">1BHK</option>
                      <option value="2BHK">2BHK</option>
                      <option value="3BHK">3BHK</option>
                      <option value="4BHK">4BHK</option>
                    </select>
                  </div>
                </li>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                <script type="text/javascript">
                    $(document).ready(function(){

                  //hides dropdown content
                  $(".size_chart").hide();
                  
                  //unhides first option content
                //  $("#Apartments").show();
                  
                  //listen to dropdown for change
                  $("#size_select").change(function(){
                    //rehide content on change
                    $('.size_chart').hide();
                    //unhides current item
                    $('#'+$(this).val()).show();
                  });
                  
                });
                </script>
                <!-- <li class="halfwidth">
                  <label>Bath Rooms</label>
                  <select name="bathrooms">
                    <option value="">Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>
                </li> -->
                <li> <button type="submit" class="booknow_btn" name="Search_property">Search</button></li>

              </ul>
            </form>
          </div>
        </div>
        <!-- <div class="side_bar">
          <ul class="liststyle_none main">
            <li>
              <figure><img src="<?php echo base_url(); ?>/assets/images/unnamed.jpg" alt="dubai" height="190px;"></figure>
              <a href="">
              <div class="figure_description"> <span class="text">Explore property from our locations</span>
                <h2>Vizag</h2>
                <ul class="liststyle_none">
                  <li>Apartment / Flats</li>
                  <li>Individual House</li>
                  <li>Open Plots</li>
                </ul>
                <a href='<?php echo base_url(); ?>property/propertylist'><div class="readmore">See More &raquo;</div></a>
              </div>
              </a> </li>
            <li>
              <figure><img src="<?php echo base_url(); ?>/assets/images/unnamed2.jpg" alt="malaysia"/></figure>
              <a href="">
              <div class="figure_description"> <span class="text">Explore property from our locations</span>
                <h2>Vijayawada</h2>
                <ul class="liststyle_none">
                  <li>Apartment / Flats</li>
                  <li>Individual House</li>
                  <li>Open Plots</li>
                </ul>
               <a href='<?php echo base_url(); ?>property/propertylist'> <div class="readmore">See More &raquo;</div></a>
              </div>
              </a> </li>
          </ul>
        </div> -->
      </div>
      <div class="clear"></div>
    </div>
    <!-- /search_col -->
    <div class="banner">
      <div class="master-slider ms-skin-black-2 round-skin" id="masterslider">
        <!--<div class="ms-slide slide-1" style="z-index: 10" data-delay="6"> <img src="images/blank.gif" data-src="<?php echo base_url(); ?>/assets/images/slider/41.jpeg" alt="slide1"/>-->
        <!--  <div class="maskDiv"></div>-->
        <!--</div>-->
       
        <div class="ms-slide slide-1" style="z-index: 10" data-delay="6"> <img src="images/blank.gif" data-src="<?php echo base_url(); ?>/assets/images/slider/31.jpeg" alt="Flats in Visakhapatnam"/>
          <div class="maskDiv"></div>
        </div>
        <!--<div class="ms-slide slide-1" style="z-index: 10" data-delay="6"> <img src="images/blank.gif" data-src="<?php echo base_url(); ?>/assets/images/slider/31.jpeg" alt="slide1"/>-->
        <!--  <div class="maskDiv"></div>-->
        <!--</div>-->
        <!--<div class="ms-slide slide-1" style="z-index: 10" data-delay="6"> <img src="images/blank.gif" data-src="<?php echo base_url(); ?>/assets/images/slider/33.jpeg" alt="slide1"/>-->
        <!--  <div class="maskDiv"></div>-->
        <!--</div>-->
       
      </div>
    </div>
    <!-- /banner -->
    <div class="clear"></div>
  </header>
  <!-- /header -->
  <section>
    <div class="recommended_dest">
      <div class="pageWidth">
        
    
  <h2 class="newpanel_h2">Everything you Need at One Place</h2>
  <div class="panel-group row">
    
     <a href="#property_finding">
      <div class="panel panel-default col-md-3 newpanel" style="margin-left:10%">
       <div class="panel-body">
        <div class="col-md-8"><span class="newpanel_sp">Property Finding &nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></span><br><p class="newpanel_p"> Your property finding needs are taken care of soon as you turn to us.</p>
        </div>
        <div class="col-md-4"><img src="<?php echo base_url(); ?>/assets/images/es1_1.jpeg" alt="Flats in Visakhapatnam" style="border-radius: 10px;" class="pull-right">
        </div>
      </div>
    </div>
    </a>


     <a href="#property_site_visit">
      <div class="panel panel-default col-md-3 newpanel" style="margin-left:20px">
       <div class="panel-body">
        <div class="col-md-8"><span class="newpanel_sp">Property Site Visit &nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></span><br><p class="newpanel_p"> The property becomes yours while the responsibility becomes ours.</p>
        </div>
        <div class="col-md-4"><img src="<?php echo base_url(); ?>/assets/images/es1_2.jpeg" alt="flats for sale in vizag" style="border-radius: 10px;" class="pull-right">
        </div>
      </div>
    </div>
    </a>

     <a href="#property_booking">
      <div class="panel panel-default col-md-3 newpanel" style="margin-left:20px">
       <div class="panel-body">
        <div class="col-md-8"><span class="newpanel_sp">Property Booking &nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></span><br><p class="newpanel_p"> Booking agreement is presented to you for clarification of all possible doubts.</p>
        </div>
        <div class="col-md-4"><img src="<?php echo base_url(); ?>/assets/images/es1_3.jpeg" alt="flats for sale in vizag" style="border-radius: 10px;" class="pull-right">
        </div>
      </div>
    </div>
    </a>
  </div>

<div class="panel-group row">
     <a href="#home_loan">
      <div class="panel panel-default col-md-3 newpanel" style="margin-left:10%">
       <div class="panel-body">
        <div class="col-md-8"><span class="newpanel_sp">Home Loan &nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></span><br><p class="newpanel_p"> There are different kinds of home loans options that are made to suit each unique situation.</p>
        </div>
        <div class="col-md-4"><img src="<?php echo base_url(); ?>/assets/images/es1_4.jpg" alt="flats for sale in vizag" style="border-radius: 10px;" class="pull-right">
        </div>
      </div>
    </div>
    </a>

     <a href="#property_valuation">
      <div class="panel panel-default col-md-3 newpanel" style="margin-left:20px">
       <div class="panel-body">
        <div class="col-md-8"><span class="newpanel_sp">Property Valuation &nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></span><br><p class="newpanel_p"> Property the most complex activity to be taken place is the discovery of affordability and value.</p>
        </div>
        <div class="col-md-4"><img src="<?php echo base_url(); ?>/assets/images/es1_5.jpeg" alt="flats for sale in vizag" style="border-radius: 10px;" class="pull-right">
        </div>
      </div>
    </div>
    </a>

     <a href="#property_registeration">
      <div class="panel panel-default col-md-3 newpanel" style="margin-left:20px">
       <div class="panel-body">
        <div class="col-md-8"><span class="newpanel_sp">Registeration &nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></span><br><p class="newpanel_p"> Our highly qualified professionals give you personalized services in any possible location.</p>
        </div>
        <div class="col-md-4"><img src="<?php echo base_url(); ?>/assets/images/es1_6.jpeg" alt="flats for sale in vizag" style="border-radius: 10px;" class="pull-right">
        </div>
      </div>
    </div>
    </a>
  </div>
        <h2>WE OFFERING THE BEST REAL ESTATE DEALS </h2>
          
        <div id="vizag_list" class="vizag_list" id="vizag_list">
           <p class="about_area">Visakhapatnam real estate has seen an amazing development over the past few years. Many new localities have emerged in the real estate in Visakhapatnam and the existing ones have got remodeled and designed to suit the needs of the people. The top localities of Visakhapatnam are: Asilmetta, Marripalem, Seethammadhara, Kapuluppada, Sheela Nagar, Lalitha Nagar, MVP Colony, Yendada and others.</p>
        <ul class="liststyle_none">
           <?php
             $property_count = $this->db->query('SELECT title,area FROM `property` WHERE status=1 and id!=32 LIMIT 1,4')->result_array();
             $img =0;
             foreach ($property_count as $property_count) { ?>
               <li> <a href="<?php echo base_url(); ?>property/propertylist?area=<?php echo $property_count['area']; ?>"> <img src="<?php echo base_url(); ?>/assets/images/viz<?php echo $img; ?>.jpg" alt="hyd"/>
            <div class="frame"> <span class="countryname"><?php echo $property_count['title'];  ?></span> <span class="hotel_text">- <?php echo $property_count['area'];  ?> </span> </div>
            </a> </li> 
          <?php $img++;  }
           ?>
           <a href="<?php echo base_url(); ?>property/propertylist"><i class="fa fa-arrow-circle-right" aria-hidden="true" style="font-size: xx-large;
    color: orange;margin-top: 60px;"></i></a>
        </ul>
      <!--   <ul class="liststyle_none">
           <?php
             $property_count = $this->db->query('SELECT COUNT(*) as count,area FROM `property` WHERE status=1 GROUP by area ORDER BY COUNT DESC LIMIT 4,4')->result_array();
             $img =4;
             foreach ($property_count as $property_count) { ?>
               <li> <a href="<?php echo base_url(); ?>property/propertylist?area=<?php echo $property_count['area']; ?>"> <img src="<?php echo base_url(); ?>/assets/images/viz<?php echo $img; ?>.jpg" alt="hyd"/>
            <div class="frame"> <span class="countryname"><?php echo $property_count['area'];  ?></span> <span class="hotel_text">- <?php echo $property_count['count'];  ?> Properties</span> </div>
            </a> </li> 
          <?php $img++;  }
           ?>
        </ul> -->
        </div>


         <div id="hyd_list" class="hyd_list" style="display: none;">
          <p class="about_area">Hyderabad real estate has seen a tremendous change in the past few decades. The establishment of several IT companies has made it a hot destination for the youth. Many localities have been built to suit the needs of every category of people. Some of the key localities that have seen the major development are listed here: Begumpet, Hyderguda, Ameerpet, Sri Nagar Colony, Banjara Hills, Kukatpally, Gachibowli, Uppal, Abids, Jubilee Hills, etc.</p>
           <ul class="liststyle_none">
               <li> <a href="<?php echo base_url(); ?>property/propertylist?area=<?php echo $property_count['area']; ?>"> <img src="<?php echo base_url(); ?>/assets/images/hyd0.jpg" alt="hyd"/>
            <div class="frame"> <span class="countryname">Jubilee Project</span> <span class="hotel_text">- Jubilee Hills</span> </div>
            </a> </li> 
             <li> <a href="<?php echo base_url(); ?>property/propertylist?area=<?php echo $property_count['area']; ?>"> <img src="<?php echo base_url(); ?>/assets/images/hyd2.jpg" alt="hyd"/>
            <div class="frame"> <span class="countryname">Hitech Project</span> <span class="hotel_text">- Hitech City</span> </div>
            </a> </li> 
             <li> <a href="<?php echo base_url(); ?>property/propertylist?area=<?php echo $property_count['area']; ?>"> <img src="<?php echo base_url(); ?>/assets/images/hyd3.jpg" alt="hyd"/>
            <div class="frame"> <span class="countryname">KPHB Project</span> <span class="hotel_text">- KPHB</span> </div>
            </a> </li> 
             <li> <a href="<?php echo base_url(); ?>property/propertylist?area=<?php echo $property_count['area']; ?>"> <img src="<?php echo base_url(); ?>/assets/images/hyd4.jpg" alt="hyd"/>
            <div class="frame"> <span class="countryname">Shamshabad Project</span> <span class="hotel_text">- Shamshabad</span> </div>
            </a> </li> 
            <a href="<?php echo base_url(); ?>property/propertylist"><i class="fa fa-arrow-circle-right" aria-hidden="true" style="font-size: xx-large;
    color: orange;margin-top: 60px;"></i></a>
        </ul>
        
      </div>

      <div id="bangalore_list" class="hyd_list" style="display: none;">
          <p class="about_area"> Currently, Bangalore houses about 47% of the 265 biotechnology companies present nationwide. If we talk about the Real Estate in Bangalore, thousands of migrants flock to the capital every year for serving their job or education prospects; leading to high demand for property in the city. One of the most peculiar features of Bangalore Real Estate is the projects presented by the developers.</p>
           <ul class="liststyle_none">
               <li> <a href="<?php echo base_url(); ?>property/propertylist?area=<?php echo $property_count['area']; ?>"> <img src="<?php echo base_url(); ?>/assets/images/ban2.jpg" alt="hyd"/>
            <div class="frame"> <span class="countryname">Marathalli Project</span> <span class="hotel_text">- Marathalli</span> </div>
            </a> </li> 
             <li> <a href="<?php echo base_url(); ?>property/propertylist?area=<?php echo $property_count['area']; ?>"> <img src="<?php echo base_url(); ?>/assets/images/ban3.jpg" alt="hyd"/>
            <div class="frame"> <span class="countryname">Bannerghatta Project</span> <span class="hotel_text">- Bannerghatta Road</span> </div>
            </a> </li> 
             <li> <a href="<?php echo base_url(); ?>property/propertylist?area=<?php echo $property_count['area']; ?>"> <img src="<?php echo base_url(); ?>/assets/images/ban4.jpg" alt="hyd"/>
            <div class="frame"> <span class="countryname">EC Project</span> <span class="hotel_text">- Electronic city</span> </div>
            </a> </li> 
             <li> <a href="<?php echo base_url(); ?>property/propertylist?area=<?php echo $property_count['area']; ?>"> <img src="<?php echo base_url(); ?>/assets/images/ban5.jpeg" alt="hyd"/>
            <div class="frame"> <span class="countryname">Whitefield Project</span> <span class="hotel_text">- Whitefield</span> </div>
            </a> </li> 
            <a href="<?php echo base_url(); ?>property/propertylist"><i class="fa fa-arrow-circle-right" aria-hidden="true" style="font-size: xx-large;
    color: orange;margin-top: 60px;"></i></a>
        </ul>
        
      </div>


      <div id="vijayawada_list" class="hyd_list" style="display: none;">
          <p class="about_area"> The demand for Residential Property in Vijayawada has increased tremendously in the past years. People are showing interest in the Flats & Apartments, Individual Houses / Villas, Builder Floor, Farm House, Commercial Shops, Showrooms, Office Space, Business Center, Residential Plot, Agricultural/Farm Land, Commercial Lands /Inst. Land, Industrial Land / Plot, Hotel & Restaurant, Warehouse/Godown, Studio Apartments etc., in this city to find their dream property here in the affordable, luxury segment. </p>
           <ul class="liststyle_none">
                 <li> <a href="<?php echo base_url(); ?>property/propertylist?area=KCP Colony, Poranki"> <img src="<?php echo base_url(); ?>/assets/images/vij0.jpeg" alt="hyd"/>
            <div class="frame"> <span class="countryname">Vaihnavi's Sai Nilayam</span> <span class="hotel_text">- KCP Colony, Poranki</span> </div>
            </a> </li> 
             <li> <a href="<?php echo base_url(); ?>property/propertylist?area=SBI clony , Siddhartha Nagar"> <img src="<?php echo base_url(); ?>/assets/images/vij1.jpeg" alt="hyd"/>
            <div class="frame"> <span class="countryname">New 3 BHK Flats</span> <span class="hotel_text">- SBI clony , Siddhartha Nagar</span> </div>
            </a> </li> 
             <li> <a href="<?php echo base_url(); ?>property/propertylist?area=Nandhamuri Nagar"> <img src="<?php echo base_url(); ?>/assets/images/vij2.jpg" alt="hyd"/>
            <div class="frame"> <span class="countryname">Priya Towers</span> <span class="hotel_text">- Nandhamuri Nagar</span> </div>
            </a> </li> 
             <li> <a href="<?php echo base_url(); ?>property/propertylist?area=<?php echo $property_count['area']; ?>"> <img src="<?php echo base_url(); ?>/assets/images/vij3.jpg" alt="hyd"/>
            <div class="frame"> <span class="countryname">Benz Circle Project</span> <span class="hotel_text">- Benz Circle</span> </div>
            </a> </li> 
            <a href="<?php echo base_url(); ?>property/propertylist"><i class="fa fa-arrow-circle-right" aria-hidden="true" style="font-size: xx-large;
    color: orange;margin-top: 60px;"></i></a>
        </ul>
        
      </div>


      </div>
      <div class="clear"></div>
    </div>
    <br><br>


   
    <div class="container text-center">    
  <br><h3 class="topprojets_h3">Top <b>Projects</b></h3><p class="topprojects_P">Best developers in South India to explore
</p><br>
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-5 topprojects_div">

      <img src="<?php echo base_url(); ?>/uploads/images/150.jpeg" class="img-responsive" style="width:100%; height: 450px; border-radius:1px;" alt="flats for sale in vizag">
      <!--  <span class="badge badge-danger latest_badge blink">Latest</span> -->
      <p class="topprojects_p_p">Sai Priya Layout</p>
<!--       <p class="topprojects_P">Rs. 15000000 to 15000000</p>
 -->      <p class="topprojects_P">3 BHK Apartment in <b>Madhurawada, Vizag</b></p>
    </div>
     <div class="col-sm-5 topprojects_div"> 
      <img src="<?php echo base_url(); ?>/assets/images/yendada2365.jpg" class="img-responsive" style="width:100%;height: 450px; border-radius: 20px;" alt="flats for sale in vizag">
       <p class="topprojects_p_p">Ramachandra See Park</p>
<!--       <p class="topprojects_P">Rs. 7480000 to 10744000</p>
 -->      <p class="topprojects_P">3 BHK Apartments in <b>Yendada, Vizag</b></p>  
    </div>
   
    
  </div>
</div><br><br>  <div class="container text-center">
  <h3 class="topprojets_h3">Ongoing <b>Projects</b></h3>
 
 <br> <br><ul class="nav nav-tabs areatabs">
    <li class="active"><a data-toggle="tab" href="#home">Visakhapatnam</a></li>
    <li><a data-toggle="tab" href="#menu1">Vijayawada</a></li>
    <li><a data-toggle="tab" href="#menu2">Rajahmundry</a></li>
    <li><a data-toggle="tab" href="#menu3">Hyderabad</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <br>
      <div class="col-md-12 panel-group">
         <div class="panel panel-default  col-md-6">
            <div class="col-md-3"><img src="<?php echo base_url(); ?>/uploads/images/132.jpeg" alt="flats for sale in vizag" class="img-responsive top_local_img"></div>
            <div class="col-md-9">
               <div class="panel-body"><p class="topprojects_P text-left"><b>Gajuwaka -</b> 4 Projects</p>
              <p class="text-left">2 BHK available</p>
            </div>
            </div>
           
          </div>
          <div class="panel panel-default  col-md-6">
            <div class="col-md-3"><img src="<?php echo base_url(); ?>/uploads/images/150.jpeg" alt="flats for sale in vizag" class="img-responsive top_local_img"></div>
            <div class="col-md-9">
               <div class="panel-body"><p class="topprojects_P text-left"><b>Madhurawada, -</b> 3 Projects</p>
              <p class="text-left">3 BHK available</p>
            </div>
            </div>
           
          </div>
           <div class="panel panel-default  col-md-6">
            <div class="col-md-3"><img src="<?php echo base_url(); ?>/uploads/images/23.jpeg" alt="flats for sale in vizag" class="img-responsive top_local_img"></div>
            <div class="col-md-9">
               <div class="panel-body"><p class="topprojects_P text-left"><b>MVP Colony -</b> 1 Projects</p>
              <p class="text-left">2 BHK available</p>
            </div>
            </div>
           
          </div>
         <div class="panel panel-default  col-md-6">
            <div class="col-md-3"><img src="<?php echo base_url(); ?>/uploads/images/139.jpeg" alt="flats for sale in vizag" class="img-responsive top_local_img"></div>
            <div class="col-md-9">
               <div class="panel-body"><p class="topprojects_P text-left"><b>PM PALEM -</b> 6 Projects</p>
              <p class="text-left">2 BHK & 3 BHK available</p>
            </div>
            </div>
           
          </div>
          

      </div>
       
    </div>
    <div id="menu1" class="tab-pane fade">
        <div class="col-md-12 panel-group">
         <div class="panel panel-default  col-md-6">
            <div class="col-md-3"><img src="<?php echo base_url(); ?>/uploads/images/1111.png" alt="flats for sale in vizag" class="img-responsive top_local_img"></div>
            <div class="col-md-9">
               <div class="panel-body"><p class="topprojects_P text-left"><b>Tadepalli -</b> 2 Project</p>
              <p class="text-left">2 BHK & 3 BHK available</p>
            </div>
            </div>
           
          </div>
          <div class="panel panel-default  col-md-6">
            <div class="col-md-3"><img src="<?php echo base_url(); ?>/uploads/images/140.jpeg" alt="flats for sale in vizag" class="img-responsive top_local_img"></div>
            <div class="col-md-9">
               <div class="panel-body"><p class="topprojects_P text-left"><b> Poranki, -</b> 1 Projects</p>
              <p class="text-left">2 BHK & 3 BHK available</p>
            </div>
            </div>
           
          </div>
          
      </div>
    </div>
    <div id="menu2" class="tab-pane fade">
      <div class="col-md-12 panel-group">
         <div class="panel panel-default  col-md-6">
            <div class="col-md-3"><img src="<?php echo base_url(); ?>/assets/images/129.jpeg" alt="flats for sale in vizag" class="img-responsive top_local_img"></div>
            <div class="col-md-9">
               <div class="panel-body"><p class="topprojects_P text-left"><b>Vidyuth Colony -</b> 1 Project</p>
              <p class="text-left">3 BHK available</p>
            </div>
            </div>
           
          </div>
         
          
      </div>
    </div>
    <div id="menu3" class="tab-pane fade">
      <p>Will update soon..</p>
    </div>
  </div>
</div>
    <div class="parallax">
      <div class="pageWidth">
        <div class="left_parallax_col">
          <h2>What are you Waiting for?</h2>
          <div class="whyus">
            <ul class="liststyle_none">
              <li>
                <div class="whyus_testiContent"> <img src="<?php echo base_url(); ?>/assets/images/simle_icon.png" alt="flats for sale in vizag"/>
                  <p>Customer satisfaction</p>
                </div>
              </li>
              <li>
                <div class="whychoose_testiContent"> <img src="<?php echo base_url(); ?>/assets/images/deal_icon.png" alt="flats for sale in vizag"/>
                  <p>Assured happiness Within a click...</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="right_parallax_col">
<!--           <h2>What Client Say</h2>
 -->          <div class="owl-carousel">
            <div>
              <div class="testiContent">
                <h2>Apartments</h2>
                <p>Be in the heights of happiness, we build the basis of trust and honesty into our work which we feel as protective as well as the great magnitude of projects which fulfills the Dream of Apartments which you exactly deserve for.</p>
              </div>
            </div>
            <div>
              <div class="testiContent">
                <h2>Houses</h2>
                <p>We know the Feel of attachment which you bond with House, we decorate and we demonstrate the best which makes you feel peace and brings everlasting beautiful memories into your life. </p>
               </div>
            </div>
            <div>
              <div class="testiContent">
                <h2>Plots</h2>
                <p>We are here to help you find the best developing places where you appreciate your wealth double in a few years and make a peaceful environment and happy neighborhood.</p>
               </div>
            </div>
            <div>
              <div class="testiContent">
                <h2>Buyers Trust</h2>
                <p>Over a decade of experience made us what we are today. Our trust and honesty towards commitment expanded our functions from one state to another and built many happy faces and gained supreme powers to satisfy our customers through our restless worth full continuous efforts.</p>
               </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mask2"></div>
      <div class="clear"></div>
    </div><br><br>
    
    <div class="container text-center" id="property_finding">    
  <div class="row">
    <div class="col-sm-7 topprojects_div">
     
      <p class="topprojects_p_p">Property Finding</p>
   <p class="about_area" style="text-align: initial;">The home hunting process is now revolutionized as our team works toward bringing you everything on your fingertips. We have it covered for you be it any city in India. Your property finding needs are taken care of soon as you turn to us. The developers of our company track records of a variety of properties and make them easily available for you. We’re a source you can actually rely upon because customer satisfaction is the sole motto of our entire group. 
</p>
   <p class="about_area" style="text-align: initial;">The entire process of negotiating with the best agents or brokers, finding, going and checking the property, vigorous negotiations for best prices is a mammoth task in itself. To make it easier for you we have scaled down a range of real estate properties in India.
 </p>
   <p class="about_area" style="text-align: initial;">With the fall in the home loan interest rates the country has seen quite a rise in its demand for private and commercial properties. Since home loans are easily available and the interest rates are much affordable today the demand for real estate properties has surged.  <a href="<?php echo base_url(); ?>property/property_finding"><span class="topprojects_p_p">Read more..</span></a></p> 
    </div>
     <div class="col-sm-5 topprojects_div"> 
      <img src="<?php echo base_url(); ?>/assets/images/es11.jpg" class="img-responsive" style="width:350px;height: 350px;" alt="flats for sale in vizag">
      
    </div>
   
    
  </div>
</div><br><br><hr><br><br>

 <div class="container text-center" id="property_site_visit">    
  <div class="row">
    
     <div class="col-sm-5 topprojects_div"> 
      <img src="<?php echo base_url(); ?>/assets/images/es12.jpg" class="img-responsive" style="width:350px;height: 350px;" alt="flats for sale in vizag">
      
    </div>
   <div class="col-sm-7 topprojects_div">
     
      <p class="topprojects_p_p">Property Site Visit</p>
   <p class="about_area" style="text-align: initial;">The property becomes yours while the responsibility becomes ours. From finding you the variety of properties according to your taste and making it more than easy for our clients to take a tour of the property for its full inspection is made easy by our entire team. A site visit can help a buyer ascertain the genuineness of claims made by the developer. Visiting the site can help the buyers ascertain all land ownership. 


 </p>
   <p class="about_area" style="text-align: initial;">A homebuyer can check a number of things by visiting the site. They can check the kinds of materials that's been used in its construction, they can check the progress of their soon to be possession. Regular visits to the project site can help a buyer check the peace and progress of construction. A homebuyer can inspect the amenities available at the property site. He can check if the amenities match the layout plan presented by the developer. Matching the sales pitch to the ground reality help clients decide the developer's authenticity and transparency.<a href="<?php echo base_url(); ?>property/property_site_visit"><span class="topprojects_p_p">Read more..</span></a></p>
    </div>
    
  </div>
</div><br><br><hr><br><br>

  <div class="container text-center" id="property_booking">    
  <div class="row">
     
    <div class="col-sm-7 topprojects_div">
     
      <p class="topprojects_p_p">Property Booking</p>
   <p class="about_area" style="text-align: initial;">Once your full inspection of your selected property is done, the property booking agreement is presented to you for clarification of all possible doubts. Our real estate lawyers in the team focuses on delivering you important messages regarding your legal rights towards the property.

</p>
   <p class="about_area" style="text-align: initial;">
It is highly important to be aware of the terms and conditions mentioned in the booking agreement and also if you do not agree with any point or clauses you’re given the choice of using your personal individual right to negotiate and get it modified. The homebuyers will enter into an agreement for sale first and then pay the booking amount. The advantage  they get is that they are then aware of each and every detail of the project as well as the terms and conditions before making any payment to the developer.  <a href="<?php echo base_url(); ?>property/property_booking"><span class="topprojects_p_p">Read more..</span></a>
 </p>
    </div>
    <div class="col-sm-5 topprojects_div"> 
      <img src="<?php echo base_url(); ?>/assets/images/es13.jpg" class="img-responsive" style="width:350px;height: 350px;" alt="flats for sale in vizag">
      
    </div>
   
    
  </div>
</div><br><br><hr><br><br>


  <div class="container text-center" id="home_loan">    
  <div class="row">
    <div class="col-sm-5 topprojects_div"> 
      <img src="<?php echo base_url(); ?>/assets/images/es14.jpg" class="img-responsive" style="width:350px;height: 350px;" alt="flats for sale in vizag">
      
    </div>
     
    <div class="col-sm-7 topprojects_div">
     
      <p class="topprojects_p_p">Home Loan</p>
   <p class="about_area" style="text-align: initial;">There are different kinds of home loans options that are made to suit each unique situation. These are done to make homebuying affordable for prospective clients. Imparting life to buying a home of your dream requires a lot of effort from the buyers’ end and the best one can do to accommodate the home in their budget is through a home loan. 


   <p class="about_area" style="text-align: initial;">The developers this side makes it simple for you to borrow a certain amount of money from bank or any other companies lending. You can take home loans to buy properties that are either commercial or personal in nature. 
</p>

   <p class="about_area" style="text-align: initial;">While you go for a home loan our team extracts information relating to your credit score. Credit score is the client's overall credit profile expressed in terms of numerical digits. It has all the informations 

including the records of all your borrowings and also your reports of repayments.  <a href="<?php echo base_url(); ?>property/home_loan"><span class="topprojects_p_p">Read more..</span></a></p>
  
    </div>
    
   
    
  </div>
</div><br><br><hr><br><br>


<div class="container text-center" id="property_valuation">    
  <div class="row">
   
     
    <div class="col-sm-7 topprojects_div">
     
      <p class="topprojects_p_p">Property Valuation</p>
   <p class="about_area" style="text-align: initial;">While purchasing a property or a home the most complex activity to be taken place is the discovery of affordability and value. 
To find out the peak of value your property is going to reach in the near future is made easy as our in house team explains it to you by desktop valuation or it is done through our expert registered valuers. 

   <p class="about_area" style="text-align: initial;">Discovering the rental value of a property keeping in mind the maximum value it can fetch each year can only be delivered by our platform that provide these services to individuals, corporates and large institution. 
 
</p>

   <p class="about_area" style="text-align: initial;">
While investing on a property, not just the current value of it that matters, what matters is also the future value it might 

have. <a href="<?php echo base_url(); ?>property/property_valuation"><span class="topprojects_p_p">Read more..</span></a></p>
  
    </div>
     <div class="col-sm-5 topprojects_div"> 
      <img src="<?php echo base_url(); ?>/assets/images/es15.jpg" class="img-responsive" style="width:350px;height: 350px;" alt="flats for sale in vizag">
      
    </div>
   
    
  </div>
</div><br><br><hr><br><br>

<div class="container text-center" id="property_registeration">    
  <div class="row">
   <div class="col-sm-5 topprojects_div"> 
      <img src="<?php echo base_url(); ?>/assets/images/es16.jpg" class="img-responsive" style="width:350px;height: 350px;" alt="flats for sale in vizag">
      
    </div>
     
    <div class="col-sm-7 topprojects_div">
     
      <p class="topprojects_p_p">Property Registeration</p>
   <p class="about_area" style="text-align: initial;">Since cooperation is the key we assist you with finding, filing, complaining and registering documents regarding real estate with the government or any other administrative departments. Our highly qualified professionals give you personalized services in any possible location. 

   <p class="about_area" style="text-align: initial;">
Legal assistance is must to have a trouble free property and with our team you find educated and qualified lawyers at your disposal. Our personalized registration services are aimed at giving you the best services in the easiest way possible in the cheapest cost. </p>
 <p class="about_area" style="text-align: initial;"> From drafting complaints, to registering documents our professionals do it all. To keep you away from property related hassles our company employs these professional lawyers to get everything sorted for you even before you ask them to. <a href="<?php echo base_url(); ?>property/property_registeration"><span class="topprojects_p_p">Read more..</span></a></p>
    </div>
     
   
    
  </div>
</div><br><br><hr>

    <div class="row20 top_rated_hotels">




      <div class="slideshow-container">

<div class="mySlides">
  <p>Thank you so much Eswari Homes. I had excellently experience.Mr. Bhanu Prasad sure if extremely good professional. he explained me Very good projects and value for money. he advised me through every step of the way and explain all of my questions. and he explained each and every project details</p>
  <p class="author">- Deekshitha gorla</p>
</div>

<div class="mySlides">
  <p>This group is very useful for searching and buying a house. The houses they showed us are of affordable budget. they provided us with transport also. the person mani explained everything in most understanding way. Best group to prefer for buying a new house.</p>
  <p class="author">- Ramu G</p>
</div>

<div class="mySlides">
  <p>Visited  the property of this company i have a great experience with the them and their projects the price and project location are very good prime location very thankful for your service Mr venkatesh garu...</p>
  <p class="author">- Bhanu Sai Teja</p>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
  <div class="container text-center">    
  <br><h3 class="topprojets_h3">Trending <b>Projects</b></h3>
  <p>Most sought-after projects</p>  <br><br>
  <div class="row">
   
   <?php if(!empty($trendning_projects_vizag)){ foreach ($trendning_projects_vizag as $trendning_projects_vizag) { ?>
 <a href="<?php echo base_url(); ?>property/propertydetails/<?php echo $trendning_projects_vizag['id']; ?>">
  <div class="panel panel-default  col-md-4" style="border-bottom: 0px;">
            <div class="col-md-3"><img src="<?php echo base_url(); ?>/uploads/images/<?php echo $trendning_projects_vizag['default_image']; ?>" class="img-responsive top_local_img" alt="flats for sale in vizag"></div>
            <div class="col-md-9">
               <div class="panel-body"><p class="topprojects_P text-left"><b><?php echo $trendning_projects_vizag['title']; ?></b></p>
              <p class="text-left"><?php echo $trendning_projects_vizag['area']; ?>, <?php echo $trendning_projects_vizag['district']; ?></p>
             
            </div>
            </div>
           
          </div></a>
            <?php } } ?>

  </div>
   <div class="row">
   
   <?php if(!empty($trendning_projects_vijayawada)){ foreach ($trendning_projects_vijayawada as $trendning_projects_vijayawada) { ?>
    <a href="<?php echo base_url(); ?>property/propertydetails/<?php echo $trendning_projects_vijayawada['id']; ?>">
 <div class="panel panel-default  col-md-4" style="border-bottom: 0px;">
            <div class="col-md-3"><img src="<?php echo base_url(); ?>/uploads/images/<?php echo $trendning_projects_vijayawada['default_image']; ?>" class="img-responsive top_local_img" alt="flats for sale in vizag"></div>
            <div class="col-md-9">
               <div class="panel-body"><p class="topprojects_P text-left"><b><?php echo $trendning_projects_vijayawada['title']; ?></b></p>
              <p class="text-left"><?php echo $trendning_projects_vijayawada['area']; ?>, <?php echo $trendning_projects_vijayawada['district']; ?></p>
             
            </div>
            </div>
           
          </div></a>
            <?php } } ?>

  </div>

</div><br><br>
<div class="container popularsearch"> 
   <br><h3 class="topprojets_h3">Popular <b>Searches</b></h3>
  <p>Browse Popular links to search your home</p>  <br><br>
  <div class="row">
     <div class="col-sm-3">
        <h5>Filter Your Search</h5>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?city=Vizag">2 BHK Flats in Visakhapatnam</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?city=Vizag">2 BHK Apartments in Visakhapatnam</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?city=Vizag">2 BHK Flats for Sale in Visakhapatnam</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?city=Vizag">2 BHK House for sale in Visakhapatnam</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?city=Vizag">3 BHK Flats in Visakhapatnam</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?city=Vizag">3 BHK Apartments in Visakhapatnam</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?city=Vizag">3 BHK Flats for Sale in Visakhapatnam</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?city=Vizag">3 BHK House for sale in Visakhapatnam</a></p>
      </div>
       <div class="col-sm-3">
        <h5>People Also Search For</h5>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?city=Vizag">Luxury Apartments in Visakhapatnam</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?city=Vizag">Buy Luxury Apartments in Visakhapatnam</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?city=Vizag">Luxury Flats for sale in Visakhapatnam</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?city=Vizag">Properties for Sale in Visakhapatnam</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?city=Rajahmundry">Luxury Apartments in Rajahmundry</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?city=Rajahmundry">2 BHK Flats for Sale in Rajahmundry</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?city=Rajahmundry">3 BHK Flats in Rajahmundry</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?city=Rajahmundry">Buy Luxury Apartments in Rajahmundry</a></p>
      </div>

       <div class="col-sm-3">
        <h5>Popular Searches</h5>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?city=Vijayawada">2 BHK Flats in Vijayawada</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?city=Vijayawada">2 BHK Apartments in Vijayawada</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?city=Vijayawada">2 BHK Flats for Sale in Vijayawada</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?city=Vijayawada">2 BHK House for sale in Vijayawada</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?city=Vijayawada">3 BHK Flats in Vijayawada</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?city=Vijayawada">3 BHK Apartments in Vijayawada</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?city=Vijayawada">3 BHK Flats for Sale in Vijayawada</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?city=Vijayawada">3 BHK House for sale in Vijayawada</a></p>
      </div>
       <div class="col-sm-3">
         <h5>Filter Your Search</h5>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?area=SEETHAMMADHARA">2 BHK Flats for Sale in Seethammadhara</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?area=SEETHAMMADHARA">3 BHK flats for sale in seethammadhara</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?area=SEETHAMMADHARA">Properties for Sale in seethammadhara</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?area=SEETHAMMADHARA">Luxury Apartments in Seethammadhara</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?area=MVP Colony">2 BHK house for sale in MVP Colony</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?area=MVP Colony">3 BHK house for sale in MVP Colony</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?area=MVP Colony">Luxury Apartments in MVP Colony</a></p>
        <p><a class="popularearch_p_a" href="<?php echo base_url(); ?>property/propertylist?area=SEETHAMMADHARA">Flats for sale in seethammadhara</a></p>
      </div>
    </div>
  </div><br><br>
<div class="container"> 
  <div class="row">
    <div class="col-sm-3">
  <h4 style="margin-top: -2px; margin-left: 35%;">Latest Blogs :</h4>
</div>
<div class="col-sm-9">
 <div class="marquees"><marquee>
   <?php if(!empty($blogs)){ foreach ($blogs as $blogs) { ?>
  <span><a class="latestblog_a" href="<?php echo base_url('blog/blogdetails/'); ?><?php echo $blogs['key_url'] ?>"><?php echo $blogs['title']; ?></a></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <?php }?></marquee><?php }else{
      echo '<span>No Blogs found.</span>';
     } ?>

</div>
</div>
</div>
</div>


  <!--     <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo base_url(); ?>assets/images/slider/6.jpg" alt="Los Angeles" style="width:100%;">
      </div>
      <div class="item">
        <img src="<?php echo base_url(); ?>assets/images/slider/7.jpg" alt="Los Angeles" style="width:100%;">
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> -->



     <!--  <div class="pageWidth">
        <div class="hotels_col">
          <h3>Ongoing Projects</h3>
          <ul>
            <li><a href="">
              <dl>
                <dt> <img alt="img1" src="<?php echo base_url(); ?>/assets/images/101.jpg"> </dt>
                <dd>
                  <h6>Naidu Projects yendada</h6>
                  <span>Yendada</span> </dd>
              </dl>
              </a></li>
            <li><a href="">
              <dl>
                <dt> <img alt="img1" src="<?php echo base_url(); ?>/assets/images/102.jpg"> </dt>
                <dd>
                  <h6>Viraha Residency</h6>
                  <span>Viman Nagar</span> </dd>
              </dl>
              </a></li>
            <li><a href="">
              <dl>
                <dt> <img alt="img1" src="<?php echo base_url(); ?>/assets/images/103.jpg"> </dt>
                <dd>
                  <h6>Sri Brindavanam</h6>
                  <span>Seetammadhara</span> </dd>
              </dl>
              </a></li>
          </ul>
        </div>
        <div class="hotels_col">
          <h3>Featured Projects</h3>
          <ul>
            <li><a href="">
              <dl>
                <dt> <img alt="img1" src="<?php echo base_url(); ?>/assets/images/104.jpg"> </dt>
                <dd>
                  <h6>Aastha Project</h6>
                  <span>MVP Colony</span> </dd>
              </dl>
              </a></li>
            <li><a href="">
              <dl>
                <dt> <img alt="img1" src="<?php echo base_url(); ?>/assets/images/105.jpg"> </dt>
                <dd>
                  <h6>SM Towers</h6>
                  <span>Chinamushidiwada</span> </dd>
              </dl>
              </a></li>
            <li><a href="">
              <dl>
                <dt> <img alt="img1" src="<?php echo base_url(); ?>/assets/images/106.jpg"> </dt>
                <dd>
                  <h6>Sai Pawan residency</h6>
                  <span>Gajuwaka</span> </dd>
              </dl>
              </a></li>
          </ul>
        </div>
        <div class="hotels_col">
          <h3>Apartments</h3>
          <ul>
            <li><a href="">
              <dl>
                <dt> <img alt="img1" src="<?php echo base_url(); ?>/assets/images/101.jpg"> </dt>
                <dd>
                  <h6>Naidu Projects yendada</h6>
                  <span>Yendada</span> </dd>
              </dl>
              </a></li>
            <li><a href="">
              <dl>
                <dt> <img alt="img1" src="<?php echo base_url(); ?>/assets/images/102.jpg"> </dt>
                <dd>
                  <h6>Viraha Residency</h6>
                  <span>Viman Nagar</span> </dd>
              </dl>
              </a></li>
            <li><a href="">
              <dl>
                <dt> <img alt="img1" src="<?php echo base_url(); ?>/assets/images/103.jpg"> </dt>
                <dd>
                  <h6>Sri Brindavanam</h6>
                  <span>Seetammadhara</span> </dd>
              </dl>
              </a></li>
          </ul>
        </div>
      </div> -->
      <div class="clear"></div>
    </div>
    <div class="other_dest">
     <!--  <div class="pageWidth"> <span>Cities:</span>  <a href="">Vizag</a> <a href="">Vijayawada</a> </div> -->
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </section>
  <!-- /section -->
 
  <!-- /footer --> 
</div>
<!-- /wrapper --> 
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
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>


<script>
$(document).ready(function(){
 $('#country').change(function(){
  var country_id = $('#country').val();
  if(country_id == 'Hyderabad')
  {
    $("#hyd_list").show();
    $("#vizag_list").hide();
    $("#bangalore_list").hide();
    $("#vijayawada_list").hide();
  }
  else if(country_id == 'Vizag')
  {
   $("#vizag_list").show();
   $("#hyd_list").hide();
   $("#bangalore_list").hide();
   $("#vijayawada_list").hide();
  }
  else if(country_id == 'Bangalore')
  {
   $("#vizag_list").hide();
   $("#hyd_list").hide();
   $("#vijayawada_list").hide();
   $("#bangalore_list").show();
  }
   else if(country_id == 'Vijayawada')
  {
   $("#vizag_list").hide();
   $("#hyd_list").hide();
   $("#vijayawada_list").show();
   $("#bangalore_list").hide();
  }
  else{
    $("#vizag_list").show();
     $("#hyd_list").hide();
   $("#bangalore_list").hide();
   $("#vijayawada_list").hide();
  }
 });


 
});
</script>