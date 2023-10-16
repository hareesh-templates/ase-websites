
<?php include 'header.php'; ?>
<style type="text/css">
  .emsg{
    color: red;
}
.hidden {
     visibility:hidden;
}
.navbar{
  display: none;
}
.footer{
  display: none;
}
.panel-group{
  width: 75%;
  margin-left: 15%;
}
.nav-tabs{
  margin-left: 15%;
  border-bottom: 0px solid #fff;
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
  $branch = $_POST['branch'];
  $about_previous_company = $_POST['about_previous_company'];

  $bank_account_number = $_POST['bank_account_number'];
  $ifsc = $_POST['ifsc'];
  $bank_holder_name = $_POST['bank_holder_name'];
  $dob = $_POST['dob'];
  $ofc_email = $_POST['ofc_email'];


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
        
          

		mysqli_query($mysqli, "INSERT INTO login(phonenumber, pannumber, adharnumber, company, name, email, designation, anternate_number, present_address, permanent_address, joining_date, branch, about_previous_company, role, adhar_image, pan_image, bank_account_number, ifsc, bank_holder_name, password, dob, ofc_email) VALUES('$phonenumber','$pannumber','$adharnumber','$company','$name', '$email', '$designation', '$anternate_number', '$present_address', '$permanent_address', '$joining_date', '$branch', '$about_previous_company', '$role', '$adhar_image', '$pan_image', '$bank_account_number', '$ifsc', '$bank_holder_name', '$pass', '$dob', '$ofc_email')")
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
           else if($_POST['company'] == 'eg'){
            $username = 'EG01_EG0'.$last_id;
          }
           
       $result3 = mysqli_query($mysqli, "UPDATE login SET username='$username' WHERE id=$last_id");
		echo "<div class='container'>Registration successfully. </div>";
    echo "<div class='container'>Employee ID is: " . $username. "</div>";  
    echo "<div class='container'>Password is: " . $_POST['phonenumber']. "</div>";  


     $to = $ofc_email;
    // $to = "chandrasekhar@asetechnologies.in";
                $subject = "Employee App - Registration";

                $message = "
                <html>
                <head>
                <title>Eswarihomes-Employee App-Registration</title>
                </head>
                <body>
                <p>Welcome to Onboard. Eswarihomes Employee App Registration successfully. Your Login credentials shown below.</p>
                <table>
                <tr>
                <th>Employee ID</th>
                <th></th>
                <th>Password</th>
                </tr>
                <tr>
                <td>".$username."</td>
                <td></td>
                <td>".$_POST['phonenumber']."</td>
                
                </tr>
                </table>
                <p><a href='https://eswarigroup.com/app'>Click here for Login</a></p>
                </body>
                </html>
                ";

                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                // More headers
                $headers .= 'From: <eswarihomes9@gmail.com>' . "\r\n";
                $headers .= 'Cc: eswarihomes9@gmail.com' . "\r\n";

                mail($to,$subject,$message,$headers);



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
      $_SESSION['branch'] = $row['branch'];
      $_SESSION['adhar_image'] = $row['adhar_image'];
      $_SESSION['pan_image'] = $row['pan_image'];
      $_SESSION['about_previous_company'] = $row['about_previous_company'];
      $_SESSION['bank_account_number'] = $row['bank_account_number'];
      $_SESSION['ifsc'] = $row['ifsc'];
      $_SESSION['bank_holder_name'] = $row['bank_holder_name'];
      $_SESSION['report'] = $row['report'];
		} else {
			echo "<div class='container'>Invalid username or password.";
			echo "<br/>";
			echo "<a href='login.php'>Go back</a></div>";
		}

		if(isset($_SESSION['valid'])) {
		    	header('Location: index2.php');		
		    //  header('Location: dashboard.php');      
		}
	}
} else {
?>
<div class="container">
	 <h2 style="text-align: center;"><img src="images/eglogo2.png" height="150px" width="150px"></h2>


<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home" style="background-color: #97979f; color: #fff;" >Login</a></li>
    <li><a data-toggle="tab" href="#menu1" style="background-color: #97979f; color: #fff;">Register</a></li>
   
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
	 <div class="panel-group">
	    <div class="panel panel-default" style="background-color: antiquewhite;">
	      <div class="panel-heading"  style=" background: linear-gradient(to bottom, #e6e5f2, #141515);"><h4 style="color: #fff;">Login</font></h4></div>
	      <div class="panel-body" style=" background: linear-gradient(to bottom, #e6e5f2, #141515);">
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
	     <a href="forgotpwd.php" style="color:#fff;">Forgot Password?</a>
	</form>
	      </div>
	    </div>
	</div>
</div>

 <div id="menu1" class="tab-pane fade">

      <div class="panel-group">
      <div class="panel panel-default" style=" background: linear-gradient(to bottom, #e6e5f2, #141515);">
        <div class="panel-heading"  style=" background: linear-gradient(to bottom, #e6e5f2, #141515);"><h4 style="color: #fff;">Register</font></h4></div>
       <div class="panel-body" style="background: linear-gradient(to bottom, #e6e5f2, #385e5e);">
	<form name="myForm2" method="post" action="" onsubmit="return validateForm2()" enctype = "multipart/form-data">
	<div class="form-group">
      <label for="email">Full Name:</label>
      <input type="text" class="form-control name" id="name" placeholder="Enter Full Name" name="name">
      <p><span class="emsg hidden">Please Enter a Valid Name</span></p>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
    </div>
   
     <div class="form-group">
      <label for="email">Company:</label>
      <select name="company" class="form-control" >
      	<option value="">Select Company</option>
      	<option value="eg">Eswari Group</option>
      	<option value="eh">Eswari Homes</option>
      	<option value="at">ASE Technologies</option>
      	<option value="ec">Eswari Capital</option>
        <option value="ai">ASE Infra</option>
        <!-- <option value="ec">ASE India Pvt Ltd</option> -->
      </select>
    </div>
     <div class="form-group">
      <label for="email">Designation:</label>
      <select name="designation" class="form-control" >
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
     <div class="form-group">
      <label for="email">Adhar Number:</label>
      <input type="text" class="form-control"  placeholder="Enter Adhar Number" name="adharnumber">
    </div>
     <div class="form-group">
      <label for="email">PAN Number:</label>
      <input type="text" class="form-control"  placeholder="Enter PAN Number" name="pannumber">
    </div>
     <div class="form-group">
      <label for="email">Phone Number:</label>
      <input type="text" class="form-control"  placeholder="Enter Phone Number" name="phonenumber" >
    </div>
     <div class="form-group">
      <label for="email">Alternate Number:</label>
      <input type="text" class="form-control"  placeholder="Enter Alternate Number" name="anternate_number" >
    </div>
     <div class="form-group">
      <label for="email">Present Address:</label>
      <input type="text" class="form-control"  placeholder="Enter Present Address" name="present_address" >
    </div>
    <div class="form-group">
      <label for="email">Permanent Address:</label>
      <input type="text" class="form-control"  placeholder="Enter Present Address" name="permanent_address" >
    </div>
    <div class="form-group">
      <label for="email">Joining date:</label>
      <input type="date" class="form-control"  name="joining_date" >
    </div>
     <div class="form-group">
      <label for="email">Branch:</label>
     <select name="branch" class="form-control" >
        <option value="">Select Branch</option>
        <option value="Vizag">Vizag - Corporate office</option>
        <option value="Gajuwaka">Gajuwaka</option>
        <option value="Kakinada">Kakinada</option>
        <option value="Rajahmundry">Rajahmundry</option>
        <option value="Vijayawada">Vijayawada</option>
        <option value="Hyderabad">Hyderabad</option>
        <option value="Chennai">Chennai</option>
        <option value="Bengaluru">Bengaluru</option>
        <option value="Odisha">Odisha</option>
      </select>
    </div>
    <div class="form-group">
      <label for="email">Adhar Image:</label>
      <input type="file" class="form-control"  placeholder="Enter Adhar Image" name="adhar_image" >
    </div>
    <div class="form-group">
      <label for="email">PAN Image:</label>
      <input type="file" class="form-control"  placeholder="Enter PAN Image" name="pan_image" >
    </div>
     <div class="form-group">
      <label for="email">About Previous Company (If any):</label>
      <input type="text" class="form-control"  placeholder="About Previous Company" name="about_previous_company" >
    </div>

     <div class="form-group">
      <label for="email">Bank Account Number:</label>
      <input type="text" class="form-control"  placeholder="Bank Account Number" name="bank_account_number" >
    </div>
     <div class="form-group">
      <label for="email">IFSC:</label>
      <input type="text" class="form-control"  placeholder="IFSC" name="ifsc" >
    </div>
     <div class="form-group">
      <label for="email">Bank Holder Name:</label>
      <input type="text" class="form-control"  placeholder="Bank Holder Name" name="bank_holder_name" >
    </div>
     <div class="form-group">
      <label for="email">Date of Birth:</label>
      <input type="date" class="form-control"  placeholder="Date of Birth" name="dob" >
    </div>
     <div class="form-group">
      <label for="email">Office Email:</label>
      <input type="email" class="form-control"  placeholder="Office Email" name="ofc_email" >
    </div>

   <!--   <div class="form-group">
      <label for="email">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
    </div> -->
   <!--  <div class="form-group">
      <label for="email">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
    </div> -->
    <input type="submit" name="reg_submit" value="Submit" class="btn btn-success reg_submit">
		
	</form>
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
