<div class="skill-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
            <?php $skill_image = get_theme_mod('skill_image_setting'); ?>
            <img class="img-fluid" src="<?php echo esc_url($skill_image['url']); ?>" alt="" >
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12 info wow fadeInRight" data-wow-delay="0.3s">
            <div class="site-heading">
              <h2 class="section-title"><?php echo esc_html(get_theme_mod('skill_heading_setting')); ?></h2>
              <p> <?php echo esc_html(get_theme_mod('skill_content_setting')); ?></p>

            </div>
            <div class="skills-section">

            <?php $skill_items = get_theme_mod('skill_repeater_setting'); ?>

              <?php foreach($skill_items as$skill_item) : ?>
              <!-- Progress Bar Start -->
              <div class="progress-box">
                <h5><?php echo $skill_item['skill_name'].' '; ?><span class="pull-right"><?php echo $skill_item['skill_percentage']; ?>%</span></h5>
                <div class="progress" style="opacity: 1; left: 0px;">
                  <div class="progress-bar" role="progressbar" data-width="<?php echo $skill_item['skill_percentage']; ?>" style="width: <?php echo $skill_item['skill_percentage']; ?>%;"></div>
                </div>
              </div>
              <?php endforeach; ?>
              <!-- End Progressbar -->
            </div>
          </div>
        </div>
      </div>
    </div>