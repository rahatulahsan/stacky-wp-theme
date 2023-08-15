    <!-- Contact Section Start -->
    <section id="contact" class="section-padding">    
      <div class="container">
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">          
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-block">
              <form id="contactForm">
                <?php echo apply_shortcodes( '[contact-form-7 id="e97bdb0" title="Contact form 1"]' ); ?>          
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-right-area wow fadeIn">
              <div class="contact-title">
                <h1><?php echo esc_html(get_theme_mod('contact_heading_setting')); ?></h1>
                <p><?php echo esc_html(get_theme_mod('contact_content_setting')); ?></p>
              </div>
              <h2><?php echo _e('Contact Us', 'stacky'); ?></h2>
              <div class="contact-right">
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-map-marker"></i>
                  </div>
                  <p><?php echo esc_html(get_theme_mod('contact_address_setting')); ?></p>
                </div>
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-envelope"></i>
                  </div>
                  <p><?php echo esc_html(get_theme_mod('contact_email_setting')); ?></a></p>
                </div>
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-phone-handset"></i>
                  </div>
                  <p><?php echo esc_html(get_theme_mod('contact_phone_setting')); ?></a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </section>
    <!-- Contact Section End -->