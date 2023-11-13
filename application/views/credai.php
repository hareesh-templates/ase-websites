<head><title>CREDAI PROPERTY SHOW - 2021</title></head>
<link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/images/E.png" type="image/x-icon">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    label{
    font-family: cursive;
    color: #a94442;
    font-weight: bold;
    font-size: medium;
    }
    .btn-default {
    font-family: cursive;
    font-weight: bold;
    font-size: medium;
    color: #fff;
    background-color: #dc5c25;
    border-color: #ccc;
}
.panel-danger>.panel-heading {
    color: #a94442;
    background-color: #f6fcff;
    border-color: #f6fcff;
}
  </style>
<div class="container" style="margin-top:50px;">
  <div class="panel-group">
    <div class="panel panel-danger">
      <div class="panel-heading"><h2 style="text-align: center;"><img src="<?php echo base_url() ?>assets/images/logo2.png">&nbsp;&nbsp; CREDAI PROPERTY SHOW - 2021</h2></div>
      <div class="panel-body">
         <div class="msg1">
            <?php 
        if(!empty($success_msg)){
            echo $success_msg;
        }elseif(!empty($error_msg)){
            echo $error_msg;
        }
    ?>
</div>
  <div class="col-md-2"></div>
  <div class="col-md-8">
    
    <form action="" method="post" style="margin-top: 20px;" enctype="multipart/form-data">
    <div class="form-group col-md-6">
      <label for="email">Your Name</label>
      <input type="text" class="form-control" id="email" placeholder="Enter your name" name="name">
      <?php echo !empty($post['name'])?$post['name']:''; ?>
       <?php echo form_error('name','<p class="msg2 help-block text-danger">','</p>'); ?>
    </div>
   
    <div class="form-group col-md-6">
      <label for="email">Your Mobile</label>
      <input type="text" class="form-control" id="email" placeholder="Enter your mobile" name="mobile">
       <?php echo !empty($post['mobile'])?$post['mobile']:''; ?>
       <?php echo form_error('mobile','<p class="msg2 help-block text-danger">','</p>'); ?>
    </div>
       
      <div class="form-group col-md-6">
      <label for="email">Property</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Property" name="property">
       <?php echo !empty($post['property'])?$post['property']:''; ?>
       <?php echo form_error('property','<p class="msg2 help-block text-danger">','</p>'); ?>
    </div>

    <div class="form-group col-md-6">
      <label for="email">Preffered Location</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Preffered Location" name="location">
       <?php echo !empty($post['location'])?$post['location']:''; ?>
       <?php echo form_error('location','<p class="msg2 help-block text-danger">','</p>'); ?>
    </div>

     <div class="form-group col-md-6">
      <label for="email">Budget</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Budget" name="budget">
       <?php echo !empty($post['budget'])?$post['budget']:''; ?>
       <?php echo form_error('budget','<p class="msg2 help-block text-danger">','</p>'); ?>
    </div>

     <div class="form-group col-md-6">
      <label for="email">Employee</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Employee Name" name="employee">
       <?php echo !empty($post['employee'])?$post['employee']:''; ?>
       <?php echo form_error('employee','<p class="msg2 help-block text-danger">','</p>'); ?>
    </div>
       
    <div class="form-group col-md-7">
      <input type="hidden" name="contest" value="diwali">
    <input type="submit" class="btn btn-default col-md-3" value="Submit" name="upload_pic">
    </div>
  </form>
  </div>
</div>
</div>
</div>
</div>
