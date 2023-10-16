
<?php include 'header.php'; ?>

<div class="container">
 
  <?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
	?>
  <?php
include_once("connection.php");
$profile_id = $_GET['profile_id'];

$result = mysqli_query($mysqli, "SELECT login.* FROM login where id = ".$profile_id." ORDER BY id DESC");
while($res = mysqli_fetch_array($result))
{
  $name = $res['name'];
  $email = $res['email'];
  $username = $res['username'];
  $phonenumber = $res['phonenumber'];
  $adharnumber = $res['adharnumber'];
  $pannumber = $res['pannumber'];
  $company = $res['company'];
  $designation = $res['designation'];
  $anternate_number = $res['anternate_number'];
  $present_address = $res['present_address'];
  $permanent_address = $res['permanent_address'];
  $joining_date = $res['joining_date'];
  $about_previous_company = $res['about_previous_company'];
  $bank_account_number = $res['bank_account_number'];
  $ifsc = $res['ifsc'];
  $bank_holder_name = $res['bank_holder_name'];
  $adhar_image = $res['adhar_image'];
  $pan_image = $res['pan_image'];
  $status = $res['status'];
}

?>
		<div class="container">
  
  <div class="panel-group">
    

    <div class="panel panel-primary">
      <div class="panel-heading"  style="background-color: #222!important;">Empoyee Profile
      
      </div>
      <div class="panel-body">
    <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Name:</label>
      <span class="label label-info"> <?php echo $name ?></span>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <span class="label label-info"> <?php echo $email?></span>
    </div>
     <div class="form-group">
      <label for="email">Employee ID:</label>
      <span class="label label-info"> <?php echo $username ?></span>
    </div>
     <div class="form-group">
      <label for="email">Phone:</label>
      <span class="label label-info"> <?php echo $phonenumber ?></span>
    </div>
     <div class="form-group">
      <label for="email">Adhar Number:</label>
      <span class="label label-info"> <?php echo $adharnumber ?></span>
    </div>
     <div class="form-group">
      <label for="email">PAN Number:</label>
      <span class="label label-info"> <?php echo $pannumber ?></span>
    </div>
     <div class="form-group">
      <label for="email">Company:</label>
      <?php 
        if($res['company'] == 'eh'){
          $company = 'Eswari Homes';
        }
        if($res['company'] == 'ec'){
          $company = 'Eswari Capital';
        }
        if($res['company'] == 'at'){
          $company = 'ASE Technologies';
        }
        if($res['company'] == 'eg'){
          $company = 'Eswari Group';
        }
       ?>
      <span class="label label-info"> <?php echo $company; ?></span>
    </div>
     <div class="form-group">
      <label for="email">Designation:</label>
      <span class="label label-info"> <?php echo $designation?></span>
    </div>
     <div class="form-group">
      <label for="email">Alternate Number:</label>
      <span class="label label-info"> <?php echo $anternate_number ?></span>
    </div>
     <div class="form-group">
      <label for="email">Present Address:</label>
      <textarea value="<?php echo $permanent_address ?>" readonly class="form-control"><?php echo $present_address ?> </textarea>
    </div>
     <div class="form-group">
      <label for="email">Permanent Address:</label>
      <textarea value="<?php echo $permanent_address ?>" readonly class="form-control"><?php echo $permanent_address ?> </textarea>
    </div>
     <div class="form-group">
      <label for="email">Joining date:</label>
      <span class="label label-info"> <?php echo $joining_date ?></span>
    </div>
     <div class="form-group">
      <label for="email">About Previous Company:</label>
      <span class="label label-info"> <?php echo $about_previous_company?></span>
    </div>
    <div class="form-group">
      <label for="email">Bank Account Number:</label>
      <span class="label label-info"> <?php echo $bank_account_number ?></span>
    </div>
    <div class="form-group">
      <label for="email">IFSC:</label>
      <span class="label label-info"> <?php echo $ifsc ?></span>
    </div>
    <div class="form-group">
      <label for="email">Bank Holder Name:</label>
      <span class="label label-info"> <?php echo $bank_holder_name ?></span>
    </div>
     <div class="form-group">
      <label for="email">Adhar image:</label>
       <img src="images/adhar/<?php echo $adhar_image?>" height='250px' width='300px'>
    </div>
     <div class="form-group">
      <label for="email">PAN Image:</label>
      <img src="images/pan/<?php echo $pan_image ?>" height='250px' width='300px'>
    </div>
    
       <div class="form-group">
    <?php if($_SESSION['id'] == 1 && $status == 'inactive'){
      echo "<span class='badge badge-danger'><a href=\"activate_user.php?profile_id=$profile_id\" style='color:#fff;' onClick=\"return confirm('Are you sure you want to Active User?')\">Active User</a><pan></td>"; 
      } ?>
    </div>  </form>
      </div>
    </div>

    
  </div>
</div>		
		<p style="color: #fff;">Welcome <?php echo $_SESSION['name'] ?> </p>
		<br/>
		
	<?php	
	} else {
		header('Location: login.php');
	}
	?>
</div>

	
	<?php include 'footer.php'; ?>
	
</body>
</html>
