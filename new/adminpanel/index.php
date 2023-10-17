
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
      $adhar_image = $res['adhar_image'];
      $pan_image = $res['pan_image'];
      $about_previous_company = $res['about_previous_company'];
      $bank_account_number = $res['bank_account_number'];
      $ifsc = $res['ifsc'];
      $bank_holder_name = $res['bank_holder_name'];
      $company = 'ASE';
     
    }
	?>
		<div class="container">
  
  <div class="panel-group">
    

    <div class="panel panel-primary">
      <div class="panel-heading"  style="background-color: #222!important;">My Profile
      
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
      <label for="email">Company:</label>
      <span class="label label-info"> <?php echo $company; ?></span>
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
