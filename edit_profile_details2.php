<?php include 'header2.php'; ?>


<?php
include_once("connection.php");

if(isset($_POST['update']))
{	
	$profile_id = $_GET['profile_id'];
	$name = $_POST['name'];
  $designation = $_POST['designation'];
	
	
	if(empty($name)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
	} else {	
		$result = mysqli_query($mysqli, "UPDATE login SET name='$name', designation='$designation' WHERE id=$profile_id");
    $result2 = mysqli_query($mysqli, "UPDATE login SET report=0 WHERE id=$profile_id");
    $result3 = mysqli_query($mysqli, "UPDATE login SET report=0 WHERE report=$profile_id");
		
		echo "<script>
         setTimeout(function(){
            window.location.href = 'employees.php';
         }, 1000);
      </script>";
	}
}
?>
<?php
$profile_id = $_GET['profile_id'];

$result = mysqli_query($mysqli, "SELECT * FROM login WHERE id=$profile_id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$designation = $res['designation'];
	
}
?>
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
	<h2>Edit Profile</h2>
	
	<form name="myForm" method="post" action="#">
	<div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name"  value="<?php echo $name;?>" required>
    </div>
    <div class="form-group">
      <label for="email">Designation:</label>
      
       <select name="designation" class="form-control" required>
        <option value="<?php echo $designation;?>"><?php echo $designation;?></option>
        <option value="">Select Designation</option>
        <option value="BM">Branch Manager</option>
        <option value="ABM">Asst Branch Manager</option>
        <option value="AM">Asst Manager</option>
        <option value="RM">Relationship Manager</option>
        <option value="EX">Executive</option>
         <option value="HR">HR Manager</option>
         <option value="Self">Self</option>
        <option value="Admin">Admin</option>
        <option value="IT Admin">IT & Admin</option>
        <option value="Front Office Executive">Front Office Executive</option>
        <option value="Telecaller">Telecaller</option>
        <option value="Loans Manager">Loans Manager</option>
        <option value="Accountant">Accountant</option>
         
      </select>
    </div>
     
    <input type="submit" name="update" value="Update" class="btn btn-success">
		
	</form>
</div>

</div>
              </div>
                  
            </div>
          </div>

<?php include 'footer2.php'; ?>
