 <!-- Team Section Start -->
 <section id="team" class="section-padding text-center">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo esc_html(get_theme_mod('team_heading_setting')); ?></h2>
          <p><?php echo esc_html(get_theme_mod('team_content_setting')); ?></p>
        </div>
        <div class="row">

        <?php $team_members = get_theme_mod('team_repeater_setting'); ?>

          <?php foreach($team_members as $team_member) : ?>

          <div class="col-sm-6 col-md-6 col-lg-3">
            <!-- Team Item Starts -->
            <div class="team-item text-center wow fadeInRight" data-wow-delay="0.3s">
              <div class="team-img">
                <img class="img-fluid" src="<?php echo esc_url($team_member['mem_img']['url']); ?>" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="<?php echo esc_url($team_member['fb_url']); ?>"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="<?php echo esc_url($team_member['twitter_url']); ?>"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="<?php echo esc_url($team_member['insta_url']); ?>"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><?php echo esc_html($team_member['mem_name']); ?></h3>
                <p><?php echo esc_html($team_member['mem_desig']); ?></p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
         
          <?php endforeach; ?>
          
        </div>
      </div>
    </section>
    <!-- Team Section End -->