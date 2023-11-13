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
<div class="container">
  <div class="panel-group">
    <div class="panel panel-danger">
      <div class="panel-heading"><h2 style="text-align: center;"><img src="<?php echo base_url() ?>assets/images/diya.gif" style="height: 100px;">&nbsp;&nbsp;EswariHomes - Lighting Diyas Contest - 2021&nbsp;&nbsp;<img src="<?php echo base_url() ?>assets/images/diya.gif"  style="height: 100px;"></h2></div>
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
  <div class="col-md-4"><img src="<?php echo base_url() ?>assets/images/diya_contest.jpeg" alt="diya" style="height: 450px; width: auto;"> </div>
  <div class="col-md-8">
  	
  	<form action="" method="post" style="margin-top: 20px;" enctype="multipart/form-data">
    <div class="form-group col-md-6">
      <label for="email">Your Name</label>
      <input type="text" class="form-control" id="email" placeholder="Enter your name" name="name">
      <?php echo !empty($post['name'])?$post['name']:''; ?>
       <?php echo form_error('name','<p class="msg2 help-block text-danger">','</p>'); ?>
    </div>
    <div class="form-group col-md-6">
      <label for="pwd">Your Email</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter your email" name="email">
       <?php echo !empty($post['email'])?$post['email']:''; ?>
       <?php echo form_error('email','<p class="msg2 help-block text-danger">','</p>'); ?>

    </div>
    <div class="form-group col-md-6">
      <label for="email">Your Mobile</label>
      <input type="text" class="form-control" id="email" placeholder="Enter your mobile" name="mobile">
       <?php echo !empty($post['mobile'])?$post['mobile']:''; ?>
       <?php echo form_error('mobile','<p class="msg2 help-block text-danger">','</p>'); ?>
    </div>
    <div class="form-group col-md-6">
      <label for="email">Customer Type</label>
      <select class="form-control" name="customer_type" id="slct" onchange="change();">
      	<option value="">Select Customer Type</option>
      	<option value="Existing">Existing customer</option>
      	<option value="New">New customer</option>
      </select>
       <?php echo !empty($post['customer_type'])?$post['customer_type']:''; ?>
       <?php echo form_error('customer_type','<p class="msg2 help-block text-danger">','</p>'); ?>
    </div>
     <div class="form-group" id="container">
     
    </div>
    <div class="form-group col-md-6">
      <label for="pwd">Upload your selfie</label>
      <input type="file" class="form-control" id="pwd" name="pic">
       <?php echo !empty($post['pic'])?$post['pic']:''; ?>
       <?php echo form_error('pic','<p class="msg2 help-block text-danger">','</p>'); ?>
    </div>
    <div class="form-group col-md-7">
      <input type="hidden" name="contest" value="diwali">
    <input type="submit" class="btn btn-default col-md-3" value="Submit" name="upload_pic" id="seedoc"  disabled="">
    </div>
  </form>
  </div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
	function change() {
        var select = document.getElementById("slct");
        var divv = document.getElementById("container");
        var value = select.value;
      	 if (value == 0) {
            toAppend = ""; divv.innerHTML=toAppend; return;
            }
        if (value == 'Existing') {
            toAppend = " <div class='form-group col-md-6'><label for='pwd'>Project Name</label><input type='text' class='form-control' id='pwd' placeholder='Enter Project Name' name='project_name'></div><div class='form-group col-md-6'><label for='pwd'>Flat Number</label><input type='text' class='form-control' id='pwd' placeholder='Enter Flat Number' name='flat_number'></div>"; divv.innerHTML=toAppend; return;
            }
            if (value == 'New') {
                toAppend = "<div class='form-group col-md-6'><label for='pwd'>Wish to buy a property</label><input type='text' class='form-control' id='pwd' placeholder='Enter Wish to buy a property' name='wish_to_buy_a_property'></div><div class='form-group col-md-6'><label for='pwd'>Area</label><input type='text' class='form-control' id='pwd' placeholder='Enter Area' name='area'></div><div class='form-group col-md-6'><label for='pwd'>Flat</label><select class='form-control' id='pwd' name='flat'><option value=''>Select Flat</option><option value='2BHK'>2BHK</option><option value='3BHK'>3BHK</option></select></div><div class='form-group col-md-6'><label for='pwd'>Budget</label><select class='form-control' id='pwd' name='budget'><option value=''>Select Budget</option><option value='Below 20 lakhs'>Below 20 lakhs</option><option value='20 to 30 lakhs'>20 to 30 lakhs</option><option value='30 to 50 lakhs'>30 to 50 lakhs</option><option value='Upto 1 cr'>Upto 1 cr</option><option value='Above 1 cr'>Above 1 cr</option></select></div>";divv.innerHTML = toAppend;  return;
            }
            }
              $('#slct').on("change",function(){
    if($(this).val() == ''){
        $('#seedoc').attr('disabled','disabled'); //Disables if Values of Select Empty
    }else{
        $('#seedoc').removeAttr('disabled');  
    }
});
</script>