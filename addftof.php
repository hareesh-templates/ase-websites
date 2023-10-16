<?php include 'header2.php'; ?>
 <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
<h2>Add F2F details</h2>
	<form action="add_ftof.php" method="post" name="myForm"  onsubmit="return validateForm()" enctype = "multipart/form-data">
	<div class="form-group">
       <label for="email">S.No:</label> 
      <input type="text" class="form-control" id="name" placeholder="Enter S.No Here" name="sno">
    </div>
    <div class="form-group">
       <label for="email">Employer:</label> 
      <input type="text" class="form-control" id="name" placeholder="<?php echo $_SESSION['name'] ?>" name="emp" readonly>
    </div>

    <div class="form-group">
       <label for="email">Customer Name:</label> 
      <input type="text" class="form-control" id="name" placeholder="Enter Customer Name Here" name="customer_name">
    </div>

    <div class="form-group">
       <label for="email">Mobile:</label> 
      <input type="text" class="form-control" id="name" placeholder="Enter Mobile No Here" name="mobile">
    </div>
    <div class="form-group">
       <label for="email">Address:</label> 
      <input type="text" class="form-control" id="name" placeholder="Enter Address Here" name="address">
    </div>
    <div class="form-group">
       <label for="email">Place of Presentation:</label> 
      <input type="text" class="form-control" id="name" placeholder="Enter place of presentation Here" name="place_of_presentation">
    </div>
    <div class="form-group">
       <label for="email">Project interested:</label> 
      <input type="text" class="form-control" id="name" placeholder="Enter Project Interested Here" name="project_interested">
    </div>
    <div class="form-group">
       <label for="email">Status:</label> 
      <input type="text" class="form-control" id="name" placeholder="Enter Status Here" name="status">
    </div>
      <div class="form-group">
       <label for="email">Image Upload:</label> 
      <input type = "file" name = "image" class="form-control" />
    </div>
    <div class="form-group">
       <label for="email">Google Review:</label> 
      Yes&nbsp;<input type ="radio" name = "google_review"  value="Yes" />&nbsp;&nbsp;
      No&nbsp;<input type ="radio" name = "google_review"  value="No" />
    </div>
    
    <input type="submit" name="Submit" value="Add" class="btn btn-success">
		
	</form>
 </div>
                </div>
              </div>
                  
            </div>
          </div>
<script>
function validateForm() {
  var a = document.forms["myForm"]["sno"].value;
  //var b = document.forms["myForm"]["emp"].value;
  var c = document.forms["myForm"]["customer_name"].value;
  var d = document.forms["myForm"]["mobile"].value;
  var e = document.forms["myForm"]["address"].value;
  var f = document.forms["myForm"]["place_of_presentation"].value;
  var g = document.forms["myForm"]["project_interested"].value;
  var h = document.forms["myForm"]["status"].value;
  if (a == "") {
    alert("S.No must be filled out");
    return false;
  }
  // if (b == "") {
  //   alert("Employer Name must be filled out");
  //   return false;
  // }
  if (c == "") {
    alert("Customer Name must be filled out");
    return false;
  }
  if (d == "") {
    alert("Mobile must be filled out");
    return false;
  }
  if (e == "") {
    alert("Address must be filled out");
    return false;
  }
  if (f == "") {
    alert("Place of presentation must be filled out");
    return false;
  }
  if (g == "") {
    alert("Project Interested must be filled out");
    return false;
  }
   if (h == "") {
    alert("Status Interested must be filled out");
    return false;
  }
 
  }
</script>
<?php include 'footer2.php'; ?>


