<?php
include("connection.php");
if (isset($_POST['submit'])) {
	// $s_no = $_POST['s_no'];
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$to = 'info@eswarigroup.com';
	$subject = 'Eswari Group - New Form submission';
	$body = "Eswari Group - New Form submission\n
	           Name: $name\n
	           Mobile: $mobile\n
	           Email Id: $email\n
	           Message: $message
	       ";
	$header = "From: $email\r\nReply-To: $email\r\n";
	mail($to, $subject, $body, $header);

}
$sql = "insert into contact_form (name,mobile,email,message) values(?,?,?,?)";
$stmt = $conn->prepare($sql);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$data = array($name, $mobile, $email, $message);
// var_dump($mobile);
$stmt->execute($data);

if ($stmt != null) {
	echo "
		<div style='margin: 50px 50px'>
			<font color='green'>Your data added successfully. </font>
			<font>We will reach you shortly</font>
			<br>
			<font color='red'>Please don't refresh this page</font>
		</div>
	";
}

?>

<script>
	setTimeout(function() {
		window.location.href = '../index.php';
	}, 1500);
</script>