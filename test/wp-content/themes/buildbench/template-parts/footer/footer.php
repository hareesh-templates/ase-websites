<?php
$style               = buildbench_option("footer_style", "style-1");
$mailchimp           = buildbench_option("footer_mailchimp");
$social_links        = buildbench_option('footer_social_links',[]);
$copyright_default   = sprintf(esc_html__('Buildbench. All Right Reserved','buildbench'));
$copyright_text      = buildbench_option('footer_copyright', $copyright_default);
$back_to_top         = buildbench_option('back_to_top', true);

if( is_active_sidebar('footer-left') || is_active_sidebar('footer-center') ): ?> 
   <footer id="ts-footer" class="ts-footer" >
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-lg-4">
                  <?php  dynamic_sidebar( 'footer-left' ); ?>
               </div>
               <!-- End Col -->
               <div class="col-md-6 col-lg-4">
                  <?php  dynamic_sidebar( 'footer-center' ); ?>
               </div>
               <!-- End Col -->
               <div class="col-lg-4 col-md-12">
                  <?php if ( shortcode_exists( 'mc4wp_form' ) && $mailchimp && $style == 'style-1' ) :
                     echo do_shortcode($mailchimp);   
                  endif; ?>
               </div>
               <!-- End Col -->
            </div>
            <!-- End Widget Row -->
         </div>
         <!-- End Contact Container -->
   </footer>
<?php endif; ?>       

<div class="copyright">
   <div class="container">
      <div class="row">
         <div class="col-md-6 align-self-center">
            <span>
               <?php echo esc_html__('&copy; ', 'buildbench') . date('Y ') . buildbench_kses($copyright_text); ?>
            </span>
         </div>
         <!-- End col -->
         <div class="col-md-6">
            <?php if ( $social_links ) : ?>   
               <div class="footer-social text-right">
                  <ul class="unstyled">
                     <?php foreach($social_links as $sl):
                        $class = 'ts-' . str_replace('fa fa-', '', $sl['icon_class']); ?>
                        <li class="<?php echo esc_attr($class); ?>">
                           <a href="<?php echo esc_url($sl['url']); ?>" target="_blank">
                              <i class="<?php echo esc_attr($sl['icon_class']); ?>"></i>
                           </a>
                        </li>
                     <?php endforeach; ?>
                  </ul> <!-- Ul end -->
               </div>
            <?php endif; ?>
               <!-- End Social link -->
         </div>
         <!-- End col -->
      </div>
      <!-- End Row -->
   </div>

   <?php if($back_to_top == true): ?>
      <div class="BackTo">
         <a href="#" class="icon icon-arrow-up" aria-hidden="true"></a>
      </div>
   <?php endif; ?>
   <!-- End Copyright Container -->
</div>