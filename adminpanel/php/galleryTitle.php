<?php
session_start();
if (!$_SESSION["admin"]) {
	header("Location: ../index.php");
} else {
?>
	<?php
	include('../../backend/connection.php');

	if (isset($_POST["Submit"])) {
		$title = ucwords($_POST["title"]);
		var_dump($title);
		$subTitle = ucwords($_POST["subTitle"]); //Location

		$errors = array();
		$file_name = $_FILES["image"]["name"];
		$file_size = $_FILES["image"]["size"];
		$file_tmp = $_FILES["image"]["tmp_name"];
		$file_type = $_FILES["image"]["type"];

		$fileName = str_replace(" ", "", $file_name);
		$activityName = str_replace(' ', '', $title);

		mkdir("../../imgs/activities/".$activityName);
		move_uploaded_file($file_tmp, "../../imgs/activities/" . $activityName . "/" . $fileName);

		$result = "INSERT INTO activities (title,sub_title,image) VALUES ('$title','$subTitle','$fileName')";
		// var_dump($result);
		$res = $conn->query($result);
		// var_dump($res);
		if ($res != null) {
			echo "
				<div style='margin: 50px 50px'>
					<font color='green'>Gallery activity added successfully.</font>
					<br>
					<font color='red'>Please don't refresh this page</font>
				</div>";
		}
	}
	?>

	<script>
		setTimeout(function() {
			window.location.href = '../display/galleryTitle.php';
		}, 100);
	</script>

<?php
}
?>