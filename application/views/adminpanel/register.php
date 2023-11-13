
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Eswari</b>Homes</a>
  </div>
  <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 

        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Registeration</p>

      <form action="register" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="First Name" name="admin_firstname">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
          <?php echo form_error('admin_firstname','<p class="help-block">','</p>'); ?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Last Name" name="admin_lastname">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
           <?php echo form_error('admin_lastname','<p class="help-block">','</p>'); ?>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="admin_email">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
            <?php echo form_error('admin_email','<p class="help-block">','</p>'); ?>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="admin_pwd">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
                  <?php echo form_error('admin_pwd','<p class="help-block">','</p>'); ?>
          <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Mobile" name="admin_mobile">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
          <?php echo form_error('admin_mobile','<p class="help-block">','</p>'); ?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Area" name="admin_area">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
          <?php echo form_error('admin_area','<p class="help-block">','</p>'); ?>
          <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="City" name="admin_city">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
          <?php echo form_error('admin_city','<p class="help-block">','</p>'); ?>
          <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="District" name="admin_district">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
          <?php echo form_error('admin_district','<p class="help-block">','</p>'); ?>
           <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="State" name="admin_state">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
          <?php echo form_error('admin_state','<p class="help-block">','</p>'); ?>
           <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Pincode" name="admin_pincode">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
          <?php echo form_error('admin_pincode','<p class="help-block">','</p>'); ?>
           <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Company" name="admin_company">
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
          <?php echo form_error('admin_company','<p class="help-block">','</p>'); ?>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="submit" class="btn btn-primary btn-block" value="Register"  name="signupSubmit">
          </div>
          <!-- /.col -->
        </div>
      </form>


      <a href="<?php echo base_url(); ?>adminpanel/login/dealerlogin" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->


