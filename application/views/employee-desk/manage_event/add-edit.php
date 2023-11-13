<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
      <div class="panel-heading">Event Post Here...</div>
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
          <textarea class="form-control" placeholder="Content" name="content" value="<?php echo !empty($property['content'])?$property['content']:''; ?>" ><?php echo !empty($property['content'])?$property['content']:''; ?></textarea>
               <?php echo form_error('content','<p class="help-block">','</p>'); ?>
              </div>
                    <div class="col-sm-6">
                    <label>Upload Event Images</label>
                    <input type="file" name="images[]" class="form-control" multiple>
                   
                </div>

                </div><br><br><br>
                <div class="form-group">
                 <?php if(!empty($property['images'])){ ?>
                        <div class="gallery-img">
                        <?php foreach($property['images'] as $imgRow){ ?>
                            <div class="img-box" id="imgb_<?php echo $imgRow['id']; ?>">
                                <img src="<?php echo base_url('uploads/events/'.$imgRow['file_name']); ?>" style="width: 100px;"><br>
                                <a href="<?php echo base_url('adminpanel/manage_event/delete_other_images/'.$imgRow['id']); ?>" class="badge badge-danger" onclick="deleteImage('<?php echo $imgRow['id']; ?>')">delete</a>
                            </div>
                        <?php } ?>
                        </div>
                    <?php } ?>
                  </div>

                    <div class="form-group">
              <div class="col-sm-6">
                    <input type="text" name="event_date" class="form-control" placeholder="Enter Date" value="<?php echo !empty($property['event_date'])?$property['event_date']:''; ?>" >
                    <?php echo form_error('event_date','<p class="help-block text-danger">','</p>'); ?>
                </div>
                
              
          </div><br><br><br>
                 <div class="form-group">
                    <div class="col-sm-2">
                        <input type="submit" name="imgSubmit" class="btn btn-primary" value="SUBMIT">
                    </div>
                </div>
                  
                <a href="<?php echo base_url('adminpanel/manage_event'); ?>" class="btn btn-secondary">Back</a>
                <input type="hidden" name="id" value="<?php echo !empty($property['id'])?$property['id']:''; ?>">

            </form>
            </div>


  </div>
</div>
       