   <style>
    @media screen and (min-width:350px) and (max-width: 900px)
 {
    .content-column2 {
    display: block!important;
}
 }
    .form1
    { 
    
    width: 21%;
    padding: 30px;
    margin: 0 auto;
    margin-top: 20px;
    margin-bottom: 20px;
   
    }    
.form-control1
{
    background: #f5f5f5;
    border: 2px solid #0a507b;
    height: 45px;
    line-height: 46px;
    font-size: 14px;
    width: 500px;
    display: inherit;
    color: #333;
    margin-bottom: 18px;
    margin-right: 56px;
}
.form2
{
    width: 100px;
    background: #0b4c75;
    color: #fff;
    text-align: center;
   
    margin-left: 150px;
}
.msg1
{
    text-align:center;
    padding:2px;
    margin-top:10px;
    color:red;
}
.msg2{
    color: red;
     width:210px;
}
.sidebar .sidebar-title {
    position: relative;
    margin-bottom: 15px;
}
.sidebar .sidebar-title h3 {
    position: relative;
    display: block;
    font-size: 22px;
    line-height: 1.4em;
    text-transform: capitalize;
    font-weight: 700;
    color: #1a1d1f;
    padding-bottom: 15px;
}
.sidebar .sidebar-title .separator {
    position: relative;
    width: 50px;
    height: 4px;
}
.sidebar .sidebar-title .separator:before {
    position: absolute;
    content: '';
    left: 0px;
    top: 0px;
    width: 25px;
    height: 4px;
    background-color: #1a1d1f;
}
.sidebar .sidebar-title .separator:after {
    position: absolute;
    content: '';
    right: 0px;
    top: 0px;
    width: 25px;
    height: 4px;
    background-color: #dc292e;
}
.list-style-one {
    position: relative;
    margin-bottom: 30px;
}
.list-style-one.address-list li {
    position: relative;
    padding-left: 45px;
    margin-bottom: 15px;
    color: #666666;
    font-size: 18px;
    font-weight: 400;
}
.list-style-one.address-list li  {
   list-style-type:none;
}
.list-style-one.address-list li .icon {
    position: absolute;
    left: 0px;
    top: 0;
    color: #ffffff;
    border-radius: 3px;
    background: #e92b2f;
    font-size: 18px;
    width: 30px;
    height: 30px;
    text-align: center;
    line-height: 32px;
}
.fa-map-marker:before {
    content: "\f041";
}
.content-column
{
    width:60%;
    display:inline-flex;
}
.content-column2
{
    width:100%;
    display:inline-flex;
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
    <!-- /banner -->
    <div class="pageWidth">
        <div class="msg1">
            <?php 
        if(!empty($success_msg)){
            echo $success_msg;
        }elseif(!empty($error_msg)){
            echo $error_msg;
        }
    ?>
</div>
    <div class="sec-title centered">
<h2 style="text-align: center;">Get in touch with us</h2>
<div class="separator"></div>
                        </div>
   


                         <div class="content-column2 col-md-3 col-sm-12 col-xs-12">
                <div class="address-block">
                    <div class="sidebar footer-widget links-widget">
                        <div class="sidebar-title">
                            <h3>Visakhapatnam Office</h3>
                            <div class="separator"></div>
                        </div>
                        <ul class="address-list list-style-one style-two">
                            <li><span class="icon fa fa-map-marker"></span>50-96-8/4.MIG 22,
 Northextension,
Main road, Seethammadhara ,<br>
Visakhapatnam 530013.</li>
                            <li><span class="icon fa fa-phone"></span>Call Us 0891 257 1133</li>
                            <li><span class="icon fa fa-mobile"></span>Call Us +91 96666 96889</li>
                            <li><span class="icon fa fa-envelope-o"></span>info@eswarihomes.com</li>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3800.07896514859!2d83.3068836148813!3d17.740918087867676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb3586b53e650d323!2zMTfCsDQ0JzI3LjMiTiA4M8KwMTgnMzIuNyJF!5e0!3m2!1sen!2sin!4v1668930265852!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            
                        </ul>
                    </div>
                </div>

                 <div class="address-block" style="margin-left: 5px;">
                    <div class="sidebar footer-widget links-widget">
                        <div class="sidebar-title">
                            <h3>Vijayawada Office</h3>
                            <div class="separator"></div>
                        </div>
                        <ul class="address-list list-style-one style-two">
                            <li><span class="icon fa fa-map-marker"></span>LIG A85, NORTHEXTENSION,<br> seethammadhara 
Beside lane of SBI seethammadhara branch <br>
Visakhapatnam, 530013</li>
                            <li><span class="icon fa fa-phone"></span>Call Us 0891 257 1133</li>
                            <li><span class="icon fa fa-mobile"></span>Call Us +91 837 463 1133</li>
                            <li><span class="icon fa fa-envelope-o"></span>info@eswarihomes.com</li>
                          
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.536745597731!2d80.64992521401415!3d16.498978532161743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a35fbcab1e20de7%3A0xfb5319284c069e04!2sEswari%20Homes!5e0!3m2!1sen!2sin!4v1626327951976!5m2!1sen!2sin" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                        </ul>
                    </div>
                </div>
        
    
                        </div>

                         <div class="sec-title centered" style="margin-bottom: 0px;">
<h2 style="text-align: center;">Contact Us</h2>
<div class="separator"></div>
                        </div>
                           <div class="content-column col-md-3 col-sm-12 col-xs-12">
            
                    <form method="post" action="" class="form1">

                           
                            <input type="text" class="form-control1" name="name" placeholder="Enter Name" value="<?php echo !empty($post['name'])?$post['name']:''; ?>">
                            <?php echo form_error('name','<p class="msg2 help-block text-danger">','</p>'); ?>

                            
                            <input type="email" class="form-control1" name="email" placeholder="Enter Email" value="<?php echo !empty($post['email'])?$post['email']:''; ?>">
                            <?php echo form_error('email','<p class="msg2 help-block text-danger">','</p>'); ?>

                       
                            <input type="text" class="form-control1" name="phno" placeholder="Enter Mobile" value="<?php echo !empty($post['phno'])?$post['phno']:''; ?>">
                            <?php echo form_error('phno','<p class="msg2 help-block text-danger">','</p>'); ?>

           
                            <textarea name="content" class="form-control1" placeholder="Enter post content"><?php echo !empty($post['content'])?$post['content']:''; ?></textarea>
                            <?php echo form_error('content','<p class="msg2 text-danger">','</p>'); ?>
                        <input type="submit" name="postSubmit" class="form2 btn btn-primary" value="Submit"/>
                    </form>
                        </div>


                </div>

            
                