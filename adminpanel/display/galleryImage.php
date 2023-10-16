<?php
include('../../backend/connection.php');
$sql = "select * from activity_images";
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

    <?php
    $count = $result->rowCount();
    if ($count > 0) {
    ?>
        <table class="table table-light table-hover table-striped container mt-5">
            <thead class="text-center">
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>image</th>
                </tr>
            </thead>
            <tbody>

                <?php
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    $activityName = str_replace(' ', '', $row['title']);
                ?>
                    <tr>
                        <td><?php echo ($row['id']) ?></td>
                        <td><?php echo ($row['title']) ?></td>
                        <td><img src="../../imgs/activities/<?php echo $activityName.'/'.($row['image']) ?>" alt="<?php echo $activityName.'/'.($row['image']) ?>" style="max-width: 150px; max-height: 100px;" /></td>
                    </tr>
            <?php
                }
                echo '
        </tbody>
    </table>';
            } else {
                echo '<p class="errors">No data found</p>';
            }
            ?>
        <?php
        include "../footer.php";
    }
        ?>