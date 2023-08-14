    <!-- Testimonial Section Start -->
    <section id="testimonial" class="testimonial section-padding">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
              
              <?php $review_items = get_theme_mod('review_repeater_setting'); ?>
              <?php foreach($review_items as $review_item) : ?>
                <div class="item">
                  <div class="testimonial-item">
                    <div class="img-thumb">
                      <img src="<?php echo esc_url($review_item['rev_image']['url']); ?>" alt="">
                    </div>
                    <div class="info">
                      <h2><a href="#"><?php echo esc_html($review_item['rev_name']); ?></a></h2>
                      <h3><a href="#"><?php echo esc_html($review_item['rev_desi']); ?></a></h3>
                    </div>
                    <div class="content">
                      <p class="description"><?php echo esc_html($review_item['rev_content']); ?></p>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Section End --> 