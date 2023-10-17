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
                        
                        <li><a class="nav-link " href="clients.php">Clients</a></li>
                        <li><a class="nav-link " href="faq.php">FAQs</a></li>
                        <li><a class="nav-link active" href="contactus.php">Contact</a></li>
                        <li><a class="nav-link" href="blog.php">Blog</a></li>
                        <li><a class="nav-link" href="registration.php">Registration</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
      </header>

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
                            <li style="text-align:center;">contact@asetechnologies.in</li></p>
                            <li style="text-align:center;">info@asetechnologies.in</li></p>
                      
                    </div>
                </div><!-- end col -->
            </div>
            
        </div><!-- end container -->
    </div><!-- end section -->
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
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="business_name" id="business_name" class="form-control" placeholder="Name of business">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="business_category" id="business_category" class="form-control" placeholder="Nature of Business">
                                </div>
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

<?php 
include 'whatsapp.php';
include 'footer.php'; 
?>