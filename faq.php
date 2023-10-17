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
                        <li><a class="nav-link active" href="faq.php">FAQs</a></li>
                        <li><a class="nav-link" href="contactus.php">Contact</a></li>
                        <li><a class="nav-link" href="blog.php">Blog</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<div id="faqs" class="section lb">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6">
					<div class="accordion" id="accordionExample">
					  <div class="card">
						<div class="card-header" id="headingOne">
						  <h5 class="mb-0">
							<a href="" class="btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								What is ASE Technologies?
							</a>
						  </h5>
						</div>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						  <div class="card-body">
							It's a unique digital marketing company, turning all your marketing activities as unified digital solutions through our services.
						  </div>
						</div>
					  </div>
					  <div class="card">
						<div class="card-header" id="headingTwo">
						  <h5 class="mb-0">
							<a href="" class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								How we do?
							</a>
						  </h5>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						  <div class="card-body">
							We help our clients through conceptualising contents and designing graphics presenting in a virtual space through our excellent resources.
						  </div>
						</div>
					  </div>
					  <div class="card">
						<div class="card-header" id="headingThree">
						  <h5 class="mb-0">
							<a href="" class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							  What are our services?
							</a>
						  </h5>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						  <div class="card-body">
							SEO, SEM, SMM and web design & development services.
						  </div>
						</div>
					  </div>
					</div>					
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="faq-right">
						<img src="uploads/about-02.png" class="img-fluid" alt="Digital marketing" />
					</div>
				</div>
			</div>
		</div>
	</div>
	  <?php 
	  include 'whatsapp.php';
	  include 'footer.php'; ?>
