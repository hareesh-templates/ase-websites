<style type="text/css">
  .floating-wpp-button{
    height: 30px!important;
    width: 30px!important;
  }
  .floating-wpp-head span{
    color: #fff!important;
  }
  .floating-wpp{
    z-index: 999!important;
  }
</style>
<footer>
    <div class="pageWidth">
      <div class="footer_left">
        <div class="footer_links">
          <h4>Quick Links</h4>
          <ul class="liststyle_none">
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <li><a href="<?php echo base_url(); ?>aboutus">About us</a></li>
            <li><a href="<?php echo base_url(); ?>contactus">Contact Us</a></li>
            <li><a href="<?php echo base_url(); ?>property/propertylist">Properties</a></li>
            <!--<li><a href="#">Terms and conditions</a></li>-->
          </ul>
        </div>
        <div class="social_col">
          <div class="social_icons">
            <h4>Follow us</h4>
             <a target="_blank" class="tooltips twitter" href="https://twitter.com/EswariHomes/"><i class="fa fa-twitter tw"></i>
            <div>Twitter<span></span></div>
            </a> 
            <a target="_blank" class="tooltips facebook" href="https://www.facebook.com/eswarihomesforyou"><i class="fa fa-facebook fb" style="background-color: #01bbf4;"></i>
            <div>Facebook<span></span></div>
            </a>
                <a target="_blank" class="tooltips instagram" href="https://www.instagram.com/eswarihomes/"><i class="fa fa-instagram " style="background-color: #01bbf4;"></i>
            <div>Instagram<span></span></div>
            </a>  
             <a target="_blank" class="tooltips instagram" href="https://www.linkedin.com/company/eswari-homes/posts/?feedView=all&viewAsMember=true"><i class="fa fa-linkedin-square " style="background-color: #01bbf4;"></i>
            <div>Linkedin<span></span></div>
            </a> 
             <a target="_blank" class="tooltips instagram" href="https://www.tumblr.com/blog/eswarihomes"><i class="fa fa-tumblr-square " style="background-color: #01bbf4;"></i>
            <div>Tumblr<span></span></div>
            </a> 
            </div>
          <div class="newsletters">
            <div class="newsletter_text">
              <h4>Subscribe</h4>
              <p>Please do provide your MAIL ID to know more details about ESWARI HOMES, we are happy to help you back.</p>
            </div>
            <div class="newsletter_box">
              <form>
                <input type="text" placeholder="Email Id"/>
                <button type="submit">SUBSCRIBE NOW</button>
              </form>
            </div>
          </div>
        </div>
        <div class="partners_col">
         
        </div>
      </div>
      <div class="footer_right">
        <div class="footer_logo"> <img src="<?php echo base_url(); ?>/assets/images/logo2.png" alt="footer_logo"/>
          <p>We build your trust, We behold your dreams...
</p>
        </div>
        <span class="copyrights">2020 © Eswari Homes - All rights reserved</span> </div>
    </div>
    <div class="clear"></div>
  </footer>
 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177558809-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-177558809-4');
</script>
<link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
<!--Floating WhatsApp javascript-->
<script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>

<!--Div where the WhatsApp will be rendered-->
  <div id="WAButton"></div>
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="floating-wpp.min.js"></script>
<link rel="stylesheet" href="floating-wpp.min.css">
<script type="text/javascript">  
   $(function () {
                $('#WAButton').floatingWhatsApp({
               phone: '+918374631133', //WhatsApp Business phone number
               headerTitle: 'Chat with us on WhatsApp!', //Popup Title
               popupMessage: 'Hello, how can we help you?', //Popup Message
               showPopup: true, //Enables popup display
               buttonImage: '<img src="assets/images/whatsapp.png" />',
               position: "right" //Position: left | right
           });
       });
</script> 