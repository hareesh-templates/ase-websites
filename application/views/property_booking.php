<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>  

<style>

  .page-title {
    position: relative;
    padding: 100px 0px 100px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
}
.page-title:before {
    position: absolute;
    content: '';
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    display: block;
    background-color: rgba(26,29,31,0.40);
}
.auto-container {
    position: static;
    max-width: 1200px;
    padding: 0px 15px;
    margin: 0 auto;
}
.page-title h1 {
    position: relative;
    color: #ffffff;
    font-size: 36px;
    font-weight: 800;
    line-height: 1em;
    margin-bottom: 22px;
    text-transform: uppercase;
}
.page-title .page-breadcrumb {
    position: relative;
}
.page-title .page-breadcrumb li {
    position: relative;
    display: inline-block;
    margin-right: 12px;
    padding-right: 14px;
    color: #ffffff;
    font-size: 18px;
    font-weight: 400;
    text-transform: uppercase;
}
.page-title .page-breadcrumb li a {
    color: #dc292e;
}
.page-title .page-breadcrumb li:after {
    position: absolute;
    content: '/';
    right: -4px;
    top: 0px;
    color: #ffffff;
    font-family: 'FontAwesome';
}
.about-section {
    position: relative;
    padding: 40px 0px 40px;
    background-repeat: no-repeat;
    background-position: center center;
}
.about-section .content-column .inner-column .sec-title {
    position: relative;
    margin-bottom: 40px;
}
.sec-title .title {
    position: relative;
    font-size: 18px;
    color: #dc292e;
    font-weight: 500;
    margin-bottom: 10px;
    font-family: 'Yantramanav', sans-serif;
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
.about-section .content-column .inner-column .sec-title {
    position: relative;
    margin-bottom: 40px;
}
.services-section.style-two {
    padding-bottom: 50px;
}
.bg-grey {
    background: #f7f7f7;
}
.services-section {
    position: relative;
    padding: 50px 0px 50px;
}
.services-block .inner-box {
    position: relative;
    padding: 30px 15px;
    text-align: center;
    background: #fff;
    border: 1px solid #e0e0e0;
    -webkit-transition: all 300ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    -moz-transition: all 300ms ease;
    transition: all 300ms ease;
}
.services-block .inner-box .icon-box {
    position: relative;
    color: #1a1d1f;
    font-size: 60px;
    line-height: 1em;
    margin-bottom: 15px;
    -webkit-transition: all 300ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    -moz-transition: all 300ms ease;
    transition: all 300ms ease;
    transition: all 0.7s ease 0s!important;
}
.services-block .inner-box h3 {
    position: relative;
    color: #1a1d1f;
    font-size: 22px;
    font-weight: 700;
    line-height: 1.2em;
    margin-bottom: 12px;
}
.services-block .inner-box .text {
    position: relative;
    color: #666666;
    font-size: 16px;
    line-height: 1.7em;
}
.text {
    position: relative;
    line-height: 1.8em;
}
.menu nav li a {
    text-decoration: none!important;
    padding: 18px 22px;
    display: block;
}
.menu nav ul{
        margin-bottom: 0rem!important;
}
</style>

<div class="banner" style="display: none;">
      <div class="master-slider ms-skin-black-2 round-skin" id="masterslider">
        <!-- <div class="ms-slide slide-1" style="z-index: 10" data-delay="6"> <img src="images/blank.gif" data-src="<?php echo base_url(); ?>/assets/images/slider/2.jpg" alt="luxury apartments in visakhapatnam"/>
          <div class="maskDiv"></div>
        </div> -->
        <div class="ms-slide slide-1" style="z-index: 10" data-delay="6"> <img src="images/blank.gif" data-src="<?php echo base_url(); ?>/assets/images/slider/4.jpg" alt="luxury apartments in visakhapatnam"/>
          <div class="maskDiv"></div>
        </div>
        <div class="ms-slide slide-1" style="z-index: 10" data-delay="6"> <img src="images/blank.gif" data-src="<?php echo base_url(); ?>/assets/images/slider/1.jpg" alt="luxury apartments in visakhapatnam"/>
          <div class="maskDiv"></div>
        </div>
      </div>
    </div>
    <!-- /banner -->


<section class="page-title" style="background-image:url(http://eswarigroup.com/public/images/admin/20190313072647606_page_banner.jpg); display: none;">
     <div class="pageWidth">
          <div class="clearfix">
               <div class="pull-left">
                    <h1>About Us</h1>
                </div>
                <div class="pull-right">
                    <ul class="page-breadcrumb">
                        <li><a href="http://eswarihomes.com">Home</a></li>
                        <li>property_finding</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

  
    <section class="services-section style-two bg-grey">
     <div class="pageWidth">
          
            <div class="row clearfix">
                
                <!--Services Block-->
                <div class="services-block col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                       
                        <h3>Property Booking</h3>
                        <div class="text"><p><span style="font-family:Georgia,serif;position: relative;
    color: #666666;
    font-size: 16px;
    line-height: 1.7em;transition: all 0.7s ease 0s;">
Once your full inspection of your selected property is done, the property booking agreement is presented to you for clarification of all possible doubts. Our real estate lawyers in the team focuses on delivering you important messages regarding your legal rights towards the property.



 </span></p>

<p><span style="font-family:Georgia,serif;position: relative;
    color: #666666;
    font-size: 16px;
    line-height: 1.7em;transition: all 0.7s ease 0s;">
It is highly important to be aware of the terms and conditions mentioned in the booking agreement and also if you do not agree with any point or clauses you’re given the choice of using your personal individual right to negotiate and get it modified. The homebuyers will enter into an agreement for sale first and then pay the booking amount. The advantage  they get is that they are then aware of each and every detail of the project as well as the terms and conditions before making any payment to the developer. 



</span></p>
<p><span style="font-family:Georgia,serif;position: relative;
    color: #666666;
    font-size: 16px;
    line-height: 1.7em;transition: all 0.7s ease 0s;">
Our company encourages the idea of letting our customers know about ownership even before they book a property with us. When you book an under construction property or an installment based property, the responsibility for payments prescribed in the agreement rests on you. 

</span>

</p>
</div>
                    </div>
                </div>
                
                <!--Services Block-->
                <div class="services-block col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                         <div class="icon-box">
                             <span><img src="<?php echo base_url() ?>assets/images/es13.jpg" width="100%" alt="luxury apartments in visakhapatnam"></span>
                        </div>
                       
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>
       