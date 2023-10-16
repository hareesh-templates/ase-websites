<?php
include("connection.php");

$user = "select * from registration";
$userResult = $conn->query($user);
$userRow = $userResult->fetch(PDO::FETCH_ASSOC);
$userName = $userRow['name'];


if (isset($_POST['update'])) {
	$sno = $_GET['keyId'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$password = $_POST['password'];
	$user_type = $_POST['user_type'];
}

$updateSql = "UPDATE registration SET name='" . $name . "',email='" . $email . "',mobile='" . $mobile . "',password='" . $password . "',user_type='" . $user_type . "' WHERE sno='" . $sno . "'";
// var_dump($updateSql);
$stmt = $conn->query($updateSql);
// var_dump($stmt);

echo "
	<div style='margin: 50px 50px; color: green;'>
		<p>Hii $userName.</p>
		<font color='red'>Your are edited details submitted successfully.
	</div>";
?>

<script>
	setTimeout(function() {
		window.location.href = '../adminPage/user.php';
	}, 3000);
</script>