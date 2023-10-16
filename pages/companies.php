<?php include("headLinks.php"); ?>

<title>Companies Page</title>
</head>

<body>
<?php include("gtag.php"); ?>

<!-- navbar start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
    <div class="container-fluid">
        <a class="navbar-brand" href="../"><img src="../imgs/icons/EGLogoOriginalRBG1.png" alt="Eswari group" style="max-width: 110px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="main_nav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="../">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="activities.php">Activities</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link  dropdown-toggle" href="services.php">Services</a>
                    <ul class="dropdown-menu">
                        <li><a href="services.php#constructions" class="dropdown-item">Construction(s)</a></li>
                        <li><a href="services.php#landDevelopments" class="dropdown-item">Land Development(s)</a></li>
                        <li><a href="services.php#residential" class="dropdown-item">Residential</a></li>
                        <li><a href="services.php#commercial" class="dropdown-item">Commercial </a></li>
                        <li><a href="services.php#villas" class="dropdown-item">Villa(s)</a></li>
                        <li><a href="services.php#apartments" class="dropdown-item">Apartment(s)</a></li>
                        <li><a href="services.php#interiors" class="dropdown-item">Interiors</a></li>
                        <li><a href="services.php#homeLoans" class="dropdown-item">Home Loan(s)</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link  dropdown-toggle active" href="companies.php" data-bs-toggle="dropdown">Companies</a>
                    <ul class="dropdown-menu">
                        <li><a href="https://eswarigroup.com/" class="dropdown-item">Eswari Homes</a></li>
                        <li><a href="https://aseinfra.com/" class="dropdown-item">ASE Infrastructures</a></li>
                        <li><a href="https://eswarigroup.com/interiors/" class="dropdown-item">Interiors</a></li>
                        <li><a href="https://eswaricapital.com/" class="dropdown-item">Eswari Capital</a></li>
                        <li><a href="https://asetechnologies.in/" class="dropdown-item">ASE Technologies</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="contact.php"> Contact Us </a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- navbar end -->

<?php
include("whatsapp.php");
include("footer.php");
?>