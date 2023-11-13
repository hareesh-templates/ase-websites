 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	body{
  		background-image: url("assets/images/slider/33.jpeg");
  	}
  	.pageWidth{
  		background-color: #fff;
  	}
  </style>
<div class="container main_enquiry">
	<div class="row col-md-12">
		<div class="col-md-6">
			
		</div>
		<div class="col-md-6">
	<div class="panel-group" style="margin-top:30px; margin-bottom: 30px;">
     <?php if(!empty($success_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-success" style="text-align: center;"><?php echo $success_msg; ?></div>
    </div>
    <?php }elseif(!empty($error_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-danger" style="text-align: center;"><?php echo $error_msg; ?></div>
    </div>
    <?php } ?>
    <div class="panel panel-success">
      <div class="panel-heading">
      	<h1 style="text-align:center;color: #fbb340;">Enquiry Form</h1>
      	  <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="title">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name">
                            <?php echo form_error('name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                      <div class="form-group">
                            <label for="title">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter Name">
                            <?php echo form_error('email','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="title">Mobile</label>
                            <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile">
                            <?php echo form_error('mobile','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                          <div class="form-group">
                            <label for="title">Location</label>
                            <input type="text" class="form-control" name="location" placeholder="Enter Location">
                            <?php echo form_error('location','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                          <div class="form-group">
                            <label for="title">Budget</label>
                            <input type="text" class="form-control" name="budget" placeholder="Enter Budget">
                            <?php echo form_error('budget','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="title">Flat</label>
                            <select name="flat" class="form-control">
                            	<option value="">Select Flat</option>
                            	<option value="2BHK">2BHK</option>
                            	<option value="3BHK">3BHK</option>
                            </select>
                            <?php echo form_error('flat','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <input type="submit" name="postSubmit" class="btn btn-primary" value="Enquiry Now" style="background-color: #fbb340;border-color: #fbb340;" />
                    </form>
      </div>
    </div>

  </div>
	</div>
	
</div>
</div>