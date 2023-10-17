<?php
session_start();
if (!$_SESSION["admin"]) {
	header("Location: ../index.php");
} else {
?>
	<?php
	include_once("../php/connection.php");

	if (isset($_POST["Submit"])) {
		$title = $_POST["title"];

		$errors = array();
		$file_name = $_FILES["image"]["name"];
		$file_size = $_FILES["image"]["size"];
		$file_tmp = $_FILES["image"]["tmp_name"];
		$file_type = $_FILES["image"]["type"];

		$fileName = str_replace(" ", "", $file_name);
		// str_replace(" ","",$aa);
		move_uploaded_file($file_tmp, "../images/galleryImgs/" . $fileName);

		$result = "INSERT INTO gallery (title,image) VALUES ('$title','$fileName')";
		// var_dump($result);
		$res = $conn->query($result);
		// var_dump($res);
		if ($res != null) {
			echo "
				<div style='margin: 50px 50px'>
					<font color='green'>Gallery data added successfully.</font>
					<br>
					<font color='red'>Please don't refresh this page</font>
				</div>";
		}
	}
	?>

	<script>
		setTimeout(function() {
			window.location.href = '../adminPage/gallery.php';
		}, 3000);
	</script>

<?php
}
?>