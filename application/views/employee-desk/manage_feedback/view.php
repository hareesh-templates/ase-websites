<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style type="text/css">
  @media (min-width: 1200px){
.container {
  float: right!important;
    width: 1100px!important;
}
}
</style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 

        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
  <div class="container">
    <h5></h5>
  <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">Feedbback User...</div>
            <form method="post" action="" enctype="multipart/form-data">
                
            <div class="form-group">
              <div class="col-sm-6">
                    <input type="text" name="name" class="form-control" placeholder="Enter Name" value="<?php echo !empty($property['name'])?$property['name']:''; ?>" readonly>
                    <?php echo form_error('name','<p class="help-block text-danger">','</p>'); ?>
                </div>
                 <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo !empty($property['email'])?$property['email']:''; ?>" readonly>
               <?php echo form_error('email','<p class="help-block">','</p>'); ?>
              </div>
              
          </div><br><br><br>

         


                <div class="form-group">
                  <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="Mobile" name="mobile" value="<?php echo !empty($property['mobile'])?$property['mobile']:''; ?>" readonly>
               <?php echo form_error('mobile','<p class="help-block">','</p>'); ?>
              </div>

               <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="Mobile" name="mobile" value="<?php echo base_url(); ?>feedbackform/fillup?form=<?php echo !empty($property['id'])?$property['id']:''; ?>" readonly>
               <?php echo form_error('mobile','<p class="help-block">','</p>'); ?>
              </div>
                </div><br><br><br>
             
                
                <input type="hidden" name="id" value="<?php echo !empty($property['id'])?$property['id']:''; ?>">

            </form>
            </div>


  </div>
</div>
       