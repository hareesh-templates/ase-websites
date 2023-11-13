
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Property</h1>
          </div>
           <?php if(!empty($success_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-success"><?php echo $success_msg; ?></div>
    </div>
    <?php }elseif(!empty($error_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
    </div>
    <?php } ?>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Property</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Property Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
                  <input type="hidden" name="property_id" value="<?php echo $property_amentities['property_id'] ;?>">
                <div class="card-body">
                  <div class="row col-md-12">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Floor</label>
                    <input type="text" class="form-control"  placeholder="Floor" name="floor" value="<?php echo !empty($property_amentities['floor'])?$property_amentities['floor']:''; ?>">
                     <?php echo form_error('floor','<p class="help-block">','</p>'); ?> 
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">BHK</label>
                    <input type="text" class="form-control"  placeholder="BHK" name="bhk" value="<?php echo !empty($property_amentities['bhk'])?$property_amentities['bhk']:''; ?>">
                    <?php echo form_error('bhk','<p class="help-block">','</p>'); ?> 
                  </div>
                   </div>
                 </div>
                 <div class="row col-md-12">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Availability</label>
                    <input type="text" class="form-control"  placeholder="availability" name="availability" value="<?php echo !empty($property_amentities['availability'])?$property_amentities['availability']:''; ?>">
                    <?php echo form_error('availability','<p class="help-block">','</p>'); ?> 
                  </div>
                   </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Facing</label>
                    <input type="text" class="form-control"  placeholder="Facing" name="facing" value="<?php echo !empty($property_amentities['facing'])?$property_amentities['facing']:''; ?>">
                    <?php echo form_error('facing','<p class="help-block">','</p>'); ?> 
                  </div>
                   </div>
                 </div>
                 <div class="row col-md-12">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Flat/sqft</label>
                    <input type="text" class="form-control"  placeholder="flat/sqft" name="flat_sqft" value="<?php echo !empty($property_amentities['flat_sqft'])?$property_amentities['flat_sqft']:''; ?>">
                    <?php echo form_error('flat_sqft','<p class="help-block">','</p>'); ?> 
                  </div>
                   </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Undivide share</label>
                    <input type="text" class="form-control" placeholder="Undivide share" name="undivide_share" value="<?php echo !empty($property_amentities['undivide_share'])?$property_amentities['undivide_share']:''; ?>">
                  </div>
                   </div>
                 </div>
                 <div class="row col-md-12">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Totalbuilding sqyard</label>
                    <input type="text" class="form-control"  placeholder="Totalbuilding sqyard" name="totalbuilding_sqyard" value="<?php echo !empty($property_amentities['totalbuilding_sqyard'])?$property_amentities['totalbuilding_sqyard']:''; ?>">
                  </div>
                   </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">price/sqft</label>
                    <input type="text" class="form-control"  placeholder="price/sqft" name="price_sqft" value="<?php echo !empty($property_amentities['price_sqft'])?$property_amentities['price_sqft']:''; ?>">
                     <?php echo form_error('price_sqft','<p class="help-block">','</p>'); ?> 
                  </div>
                   </div>
                 </div>
                 <div class="row col-md-12">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Amitities</label>
                    <input type="text" class="form-control"  placeholder="Amitities" name="amitities" value="<?php echo !empty($property_amentities['amitities'])?$property_amentities['amitities']:''; ?>">
                  </div>
                   </div>
                  <div class="col-md-6">
                   <div class="form-group">
                    <label for="exampleInputPassword1">Project status</label>
                    <input type="text" class="form-control"  placeholder="Project status" name="project_status" value="<?php echo !empty($property_amentities['project_status'])?$property_amentities['project_status']:''; ?>">
                      <?php echo form_error('project_status','<p class="help-block">','</p>'); ?> 
                  </div>
                   </div>
                 </div>
                 <div class="row col-md-12">
                  <div class="col-md-6">
                   <div class="form-group">
                    <label for="exampleInputPassword1">Unit sale closedby</label>
                    <input type="text" class="form-control"  placeholder="Unit sale closedby" name="unit_sale_closedby" value="<?php echo !empty($property_amentities['unit_sale_closedby'])?$property_amentities['unit_sale_closedby']:''; ?>">
                  </div>
                </div>

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" value="Submit" name="postSubmit">
                </div>
              </div>
                </div>
                <!-- /.card-body -->

              </form>
            </div>
            <!-- /.card -->


          </div>
        
        </div>
        <!-- /.row -->


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 