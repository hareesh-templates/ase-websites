<?php include 'header.php'; ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <script src="https://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<div class="container">
<h2>Add Blog details</h2>
	<form action="add_blog.php" method="post"  name="myForm"  enctype = "multipart/form-data">
	
    
      <div class="form-group">
              <div class="col-sm-6">
                    <input type="text" name="title" class="form-control" placeholder="Enter title" >
                </div>
                 <div class="col-sm-6">
                   <input type="text" class="form-control" placeholder="Area" name="area" >
              </div>
          </div><br><br><br><br>
            <div class="form-group">
                   <div class="col-sm-6">
          <textarea class="form-control" placeholder="Content" name="content" id="editor1" ></textarea>
         <script>
         CKEDITOR.replace( 'editor1' );
        </script>
              </div>
                    <div class="col-sm-6">
                    <label>Upload Blog Image</label>
                    <input type="file" name="image" class="form-control">
                   
                </div>

                </div><br><br><br><br>
    
       <div class="form-group">
              <div class="col-sm-6">
                    <input type="text" name="event_date" class="form-control" placeholder="Enter Date">
                   
                </div><br><br><br><br>
                 <div class="col-sm-6">
                    <input type="text" name="key_url" class="form-control" placeholder="Enter key url" >
                </div>
              
          </div><br><br>
          <div class="form-group">
              <div class="col-sm-6">
                    <input type="text" name="meta_desc" class="form-control" placeholder="Enter Meta Description">
                   
                </div><br><br><br><br>
    <input type="submit" name="Submit" value="Add" class="btn btn-success">
		
	</form>
</div>

<?php include 'footer.php'; ?>
</body>
</html>

