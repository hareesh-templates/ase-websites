<?php 
	include 'header.php';
?>
<style type="text/css">
	.navbar{
  display: none;
}
.footer{
  display: none;
}
.panel-heading{
	background: linear-gradient(to bottom, #e6e5f2, #141515);
}
.panel{
  width: 75%;
  margin-left: 15%;
}
</style>
<div class="container">
	 <h2 style="text-align: center;"><img src="images/eglogo2.png" height="150px" width="150px"></h2>
 <div class="panel panel-primary">
      <div class="panel-heading" style="background-color: #222">Forgot Password</div>
      <div class="panel-body">
      	<form action="" method="post">
      	<div class="form-group">
      		<input type="email" name="forgotemail" class="form-control" required placeholder="Enter your Office Email">
      	</div>
      	<input type="submit" name="forgotpwd" class="btn btn-primary"  style="background-color: #222">
      	</form>
      </div>
    </div>
</div>
<?php
if(isset($_POST['forgotpwd'])){
	$forgotemail = $_POST['forgotemail'];
	$to = $_POST['forgotemail'];
	$subject = "Eswari Group App - Forgot Pssword";
	$txt = "https://eswarigroup.com/app/resetpwd.php?forgotemail=".$forgotemail." .Click the link for new password";
	$headers = "From: webmaster@example.com" . "\r\n" .
	"CC: somebodyelse@example.com";

	mail($to,$subject,$txt,$headers);
	echo "<div class='container'>Reset Password link sent to your Mail Please check.</div>";
}
?>

<?php 
	include 'footer.php';
?>