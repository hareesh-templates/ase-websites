
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
                    <h1>Register</h1>
                </div>
                <div class="pull-right">
                    <ul class="page-breadcrumb">
                        <li><a href="http://eswarihomes.com">Home</a></li>
                        <li>Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

  <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 

        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
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
  <div class="panel-group">
    <div class="panel panel-primary"  style="border-color: #58BF93;">
      <div class="panel-heading"  style="background-color: #58BF93;">Register Here...</div>
       <form action="register" method="post">
      <div class="panel-body">
            <div class="form-group">
              <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="First Name" name="admin_firstname">
                <?php echo form_error('admin_firstname','<p class="help-block">','</p>'); ?>
              </div>
               <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="Last Name" name="admin_lastname">
                <?php echo form_error('admin_lastname','<p class="help-block">','</p>'); ?>
              </div>
          </div><br><br>
          <div class="form-group">
              <div class="col-sm-6">
          <input type="email" class="form-control" placeholder="Email" name="admin_email">
               <?php echo form_error('admin_email','<p class="help-block">','</p>'); ?>
              </div>
               <div class="col-sm-6">
<input type="password" class="form-control" placeholder="Password" name="admin_pwd">
              <?php echo form_error('admin_pwd','<p class="help-block">','</p>'); ?>          
                  </div>
          </div><br><br>
          <div class="form-group">
              <div class="col-sm-6">
 <input type="text" class="form-control" placeholder="Mobile" name="admin_mobile">
          <?php echo form_error('admin_mobile','<p class="help-block">','</p>'); ?>            
            </div>
               <div class="col-sm-6">
         <select class="form-control" name="admin_type">
           <option>Select Type</option>
           <option value="dealer">Dealer</option>
           <option value="agent">Agent</option>
         </select>
          <?php echo form_error('admin_type','<p class="help-block">','</p>'); ?>           
             </div>
          </div><br><br>
          <div class="form-group">
              <div class="col-sm-6">
 <input type="text" class="form-control" placeholder="Area" name="admin_area">
          <?php echo form_error('admin_area','<p class="help-block">','</p>'); ?>          
              </div>
               <div class="col-sm-6">
 <input type="text" class="form-control" placeholder="City" name="admin_city">
          <?php echo form_error('admin_city','<p class="help-block">','</p>'); ?>           
             </div>
          </div><br><br>
          <div class="form-group">
              <div class="col-sm-6">
<input type="text" class="form-control" placeholder="District" name="admin_district">
          <?php echo form_error('admin_district','<p class="help-block">','</p>'); ?>         
               </div>
               <div class="col-sm-6">
 <input type="text" class="form-control" placeholder="State" name="admin_state">
          <?php echo form_error('admin_state','<p class="help-block">','</p>'); ?>           
             </div>
          </div><br><br>
          <div class="form-group">
              <div class="col-sm-6">
<input type="text" class="form-control" placeholder="Pincode" name="admin_pincode">
          <?php echo form_error('admin_pincode','<p class="help-block">','</p>'); ?>         
               </div>
              <!--  <div class="col-sm-6">
 <input type="text" class="form-control" placeholder="Company" name="admin_company">
          <?php echo form_error('admin_company','<p class="help-block">','</p>'); ?>          
              </div> -->
          </div><br><br>
          <div class="form-group">
              <div class="col-sm-2">
           <input type="submit" class="btn btn-primary btn-block" value="Register"  name="signupSubmit"  style="background-color: #58BF93;">
         </div>
         <div class="col-sm-8">
           <a href="<?php echo base_url(); ?>home/login" class="text-center" ><b>Registered User? Login Now..</b></a>
         </div>

       </div>
      </div>
      </form>
    </div>

  </div>
</div>
 