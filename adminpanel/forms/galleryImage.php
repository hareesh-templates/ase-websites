<?php
include('../../backend/connection.php');
$gallerySql = "select * from activities";
// $sql = "select * from activity_images";
$user = "select * from users";
$galleryResult = $conn->query($gallerySql);
// $result = $conn->query($sql);
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
        <form action="../php/galleryImage.php" method="post" name="myForm" enctype="multipart/form-data">
            <div class="h1">Gallery Add Form</div>
            <div class="form-group row">
                <div class="col-sm-3 my-3"></div>
                <div class=" bg-light col-md-6 m-5 p-5 shadow">

                    <label class="p-2">Gallery Title</label>
                    <select id="" class="form-control" name="title" required>
                        <option value="">Select Activity</option>
                        <?php
                        while ($galleryRow = $galleryResult->fetch(PDO::FETCH_ASSOC)) {
                            // $galleryTitle = $galleryRow['title'];
                        ?>
                            <option value="<?php echo ($galleryRow['title']); ?>"><?php echo ($galleryRow['title']); ?></option>

                        <?php
                        }

                        ?>
                    </select>
                    <!-- <input type="text" name="title" class="form-control" placeholder="Enter title" required> -->

                    <label class="p-2">Gallery Image</label>
                    <input type="file" name="image" class="form-control" accept="image/*" required>

                    <input type="submit" name="Submit" value="Add" id="submit" class="form-control btn btn-success my-3">
                </div>
            </div>
        </form>
    </div>

<?php
    include "../footer.php";
}
?>