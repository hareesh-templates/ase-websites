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
$id = $_GET['call_id'];

//deleting the row from table
$result=mysqli_query($mysqli, "DELETE FROM calls WHERE id=$id");
header("Location:calls.php");
?>

