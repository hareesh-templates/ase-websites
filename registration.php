<?php include 'header.php'; ?>
<header class="header header_style_01">
    <nav class="navbar header-nav navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="images/logos/logo2.png" alt="Digital marketing" width="100px" height="95px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarApp" aria-controls="navbarApp" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
                <ul class="navbar-nav">
                    <li><a class="nav-link" href="index.php">Home</a></li>
                    <li><a class="nav-link " href="aboutus.php">About Us</a></li>
                    <div class="dropdown">
                        <li><a class="nav-link dropbtn">Services</a></li>
                        <div class="dropdown-content">
                            <a href="Digital-Marketing-Services-in-Hyderabad.php">Digital Marketing</a>
                            <a href="Best-Web-Development-Company-Hyderabad.php">Web Designing & Development</a>
                            <a href="Best-Graphic-Designing-Services-in-Hyderabad.php">Graphic Designing</a>
                            <a href="Content-Writing-Services-in-Hyderabad.php">Content Writing</a>
                        </div>
                    </div>
                    <li><a class="nav-link " href="portfolio.php">Portfolio</a></li>

                    <li><a class="nav-link" href="clients.php">Clients</a></li>
                    <li><a class="nav-link" href="faq.php">FAQs</a></li>
                    <li><a class="nav-link" href="contactus.php">Contact</a></li>
                    <li><a class="nav-link" href="blog.php">Blog</a></li>
                    <li><a class="nav-link active" href="registration.php">Registration</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div id="careers" class="section wb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Our Career Services</h3>
            <p class="lead">Let's look into our valued careers to build up skills and growth.</p>
        </div><!-- end title -->

        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card m-3 shadow p-3">
                    <div class="h3 card-title">Digital Marcketing</div>
                    <div class="card-body">
                        A digital marketing allows you to leverage different digital channels–such as social media,
                        pay-per-click, search engine optimization, and email marketing–to connect with existing customers
                        and individuals interested in your products or services.
                    </div>
                </div>
                <div class="card m-3 shadow p-3">
                    <div class="h3 card-title">Graphic Designing</div>
                    <div class="card-body">
                        Graphic design is a craft where professionals create visual content to communicate messages.
                        By applying visual hierarchy and page layout techniques, designers use typography and pictures
                        to meet users' specific needs and focus on the logic of displaying elements in interactive designs,
                        to optimize the user experience.
                    </div>
                </div>
                <div class="card m-3 shadow p-3">
                    <div class="h3 card-title">Web Development</div>
                    <div class="card-body">
                        A Web Developer is in charge of ensuring websites look good and function properly.
                        Web developers collaborate with website and graphic designers, monitor website traffic,
                        troubleshoot website problems when they arise, and update websites as necessary.
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-1"></div> -->
            <div class="col-12 col-md-5 ml-lg-5">
                <div class="h2 text-center my-3">Candidate Registration Form</div>
                <div class="d-flex justify-content-center mt-3 shadow p-3">
                    <form enctype="multipart/form-data" method="POST" action="reg.php" class="">
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="Full Name" required />
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Email Address" required />
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="number" name="mobile" placeholder="Mobile Number" required />
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="graduation" placeholder="Type of Graduation" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="number" name="yop" min="2010" max="2024" placeholder="Passing Year of Graduation" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="date" name="dob" placeholder="Date of Birth" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="number" name="enumber" placeholder="Emergency Contact Number" />
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" type="text" name="address" placeholder="Residential Address"></textarea>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="file" name="cv" placeholder="Attachment" accept=".doc,.docx,.pdf" required />
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="submit" value="Submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div><!-- end container -->
</div><!-- end section -->

<?php 
include 'whatsapp.php';
include 'footer.php'; 
?>