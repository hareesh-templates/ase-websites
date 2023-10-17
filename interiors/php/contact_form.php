
<?php
	include("connection.php");
	if(isset($_POST['submit'])) {
		// $s_no = $_POST['s_no'];
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$message = $_POST['message'];

	}
	$sql="insert into contact_form (name,mobile,email,message) values(?,?,?,?)";
	$stmt=$conn->prepare($sql);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$data=array($name,$mobile,$email,$message);
	var_dump($name);
	$stmt->execute($data);

	echo("message submited");

	header("Location: ../index.html");
?>

