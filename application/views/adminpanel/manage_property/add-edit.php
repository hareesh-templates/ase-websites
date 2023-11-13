<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <script src="https://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
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
      <div class="panel-heading">Property Post Here...</div>
            <form method="post" action="" enctype="multipart/form-data">
                
            <div class="form-group">
              <div class="col-sm-6">
                    <input type="text" name="title" class="form-control" placeholder="Enter title" value="<?php echo !empty($property['title'])?$property['title']:''; ?>" >
                    <?php echo form_error('title','<p class="help-block text-danger">','</p>'); ?>
                </div>
                 <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="Area" name="area" value="<?php echo !empty($property['area'])?$property['area']:''; ?>" >
               <?php echo form_error('area','<p class="help-block">','</p>'); ?>
              </div>
              
          </div><br><br><br>

          <div class="form-group">
              <div class="col-sm-6">
 
           <select name="city" class="form-control">
            <option value="<?php echo !empty($property['city'])?$property['city']:''; ?>"><?php echo !empty($property['city'])?$property['city']:'Select City'; ?></option>
            <option value="Bangalore">Bangalore</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Vijayawada">Vijayawada</option>
            <option value="Vizag">Vizag</option>
            <option value="Rajahmundry">Rajahmundry</option>
            <option value="Kakinada">Kakinada</option>
            <option value="Chennai">Chennai</option>
            <option value="Odisha">Odisha</option>
          </select>
          <?php echo form_error('city','<p class="help-block">','</p>'); ?>            
            </div>
               <div class="col-sm-6">
        
          <select name="district" class="form-control">
            <option value="<?php echo !empty($property['district'])?$property['district']:''; ?>"><?php echo !empty($property['district'])?$property['district']:'Select District'; ?></option>
            <option value="Bangalore">Bangalore</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Vijayawada">Vijayawada</option>
            <option value="Vizag">Vizag</option>
            <option value="Rajahmundry">Rajahmundry</option>
            <option value="Kakinada">Kakinada</option>
            <option value="Chennai">Chennai</option>
            <option value="Odisha">Odisha</option>

          </select>
          <?php echo form_error('district','<p class="help-block">','</p>'); ?>           
             </div>
          </div><br><br><br>

         

          <div class="form-group">
              <div class="col-sm-6">
<input type="text" class="form-control" placeholder="State" name="state" value="<?php echo !empty($property['state'])?$property['state']:''; ?>" >
          <?php echo form_error('state','<p class="help-block">','</p>'); ?>         
               </div>
               <div class="col-sm-6">
<textarea class="form-control" id="editor1" placeholder="About property" name="about_property"><?php echo !empty($property['about_property'])?$property['about_property']:''; ?></textarea>
<script>
         CKEDITOR.replace( 'editor1' );
        </script>
          <?php echo form_error('about_property','<p class="help-block">','</p>'); ?>           
             </div>
          </div><br><br><br>
           <div class="form-group">
             
               <div class="col-sm-6">
 <input type="text" class="form-control" placeholder="Pincode" name="pincode" value="<?php echo !empty($property['pincode'])?$property['pincode']:''; ?>" >
          <?php echo form_error('pincode','<p class="help-block">','</p>'); ?>           
             </div>
               <div class="col-sm-6">
 
          <select name="property_status" class="form-control">
            <option value="<?php echo !empty($property['property_status'])?$property['property_status']:''; ?>"><?php echo !empty($property['property_status'])?$property['property_status']:'Select Status'; ?></option>
            <option value="New Launch">New Launch</option>
            <option value="Under Construction">Under Construction</option>
            <option value="Mid Stage">Mid Stage</option>
            <option value="Ready to Move">Ready to Move</option>
            <option value="Sold out">Sold out</option>
          </select>
          <?php echo form_error('property_status','<p class="help-block">','</p>'); ?>           
             </div>
          </div><br><br><br>


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
                                <a href="<?php echo base_url('adminpanel/manage_property/delete_other_images/'.$imgRow['id']); ?>" class="badge badge-danger" onclick="deleteImage('<?php echo $imgRow['id']; ?>')">delete</a>
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
                  
                <a href="<?php echo base_url('adminpanel/manage_property'); ?>" class="btn btn-secondary">Back</a>
                <input type="hidden" name="id" value="<?php echo !empty($property['id'])?$property['id']:''; ?>">

            </form>
            </div>


  </div>
</div>
       