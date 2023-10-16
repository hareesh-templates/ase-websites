
<?php
	include("connection.php");
	if(isset($_POST['submit'])) {
		// $s_no = $_POST['s_no'];
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$comment = $_POST['comment'];

	}
	$sql="insert into contact_form (name,mobile,email,comment) values(?,?,?,?)";
	$stmt=$conn->prepare($sql);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$data=array($name,$mobile,$email,$comment);
	var_dump($name);
	$stmt->execute($data);

	echo("comment submited");

	header("Location: ../index.html");
?>

