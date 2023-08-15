<!-- Blog Section -->
<section id="blog" class="section-padding">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo esc_html(get_theme_mod('blog_heading_setting')); ?></h2>
          <p><?php echo esc_html(get_theme_mod('blog_content_setting')); ?></p>
        </div>
        <div class="row">

        <?php 
        
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
            );

            $stacky_posts = new WP_Query($args);
            while($stacky_posts->have_posts()){
                $stacky_posts->the_post(); ?>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
                    <!-- Blog Item Starts -->
                    <div class="blog-item-wrapper wow fadeInUp" data-wow-delay="0.6s">
                    <div class="blog-item-img">
                        <a href="<?php echo the_permalink(); ?>">
                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                        </a>                
                    </div>
                    <div class="blog-item-text"> 
                        <h3>
                        <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <p>
                        <?php echo wp_trim_words(get_the_content(), 25); ?> 
                        </p>
                        <a href="<?php echo the_permalink(); ?>" class="btn btn-common btn-rm">Read More</a>
                    </div>
                    </div>
                    <!-- Blog Item Wrapper Ends-->
                </div>  
            <?php }
        
        ?>
            
        </div>
      </div>
    </section>
    <!-- blog Section End -->
