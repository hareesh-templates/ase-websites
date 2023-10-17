<?php
include('../php/connection.php');
$sql = "select * from testimonials";
$user = "select * from registration";
$result = $conn->query($sql);
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
<title>ASE Interior Admin Panel - Add New Testimonial</title>

<script src="https://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


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
                        <a href="../adminPage/index.php" class="nav-item nav-link">Blog</a>
                        <a href="../adminPage/testimonials.php" class="nav-item nav-link">Testimonial</a>
                        <a href="../adminPage/gallery.php" class="nav-item nav-link ">Gallery</a>
                        <a href="../adminPage/contact.php" class="nav-item nav-link">Contact Form</a>
                        <div href="" class="dropdown">
                            <a href="" class="nav-item nav-link dropdown-toggle active" data-bs-toggle="dropdown">Add New</a>
                            <div class="dropdown-menu m-0">
                                <a href="./addNewBlog.php" class="dropdown-item">Blog</a>
                                <a href="./addNewGalleryImg.php" class="dropdown-item">Gallery</a>
                                <a href="./addNewTestimonial.php" class="dropdown-item active">Testimonial</a>
                            </div>
                        </div>
                        <a href="../php/logout.php" class="nav-item nav-link ">Logout</a>
                    </div>

                </div>
            </nav>

        </div>
    </div>
    <!-- Navbar End -->

    <div class="container bg-light mt-5">
        <form action="../php/addTestimonial.php" method="post" name="myForm" enctype="multipart/form-data">
            <div class="h1">Testimonial Add Form</div>
            <div class="form-group row shadow">
                <div class="col-sm-6 my-3">
                    
                    <textarea class="form-control" placeholder="Content" name="content" id="editor1" required></textarea>
                    <script>
                        CKEDITOR.replace('editor1');
                    </script>
                </div>
                <div class="col-md-6 my-3 ">
                    <label class="m-2">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter title" required>

                    <label class="m-2">Rating</label>
                    <input type="number" name="rating" class="form-control" min="1" max="5" required>

                    <!-- <label class="m-2">Content</label>
                    <input type="text" name="content" class="form-control" placeholder="Enter title" required> -->

                    <input type="submit" name="Submit" value="Add" class="form-control btn btn-success my-3">
                </div>
            </div>
        </form>
    </div>

    <?php
    include "../footer.php"
    ?>
</body>

</html>
<?php
}
?>