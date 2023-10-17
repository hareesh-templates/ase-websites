<?php
include("./backend/connection.php");
?>

<?php include 'header.php'; ?>

<!--  ************************* Contact Us Starts Here ************************** -->


<div class="row mt-3 pt-5">

    <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3800.129240798879!2d83.29560902271601!3d17.73854854906806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39434aefe374c9%3A0x4d476a97d8dcbe01!2sParimi%E2%80%99s%20Dental%20Care!5e0!3m2!1sen!2sin!4v1678539303424!5m2!1sen!2sin" height="450" frameborder="0" style="border:0; padding-top:200px" allowfullscreen class="pt-4"></iframe>

</div>

<div class="row contact-rooo no-margin">
    <div class="container">
        <div class="row">

            <div style="padding:20px" class="col-sm-7">
                <h2>Contact Form</h2> <br>
                <form action="./backend/contact_form.php" method="post" name="sentMessage">
                    <div class="row">
                        <div class="col-sm-3">
                            <label>Enter Name </label>
                            <span>:</span>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" placeholder="Enter Name" name="name" class="form-control input-sm" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <label>Email Address </label>
                            <span>:</span>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" name="email" placeholder="Enter Email Address" class="form-control input-sm" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <label>Mobile Number</label>
                            <span>:</span>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" name="mobile" placeholder="Enter Mobile Number" class="form-control input-sm" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <label>Enter Message</label>
                            <span>:</span>
                        </div>
                        <div class="col-sm-8">
                            <textarea rows="5" placeholder="Enter Your Message" name="message" class="form-control input-sm" required></textarea>
                        </div>
                    </div>
                    <div style="margin-top:10px;" class="row">
                        <div style="padding-top:10px;" class="col-sm-3"></div>
                        <div class="col-sm-8">
                            <button class="btn btn-primary btn-sm" name="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-5">
                <div style="margin:50px" class="serv">
                    <h2 style="margin-top:10px;">Address</h2>
                    #49-34-8/1, 1st Floor,<br>
                    Beside State Bank of India,<br>
                    Akkayyapalem Main Road,<br>
                    Vizag-16.<br><br>
                    <a href="tel:+919381190676">
                        <i class="fa fa-phone"></i>&nbsp; +91 9381190676 <br>
                    </a><br>
                    <a href="mailto:parimidentalcare.18@gmail.com">
                        <i class="fa fa-envelope"></i>&nbsp; parimidentalcare.18@gmail.com <br>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'whatsapp.php' ?>

<?php include 'footer.php'; ?>