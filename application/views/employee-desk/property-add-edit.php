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
                <h3 class="card-title">Post Property</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="" enctype="multipart/form-data">
                 <div class="card-body">
                   
            <div class="form-group col-md-12">
              <div class="col-sm-6">
                <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter title" value="<?php echo !empty($property['title'])?$property['title']:''; ?>" >
                    <?php echo form_error('title','<p class="help-block text-danger">','</p>'); ?>
                </div>
               <div class="col-sm-6">
                <label for="exampleInputEmail1">Address</label>
          <textarea class="form-control" placeholder="Address" name="address" value="<?php echo !empty($property['address'])?$property['address']:''; ?>"><?php echo !empty($property['address'])?$property['address']:''; ?></textarea>
                <?php echo form_error('address','<p class="help-block text-danger">','</p>'); ?>
              </div>
          </div>

          <div class="form-group">
              <div class="col-sm-6">
                 <label for="exampleInputEmail1">Area</label>
          <input type="text" class="form-control" placeholder="Area" name="area" value="<?php echo !empty($property['area'])?$property['area']:''; ?>" >
               <?php echo form_error('area','<p class="help-block text-danger">','</p>'); ?>
              </div>
               <div class="col-sm-6">
                <label for="exampleInputEmail1">Street</label>
<input type="text" class="form-control" placeholder="Street" name="street" value="<?php echo !empty($property['street'])?$property['street']:''; ?>" >
              <?php echo form_error('street','<p class="help-block text-danger">','</p>'); ?>          
                  </div>
          </div>

           <div class="form-group">
              <div class="col-sm-6">
                 <label for="exampleInputEmail1">City</label>
          <input type="text" class="form-control" placeholder="City" name="city" value="<?php echo !empty($property['city'])?$property['city']:''; ?>" >
          <?php echo form_error('city','<p class="help-block text-danger">','</p>'); ?>            
              </div>
               <div class="col-sm-6">
                <label for="exampleInputEmail1">District</label>
<input type="text" class="form-control" placeholder="District" name="district" value="<?php echo !empty($property['district'])?$property['district']:''; ?>" >
          <?php echo form_error('district','<p class="help-block text-danger">','</p>'); ?>         
                  </div>
          </div>

          <div class="form-group">
              <div class="col-sm-6">
                <label for="exampleInputEmail1">Nearby City (Km)</label>
 <input type="number" class="form-control" placeholder="Nearby City (Km)" name="nearby" value="<?php echo !empty($property['nearby'])?$property['nearby']:''; ?>" >
          <?php echo form_error('nearby','<p class="help-block text-danger">','</p>'); ?>          
              </div>
               <div class="col-sm-6">
              <label for="exampleInputEmail1">Pincode</label>  
 <input type="text" class="form-control" placeholder="Pincode" name="pincode" value="<?php echo !empty($property['pincode'])?$property['pincode']:''; ?>" >
          <?php echo form_error('pincode','<p class="help-block text-danger">','</p>'); ?>           
             </div>
          </div>
          <div class="form-group">
              <div class="col-sm-6">
                <label for="exampleInputEmail1">State</label>  
<input type="text" class="form-control" placeholder="State" name="state" value="<?php echo !empty($property['state'])?$property['state']:''; ?>" >
          <?php echo form_error('state','<p class="help-block text-danger">','</p>'); ?>         
               </div>
               <div class="col-sm-6">
                <label for="exampleInputEmail1">About property</label> 
<textarea class="form-control" placeholder="About property" name="about_property"><?php echo !empty($property['about_property'])?$property['about_property']:''; ?></textarea>
          <?php echo form_error('about_property','<p class="help-block text-danger">','</p>'); ?>           
             </div>
          </div>

          <div class="form-group">
              <div class="col-sm-6">
                <label for="exampleInputEmail1">Property status</label> 
<input type="text" class="form-control" placeholder="Property status" name="property_status" value="<?php echo !empty($property['property_status'])?$property['property_status']:''; ?>" >
          <?php echo form_error('property_status','<p class="help-block text-danger">','</p>'); ?>         
               </div>
               <div class="col-sm-6">
                <label for="exampleInputEmail1">Budget From</label>
 <input type="number" class="form-control" placeholder="Budget From" name="budget_from" value="<?php echo !empty($property['budget_from'])?$property['budget_from']:''; ?>" >
          <?php echo form_error('budget_from','<p class="help-block text-danger">','</p>'); ?>          
              </div>
          </div>

          <div class="form-group">
              <div class="col-sm-6">
                 <label for="exampleInputEmail1">Budget To</label>
<input type="number" class="form-control" placeholder="Budget To" name="budget_to" value="<?php echo !empty($property['budget_to'])?$property['budget_to']:''; ?>" >
          <?php echo form_error('budget_to','<p class="help-block text-danger">','</p>'); ?>         
               </div>
               <div class="col-sm-6">
                <label for="exampleInputEmail1">Price/sqft</label>
 <input type="number" class="form-control" placeholder="Price/sqft" name="price_sqft" value="<?php echo !empty($property['price_sqft'])?$property['price_sqft']:''; ?>" >
          <?php echo form_error('price_sqft','<p class="help-block text-danger">','</p>'); ?>          
              </div>
          </div>

          <div class="form-group">
              <div class="col-sm-6">
                <label for="exampleInputEmail1">Bed Rooms</label>
<input type="number" class="form-control" placeholder="Bed Rooms" name="bed_rooms" value="<?php echo !empty($property['bed_rooms'])?$property['bed_rooms']:''; ?>" >
          <?php echo form_error('bed_rooms','<p class="help-block text-danger">','</p>'); ?>         
               </div>
               <div class="col-sm-6">
                <label for="exampleInputEmail1">Property Type</label>
 <select name="property_type" class="form-control">
  <option>Select Type</option>
  <option value="Apartments">Apartments</option>
  <option value="Shops">Shops</option>
  <option value="Restaurants">Restaurants</option>
  <option value="Plots">Plots</option>
 </select>
          <?php echo form_error('property_type','<p class="help-block text-danger">','</p>'); ?>          
              </div>
          </div>

                <div class="form-group">
                    <div class="col-sm-6">
                    <label>Upload Property Images</label>
                    <input type="file" name="images[]" class="form-control" multiple>
                   
                </div>

                </div><br><br><br>
                <div class="form-group">
                 <?php if(!empty($property['images'])){ ?>
                        <div class="gallery-img">
                        <?php foreach($property['images'] as $imgRow){ ?>
                            <div class="img-box" id="imgb_<?php echo $imgRow['id']; ?>">
                                <img src="<?php echo base_url('uploads/images/'.$imgRow['file_name']); ?>" style="width: 100px;"><br>
                                <a href="javascript:void(0);" class="badge badge-danger" onclick="deleteImage('<?php echo $imgRow['id']; ?>')">delete</a>
                            </div>
                        <?php } ?>
                        </div>
                    <?php } ?>
                  </div>
                 <div class="form-group">
                    <div class="col-sm-2">
                        <input type="submit" name="imgSubmit" class="btn btn-primary" value="SUBMIT">
                    </div>
                </div>
                  
                <input type="hidden" name="id" value="<?php echo !empty($property['id'])?$property['id']:''; ?>">
              </div>
            </form>
           
       
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>







  
           