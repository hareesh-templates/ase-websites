<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
 <input type="text" class="form-control" placeholder="City" name="city" value="<?php echo !empty($property['city'])?$property['city']:''; ?>" >
          <?php echo form_error('city','<p class="help-block">','</p>'); ?>            
            </div>
               <div class="col-sm-6">
         <input type="text" class="form-control" placeholder="District" name="district" value="<?php echo !empty($property['district'])?$property['district']:''; ?>" >
          <?php echo form_error('district','<p class="help-block">','</p>'); ?>           
             </div>
          </div><br><br><br>

         

          <div class="form-group">
              <div class="col-sm-6">
<input type="text" class="form-control" placeholder="State" name="state" value="<?php echo !empty($property['state'])?$property['state']:''; ?>" >
          <?php echo form_error('state','<p class="help-block">','</p>'); ?>         
               </div>
               <div class="col-sm-6">
<textarea class="form-control" placeholder="About property" name="about_property"><?php echo !empty($property['about_property'])?$property['about_property']:''; ?></textarea>
          <?php echo form_error('about_property','<p class="help-block">','</p>'); ?>           
             </div>
          </div><br><br><br>
           <div class="form-group">
             
               <div class="col-sm-6">
 <input type="text" class="form-control" placeholder="Pincode" name="pincode" value="<?php echo !empty($property['pincode'])?$property['pincode']:''; ?>" >
          <?php echo form_error('pincode','<p class="help-block">','</p>'); ?>           
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
                  
                <a href="<?php echo base_url('manage_property'); ?>" class="btn btn-secondary">Back</a>
                <input type="hidden" name="id" value="<?php echo !empty($property['id'])?$property['id']:''; ?>">

            </form>
            </div>


  </div>
</div>
       