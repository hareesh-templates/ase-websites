<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
?>

<?php
//including the database connection file
include("connection.php");

//getting id of the data from url
$id = $_GET['profile_id'];

//deleting the row from table
//$result=mysqli_query($mysqli, "DELETE FROM login WHERE id=$id");
$result=mysqli_query($mysqli, "UPDATE login SET status='active' WHERE id=$id");
//$result2=mysqli_query($mysqli, "UPDATE login SET report=0 WHERE report=$id");

//redirecting to the display page (view.php in our case)
header("Location:employees.php");
?>

