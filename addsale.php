<?php include 'header.php'; ?>
<div class="container">
<h2>Add Sale details</h2>
	<form action="add_sale.php" method="post" name="myForm"  onsubmit="return validateForm()" enctype = "multipart/form-data">
	
    <div class="form-group">
       <label for="email">Employer:</label> 
      <input type="text" class="form-control" id="name" placeholder="<?php echo $_SESSION['name'] ?>" name="emp" readonly>
    </div>
    
      <input type="hidden" class="form-control" id="name" value="<?php echo $_SESSION['report'] ?>" name="report_to">
   

    <div class="form-group">
       <label for="email">Customer Name:</label> 
      <input type="text" class="form-control" id="name" placeholder="Enter Customer Name Here" name="customer_name">
    </div>

    <div class="form-group">
       <label for="email">Mobile:</label> 
      <input type="text" class="form-control" id="name" placeholder="Enter Mobile No Here" name="mobile">
    </div>
    <div class="form-group">
       <label for="email">Email:</label> 
      <input type="email" class="form-control" id="name" placeholder="Enter Address Here" name="email">
    </div>
    <div class="form-group">
       <label for="email">Property Name:</label> 
      <input type="text" class="form-control" id="name" placeholder="Enter Property Name Here" name="property_name">
    </div>
    <div class="form-group">
       <label for="email">Location:</label> 
      <input type="text" class="form-control" id="name" placeholder="Enter Location Here" name="location">
    </div>
    <div class="form-group">
       <label for="email">Sqft:</label> 
      <input type="text" class="form-control" id="name" placeholder="Enter sqft Here" name="sqft">
    </div>
    <div class="form-group">
       <label for="email">Flat No:</label> 
      <input type="text" class="form-control" id="name" placeholder="Enter Flat no Here" name="flatno">
    </div>
      <div class="form-group">
       <label for="email">Aadhar Upload:</label> 
      <input type = "file" name = "image" class="form-control" />
    </div>
     <div class="form-group">
       <label for="email">PAN Upload:</label> 
      <input type = "file" name = "panimage" class="form-control" />
    </div>
     <div class="form-group">
       <label for="email">Status:</label> 
      <select name="status" class="form-control">
        <option value="">Select Status</option>
        <option value="Approved">Approved</option>
        <option value="Pending">Pending</option>
        <option value="Process">Process</option>
        
      </select>
    </div>
    
    <input type="submit" name="Submit" value="Add" class="btn btn-success">
		
	</form>
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
<?php include 'footer.php'; ?>
</body>
</html>

