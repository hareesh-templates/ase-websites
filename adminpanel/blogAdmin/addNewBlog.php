<?php
include('../php/connection.php');
$sql = "select * from blog";
$result = $conn->query($sql);

session_start();
if (!$_SESSION["blogAdminPanel"]) {
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

        <title>Eswari Group / Interior - Blog Admin Panel || Add Blog Details</title>

        <!-- Customized Bootstrap Stylesheet -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/index.css">

        <script src="https://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    </head>

    <body>
        <!-- Navbar Start -->
        <div class="container-fluid position-relative nav-bar p-0">
            <div class="container-fluid position-relative p-0" style="z-index: 9;">
                <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                    <a href="" class="navbar-brand">
                        <img src="../images/EG_Logo-side.png" alt="Eswari Group / Interiors" height="50px">
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">

                        <div class="navbar-nav ml-auto py-0">
                            <a href="addNewBlog.php" class="nav-item nav-link active">Add New Blog</a>
                            <a href="../php/logout.php" class="nav-item nav-link ">Logout</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->

        <div class="container bg-light mt-5">
            <form action="../php/addBlog.php" method="post" name="myForm" enctype="multipart/form-data">

                <div class="form-group row">
                    <div class="col-sm-6 my-3">
                        <h2 class="ml-5 mb-5">Add Blog details</h2>

                        <textarea class="form-control" placeholder="Content" name="content" id="editor1"></textarea>
                        <script>
                            CKEDITOR.replace('editor1');
                        </script>
                    </div>
                    <div class="col-sm-6 my-3">
                        <label class="m-2">Blog Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter title" required>

                        <label class="m-2">Blog Key Words</label>
                        <input type="text" class="form-control" placeholder="key_words" name="key_words">

                        <label class="m-2">Blog Image</label>
                        <input type="file" name="image" class="form-control" accept="image/*" required>

                        <label class="m-2">Blog key url</label>
                        <input type="text" name="key_url" class="form-control" placeholder="Enter key url">

                        <label class="m-2">Blog Meta Description</label>
                        <input type="text" name="meta_desc" class="form-control" placeholder="Enter Meta Description" required>

                        <input type="submit" name="Submit" value="Add" class="form-control btn btn-success my-3">
                    </div>
                </div>
            </form>
        </div>

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