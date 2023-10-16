<?php

include_once('connection.php');
$id = $_GET['keyId'];
$query = "delete from blog where id=$id";

// for files start
$sql = "SELECT image FROM blog WHERE id=$id";

$result = $conn->query($sql);
$count = $result->rowCount();
if ($count > 0) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $image = $row['image'];
        if (file_exists("../images/imgs/" . $image)) {
            unlink("../images/imgs/" . $image);
        }
    }
}
// for files end

$conn->exec($query);
echo "
    <div style='margin: 50px 50px; color: green;'>
        Record deleted successfully
    </div>";

?>

<script>
    setTimeout(function() {
        window.location.href = '../blogAdmin/index.php';
    }, 3000);
</script>