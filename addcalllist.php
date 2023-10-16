<?php include 'header.php'; ?>
 <script src= 
"https://code.jquery.com/jquery-1.12.4.min.js"> 
    </script> 
    
<div class="container">
<h2>Add Calls List</h2>
	<form action="add_calllist.php" method="post" name="myForm"  onsubmit="return validateForm()"  enctype = "multipart/form-data">
	<div class="form-group">
       <label for="email">No. Of Calls:</label> 
      <input type="text" class="form-control" id="name" placeholder="Enter No. Of Calls" name="no_of_calls">
    </div>
    
    <div class="form-group">
       <label for="email">Upload Calls List:</label> 
     <div class="Image selectt"> 
            <input type="file" name="upload_file" class="form-control">
          </div> 
        
        </div>
    <div class="form-group">
       <label for="email">Added Date:</label> 
      <input type="date" class="form-control" id="added_date"  name="added_date">
    </div>
    <div class="form-group">
      <label for="email">Comments:</label> 
       <textarea name="comments" class="form-control" placeholder="Enter Comments"></textarea>
    </div>
    <input type="submit" name="Submit" value="Add" class="btn btn-success">
		
	</form>
</div>

<?php include 'footer.php'; ?>
</body>
</html>

