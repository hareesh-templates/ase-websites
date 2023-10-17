<?php include 'header.php'; ?>
  
<div class="container">
  
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$company = $_POST['company'];
	$adharnumber = $_POST['adharnumber'];
	$pannumber = $_POST['pannumber'];
	$phonenumber = $_POST['phonenumber'];

	if($user == "" || $pass == "" || $name == "" || $email == "") {
		echo "All fields should be filled. Either one or many fields are empty.";
		echo "<br/>";
		echo "<a href='register.php'>Go back</a>";
	} else {
    $sql_u = mysqli_query($mysqli, "SELECT * FROM login WHERE username='$user'");
    

     if (mysqli_num_rows($sql_u) != 0)
   {
     echo "Username already exists";
    }else{

		mysqli_query($mysqli, "INSERT INTO login(phonenumber, pannumber, adharnumber, company, name, email, username, password) VALUES('$phonenumber','$pannumber','$adharnumber','$company','$name', '$email', '$user', md5('$pass'))")
			or die("Could not execute the insert query.");
			
		echo "Registration successfully";
		echo "<br/>";
		echo "<a href='login.php'>Login</a>";
  }
	}
} else {
?>
	 <h2 style="text-align: center;"><img src="images/eglogo2.png" height="100px" width="100px"></h2>
  <div class="panel-group">
      <div class="panel panel-default">
        <div class="panel-heading"  style="background-color: #222!important;"><h4 style="color: #fff;">Register</font></h4></div>
       <div class="panel-body">
	<form name="myForm" method="post" action="" onsubmit="return validateForm()">
	<div class="form-group">
      <label for="email">Full Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Full Name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
    </div>
    <div class="form-group">
      <label for="email">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
    </div>
    <div class="form-group">
      <label for="email">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
    </div>
     <div class="form-group">
      <label for="email">Company:</label>
      <select name="company" class="form-control">
      	<option value="eh">Select Company</option>
      	<option value="eh">Eswari Homes</option>
      	<option value="at">ASE Technologies</option>
      	<option value="ec">Ewari Capital</option>
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
      <input type="text" class="form-control"  placeholder="Enter Phone Number" name="phonenumber">
    </div>
    <input type="submit" name="submit" value="Submit" class="btn btn-success">
		
	</form>
   </div>
      </div>
  </div>
  
  
<?php
}
?>
</div>
<script>
function validateForm() {
  var a = document.forms["myForm"]["name"].value;
  var b = document.forms["myForm"]["email"].value;
  var c = document.forms["myForm"]["username"].value;
  var d = document.forms["myForm"]["password"].value;
  var e = document.forms["myForm"]["company"].value;
  var f = document.forms["myForm"]["adharnumber"].value;
  var g = document.forms["myForm"]["pannumber"].value;
  var h = document.forms["myForm"]["phonenumber"].value;
  if (a == "") {
    alert("Full Name must be filled out");
    return false;
  }
  if (b == "") {
    alert("Email must be filled out");
    return false;
  }
if (c == "") {
    alert("Username must be filled out");
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
<?php include 'footer.php'; ?>
</body>
</html>
