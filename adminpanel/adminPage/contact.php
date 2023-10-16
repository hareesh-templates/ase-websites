<?php
include('../php/connection.php');
$sql = "select * from contact_form";
$result = $conn->query($sql);

session_start();
if (!$_SESSION["admin"]) {
    header("Location: ../index.php");
} else {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../images/egTitleIcon.png" type="image/x-icon">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!-- Google Web Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <title>Eswari Group / Interior - Admin Panel || Contact Information</title>

        <!-- Customized Bootstrap Stylesheet -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/index.css">

    </head>

    <body>
        <!-- Navbar Start -->
        <div class="container-fluid position-relative nav-bar p-0">
            <div class="container-fluid position-relative p-0" style="z-index: 9;">
                <nav class="navbar navbar-expand-lg bg-secondary fixed-top navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                    <a href="" class="navbar-brand">
                        <img src="../images/EG_Logo-side.png" alt="Eswari Group / Interiors" height="50px">
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                        <div class="navbar-nav ml-auto py-0">
                            <a href="./newsletter.php" class="nav-item nav-link ">Newsletter</a>
                            <a href="./contact.php" class="nav-item nav-link active">Contact Info</a>
                            <a href="./user.php" class="nav-item nav-link ">User Info</a>
                            <a href="../php/logout.php" class="nav-item nav-link ">Logout</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->

        <div class="container mt-5">
            <div class="content ">
                <h2 class="my-4 pt-5">Contact Information</h2>
                <?php
                $count = $result->rowCount();
                if ($count > 0) {
                    echo '
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody class="table-secondary">
                            ';
                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        echo '
                        <tr>
                            <td>' . $row['name'] . '</td>
                            <td>' . $row['mobile'] . '</td>
                            <td>' .  $row['email'] . '</td>
                            <td>' . $row['message'] . '</td>
                        </tr>
                            ';
                    }
                    echo '
                    </tbody>
                </table>';
                } else {
                    echo '<p class="errors">No data found</p>';
                }

                ?>
            </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>

        <script src="js/main.js"></script>

        <div class="d-flex justify-content-center bg-dark fixed-bottom">
            Copyright © 2023 &nbsp;
            <a href="eswarigroup.com/interiors" target="_blank">Eswari Group / Interiors - Admin Panel</a>.
            All Rights Reserved & Designed by &nbsp;
            <a href="asetechnologies.in" target="_blank">ASE Technologies</a>.
        </div>
    </body>

    </html>

<?php
}
?>