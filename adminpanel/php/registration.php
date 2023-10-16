<?php
include("connection.php");
if (isset($_POST['submit'])) {
	// $s_no = $_POST['s_no'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$password = $_POST['password'];
	$user_type = 0;
}
$sql = "insert into registration (name,mobile,email,password,user_type) values(?,?,?,?,?)";
var_dump($sql);
$stmt = $conn->prepare($sql);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$data = array($name, $mobile, $email, $password, $user_type);
// var_dump($data);
$stmt->execute($data);

echo "
	<div style='margin: 50px 50px'>
		<p>Hii $name.</p>
		<font color='red'>Your details submitted successfully.
	</div>";
?>

<script>
	setTimeout(function() {
		window.location.href = '../index.php';
	}, 3000);
</script>