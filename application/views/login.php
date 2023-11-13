  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <style type="text/css">
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
  </style>
  <section class="page-title" style="background-image:url(http://eswarigroup.com/public/images/admin/20190313072647606_page_banner.jpg)">
     <div class="pageWidth">
          <div class="clearfix">
               <div class="pull-left">
                    <h1>Login</h1>
                </div>
                <div class="pull-right">
                    <ul class="page-breadcrumb">
                        <li><a href="http://eswarihomes.com">Home</a></li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

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
  <div class="container">
    <h5></h5>
  <div class="panel-group col-md-6">
  <div class="panel panel-primary"  style="border-color: #58BF93;">
      <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 

        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
  <div class="panel-heading" style="background-color: #58BF93;">Login Here...</div>
<form action="login" method="post">
   <div class="panel-body">
     <div class="form-group">
       <div class="col-sm-12">
          <input type="email" class="form-control" placeholder="Email" name="email">
            <?php echo form_error('email','<p class="help-block">','</p>'); ?>
          </div><br><br><br><br>
           <div class="col-sm-12">
          <input type="password" class="form-control" placeholder="Password" name="password">
             <?php echo form_error('password','<p class="help-block">','</p>'); ?>
           </div>
        </div>
        <br><br><br><br>
        <div class="form-group">
       <div class="col-sm-4">
            <input type="submit" class="btn btn-primary btn-block" name="loginSubmit" value="Sign In" style="background-color: #58BF93;">
          </div>
         <div class="col-sm-8">
        <a href="<?php echo base_url(); ?>home/register" class="text-center"><b>New Member? Register Now..</b></a>
      </div>
      
        </div>
            <br><br><br><br>
      </div>
      </form>

      </div>
       
  </div>
</div>
     