<?php include 'header2.php'; ?>


<?php
include_once("connection.php");

if(isset($_POST['update']))
{	
	$session_id = $_SESSION['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	$adharnumber = $_POST['adharnumber'];
	$pannumber = $_POST['pannumber'];
	$anternate_number = $_POST['anternate_number'];
	$present_address = $_POST['present_address'];
	$permanent_address = $_POST['permanent_address'];
	$about_previous_company = $_POST['about_previous_company'];
	$bank_account_number = $_POST['bank_account_number'];
	$ifsc = $_POST['ifsc'];
	$bank_holder_name = $_POST['bank_holder_name'];
	$dob = $_POST['dob'];
	$ofc_email = $_POST['ofc_email'];
	
	if(empty($name)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
	} else {	
		$result = mysqli_query($mysqli, "UPDATE login SET name='$name', email='$email', phonenumber='$phonenumber', adharnumber='$adharnumber', pannumber='$pannumber', anternate_number='$anternate_number', present_address='$present_address', permanent_address='$permanent_address', about_previous_company='$about_previous_company', bank_account_number='$bank_account_number', ifsc='$ifsc', bank_holder_name='$bank_holder_name', dob='$dob', ofc_email='$ofc_email' WHERE id=$session_id");
		
		echo "<script>
         setTimeout(function(){
            window.location.href = 'index2.php';
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
	$email = $res['email'];
	$phonenumber = $res['phonenumber'];
	$adharnumber = $res['adharnumber'];
	$pannumber = $res['pannumber'];
	$anternate_number = $res['anternate_number'];
	$present_address = $res['present_address'];
	$permanent_address = $res['permanent_address'];
	$about_previous_company = $res['about_previous_company'];
	$bank_account_number = $res['bank_account_number'];
	$ifsc = $res['ifsc'];
	$bank_holder_name = $res['bank_holder_name'];
	$dob = $res['dob'];
	$ofc_email = $res['ofc_email'];
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
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="name" placeholder="Enter Email" name="email"  value="<?php echo $email;?>"  required>
    </div>
     <div class="form-group">
      <label for="email">Phone Number:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Phone Number" name="phonenumber"  value="<?php echo $phonenumber;?>" required>
    </div>
     <div class="form-group">
      <label for="email">Alternate Number:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Alternate Number" name="anternate_number"  value="<?php echo $anternate_number;?>" required>
    </div>
     <div class="form-group">
      <label for="email">Adhar Number:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Adhar Number" name="adharnumber"  value="<?php echo $adharnumber;?>">
    </div>
     <div class="form-group">
      <label for="email">PAN Number:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter PAN Number" name="pannumber"  value="<?php echo $pannumber;?>" required>
    </div>
     <div class="form-group">
      <label for="email">Present Address:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Present Address" name="present_address"  value="<?php echo $present_address;?>" required>
    </div>
     <div class="form-group">
      <label for="email">Permanent Address:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Permanent Address" name="permanent_address"  value="<?php echo $permanent_address;?>" required>
    </div>
  
     <div class="form-group">
      <label for="email">About previous company:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter About previous company" name="about_previous_company"  value="<?php echo $about_previous_company;?>" required>
    </div>
     <div class="form-group">
      <label for="email">Bank Account Number:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Bank Account Number" name="bank_account_number"  value="<?php echo $bank_account_number;?>" required>
    </div>
     <div class="form-group">
      <label for="email">IFSC:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter IFSC" name="ifsc"  value="<?php echo $ifsc;?>" required>
    </div>
    <div class="form-group">
      <label for="email">Bank Holder Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Bank Holder Name" name="bank_holder_name"  value="<?php echo $bank_holder_name;?>" required>
    </div>
     <div class="form-group">
      <label for="email">DOB:(mm/dd/yyyy)</label>
      <input type="date" class="form-control" id="name" placeholder="Enter Date of Birth" name="dob"  value="<?php echo $dob;?>" required>
    </div>
     <div class="form-group">
      <label for="email">Office Email:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Office Email" name="ofc_email"  value="<?php echo $ofc_email;?>" required>
    </div>
    <input type="submit" name="update" value="Update" class="btn btn-success">
		
	</form>
</div>

</div>
              </div>
                  
            </div>
          </div>

<?php include 'footer2.php'; ?>
