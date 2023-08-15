   <!-- Clients Section Start -->
   <div id="clients" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo esc_html(get_theme_mod('client_heading_setting')); ?></h2>
          <p><?php echo esc_html(get_theme_mod('client_content_setting')); ?></p>
        </div>
        <div class="row text-align-">
          <?php $clients_images = get_theme_mod('client_repeater_setting'); ?>
          <?php foreach($clients_images as $client) : ?>

          <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
            <div class="client-item-wrapper">
              <img class="img-fluid" src="<?php echo esc_url($client['client_image']['url']); ?>" alt="">
            </div>
          </div>

          <?php endforeach; ?>
          
        </div>
      </div>
    </div>
    <!-- Clients Section End -->