<?php include 'header.php'; ?>
 <script src= 
"https://code.jquery.com/jquery-1.12.4.min.js"> 
    </script> 
    <style type="text/css"> 
        .selectt {  
            display: none;
        } 
          
       
    </style> 
<div class="container">
<h2>Add Task</h2>
	<form action="add.php" method="post" name="myForm"  onsubmit="return validateForm()"  enctype = "multipart/form-data">
	<div class="form-group">
       <label for="email">Task:</label> 
      <input type="text" class="form-control" id="name" placeholder="Enter Task Here" name="name">
    </div>
    <div class="form-group">
        <label for="email">Upload:</label> <br>
      <label> 
                <input type="radio" name="colorRadio" 
                       value="Image"> Image </label> &nbsp; &nbsp;
            <label> 
                <input type="radio" name="colorRadio" 
                       value="Video"> Video</label>  &nbsp; &nbsp;
            <label> 
                <input type="radio" name="colorRadio" 
                       value="URL"> URL</label>  &nbsp; &nbsp;
            <label> 
                <label> 
                <input type="radio" name="colorRadio" 
                       value="Content"> Content</label>  &nbsp; &nbsp;
            <label> 
                <input type="radio" name="colorRadio" 
                       value="None"> None</label> 
    </div>
    <div class="form-group">
     <div class="Image selectt"> 
            <input type="file" name="upload_image" class="form-control">
          </div> 
        <div class="Video selectt"> 
          <input type="file" name="upload_video" class="form-control">
        </div>
        <div class="URL selectt"> 
          <input type="text" name="upload_url" class="form-control" placeholder="Enter URL">
          </div> 
            <div class="Content selectt"> 
          <textarea name="upload_content" class="form-control" placeholder="Enter Content"></textarea>
          </div> 
        <div class="None selectt">

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
<script>
function validateForm() {
  var a = document.forms["myForm"]["name"].value;
  var b = document.forms["myForm"]["added_date"].value;
  if (a == "") {
    alert("Task Name must be filled out");
    return false;
  }
  if (b == "") {
    alert("Added Date must be filled out");
    return false;
  }
 
  }
</script>
<script type="text/javascript"> 
            $(document).ready(function() { 
                $('input[type="radio"]').click(function() { 
                    var inputValue = $(this).attr("value"); 
                    var targetBox = $("." + inputValue); 
                    $(".selectt").not(targetBox).hide(); 
                    $(targetBox).show(); 
                }); 
            }); 
        </script>
<?php include 'footer.php'; ?>
</body>
</html>

