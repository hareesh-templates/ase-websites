<?php
include("../../backend/connection.php");

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
}

$query = "select * from users where email= '" . $email . "' and password='" . $password . "'";
// var_dump($query);
$result = $conn->query($query);

if ($result->rowCount() > 0) {

    session_start();
    $row = $result->fetch(PDO::FETCH_ASSOC);
    var_dump($row);

    if ($row['user_name'] !== null) {
        $_SESSION['admin'] = $row['email'];
        header('location:../display/galleryTitle.php');
    } else {
        echo "
                <div style='margin: 50px 50px'>
                    <font color='red'>
                        <p>You are not an admin user, you have to reach admin team for admin access.</p>
                        <a href='http://eswarigroup.com/'>Click here </a> for Our website.
                    </font>
                </div>";

        echo "
                <script>
                    setTimeout(function() {
                        window.location.href = 'http://eswarigroup.com/';
                    }, 3000);
                </script>";
    }
} else {
    echo "
            <div style='margin: 50px 50px'>
                <font color='red'>
                    <p>no user found.</p>
                    <a href='http://eswarigroup.com/'>Click here</a> for Our website.
                </font>
            </div>";

    echo "
            <script>
                setTimeout(function() {
                    window.location.href = 'http://eswarigroup.com/';
                }, 3000);
            </script>";
}

?>