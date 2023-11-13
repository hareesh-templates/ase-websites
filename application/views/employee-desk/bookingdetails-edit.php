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
                <h3 class="card-title">Edit Booking Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="" enctype="multipart/form-data">
                 <div class="card-body">
                   
            <div class="form-group col-md-12">
              <div class="col-sm-6">
                <label for="exampleInputEmail1">Project Name</label>
                    <input type="text" name="project_name" class="form-control" placeholder="Enter Project Name" value="<?php echo ($postproperty['project_name'])?$postproperty['project_name']:''; ?>" >
                    <?php echo form_error('project_name','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col-sm-6">
                <label for="exampleInputEmail1">Total sqft</label>
                    <input type="text" name="total_sqft" class="form-control" placeholder="Enter Total sqft" value="<?php echo !empty($postproperty['total_sqft'])?$postproperty['total_sqft']:''; ?>" >
                    <?php echo form_error('total_sqft','<p class="help-block text-danger">','</p>'); ?>
                </div>
              
          </div>

          <div class="form-group col-md-12">
                <div class="col-sm-6">
                <label for="exampleInputEmail1">Location</label>
                    <input type="text" name="location" class="form-control" placeholder="Enter Location" value="<?php echo !empty($postproperty['location'])?$postproperty['location']:''; ?>" >
                    <?php echo form_error('location','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col-sm-6">
                <label for="exampleInputEmail1">Flatno</label>
                    <input type="text" name="flatno" class="form-control" placeholder="Enter Flatno" value="<?php echo !empty($postproperty['flatno'])?$postproperty['flatno']:''; ?>" >
                    <?php echo form_error('flatno','<p class="help-block text-danger">','</p>'); ?>
                </div>
          </div>

          <div class="form-group col-md-12">
              <div class="col-sm-6">
                <label for="exampleInputEmail1">Block</label>
                    <input type="text" name="block" class="form-control" placeholder="Enter Block" value="<?php echo !empty($postproperty['block'])?$postproperty['block']:''; ?>" >
                    <?php echo form_error('block','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col-sm-6">
                <label for="exampleInputEmail1">Floor</label>
                    <input type="text" name="floor" class="form-control" placeholder="Enter Floor" value="<?php echo !empty($postproperty['floor'])?$postproperty['floor']:''; ?>" >
                    <?php echo form_error('project_name','<p class="help-block text-danger">','</p>'); ?>
                </div>
          </div>

          <div class="form-group col-md-12">
              <div class="col-sm-6">
                <label for="exampleInputEmail1">Area</label>
                    <input type="text" name="area" class="form-control" placeholder="Enter Area" value="<?php echo !empty($postproperty['area'])?$postproperty['area']:''; ?>" >
                    <?php echo form_error('area','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col-sm-6">
                <label for="exampleInputEmail1">Price per sqft</label>
                    <input type="text" name="price_sqft" class="form-control" placeholder="Enter Price per sqft" value="<?php echo !empty($postproperty['price_sqft'])?$postproperty['price_sqft']:''; ?>" >
                    <?php echo form_error('price_sqft','<p class="help-block text-danger">','</p>'); ?>
                </div>
          </div>

          <div class="form-group col-md-12">
              <div class="col-sm-6">
                <label for="exampleInputEmail1">Floor rise charges</label>
                    <input type="text" name="floor_rise_charges" class="form-control" placeholder="Enter floor rise charges" value="<?php echo !empty($postproperty['floor_rise_charges'])?$postproperty['floor_rise_charges']:''; ?>" >
                    <?php echo form_error('floor_rise_charges','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col-sm-6">
                <label for="exampleInputEmail1">Amentities charges</label>
                    <input type="text" name="amentities_charges" class="form-control" placeholder="Enter amentities charges" value="<?php echo !empty($postproperty['amentities_charges'])?$postproperty['amentities_charges']:''; ?>" >
                    <?php echo form_error('amentities_charges','<p class="help-block text-danger">','</p>'); ?>
                </div>
          </div>


         
            <div class="form-group col-md-12">
              <div class="col-sm-6">
                <label for="exampleInputEmail1">Flat plot cost</label>
                    <input type="text" name="flat_plot_cost" class="form-control" placeholder="Enter floor rise charges" value="<?php echo !empty($postproperty['flat_plot_cost'])?$postproperty['flat_plot_cost']:''; ?>" >
                    <?php echo form_error('flat_plot_cost','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col-sm-6">
                <label for="exampleInputEmail1">Amentities</label>
                    <input type="text" name="amentities" class="form-control" placeholder="Enter amentities" value="<?php echo !empty($postproperty['amentities'])?$postproperty['amentities']:''; ?>" >
                    <?php echo form_error('amentities','<p class="help-block text-danger">','</p>'); ?>
                </div>
          </div>
            <div class="form-group col-md-12">
              <div class="col-sm-6">
                <label for="exampleInputEmail1">Corpus fund</label>
                    <input type="text" name="corpus_fund" class="form-control" placeholder="Enter corpus fund" value="<?php echo !empty($postproperty['corpus_fund'])?$postproperty['corpus_fund']:''; ?>" >
                    <?php echo form_error('corpus_fund','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col-sm-6">
                <label for="exampleInputEmail1">Maintenance charges</label>
                    <input type="text" name="maintenance_charges" class="form-control" placeholder="Enter Maintenance charges" value="<?php echo !empty($postproperty['maintenance_charges'])?$postproperty['maintenance_charges']:''; ?>" >
                    <?php echo form_error('maintenance_charges','<p class="help-block text-danger">','</p>'); ?>
                </div>
          </div>
            <div class="form-group col-md-12">
              <div class="col-sm-6">
                <label for="exampleInputEmail1">gst</label>
                    <input type="text" name="gst" class="form-control" placeholder="Enter gst" value="<?php echo !empty($postproperty['gst'])?$postproperty['gst']:''; ?>" >
                    <?php echo form_error('gst','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col-sm-6">
                <label for="exampleInputEmail1">Stamp duty</label>
                    <input type="text" name="stamp_duty" class="form-control" placeholder="Enter stamp duty" value="<?php echo !empty($postproperty['stamp_duty'])?$postproperty['stamp_duty']:''; ?>" >
                    <?php echo form_error('stamp_duty','<p class="help-block text-danger">','</p>'); ?>
                </div>
          </div>
            <div class="form-group col-md-12">
              <div class="col-sm-6">
                <label for="exampleInputEmail1">Documentation legal charges</label>
                    <input type="text" name="documentation_legal_charges" class="form-control" placeholder="Enter documentation legal charges" value="<?php echo !empty($postproperty['documentation_legal_charges'])?$postproperty['documentation_legal_charges']:''; ?>" >
                    <?php echo form_error('documentation_legal_charges','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col-sm-6">
                <label for="exampleInputEmail1">Reg misc charges</label>
                    <input type="text" name="reg_misc_charges" class="form-control" placeholder="Enter reg misc charges" value="<?php echo !empty($postproperty['reg_misc_charges'])?$postproperty['reg_misc_charges']:''; ?>" >
                    <?php echo form_error('reg_misc_charges','<p class="help-block text-danger">','</p>'); ?>
                </div>
          </div>
            <div class="form-group col-md-12">
              <div class="col-sm-6">
                <label for="exampleInputEmail1">Flat plot cost total</label>
                    <input type="text" name="flat_plot_cost_total" class="form-control" placeholder="Enter flat plot cost total" value="<?php echo !empty($postproperty['flat_plot_cost_total'])?$postproperty['flat_plot_cost_total']:''; ?>" >
                    <?php echo form_error('flat_plot_cost_total','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col-sm-6">
                <label for="exampleInputEmail1">Reg expenses total</label>
                    <input type="text" name="reg_expenses_total" class="form-control" placeholder="Enter reg expenses total" value="<?php echo !empty($postproperty['reg_expenses_total'])?$postproperty['reg_expenses_total']:''; ?>" >
                    <?php echo form_error('reg_expenses_total','<p class="help-block text-danger">','</p>'); ?>
                </div>
          </div>
             <div class="form-group col-md-12" style="display: none;">
              <div class="col-sm-4">
                <label for="exampleInputEmail1">RM</label>
                    <input type="text" name="rm" class="form-control" placeholder="Enter RM" value="<?php echo !empty($postproperty['rm'])?$postproperty['rm']:''; ?>" >
                    <?php echo form_error('rm','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <div class="col-sm-4">
                <label for="exampleInputEmail1">AM</label>
                    <input type="text" name="am" class="form-control" placeholder="Enter AM" value="<?php echo !empty($postproperty['am'])?$postproperty['am']:''; ?>" >
                    <?php echo form_error('am','<p class="help-block text-danger">','</p>'); ?>
                </div>
                 <div class="col-sm-4">
                <label for="exampleInputEmail1">Manager</label>
                    <input type="text" name="manager" class="form-control" placeholder="Enter Manager" value="<?php echo !empty($postproperty['manager'])?$postproperty['manager']:''; ?>" >
                    <?php echo form_error('manager','<p class="help-block text-danger">','</p>'); ?>
                </div>
          </div>
            <div class="form-group col-md-12">
                <div class="col-sm-6">
                <label for="exampleInputEmail1">Project Status</label>
                   <select name="project_status" class="form-control">
                     <option value="<?php echo $postproperty['project_status'] ?>"><?php echo $postproperty['project_status'] ?></option>
                     <option value="Booking">Booking</option>
                     <option value="Agreement">Agreement</option>
                     <option value="Registeration">Registeration</option>
                   </select>
                    <?php echo form_error('project_status','<p class="help-block text-danger">','</p>'); ?>
                </div>
                <?php // if($user['id'] <= 20){ ?>
                  <div class="col-sm-6">
                <label for="exampleInputEmail1">Verification</label>
                   <select name="verification" class="form-control">
                     <option value="<?php echo $postproperty['verification'] ?>"><?php echo $postproperty['verification'] ?></option>
                     <option value="Verified">Verified</option>
                     <option value="NotVerified">NotVerified</option>
                   </select>
                    <?php echo form_error('verification','<p class="help-block text-danger">','</p>'); ?>
                </div>
            <?php // } ?>
                 </div>
                  <div class="form-group col-md-12">
              <div class="col-sm-6">
                <label for="exampleInputEmail1">Project Description</label>
                    <textarea name="project_description" class="form-control"><?php echo !empty($postproperty['project_description'])?$postproperty['project_description']:''; ?></textarea>
                    <?php echo form_error('project_description','<p class="help-block text-danger">','</p>'); ?>
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







  
           