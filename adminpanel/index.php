<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/egTitleIcon.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <title>Eswari Group / Interiors - Admin Panel || Registration Form</title>

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/index.css">

</head>

<body>
    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">

        <!-- Navbar Start -->
        <nav class="navbar container-fluid mt-5 pt-5">
            <div class="container-fluid mx-5">
                <a class="navbar-brand">
                <img src="./images/EG_Logo-side.png" alt="Eswari Group / Interiors" height="50px">
                </a>
                <div class="d-flex mr-5 pr-5">
                    <a href="registration_form.php" class="btn nav-item nav-link text-white"><b>Registration</b></a>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <div class="form-holder mt-n5">
            <div class="form-content mt-n5">
                <div class="form-items bg-dark mt-n5 ">
                    <h3 class="text-primary text-uppercase font-weight-normal mb-md-3">Login Form</h3>
                    <form action="./php/login.php" method="post" class="requires-validation" novalidate>

                        <div class="col-md-12">
                            <input type="email" name="email" placeholder="Registered Email ID">
                        </div>

                        <div class="col-md-12">
                            <input class="form-control" type="password" name="password" placeholder="Password">
                        </div>

                        <div class="form-button mt-3 pl-3">
                            <button id="submit" type="submit" class="btn btn-primary rounded" name="submit" value="submit">Submit</button>
                        </div>
                    </form>

                </div>
            </div>

            <div class="d-flex justify-content-center bg-dark fixed-bottom">
                Copyright © 2023 &nbsp;
                <a href="eswarigroup.com/interiors" target="_blank">Eswari Group / Interiors - Admin Panel</a>.
                All Rights Reserved & Designed by &nbsp;
                <a href="asetechnologies.in" target="_blank">ASE Technologies</a>.
            </div>
        </div>
    </div>

</body>

</html>