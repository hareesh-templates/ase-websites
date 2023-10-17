<?php include 'header.php'; ?>
<?php include 'header_menu.php'; ?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Contact</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Contact</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <div class='row' style="margin: 0; background-color: #263345">
    <div class='col-md-4'>
      <div class="map-section">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041.841607812502!2d-74.65418431598664!3d40.32367269785276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3e12fb0d9d989%3A0x69cacc85d3055363!2s701%20Carnegie%20Center%20Princeton%2C%20Princeton%2C%20NJ%2008540%2C%20USA!5e0!3m2!1sen!2sin!4v1689663565440!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
    <div class='col-md-4'>
      <div class="map-section">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3800.044934724952!2d83.30888321744385!3d17.742521800000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39438dab92a6ef%3A0x9adb8a655b5e380b!2sASE%20Technologies%20%7C%20Digital%20Marketing%20Company%20in%20Visakhapatnam!5e0!3m2!1sen!2sin!4v1689664554031!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
    <div class='col-md-4'>
      <div class="map-section">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.197304561097!2d78.54376362483042!3d17.40231643348739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb993e9c406ebd%3A0xf2e3c2fc7e02a425!2sNSL%20ARENA%2C%20Hyderabad%2C%20Telangana%20500013!5e0!3m2!1sen!2sin!4v1689663606636!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>


  <section id="contact" class="contact">
    <div class="container">

      <div class="row justify-content-center" data-aos="fade-up">

        <div class="col-lg-10">

          <div class="info-wrap">
            <div class="row">
              <div class="col-lg-4 info">
                <i class="bi bi-building"></i>
                <h4>Head Quarters:</h4>
                <p>701 Carnegie Center Princeton 701 Carnegie Center Dr, Princeton, NJ 08540, USA</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="bi bi-house"></i>
                <h4>Corporate Office:</h4>
                <p>50-96-8/4, MIG-22, North Extension, Vuda Layout, Seethammadara, Visakhapatnam, Andhra Pradesh 530013</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="bi bi-bar-chart-line"></i>
                <h4>R & D Office:</h4>
                <p>Nsl arena, Habsiguda, Hyderabad, 500013</p>
              </div>
            </div>
          </div>

        </div>

      </div>

      <div id="contact" class="row mt-5 justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<?php include 'footer.php'; ?>