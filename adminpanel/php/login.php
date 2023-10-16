<?php
    include('./connection.php');
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
    }

    $query = "select * from registration where email= '".$email."' and password='".$password."'";
    // var_dump($query);
    $result = $conn->query($query);

    if ($result->rowCount() > 0) {
        session_start();
        $row = $result->fetch(PDO::FETCH_ASSOC);

        if ($row['user_type'] == 1) {
            $_SESSION['admin'] = $row['user_type'];
            header('location:../adminPage/contact.php');

        } else if ($row['user_type'] == 2) {
            $_SESSION['blogAdminPanel'] = $row['user_type'];
            header('location:../blogAdmin/index.php');

        } else if ($row['user_type'] == 0) {
            echo "
                <div style='margin: 50px 50px'>
                    <font color='red'>
                        <p>You are not an admin, you have to wait for admin access from admin.</p>
                        <a href='https://eswarigroup.com/interiors/'>Click here </a> for Our website.
                    </font>
                </div>";

            echo "
                <script>
                    setTimeout(function() {
                        window.location.href = 'https://eswarigroup.com/interiors/';
                    }, 3000);
                </script>";
                
        }

    } else {
        echo "
            <div style='margin: 50px 50px'>
                <font color='red'>
                    <p>no user found.</p>
                    <a href='https://eswarigroup.com/interiors/'>Click here</a> for Our website.
                </font>
            </div>";

        echo "
            <script>
                setTimeout(function() {
                    window.location.href = 'https://eswarigroup.com/interiors/';
                }, 3000);
            </script>";

    }
?>
