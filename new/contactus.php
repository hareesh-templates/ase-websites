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
                    <li><a class="nav-link " href="index.php">Home</a></li>
                    <li><a class="nav-link " href="aboutus.php">About Us</a></li>
                    <div class="dropdown">
                        <li><a class="nav-link dropbtn">Services</a></li>
                        <div class="dropdown-content">
                            <a href="webDesign.php">Web Designing</a>
                            <a href="webDevelopment.php">Web Development</a>
                            <a href="mobileAppDevelopment.php">Mobile App Development</a>
                            <a href="iotBasedAppDevelopment.php">IOT Based App Development</a>
                            <a href="digitalMarketing.php">Digital Marketing</a>
                        </div>
                    </div>
                    <li><a class="nav-link" href="portfolio.php">Portfolio</a></li>
                    <li><a href="careers.php" class="nav-link">Careers</a></li>
                    <!-- <li><a class="nav-link" href="clients.php">Clients</a></li> -->
                    <!-- <li><a class="nav-link" href="faq.php">FAQs</a></li> -->
                    <li><a class="nav-link active" href="contactus.php">Contact</a></li>
                    <li><a class="nav-link" href="blog.php">Blog</a></li>
                    <!-- <li><a class="nav-link" href="registration.php">Registration</a></li> -->
                </ul>
            </div>
        </div>
    </nav>
</header>


<!-- Map Start -->
<div class="container-xxl pt-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container-xxl pt-5 px-0 row row-cols-1 row-cols-md-3">
        <div class="col">
            <span style="font-weight: bolder; font-size:x-large">Head Quarters : </span><br>
            701, Carnegie center, Princeton NJ, 08540.
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041.841607812502!2d-74.65418431598664!3d40.32367269785276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3e12fb0d9d989%3A0x69cacc85d3055363!2s701%20Carnegie%20Center%20Princeton%2C%20Princeton%2C%20NJ%2008540%2C%20USA!5e0!3m2!1sen!2sin!4v1689663565440!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col">
            <span style="font-weight: bolder; font-size:x-large">Corporate Office :</span><br>
            Seethammadara, Visakhapatnam, Andhra Pradesh, 530013.
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3800.044934724952!2d83.30888321744385!3d17.742521800000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39438dab92a6ef%3A0x9adb8a655b5e380b!2sASE%20Technologies%20%7C%20Digital%20Marketing%20Company%20in%20Visakhapatnam!5e0!3m2!1sen!2sin!4v1689664554031!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col">
            <span style="font-weight: bolder; font-size:x-large">R & D Office : </span><br>
            Nsl arena, Habsiguda, Hyderabad, 500013
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.197304561097!2d78.54376362483042!3d17.40231643348739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb993e9c406ebd%3A0xf2e3c2fc7e02a425!2sNSL%20ARENA%2C%20Hyderabad%2C%20Telangana%20500013!5e0!3m2!1sen!2sin!4v1689663606636!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<!-- Map End -->

<div id="contact" class="section lb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Enquiry Form</h3>
            <div class="info-box" data-toggle="tooltip" data-placement="bottom" title="Fill the details, We'll reach you..">
                <i class="fa fa-question-circle" aria-hidden="true"></i>
            </div>
        </div><!-- end title -->

        <div class="row">
            <div class="col-md-12">
                <div class="contact_form">
                    <div id="message"></div>
                    <form id="contactform" class="row" action="contact.php" name="contactform" method="post">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                            </div>
                            <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="business_name" id="business_name" class="form-control" placeholder="Name of business">
                            </div> -->
                            <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="business_category" id="business_category" class="form-control" placeholder="Nature of Business">
                            </div> -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <select id="requirement" name="requirement" class="form-control" style="background: #484848;">
                                    <option value="">Select Requirement</option>
                                    <option value="Website design">Website design</option>
                                    <option value="Digital Promotions">Digital Promotions</option>
                                    <option value="Lead Generation">Lead Generation</option>
                                    <option value="Photo/video promotions">Photo/video promotions</option>
                                    <option value="Mobile Apps">Mobile Apps</option>
                                    <option value="Web Application">Web Application</option>
                                    <option value="Logo Designings">Logo Designings</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                            </div>
                            <div class="text-center pdi">
                                <button type="submit" value="SEND" id="submit" class="hvr-bounce-to-right get-btn">Get a Quote</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!-- end section -->

<div id="features" class="section lb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Contact Us</h3>
        </div><!-- end title -->

        <div class="row">
            <div class="col-md-6">
                <div class="services-inner-box">
                    <p style="text-align:center;"><img src="images/11.png" height="100px" alt="Digital marketing"></p>
                    <li style="text-align:center;">Call Us 0891 257 1133</li>
                    <li style="text-align:center;">Call Us +91 96666 96889</li>
                </div>
            </div><!-- end col -->
            <div class="col-md-6">
                <div class="services-inner-box">
                    <p style="text-align:center;"><img src="images/12.png" height="100px" alt="Digital marketing">
                        <li style="text-align:center;">contact@asetechnologies.in</li>
                    </p>
                    <li style="text-align:center;">info@asetechnologies.in</li>
                    </p>

                </div>
            </div><!-- end col -->
        </div>

    </div><!-- end container -->
</div><!-- end section -->

<?php
include "whatsapp.php";
include 'footer.php';
?>