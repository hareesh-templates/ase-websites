
<?php include 'header.php'; ?>

<div class="container">
  <!-- <h3>Welcome to ASE Technologies</h3> -->
  <!-- <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).
  <p>Only when the button is clicked, the navigation bar will be displayed.</p> -->
  <?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
	//	$result = mysqli_query($mysqli, "SELECT * FROM login");
    $result = mysqli_query($mysqli, "SELECT login.* FROM login where id = ".$_SESSION['id']." ORDER BY id DESC");
    while($res = mysqli_fetch_array($result))
    {
      
      $name = $res['name'];
      $email = $res['email'];
      $username = $res['username'];
      $phonenumber = $res['phonenumber'];
      $adharnumber = $res['adharnumber'];
      $pannumber = $res['pannumber'];
      $designation = $res['designation'];
      $anternate_number = $res['anternate_number'];
      $present_address = $res['present_address'];
      $permanent_address = $res['permanent_address'];
      $joining_date = $res['joining_date'];
      $branch = $res['branch'];
      $adhar_image = $res['adhar_image'];
      $pan_image = $res['pan_image'];
      $about_previous_company = $res['about_previous_company'];
      $bank_account_number = $res['bank_account_number'];
      $ifsc = $res['ifsc'];
      $dob = $res['dob'];
      $ofc_email = $res['ofc_email'];
      $bank_holder_name = $res['bank_holder_name'];
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
     
    }
	?>
		<div class="container">
  
  <div class="panel-group">
    

    <div class="panel panel-primary">
      <div class="panel-heading"  style="background-color: #222!important;">My Profile
       <a href="edit_profile_details.php?profile_id=<?php echo $_SESSION['id']; ?>" style='color:#fff;'><span class="pull-right badge badge-warning"> Edit Profile</span></a>
     </div>
      <div class="panel-body">
    <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Name:</label>
      <span class="label label-info"> <?php echo $name ?></span>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <span class="label label-info"> <?php echo $email ?></span>
    </div>
     <div class="form-group">
      <label for="email">Username:</label>
      <span class="label label-info"> <?php echo $username ?></span>
    </div>
     <div class="form-group">
      <label for="email">Phone:</label>
      <span class="label label-info"> <?php echo $phonenumber?></span>
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
      
      <span class="label label-info"> <?php echo $company; ?></span>
    </div>
     <div class="form-group">
      <label for="email">Designation:</label>
      <span class="label label-info"> <?php echo $designation ?></span>
    </div>
     <div class="form-group">
      <label for="email">Alternate Number:</label>
      <span class="label label-info"> <?php echo $anternate_number ?></span>
    </div>
     <div class="form-group">
      <label for="email">Present Address:</label>
      <span class="label label-info"> <?php echo $present_address ?></span>
    </div>
     <div class="form-group">
      <label for="email">Permanent Number:</label>
      <span class="label label-info"> <?php echo $permanent_address ?></span>
    </div>
     <div class="form-group">
      <label for="email">Joining date:</label>
      <span class="label label-info"> <?php echo $joining_date ?></span>
    </div>
     <div class="form-group">
      <label for="email">DOB(yyyy-mm-dd):</label>
      <span class="label label-info"> <?php echo $dob ?></span>
    </div>
     <div class="form-group">
      <label for="email">Office Email:</label>
      <span class="label label-info"> <?php echo $ofc_email ?></span>
    </div>
     <div class="form-group">
      <label for="email">Branch:</label>
      <span class="label label-info"> <?php echo $branch ?></span>
    </div>
     <div class="form-group">
      <label for="email">About Previous Company:</label>
      <span class="label label-info"> <?php echo $about_previous_company ?></span>
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
       <img src="images/adhar/<?php echo $adhar_image ?>" height='250px' width='300px'>
    </div>
     <div class="form-group">
      <label for="email">PAN Image:</label>
      <img src="images/pan/<?php echo $pan_image ?>" height='250px' width='300px'>
    </div>
    
    
    
  </form>
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
