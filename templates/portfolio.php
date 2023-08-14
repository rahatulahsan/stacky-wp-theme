    <!-- Portfolio Section -->
    <section id="portfolios" class="section-padding">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo esc_html(get_theme_mod('work_heading_setting')); ?></h2>
          <p><?php echo esc_html(get_theme_mod('work_content_setting')); ?></p>
        </div>

        <?php $portfolio_items = get_theme_mod('work_repeater_setting'); ?>

        <div id="portfolio" class="row">
        <?php foreach($portfolio_items as $portfolio) : ?>
        <!-- Portfolio Recent Projects -->
        
            <div class="col-lg-4 col-md-6 col-xs-12 mix print design">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="<?php echo esc_url($portfolio['port_url']['url']); ?>" alt="" />  
                  <div class="single-content">
                    <div class="fancy-table">
                      <div class="table-cell">
                        <div class="zoom-icon">
                          <a class="lightbox" href="<?php echo esc_url($portfolio['port_url']['url']); ?>"><i class="lni-eye item-icon"></i></a>
                        </div>
                        <a href="#"><?php echo esc_html($portfolio['port_name']); ?></a>
                      </div>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
          
          <?php endforeach; ?>
        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends --> 