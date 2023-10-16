<!DOCTYPE html>
<html lang="en">

<head>
    <title>Eswari Group Admin Panel</title>
    <link rel="shortcut icon" href="../../imgs/icons/EG_Logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        body {
            background-image: url("../../imgs/sliderImage3.jpg");
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="body"></div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top" style="--bs-bg-opacity: .75;">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <img src="../../imgs/icons/EG_Logo-side.png" alt="" class="navbar-brand" height="100px">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="falses" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end me-5 pe-5" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../display/galleryTitle.php">Activities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../display/galleryImage.php">Gallery</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Add New
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../forms/galleryTitle.php">Add Activity</a></li>
                            <li><a class="dropdown-item" href="../forms/galleryImage.php">Add Gallery</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../php/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

