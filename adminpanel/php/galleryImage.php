<?php
session_start();
if (!$_SESSION["admin"]) {
	header("Location: ../index.php");
} else {
?>
	<?php
include('../../backend/connection.php');

	if (isset($_POST["Submit"])) {
		$title = $_POST["title"];
		// $title = $_POST["tlt"];

		$errors = array();
		$file_name = $_FILES["image"]["name"];
		$file_size = $_FILES["image"]["size"];
		$file_tmp = $_FILES["image"]["tmp_name"];
		$file_type = $_FILES["image"]["type"];

		$fileName = str_replace(" ", "", $file_name);
		move_uploaded_file($file_tmp, "../../imgs/activities/" . str_replace(' ', '', $title) ."/" . $fileName);

		$result = "INSERT INTO activity_images (title,image) VALUES ('$title','$fileName')";
		// var_dump($result);
		$res = $conn->query($result);
		// var_dump($res);
		if ($res != null) {
			echo "
				<div style='margin: 50px 50px'>
					<font color='green'>Gallery Image added successfully.</font>
					<br>
					<font color='red'>Please don't refresh this page</font>
				</div>";
		}
	}
	?>

	<script>
		setTimeout(function() {
			window.location.href = '../display/galleryImage.php';
		}, 100);
	</script>

<?php
}
?>