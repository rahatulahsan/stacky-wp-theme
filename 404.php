<?php get_header('blog'); ?>

    <!-- Page header Start -->
    <section class="page-header">
      <div class="container">      
        <div class="row justify-content-md-center">
          <div class="col-md-12">
            <div class="breadcrumb-wrapper text-center">
            </div>
          </div>
        </div> 
      </div> 
    </section>
    <!-- Page header End -->
    
    <!-- Blog Section Start  -->
    <div id="blog-single">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12 col-xs-12">
            
              <div class="post-content">
                <h3><?php _e('The page you are looking for are not available'); ?></h3>
                <a href="<?php echo home_url(); ?>" class="btn btn-common">BACK TO HOME</a>
              </div>
            
           
          </div>
         
        </div>
      </div>
    </div>
    <!-- Blog Section End  -->
    
<?php get_footer(); ?>