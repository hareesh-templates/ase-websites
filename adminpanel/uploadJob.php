<?php include 'header.php'; ?>
<?php
include_once("connection.php");

if(isset($_POST['Submit'])) {	
	$JobTitle = $_POST['JobTitle'];
	$JobDescription = $_POST['JobDescription'];
	$JobStatus = "Open";
		
		$result = "INSERT INTO careers (JobTitle,JobDescription,JobStatus) VALUES ('$JobTitle','$JobDescription','$JobStatus')";
			var_dump($result);
		if ($mysqli->query($result) === TRUE) {
		echo "
			<div class='container'>
				<font color='green'>Data added successfully.</font>
			</div>
			<div class='container'>
				<font color='red'>Please don't refresh this page.</font>
			</div>";
		}
	
}
?>
<script>
        //  setTimeout(function(){
        //     window.location.href = 'careers.php';
        //  }, 5000);
      </script>
<?php include 'footer.php'; ?>
</body>
</html>
