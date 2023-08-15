  <!-- Copyright Section Start -->
  <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-3 col-xs-12">
            <div class="footer-logo">
              <img src="<?php echo esc_url(get_theme_mod('footer_logo_setting')['url']); ?>" alt="">
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-12">     
            <div class="social-icon text-center">
              <?php $footer_social = get_theme_mod('footer_social_repeater_setting'); ?>

              <?php foreach($footer_social as $social) : ?>
                <?php
                  $icon_class; 
                  if('lni-facebook-filled' == $social['f_social']) {$icon_class = 'facebook';}
                  else if('lni-instagram-filled' == $social['f_social']){$icon_class = 'instagram';}
                  else if('lni-twitter-filled' == $social['f_social']){$icon_class = 'twitter';}
                  else{$icon_class = 'linkedin';}
                ?>
              <a class="<?php echo $icon_class; ?>" href="<?php echo esc_url($social['s_url']); ?>"><i class="<?php echo $social['f_social'] ?>"></i></a>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="col-lg-4 col-md-5 col-xs-12">
            <p class="float-right"><?php echo get_theme_mod('f_copyright_setting'); ?></a></p>
          </div> 
        </div>
      </div>
    </div>
    <!-- Copyright Section End -->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="lni-arrow-up"></i>
    </a>
    
    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->
    
    <?php wp_footer(); ?>
      
  </body>
</html>
