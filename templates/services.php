    <!-- Services Section Start -->
    <section id="services" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo esc_html(get_theme_mod('service_heading_setting')); ?></h2>
          <p><?php echo esc_html(get_theme_mod('service_content_setting')); ?></p>
        </div>
        <div class="row">

        <?php $services_items = get_theme_mod('service_section_repeater'); 
        
        ?>


        <?php foreach($services_items as $services_item) : ?>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
              <div class="icon">
                <i class="<?php echo $services_item['item_icon']; ?>"></i>
              </div>
              <div class="services-content">
                <h3><a href="#"><?php echo $services_item['item_text']; ?></a></h3>
                <p><?php echo $services_item['item_content']; ?></p>
              </div>
            </div>
          </div>

          <?php endforeach; ?>

        </div>
      </div>
    </section>
    <!-- Services Section End -->