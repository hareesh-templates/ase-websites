 <style type="text/css">
   .form-group{
    display: flex;
   }
 </style>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Post Property</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 

        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Post Booking Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="" enctype="multipart/form-data">
                 <div class="card-body">
                    <div class="form-group col-md-12">
                         <div class="col-sm-6">
                            <label for="exampleInputEmail1">Location</label>
                               <!--  <input type="text" name="location" class="form-control" placeholder="Enter Location" value="<?php echo !empty($property['location'])?$property['location']:''; ?>" > -->
                                 <select name="location"  id="location"  class="form-control">
                                    <option value="">Select City</option>
                               <?php
                                foreach($country as $row)
                                {
                                 echo '<option value="'.$row->city.'">'.$row->city.'</option>';
                                }
                                ?>
                                </select>
                                <?php echo form_error('location','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="col-sm-6">
                            <label for="exampleInputEmail1">Area</label>
                                <!-- <input type="text" name="area" class="form-control" placeholder="Enter Area" value="<?php echo !empty($property['area'])?$property['area']:''; ?>" > -->
                                 <select name="area"  id="states"  class="form-control">
                                    <option value="">Select Area</option>
                                    
                                </select>
                                <?php echo form_error('area','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                    </div>
                   
            <div class="form-group col-md-12">
              <div class="col-sm-6">
                <label for="exampleInputEmail1">Project Name</label>
                      <!--  <select name="project_name"  id="country" class="form-control">
                      <option value="">Select Project Name</option>
                     <?php foreach($property_name as $property_name){ ?>
                          <option value="<?php echo $property_name['id']; ?>"><?php echo $property_name['title']; ?></option>
                                              <?php } ?>
                       </select>  -->
                       <select name="project_name"  id="country"  class="form-control">
                        <option value="">Select Project Name</option>
                        
                    </select>
                  
                    <?php echo form_error('project_name','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col-sm-6">
                <label for="exampleInputEmail1">Total sqft</label>
                   <!--  <input type="text" name="total_sqft" class="form-control" placeholder="Enter Total sqft" value="<?php echo !empty($property['total_sqft'])?$property['total_sqft']:''; ?>" > -->
                    <select name="total_sqft"  id="state"  class="form-control">
                        <option value="">Select Sqft</option>
                        
                    </select>
                    <?php echo form_error('total_sqft','<p class="help-block text-danger">','</p>'); ?>
                </div>
              
          </div>

          <div class="form-group col-md-12">
                <div class="col-sm-6">
                <label for="exampleInputEmail1">Price per sqft</label>
                   <!--  <input type="text" name="price_sqft" class="form-control" placeholder="Enter Price per sqft" value="<?php echo !empty($property['price_sqft'])?$property['price_sqft']:''; ?>" > -->
                    <select name="price_sqft" id="price" class="form-control">
                        <option value="">Select Price</option>
                    </select>
                    <?php echo form_error('price_sqft','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col-sm-6">
                <label for="exampleInputEmail1">Flatno</label>
                    <input type="text" name="flatno" class="form-control" placeholder="Enter Flatno" value="<?php echo !empty($property['flatno'])?$property['flatno']:''; ?>" >
                    <?php echo form_error('flatno','<p class="help-block text-danger">','</p>'); ?>
                </div>
          </div>

          <div class="form-group col-md-12">
              <div class="col-sm-6">
                <label for="exampleInputEmail1">Block</label>
                    <input type="text" name="block" class="form-control" placeholder="Enter Block" value="<?php echo !empty($property['block'])?$property['block']:''; ?>" >
                    <?php echo form_error('block','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col-sm-6">
                <label for="exampleInputEmail1">Floor</label>
                    <input type="text" name="floor" class="form-control" placeholder="Enter Floor" value="<?php echo !empty($property['floor'])?$property['floor']:''; ?>" >
                    <?php echo form_error('project_name','<p class="help-block text-danger">','</p>'); ?>
                </div>
          </div>


          <div class="form-group col-md-12">
              <div class="col-sm-6">
                <label for="exampleInputEmail1">Floor rise charges</label>
                    <input type="text" name="floor_rise_charges" class="form-control" placeholder="Enter floor rise charges" value="<?php echo !empty($property['floor_rise_charges'])?$property['floor_rise_charges']:''; ?>" >
                    <?php echo form_error('floor_rise_charges','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col-sm-6">
                <label for="exampleInputEmail1">Amentities charges</label>
                    <input type="text" name="amentities_charges" class="form-control" placeholder="Enter amentities charges" value="<?php echo !empty($property['amentities_charges'])?$property['amentities_charges']:''; ?>" >
                    <?php echo form_error('amentities_charges','<p class="help-block text-danger">','</p>'); ?>
                </div>
          </div>


         
            <div class="form-group col-md-12">
              <div class="col-sm-6">
                <label for="exampleInputEmail1">Flat plot cost</label>
                    <input type="text" name="flat_plot_cost" class="form-control" placeholder="Enter floor rise charges" value="<?php echo !empty($property['flat_plot_cost'])?$property['flat_plot_cost']:''; ?>" >
                    <?php echo form_error('flat_plot_cost','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col-sm-6">
                <label for="exampleInputEmail1">Amentities</label>
                    <input type="text" name="amentities" class="form-control" placeholder="Enter amentities" value="<?php echo !empty($property['amentities'])?$property['amentities']:''; ?>" >
                    <?php echo form_error('amentities','<p class="help-block text-danger">','</p>'); ?>
                </div>
          </div>
            <div class="form-group col-md-12">
              <div class="col-sm-6">
                <label for="exampleInputEmail1">Corpus fund</label>
                    <input type="text" name="corpus_fund" class="form-control" placeholder="Enter corpus fund" value="<?php echo !empty($property['corpus_fund'])?$property['corpus_fund']:''; ?>" >
                    <?php echo form_error('corpus_fund','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col-sm-6">
                <label for="exampleInputEmail1">Maintenance charges</label>
                    <input type="text" name="maintenance_charges" class="form-control" placeholder="Enter Maintenance charges" value="<?php echo !empty($property['maintenance_charges'])?$property['maintenance_charges']:''; ?>" >
                    <?php echo form_error('maintenance_charges','<p class="help-block text-danger">','</p>'); ?>
                </div>
          </div>
            <div class="form-group col-md-12">
              <div class="col-sm-6">
                <label for="exampleInputEmail1">gst</label>
                   
                    <select name="gst" class="form-control">
                        <option value="">Select GST</option>
                        <option value="1%">1%</option>
                        <option value="2%">2%</option>
                        <option value="5%">5%</option>
                        <option value="6%">6%</option>
                        <option value="12%">12%</option>
                    </select>
                    <?php echo form_error('gst','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col-sm-6">
                <label for="exampleInputEmail1">Stamp duty</label>
                    <input type="text" name="stamp_duty" class="form-control" placeholder="Enter stamp duty" value="<?php echo !empty($property['stamp_duty'])?$property['stamp_duty']:''; ?>" >
                    <?php echo form_error('stamp_duty','<p class="help-block text-danger">','</p>'); ?>
                </div>
          </div>
            <div class="form-group col-md-12">
              <div class="col-sm-6" style="display:none;">
                <label for="exampleInputEmail1">Documentation legal charges</label>
                    <input type="text" name="documentation_legal_charges" class="form-control" placeholder="Enter documentation legal charges" value="<?php echo !empty($property['documentation_legal_charges'])?$property['documentation_legal_charges']:''; ?>" >
                    <?php echo form_error('documentation_legal_charges','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col-sm-6">
                <label for="exampleInputEmail1">Reg misc charges</label>
                    <input type="text" name="reg_misc_charges" class="form-control" placeholder="Enter reg misc charges" value="<?php echo !empty($property['reg_misc_charges'])?$property['reg_misc_charges']:''; ?>" >
                    <?php echo form_error('reg_misc_charges','<p class="help-block text-danger">','</p>'); ?>
                </div>
          </div>
            <div class="form-group col-md-12" style="display:none;">
              <div class="col-sm-6">
                <label for="exampleInputEmail1">Flat plot cost total</label>
                    <input type="text" name="flat_plot_cost_total" class="form-control" placeholder="Enter flat plot cost total" value="<?php echo !empty($property['flat_plot_cost_total'])?$property['flat_plot_cost_total']:''; ?>" >
                    <?php echo form_error('flat_plot_cost_total','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col-sm-6" style="display:none;">
                <label for="exampleInputEmail1">Reg expenses total</label>
                    <input type="text" name="reg_expenses_total" class="form-control" placeholder="Enter reg expenses total" value="<?php echo !empty($property['reg_expenses_total'])?$property['reg_expenses_total']:''; ?>" >
                    <?php echo form_error('reg_expenses_total','<p class="help-block text-danger">','</p>'); ?>
                </div>
          </div>
             <div class="form-group col-md-12">
              <div class="col-sm-4">
                <label for="exampleInputEmail1">RM</label>
                       <select name="rm" class="form-control">
                     <option value="">Select RM</option>
                      <?php foreach($rm as $rm){ ?>
                          <option value="<?php echo $rm['id']; ?>"><?php echo $rm['name']; ?></option>
                         <?php } ?>
                         <option value="0">None</option>
                       </select> 
                    
                    <?php echo form_error('rm','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col-sm-4">
                <label for="exampleInputEmail1">AM</label>
                <select name="am" class="form-control" required>
                     <option value="">Select AM</option>
                          <option value="<?php echo $user['id']; ?>"><?php echo $user['name']; ?></option>
                       </select> 
                    <?php echo form_error('am','<p class="help-block text-danger">','</p>'); ?>
                </div>
                 <div class="col-sm-4">
                <label for="exampleInputEmail1">ABM</label>
                 
                       <select name="manager" class="form-control">
                     <option value="">Select ABM</option>
                      <?php foreach($abms as $abms){ ?>
                          <option value="<?php echo $abms['id']; ?>"><?php echo $abms['name']; ?></option>
                         <?php } ?>
                         <option value="0">None</option>
                       </select> 
                   
                    <?php echo form_error('manager','<p class="help-block text-danger">','</p>'); ?>
                </div>
          </div>
            <div class="form-group col-md-12">
                 <div class="col-sm-6">
                <label for="exampleInputEmail1">BM</label>
                 
                       <select name="bm" class="form-control">
                     <option value="">Select BM</option>
                      <?php foreach($bms as $bms){ ?>
                          <option value="<?php echo $bms['id']; ?>"><?php echo $bms['name']; ?></option>
                         <?php } ?>
                         <option value="0">None</option>
                       </select> 
                   
                    <?php echo form_error('bm','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col-sm-6">
                <label for="exampleInputEmail1">Project Status</label>
                   <select name="project_status" class="form-control">
                     <option value="">Select Project Status</option>
                     <option value="Booking">Booking</option>
                     <option value="Agreement">Agreement</option>
                     <option value="Registeration">Registeration</option>
                   </select>
                    <?php echo form_error('project_status','<p class="help-block text-danger">','</p>'); ?>
                </div>
             
          </div>
          <div class="form-group col-md-12">
           <div class="col-sm-6">
                <label for="exampleInputEmail1">Remarks/Requirements</label>
                    <textarea name="project_description" class="form-control"  value="<?php echo !empty($property['project_description'])?$property['project_description']:''; ?>" ></textarea>
                    <?php echo form_error('project_description','<p class="help-block text-danger">','</p>'); ?>
                </div>
            </div><hr>

               <div class="form-group col-md-12">
                <div class="col-sm-4">
                <label for="exampleInputEmail1">First Applicant Name</label>
                    <input type="text" name="first_applicant_name" class="form-control" placeholder="Enter first applicant name" value="<?php echo !empty($property['first_applicant_name'])?$property['first_applicant_name']:''; ?>" >
                    <?php echo form_error('first_applicant_name','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col-sm-4">
                <label for="exampleInputEmail1">First Applicant Mobile</label>
                    <input type="text" name="first_applicant_mobile_num" class="form-control" placeholder="Enter first applicant mobile" value="<?php echo !empty($property['first_applicant_mobile_num'])?$property['first_applicant_mobile_num']:''; ?>" >
                    <?php echo form_error('first_applicant_mobile_num','<p class="help-block text-danger">','</p>'); ?>
                </div>
                 <div class="col-sm-4">
                <label for="exampleInputEmail1">First Applicant Email</label>
                    <input type="text" name="first_applicant_email" class="form-control" placeholder="Enter first applicant email" value="<?php echo !empty($property['first_applicant_email'])?$property['first_applicant_email']:''; ?>" >
                    <?php echo form_error('first_applicant_email','<p class="help-block text-danger">','</p>'); ?>
                </div>
          </div>
              <div class="form-group col-md-12">
                <div class="col-sm-4">
                <label for="exampleInputEmail1">Second Applicant Name</label>
                    <input type="text" name="second_applicant_name" class="form-control" placeholder="Enter second applicant name" value="<?php echo !empty($property['second_applicant_name'])?$property['second_applicant_name']:''; ?>" >
                    <?php echo form_error('second_applicant_name','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col-sm-4">
                <label for="exampleInputEmail1">Second Applicant Mobile</label>
                    <input type="text" name="second_applicant_mobile_num" class="form-control" placeholder="Enter second applicant mobile" value="<?php echo !empty($property['second_applicant_mobile_num'])?$property['second_applicant_mobile_num']:''; ?>" >
                    <?php echo form_error('second_applicant_mobile_num','<p class="help-block text-danger">','</p>'); ?>
                </div>
                 <div class="col-sm-4">
                <label for="exampleInputEmail1">Second Applicant Email</label>
                    <input type="text" name="second_applicant_email" class="form-control" placeholder="Enter second applicant email" value="<?php echo !empty($property['second_applicant_email'])?$property['second_applicant_email']:''; ?>" >
                    <?php echo form_error('second_applicant_email','<p class="help-block text-danger">','</p>'); ?>
                </div>
          </div>


        
                 <div class="form-group">
                    <div class="col-sm-2">
                        <input type="submit" name="imgSubmit" class="btn btn-primary" value="SUBMIT">
                    </div>
                </div>
                 
              </div>
            </form>
           
       
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

 <script type="text/javascript">
$(document).ready(function(){
 $('#country').change(function(){
  var country_id = $('#country').val();
  if(country_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>home/fetch_sqft",
    method:"POST",
    data:{country_id:country_id},
    success:function(data)
    {
     $('#state').html(data);
     $('#city').html('<option value="">Select Project</option>');
    }
   });
  }
  else
  {
   $('#state').html('<option value="">Select Project</option>');
   $('#city').html('<option value="">Select Sqft</option>');
  }
 });
 
});
</script>

 <script type="text/javascript">
$(document).ready(function(){
 $('#country').change(function(){
  var country_id = $('#country').val();
  if(country_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>home/fetch_price",
    method:"POST",
    data:{country_id:country_id},
    success:function(data)
    {
     $('#price').html(data);
     $('#city').html('<option value="">Select Project</option>');
    }
   });
  }
  else
  {
   $('#state').html('<option value="">Select Project</option>');
   $('#city').html('<option value="">Select Price</option>');
  }
 });
 
});
</script>

<script>
$(document).ready(function(){
 $('#location').change(function(){
  var country_id = $('#location').val();
  if(country_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>home/fetch_state",
    method:"POST",
    data:{country_id:country_id},
    success:function(data)
    {
     $('#states').html(data);
     $('#city').html('<option value="">Select City</option>');
    }
   });
  }
  else
  {
   $('#states').html('<option value="">Select City</option>');
   $('#city').html('<option value="">Select Area</option>');
  }
 });
 
});
</script>

<script>
$(document).ready(function(){
 $('#states').change(function(){
  var states = $('#states').val();
  if(states != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>home/fetch_project",
    method:"POST",
    data:{states:states},
    success:function(data)
    {
     $('#country').html(data);
     $('#city').html('<option value="">Select City</option>');
    }
   });
  }
  else
  {
   $('#country').html('<option value="">Select Project Name</option>');
   $('#city').html('<option value="">Select Area</option>');
  }
 });
 
});
</script>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>







  
           