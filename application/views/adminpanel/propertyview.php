
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
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
               <!--  <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../../dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div> -->

                <h3 class="profile-username text-center"><?php echo $property['title'] ;?></h3>

                <p class="text-muted text-center"><?php echo $property['address']; ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Area</b> <a class="float-right"><?php echo $property['area']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Street</b> <a class="float-right"><?php echo $property['street']; ?></a>
                  </li>
                   <li class="list-group-item">
                    <b>City</b> <a class="float-right"><?php echo $property['city']; ?></a>
                  </li>
                   <li class="list-group-item">
                    <b>District</b> <a class="float-right"><?php echo $property['district']; ?></a>
                  </li>
                   <li class="list-group-item">
                    <b>Pincode</b> <a class="float-right"><?php echo $property['pincode']; ?></a>
                  </li>
                   <li class="list-group-item">
                    <b>State</b> <a class="float-right"><?php echo $property['state']; ?></a>
                  </li>
                   <li class="list-group-item">
                    <b>About Property</b> <a class="float-right"><?php echo $property['about_property']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>property status</b> <a class="float-right"><?php echo $property['property_status']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Budget from</b> <a class="float-right"><?php echo $property['budget_from']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Budget to</b> <a class="float-right"><?php echo $property['budget_to']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Price per sqft</b> <a class="float-right"><?php echo $property['price_sqft']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Added by</b> <a class="float-right"><?php echo $property['added_by']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Approval Status</b> <a class="float-right"><?php  if($property['status'] == 0){ ?>
                      <span class="right badge badge-danger">Pending</span>
                  <?php  }else{  ?>
                    <span class="right badge badge-success">Approved</span>
                 <?php  }
                    ; ?></a>
                  </li>
                </ul>
                <?php if($property['status'] == 0 && $this->session->userdata('id') == 1){ ?>
                <a href="<?php echo site_url('adminpanel/property/approveproperty/'.$property['id']); ?>" class="btn btn-primary btn-block"><b>Approve</b></a>
                <?php } ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <div class="col-md-2"></div>
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Property Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
                <input type="hidden" name="property_id" value="<?php echo $property['id'] ;?>">
                <div class="card-body">
                  <div class="row col-md-12">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Floor</label>
                    <input type="text" class="form-control"  placeholder="Floor" name="floor">
                     <?php echo form_error('floor','<p class="help-block">','</p>'); ?> 
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">BHK</label>
                    <input type="text" class="form-control"  placeholder="BHK" name="bhk">
                    <?php echo form_error('bhk','<p class="help-block">','</p>'); ?> 
                  </div>
                   </div>
                 </div>
                 <div class="row col-md-12">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Availability</label>
                    <input type="text" class="form-control"  placeholder="availability" name="availability">
                    <?php echo form_error('availability','<p class="help-block">','</p>'); ?> 
                  </div>
                   </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Facing</label>
                    <input type="text" class="form-control"  placeholder="Facing" name="facing">
                    <?php echo form_error('facing','<p class="help-block">','</p>'); ?> 
                  </div>
                   </div>
                 </div>
                 <div class="row col-md-12">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Flat/sqft</label>
                    <input type="text" class="form-control"  placeholder="flat/sqft" name="flat_sqft">
                    <?php echo form_error('flat_sqft','<p class="help-block">','</p>'); ?> 
                  </div>
                   </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Undivide share</label>
                    <input type="text" class="form-control" placeholder="Undivide share" name="undivide_share">
                  </div>
                   </div>
                 </div>
                 <div class="row col-md-12">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Totalbuilding sqyard</label>
                    <input type="text" class="form-control"  placeholder="Totalbuilding sqyard" name="totalbuilding_sqyard">
                  </div>
                   </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">price/sqft</label>
                    <input type="text" class="form-control"  placeholder="price/sqft" name="price_sqft">
                     <?php echo form_error('price_sqft','<p class="help-block">','</p>'); ?> 
                  </div>
                   </div>
                 </div>
                 <div class="row col-md-12">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Amitities</label>
                    <input type="text" class="form-control"  placeholder="Amitities" name="amitities">
                  </div>
                   </div>
                  <div class="col-md-6">
                   <div class="form-group">
                    <label for="exampleInputPassword1">Project status</label>
                    <input type="text" class="form-control"  placeholder="Project status" name="project_status">
                      <?php echo form_error('project_status','<p class="help-block">','</p>'); ?> 
                  </div>
                   </div>
                 </div>
                 <div class="row col-md-12">
                  <div class="col-md-6">
                   <div class="form-group">
                    <label for="exampleInputPassword1">Unit sale closedby</label>
                    <input type="text" class="form-control"  placeholder="Unit sale closedby" name="unit_sale_closedby">
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

 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
<!--                 <h3 class="card-title">DataTable with default features</h3>
 -->              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Ations</th>
                    <th>Floor</th>
                    <th>Bhk</th>
                    <th>Availability</th>
                    <th>facing</th>
                    <th>flat/sqft</th>
                    <th>undivide_share</th>
                    <th>building_sqyard</th>
                    <th>price_sqft</th>
                    <th>amitities</th>
                    <th>status</th>
                    <th>unit_sale_closedby</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php if(!empty($property_amentities)){ $i=0;  
                    foreach($property_amentities as $property_amentities){   
                ?>
                  <tr>
                    <td><a href="<?php echo base_url(); ?>adminpanel/property/edit_amentities/<?php echo $property_amentities['id'];  ?>"><i class="fa fa-edit"></i></a><a href="<?php echo base_url(); ?>adminpanel/property/delete_amentities/<?php echo $property_amentities['id'];  ?>"><i class="fa fa-trash"></i></a></td>
                    <td><?php echo  $property_amentities['floor']; ?></td>
                    <td><?php echo  $property_amentities['bhk']; ?></td>
                    <td><?php echo  $property_amentities['availability']; ?></td>
                    <td><?php echo  $property_amentities['facing']; ?></td>
                    <td><?php echo  $property_amentities['flat_sqft']; ?></td>
                    <td><?php echo  $property_amentities['undivide_share']; ?></td>
                    <td><?php echo  $property_amentities['totalbuilding_sqyard']; ?></td>
                    <td><?php echo  $property_amentities['price_sqft']; ?></td>
                    <td><?php echo  $property_amentities['amitities']; ?></td>
                    <td><?php echo  $property_amentities['project_status']; ?></td>
                    <td><?php echo  $property_amentities['unit_sale_closedby']; ?></td>
                    
                  </tr>
                   <?php } }else{ ?>
                <tr><td colspan="6">No Amentities found...</td></tr>
                <?php } ?>
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 