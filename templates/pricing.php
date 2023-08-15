<!-- Pricing section Start --> 

<section id="pricing" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo esc_html(get_theme_mod('pricing_heading_setting')); ?></h2>
          <p><?php echo esc_html(get_theme_mod('pricing_content_setting')); ?></p>
        </div>
        <div class="row">
            <?php 

                $args = array(
                    'post_type' => 'pricingtable',
                    'posts_per_page' => -1,
                    'orderby' => 'ID',
                    'order'  => 'ASC'
                );

                $pricing_table = new WP_Query($args);
                while($pricing_table->have_posts()){
                    $pricing_table->the_post(); 
                    $featured = get_field('featured');
                    $featured_class;
                    if($featured == 1){$featured_class = 'active';}else{$featured_class = '';}
                    ?>
                    <div class="col-lg-4 col-md-6 col-xs-12 <?php echo $featured_class; ?>">
                        <div class="table wow fadeInLeft" id="<?php if('active' == $featured_class){echo 'active-tb';} ?>" data-wow-delay="1.2s">
                        <div class="title">
                            <h3><?php the_title(); ?></h3>
                        </div>
                        <div class="pricing-header">
                            <p class="price-value">$<?php echo esc_html(get_field('price')); ?><span>/ <?php echo esc_html(get_field('subscription_timeline')); ?></span></p>
                        </div>
                        <ul class="description">
                            <?php 
                            
                            $pricing_features = get_field('pricing_features');
                            
                            foreach($pricing_features as $feature){?>
                                <li><?php echo esc_html($feature['feature']); ?></li>
                            <?php }
                            
                            ?>
                        </ul>
                        <a href="<?php echo esc_url(get_field('button_link')); ?>"><button class="btn btn-common"><?php echo esc_html(get_field('button_text')); ?></button></a>
                        </div> 
                    </div>
                <?php }

                    wp_reset_query();
            ?>          
        </div>
      </div>
    </section>
    <!-- Pricing Table Section End -->