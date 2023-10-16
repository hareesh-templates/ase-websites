
<?php
	include("connection.php");
	if(isset($_POST['submit'])) {
		// $s_no = $_POST['s_no'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		
        $to = 'support@eswarigroup.com';
    	$subject = 'Eswari Group / Interiors - New Email submission';
    	$body = "Name: $name\nEmail: $email";
        mail($to, $subject, $body);
	}
	$sql="insert into newsletter (name,email) values(?,?)";
	$stmt=$conn->prepare($sql);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$data=array($name,$email);
	var_dump($name);
	$stmt->execute($data);

	header("Location: ../index.php");

?>

