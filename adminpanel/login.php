
<?php include 'header.php'; ?>
<style type="text/css">
  .emsg{
    color: red;
}
.hidden {
     visibility:hidden;
}
</style>
<?php
include("connection.php");

if(isset($_POST['reg_submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	//$user = $_POST['username'];
	$pass = $_POST['phonenumber'];
	$company = $_POST['company'];
	$adharnumber = $_POST['adharnumber'];
	$pannumber = $_POST['pannumber'];
  $phonenumber = $_POST['phonenumber'];

	$designation = $_POST['designation'];
  $anternate_number = $_POST['anternate_number'];
  $present_address = $_POST['present_address'];
  $permanent_address = $_POST['permanent_address'];
  $joining_date = $_POST['joining_date'];
  $about_previous_company = $_POST['about_previous_company'];

  $bank_account_number = $_POST['bank_account_number'];
  $ifsc = $_POST['ifsc'];
  $bank_holder_name = $_POST['bank_holder_name'];


      $errors= array();
      $adhar_image = $_FILES['adhar_image']['name'];
      $file_size = $_FILES['adhar_image']['size'];
      $file_tmp = $_FILES['adhar_image']['tmp_name'];
      $file_type = $_FILES['adhar_image']['type'];
      $extensions= array("jpeg","jpg","png");
       move_uploaded_file($file_tmp,"images/adhar/".$adhar_image);

      $errors= array();
      $pan_image = $_FILES['pan_image']['name'];
      $file_size = $_FILES['pan_image']['size'];
      $file_tmp = $_FILES['pan_image']['tmp_name'];
      $file_type = $_FILES['pan_image']['type'];
      $extensions= array("jpeg","jpg","png");
       move_uploaded_file($file_tmp,"images/pan/".$pan_image);

  if($_POST['designation'] == 'RM'){
    $role = '';
  }
  else if($_POST['designation'] == 'EX'){
    $role = '';
  }
  else{
    $role = 'admin';
  }

	if($pass == "" || $name == "" || $email == "") {
		echo "<div class='container'>All fields should be filled. Either one or many fields are empty.</div>";
			} else {



  $adhar_check = mysqli_query($mysqli, "SELECT * FROM login WHERE adharnumber = $adharnumber");

      if (mysqli_num_rows($adhar_check) > 0) {
        echo "<div class='container'>Adhar Number already registered</div>";
      }
      else
      {
        
          

		mysqli_query($mysqli, "INSERT INTO login(phonenumber, pannumber, adharnumber, company, name, email, designation, anternate_number, present_address, permanent_address, joining_date, about_previous_company, role, adhar_image, pan_image, bank_account_number, ifsc, bank_holder_name, password) VALUES('$phonenumber','$pannumber','$adharnumber','$company','$name', '$email', '$designation', '$anternate_number', '$present_address', '$permanent_address', '$joining_date', '$about_previous_company', '$role', '$adhar_image', '$pan_image', '$bank_account_number', '$ifsc', '$bank_holder_name', '$pass')")
			or die("Could not execute the insert query.");

       $last_id = $mysqli->insert_id;

          if($_POST['company'] == 'eh'){
            $username = 'EG01_EH0'.$last_id;
          }
          else if($_POST['company'] == 'at'){
            $username = 'EG02T_ASE0'.$last_id;
          }
            else if($_POST['company'] == 'ec'){
             $username = 'EG04_EC0'.$last_id;
          }
            else if($_POST['company'] == 'ai'){
            $username = 'EG03I_ASE0'.$last_id;
          }
           
       $result3 = mysqli_query($mysqli, "UPDATE login SET username='$username' WHERE id=$last_id");
		echo "<div class='container'>Registration successfully. </div>";
    echo "<div class='container'>Employee ID is: " . $username. "</div>";  
    echo "<div class='container'>Password is: " . $_POST['phonenumber']. "</div>";  
	}
  }
   ?>
  <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
<?php } 


if(isset($_POST['submit'])) {
	$user = mysqli_real_escape_string($mysqli, $_POST['username']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['password']);
echo $user;echo $pass;
	if($user == "" || $pass == "") {
		echo "<div class='container'>Either username or password field is empty.";
		echo "<br/>";
		echo "<a href='login.php'>Go back</a></div>";
	} else {
		 $result = mysqli_query($mysqli, "SELECT * FROM login WHERE username='$user' AND password='$pass' AND status = 'active'")
					or die("Could not execute the select query.");
		
		$row = mysqli_fetch_assoc($result);
		
		if(is_array($row) && !empty($row)) {
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['name'] = $row['name'];
			$_SESSION['id'] = $row['id'];
			$_SESSION['company'] = $row['company'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['phonenumber'] = $row['phonenumber'];
			$_SESSION['adharnumber'] = $row['adharnumber'];
			$_SESSION['pannumber'] = $row['pannumber'];
			$_SESSION['company'] = $row['company'];
			$_SESSION['role'] = $row['role'];
      $_SESSION['designation'] = $row['designation'];
      $_SESSION['anternate_number'] = $row['anternate_number'];
      $_SESSION['present_address'] = $row['present_address'];
      $_SESSION['permanent_address'] = $row['permanent_address'];
      $_SESSION['joining_date'] = $row['joining_date'];
      $_SESSION['adhar_image'] = $row['adhar_image'];
      $_SESSION['pan_image'] = $row['pan_image'];
      $_SESSION['about_previous_company'] = $row['about_previous_company'];
      $_SESSION['bank_account_number'] = $row['bank_account_number'];
      $_SESSION['ifsc'] = $row['ifsc'];
      $_SESSION['bank_holder_name'] = $row['bank_holder_name'];
      $_SESSION['report'] = $row['report'];
		} else {
			echo "<div class='container'>Invalid username or passwords.";
			echo "<br/>";
			echo "<a href='login.php'>Go back</a></div>";
		}

		if(isset($_SESSION['valid'])) {
			header('Location: index.php');			
		}
	}
} else {
?>
<div class="container">
	 <h2 style="text-align: center;"> <img src="../images/aseinfralogo.jpg" alt="" class="img-fluid" style="    margin-top: -10px;height: 60px;width: 60px;"></h2>




  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
	 <div class="panel-group">
	    <div class="panel panel-default">
	      <div class="panel-heading"  style="background-color: #222!important;"><h4 style="color: #fff;">Login</font></h4></div>
	      <div class="panel-body">
	      	<form name="myForm" method="post" action="" onsubmit="return validateForm()">
		 <div class="form-group">
	      <label for="email">Employee ID:</label>
	      <input type="text" class="form-control" id="username" placeholder="Enter Employee ID" name="username">
	    </div>
	    <div class="form-group">
	      <label for="email">Password:</label>
	      <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
	    </div>
	    <input type="submit" name="submit" value="Submit" class="btn btn-success"><br><br>
	     
	</form>
	      </div>
	    </div>
	</div>
</div>


	
	</div>
</div>
<?php
}
?>
<script>
function validateForm() {
  var a = document.forms["myForm"]["username"].value;
  var b = document.forms["myForm"]["password"].value;
  if (a == "") {
    alert("User Name must be filled out");
    return false;
  }
  if (b == "") {
    alert("Password must be filled out");
    return false;
  }
  }
</script>
<script>
function validateForm2() {
  var a = document.forms["myForm2"]["name"].value;
  var b = document.forms["myForm2"]["email"].value;
 // var c = document.forms["myForm"]["username"].value;
  var d = document.forms["myForm2"]["password"].value;
  var e = document.forms["myForm2"]["company"].value;
  var f = document.forms["myForm2"]["adharnumber"].value;
  var g = document.forms["myForm2"]["pannumber"].value;
  var h = document.forms["myForm2"]["phonenumber"].value;
  if (a == "") {
    alert("Full Name must be filled out");
    return false;
  }

  if (b == "") {
    alert("Email must be filled out");
    return false;
  }

  if (d == "") {
    alert("Password must be filled out");
    return false;
  }
  if (e == "") {
    alert("Company must be filled out");
    return false;
  }
  if (f == "") {
    alert("Adhar Number must be filled out");
    return false;
  }
  if (g == "") {
    alert("PAN Number must be filled out");
    return false;
  }
  if (h == "") {
    alert("Phone Number must be filled out");
    return false;
  }
  
  
}
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var $regexname=/^([a-zA-Z]{3,30})$/;
    $('.name').on('keypress keydown keyup',function(){
             if (!$(this).val().match($regexname)) {
              // there is a mismatch, hence show the error message
                 $('.emsg').removeClass('hidden');
                 $('.emsg').show();
                 $('.reg_submit').hide();

             }
           else{
                // else, do not display message
                $('.emsg').addClass('hidden');
                $('.reg_submit').show();
               }
         });
});
</script>
<?php include 'footer.php'; ?>
</body>
</html>
