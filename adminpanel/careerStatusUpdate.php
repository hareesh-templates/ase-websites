<?php
include("connection.php");

$careerStatus = "select * from careers";
$careerStatusResult = mysqli_query($mysqli, $careerStatus);
// $careerStatusRow = $careerStatusResult->fetch(PDO::FETCH_ASSOC);
$careerStatusRow = mysqli_fetch_array($careerStatusResult);
$JobID = $careerStatusRow['JobID'];


if (isset($_POST['update'])) {
	$JobID = $_GET['keyId'];
	$careerStatus = $_POST['jobStatus'];
}

$updateSql = "UPDATE `careers` SET `JobStatus`= '$careerStatus' WHERE `JobID` = $JobID";
// var_dump($updateSql);
$stmt = mysqli_query($mysqli, $updateSql);;
// var_dump($stmt);

echo "
	<div style='margin: 50px 50px; color: green;'>
		<p>Hii, the status was changed to '$careerStatus'.</p>
		<font color='red'>Your are edited details submitted successfully.
	</div>";
?>

<script>
	setTimeout(function() {
		window.location.href = 'careers.php';
	}, 3000);
</script>