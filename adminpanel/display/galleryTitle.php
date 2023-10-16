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
    <?php
    $count = $result->rowCount();
    if ($count > 0) {
    ?>

        <table class="table table-light table-hover table-striped container mt-5">
            <thead class="text-center">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>title</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <tr>
                        <td><?php echo ($row['id']) ?></td>
                        <td><?php echo ($row['title']) ?></td>
                        <td><?php echo ($row['sub_title']) ?></td>
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