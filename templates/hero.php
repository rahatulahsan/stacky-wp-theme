 <!-- Hero Area Start -->
 <div id="hero-area" class="hero-area-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="contents text-center">
                <h2 class="head-title wow fadeInUp"><?php echo esc_html(get_theme_mod('hero_text_setting')); ?></h2>
                <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
                  <?php if(true == get_theme_mod('hero_button_switch_setting', 'on')){
                    $btn_name = esc_html(get_theme_mod('hero_button_name_setting'));
                    $btn_link = esc_url(get_theme_mod('hero_button_url_setting')); 
                    
                  ?>
                    <a href="<?php echo $btn_link; ?>" class="btn btn-common"><?php echo $btn_name; ?></a>

                  <?php }
                  ?>
                    
                  
                </div>
              </div>
              <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
                <?php $hero_image = get_theme_mod('hero_image_setting_id'); ?>
                <img class="img-fluid" src="<?php echo esc_url($hero_image['url']);?>" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->