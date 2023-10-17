<?php
include("connection.php");
if (isset($_POST['submit'])) {
	// $s_no = $_POST['s_no'];
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$to = 'parimidentalcare.18@gmail.com';
	$subject = 'New form submission';
	$body = "Parimi's Dental Care New Form Submission Details\n
	            Name: $name\n
	            Email: $email\n
	            Mobile: $mobile\n
	            Message: $message
	       ";

}
$sql = "insert into contact_form (name,mobile,email,message) values(?,?,?,?)";
$stmt = $conn->prepare($sql);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$data = array($name, $mobile, $email, $message);
// var_dump($name);
$stmt->execute($data);

if ($stmt != null) {
	echo "
		<div style='margin: 50px 50px'>
			<font color='green'>Your data added successfully.</font>
			// <font>We will reach you shortly</font>
			<br>
			<font color='red'>Please don't refresh this page</font>
		</div>
	";
}


// Send email
if (mail($to, $subject, $body)) {} else {
	echo "
		<div style='margin: 50px 50px'>
			<font color='red'>Sorry, there was an error sending your message.</font>
		</div>
	";
}

?>

<script>
	setTimeout(function() {
		window.location.href = '../index.php';
	}, 3000);
</script>