<?php
include('../../backend/connection.php');
$sql = "select * from activities";
$user = "select * from users";
$result = $conn->query($sql);
$userResult = $conn->query($user);

session_start();
if (!$_SESSION["admin"]) {
    header("Location: ../login.php");
} else {
    $userRow = $userResult->fetch(PDO::FETCH_ASSOC);
    $userName = $userRow['user_name'];
?>

    <?php
    include "../header.php";
    ?>

<div class="container">
        <form action="../php/galleryTitle.php" method="post" name="myForm" enctype="multipart/form-data">
            <div class="h1">Activity Add Form</div>
            <div class="form-group row">
                <div class="col-sm-3 my-3"></div>
                <div class=" bg-light col-md-6 m-5 p-5 shadow">

                    <label class="p-2">Activity Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter title" required>

                    <label class="p-2">Activity Location</label>
                    <input type="text" name="subTitle" class="form-control" placeholder="Enter Activity Location" required>

                    <label class="p-2">Activity Image</label>
                    <input type="file" name="image" class="form-control" accept="image/*" required>

                    <input type="submit" name="Submit" value="Add" id="submit" class="form-control btn btn-success my-3" onclick="submitForm()">
                </div>
            </div>
        </form>
    </div>

<?php
include "../footer.php";
}
?>