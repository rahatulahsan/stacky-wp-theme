 <!-- Feature Section Start -->
 <div id="feature">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="text-wrapper">
              <div>
                <h2 class="title-hl wow fadeInLeft" data-wow-delay="0.3s"><?php echo get_theme_mod('about_text_setting'); ?></h2>
                <p class="mb-4"><?php echo esc_html(get_theme_mod('about_textarea_setting')); ?></p>
                <a href="<?php echo esc_url(get_theme_mod('about_button_url_setting')); ?>" class="btn btn-common"><?php echo esc_html(get_theme_mod('about_button_name_setting')); ?></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 padding-none feature-bg">
            <div class="feature-thumb">

              <?php $about_items = get_theme_mod('about_section_repeater'); ?>
              
              <?php foreach($about_items as $item) : ?>
              <div class="feature-item wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="icon">
                  <i class="<?php echo $item['item_icon']; ?>"></i>
                </div>
                <div class="feature-content">
                  <h3><?php echo $item['item_text']; ?></h3>
                  <p><?php echo $item['item_content']; ?> </p>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature Section End -->