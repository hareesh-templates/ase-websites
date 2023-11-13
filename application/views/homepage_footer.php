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
       <div id="WAButton"></div>

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
              <form action="<?php echo base_url(); ?>subscribe" method="post">
                <input type="email" placeholder="Email Id" name="subscribe_email" required="" />
                <input type="submit" name="btn_subscribe_email" value="SUBSCRIBE NOW" style="background-color: #257fbc; color: #fff;margin-top: 5px;">
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
<script src="http://www.marghoobsuleman.com/misc/jquery.js"></script>
<script src="thumbslider/modernizr.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/jquery-1.9.1.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/tabcontent.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.easing.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/masterslider.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/menu.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/wow.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/amazingslider.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/initslider-1.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/js-image-slider.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/stickynavigation.js"></script>  
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/masterslider.min.js"></script>  


 
<script type="text/javascript">
jQuery(document).ready(function () {
  //menu
    jQuery('header nav').meanmenu();
  
//masterslider
  var slider = new MasterSlider();
  slider.setup('masterslider' , {
  width:1080,
  height:500,
  //space:100,
  fullwidth:true,
  centerControls:false,
  speed:40,
  autoplay:true,
  view:'slide'
  });
  //slider.control('arrows'); 
  //slider.control('bullets' ,{autohide:true}); 
  
});

$('.owl-carousel').owlCarousel({
    loop:true,
  autoplay:true,
  autoplayTimeout:4000,
    margin:20,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
      dots:true,
            nav:false
        },
        480:{
            items:1,
      dots:true,
            nav:false
        },
    768:{
            items:1,
      dots:true,
            nav:false
        },
    980:{
            items:1,
      dots:true,
            nav:false
        },
        1000:{
            items:1,
            nav:false,
      dots:true,
            loop:true
        }
    }
})

</script>

   <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type='text/javascript'>
    $(document).ready(function(){

     // Initialize 
     $( "#autolocation" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url: "<?=base_url()?>home/locationList",
            type: 'post',
            dataType: "json",
            data: {
              search: request.term
            },
            success: function( data ) {
              response( data );
            }
          });
        },
        select: function (event, ui) {
          // Set selection
          $('#autolocation').val(ui.item.label); // display the selected text
          $('#userid').val(ui.item.value); // save selected id to input
          return false;
        }
      });

    });
    </script>
<!-- Global site tag (gtag.js) - Google Ads: 615218546 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-615218546"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-615218546');
</script>

<link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
<!--Floating WhatsApp javascript-->
<script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>

<!--Div where the WhatsApp will be rendered-->

<script type="text/javascript">  
   $(function () {
                $('#WAButton').floatingWhatsApp({
               phone: '+918374631133', //WhatsApp Business phone number
               headerTitle: 'Chat with us on WhatsApp!', //Popup Title
               popupMessage: 'Hello, how can we help you?', //Popup Message
               showPopup: true, //Enables popup display
               buttonImage: '<img src="<?php echo base_url(); ?>assets/images/whatsapp.png" />',
               position: "right" //Position: left | right
           });
       });
</script> 
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="floating-wpp.min.js"></script>
//   <script type="text/javascript">
//       jQuery(document).ready(function(){
//       jQuery(function() {
//             jQuery(this).bind("contextmenu", function(event) {
//                 event.preventDefault();
//               // alert('Right click disable in this site!!')
//             });
//         });
//     });
//     </script>
<link rel="stylesheet" href="floating-wpp.min.css">
</body>
</html>