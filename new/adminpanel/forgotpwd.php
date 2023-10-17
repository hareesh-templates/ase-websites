<?php 
	include 'header.php';
?>
<div class="container">
	 <h2 style="text-align: center;"><img src="images/eglogo2.png" height="100px" width="100px"></h2>
 <div class="panel panel-primary">
      <div class="panel-heading" style="background-color: #222">Forgot Password</div>
      <div class="panel-body">
      	<form action="" method="post">
      	<div class="form-group">
      		<input type="email" name="forgotemail" class="form-control" required>
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
	$txt = "http://eswarigroup.com/app/resetpwd.php?forgotemail=".$forgotemail." .Click the link for new password";
	$headers = "From: webmaster@example.com" . "\r\n" .
	"CC: somebodyelse@example.com";

	mail($to,$subject,$txt,$headers);
	echo "<div class='container'>Reset Password link sent to your Mail Please check.</div>";
}
?>

<?php 
	include 'footer.php';
?>