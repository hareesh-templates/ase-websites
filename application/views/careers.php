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
        <!-- <div class="ms-slide slide-1" style="z-index: 10" data-delay="6"> <img src="images/blank.gif" data-src="<?php echo base_url(); ?>/assets/images/slider/2.jpg" alt="slide1"/>
          <div class="maskDiv"></div>
        </div> -->
        <div class="ms-slide slide-1" style="z-index: 10" data-delay="6"> <img src="images/blank.gif" data-src="<?php echo base_url(); ?>/assets/images/slider/4.jpg" alt="slide1"/>
          <div class="maskDiv"></div>
        </div>
        <div class="ms-slide slide-1" style="z-index: 10" data-delay="6"> <img src="images/blank.gif" data-src="<?php echo base_url(); ?>/assets/images/slider/1.jpg" alt="slide1"/>
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
<h2 style="text-align: center;">Join with us</h2>
<div class="separator"></div>
                        </div>
   
                           <div class="content-column col-md-3 col-sm-12 col-xs-12">
            
                    <form method="post" action="" class="form1" enctype="multipart/form-data">

                           
                            <input type="text" class="form-control1" name="name" placeholder="Enter Name" value="<?php echo !empty($post['name'])?$post['name']:''; ?>">
                            <?php echo form_error('name','<p class="msg2 help-block text-danger">','</p>'); ?>

                            
                            <input type="email" class="form-control1" name="email" placeholder="Enter Email" value="<?php echo !empty($post['email'])?$post['email']:''; ?>">
                            <?php echo form_error('email','<p class="msg2 help-block text-danger">','</p>'); ?>

                       
                            <input type="text" class="form-control1" name="phno" placeholder="Enter Mobile" value="<?php echo !empty($post['phno'])?$post['phno']:''; ?>">
                            <?php echo form_error('phno','<p class="msg2 help-block text-danger">','</p>'); ?>
                            <input type="file" class="form-control1" name="resume" value="<?php echo !empty($post['resume'])?$post['resume']:''; ?>">
                            <?php echo form_error('resume','<p class="msg2 help-block text-danger">','</p>'); ?>
            
                            <textarea name="content" class="form-control1" placeholder="Applied for.."><?php echo !empty($post['content'])?$post['content']:''; ?></textarea>
                            <?php echo form_error('content','<p class="msg2 text-danger">','</p>'); ?>
                        <input type="submit" name="postSubmit" class="form2 btn btn-primary" value="Submit"/>
                         
                    </form>
                        </div>


                </div>

            
                