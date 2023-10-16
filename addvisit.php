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
<h2>Add Visit details</h2>
	<form action="add_visit.php" method="post"  name="myForm"  onsubmit="return validateForm()"  enctype = "multipart/form-data">
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
       <label for="email">No of Projects:</label> 
      
      <select name="no_of_projects" id="slct" class="form-control" onchange="change();">
      	<option value="">No of Projects</option>
      	<option value="1">1</option>
      	<option value="2">2</option>
      	<option value="3">3</option>
      	<option value="4">4</option>
      	<option value="5">5</option>
      </select>
    </div>
    <div class="form-group" id="container">
     
    </div>
    <div class="form-group">
       <label for="email">Status:</label> 
      <input type="text" class="form-control" id="name" placeholder="Enter Visit/Revisit Here" name="status">
    </div>
     <div class="form-group">
       <label for="email">Interest details:</label> 
      <input type="text" class="form-control" id="name" placeholder="Enter interest details Here" name="interest_details">
    </div>
    <div class="form-group">
       <label for="email">Image Upload:</label> 
      <input type = "file" name = "image" class="form-control" />
    </div>
    <div id="showYes" class="form-group">
      <label for="email">Upload Google review screenshot:</label> 
      <input type = "file" name = "review_image" class="form-control" required/>
    </div>
    <input type="submit" name="Submit" value="Add" class="btn btn-success">
		
	</form>

                  </div>
                </div>
              </div>
                  
            </div>
          </div>
<script type="text/javascript">
	function change() {
        var select = document.getElementById("slct");
        var divv = document.getElementById("container");
        var value = select.value;
         if (value == 0) {
            toAppend = ""; divv.innerHTML=toAppend; return;
            }
        if (value == 1) {
            toAppend = "<input type='textbox' class='form-control' name='project_name[]' placeholder='Project Name' required>"; divv.innerHTML=toAppend; return;
            }
            if (value == 2) {
                toAppend = "<input type='textbox' class='form-control' name='project_name[]' placeholder='Project Name' required>&nbsp;<input type='textbox' class='form-control' name='project_name[]' placeholder='Project Name' required>";divv.innerHTML = toAppend;  return;
            }
            if (value == 3) {
                toAppend = "<input type='textbox' class='form-control' name='project_name[]' placeholder='Project Name' required>&nbsp;<input type='textbox'  class='form-control' name='project_name[]' placeholder='Project Name' required>&nbsp;<input type='textbox'  class='form-control' name='project_name[]' placeholder='Project Name' required>";divv.innerHTML = toAppend;  return;

            }
             if (value == 4) {
                toAppend = "<input type='textbox' class='form-control' name='project_name[]' placeholder='Project Name' required>&nbsp;<input type='textbox'  class='form-control' name='project_name[]' placeholder='Project Name' required>&nbsp;<input type='textbox'  class='form-control' name='project_name[]' placeholder='Project Name' required>&nbsp;<input type='textbox'  class='form-control' name='project_name[]' placeholder='Project Name' required>";divv.innerHTML = toAppend;  return;

            }
             if (value == 5) {
                toAppend = "<input type='textbox' class='form-control' name='project_name[]' placeholder='Project Name' required>&nbsp;<input type='textbox'  class='form-control' name='project_name[]' placeholder='Project Name' required>&nbsp;<input type='textbox'  class='form-control' name='project_name[]' placeholder='Project Name' required>&nbsp;<input type='textbox'  class='form-control' name='project_name[]' placeholder='Project Name' required>&nbsp;<input type='textbox'  class='form-control' name='project_name[]' placeholder='Project Name' required>";divv.innerHTML = toAppend;  return;

            }
     }
     $('#slct').on("change",function(){
    if($(this).val() == ''){
        $('#seedoc').attr('disabled','disabled'); //Disables if Values of Select Empty
    }else{
        $('#seedoc').removeAttr('disabled');  
    }
});
     function validateForm() {
  var a = document.forms["myForm"]["sno"].value;
  var c = document.forms["myForm"]["customer_name"].value;
  var d = document.forms["myForm"]["mobile"].value;
  var e = document.forms["myForm"]["status"].value;
  var f = document.forms["myForm"]["interest_details"].value;
  if (a == "") {
    alert("S.No must be filled out");
    return false;
  }
  
  if (c == "") {
    alert("Customer Name must be filled out");
    return false;
  }
  if (d == "") {
    alert("Mobile must be filled out");
    return false;
  }
  if (e == "") {
    alert("Status must be filled out");
    return false;
  }
  if (f == "") {
    alert("Interest details must be filled out");
    return false;
  }
 
 
  }
</script>
<?php include 'footer2.php'; ?>


