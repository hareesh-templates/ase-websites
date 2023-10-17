<?php
include('../php/connection.php');
$sql = "select * from contact_form";
$result = $conn->query($sql);
$user = "select * from registration";
$userResult = $conn->query($user);

session_start();
if (!$_SESSION["admin"]) {
    header("Location: ../index.php");
} else {
$userRow = $userResult->fetch(PDO::FETCH_ASSOC);
$userName = $userRow['name'];

?>

<?php
    include_once "headTags.php";
?>

    <title>Parimi's Dental Clinic_Admin Panel - Contact Information</title>

</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-fluid position-relative p-0" style="z-index: 9;">

            <nav class="navbar navbar-expand-lg bg-secondary fixed-tops navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <img src="../images/parimi_logo.png" alt="ase_technologies" height="90px">
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <p>Admin Name : <?php echo $userName ?></p>
                        <a href="index.php" class="nav-item nav-link">Blog</a>
                        <a href="testimonials.php" class="nav-item nav-link">Testimonial</a>
                        <a href="gallery.php" class="nav-item nav-link">Gallery</a>
                        <a href="contact.php" class="nav-item nav-link active">Contact Form</a>
                        <div href="" class="dropdown">
                            <a href="" class="nav-item nav-link dropdown-toggle" data-bs-toggle="dropdown">Add New</a>
                            <div class="dropdown-menu m-0">
                                <a href="../addNew/addNewBlog.php" class="dropdown-item">Blog</a>
                                <a href="../addNew/addNewGalleryImg.php" class="dropdown-item">Gallery</a>
                                <a href="../addNew/addNewTestimonial.php" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
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

    <?php
    include "../footer.php";
    ?>
    <!-- <script src="../../assets/js/bootstrap.bundle.min.js"></script> -->

</body>

</html>

<?php
}
?>