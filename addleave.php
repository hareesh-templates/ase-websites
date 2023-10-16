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
<h2>Apply Leave</h2>
	<form action="add_leave.php" method="post" name="form1">

     <div class="form-group">
      <label for="email">Subject:</label>
      <input type="text" class="form-control"  name="subject"  required="" placeholder="Enter Subject" required="">
     </div>

      <div class="form-group">
      <label for="email">Date of Leave:</label>
      <input type="date" class="form-control"  name="applied_on"  required="" placeholder="Date of Leave" required="">
     </div>
  
    <div class="form-group">
      <label for="email">Description:</label>
      <textarea class="form-control"   name="content" required=""required=""></textarea>
    </div>
    <div class="form-group">
      <label for="email">Office Email:</label>
      <input type="text" class="form-control"   name="added_by_ofc_mail" required>
    </div>
    <input type="hidden" class="form-control"  name="report_to"  required="" value="<?php echo $_SESSION['report']; ?>">
    <input type="hidden" class="form-control"  name="added_by_name"  required="" value="<?php echo $_SESSION['name']; ?>">
    <input type="hidden" class="form-control"  name="added_by_role"  required="" value="<?php echo $_SESSION['designation']; ?>">
    <input type="submit" name="Submit" value="Add" class="btn btn-success"  >
		
	</form>
</div>
    </div>
              </div>
                  
            </div>
          </div>

<?php include 'footer2.php'; ?>


