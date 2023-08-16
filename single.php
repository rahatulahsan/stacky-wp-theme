<?php get_header('blog'); ?>

    <!-- Page header Start -->
    <section class="page-header">
      <div class="container">      
        <div class="row justify-content-md-center">
          <div class="col-md-12">
            <div class="breadcrumb-wrapper text-center">
              <h2><?php the_title(); ?></h2>
              <p><a href="<?php echo home_url(); ?>">Home </a>/ <?php the_title(); ?></p>
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
            <div class="blog-post">
              <div class="post-thumb">
                <img src="<?php echo the_post_thumbnail_url('large'); ?>" alt="">
              </div>
              <div class="post-content">
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
                
              </div>
            </div>
            <div class="blog-comment">
                
            <?php 
        
              if(!post_password_required()){
                  comments_template();
              }

              ?>
              
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-xs-12">
            <div class="widgets">
              <div class="search-input single-widget">
                <input type="text" class="form-control" placeholder="Search Here.....">
              </div>
              <div class="widget-latest-post single-widget">
                <h4>Latest Post</h4>
                <ul class="latest-post">
                  <li class="single-latest-post">
                    <div class="latest-post-img">
                      <a href="#"><img src="assets/img/blog/1.jpg" class="img-fluid" alt="Blog-image"></a>
                    </div>
                    <h5><a href="single-blog.html">Awesome Blog Title</a></h5>
                    <p><a href="#">12 Feb, 2020</a></p>
                  </li>
                  <li class="single-latest-post">
                    <div class="latest-post-img">
                      <a href="#"><img src="assets/img/blog/2.jpg" class="img-fluid" alt="Blog-image"></a>
                    </div>
                    <h5><a href="single-blog.html">Awesome Blog Title</a></h5>
                    <p><a href="#">12 Feb, 2020</a></p>
                  </li>
                  <li class="single-latest-post">
                    <div class="latest-post-img">
                      <a href="#"><img src="assets/img/blog/3.jpg" class="img-fluid" alt="Blog-image"></a>
                    </div>
                    <h5><a href="single-blog.html">Awesome Blog Title</a></h5>
                    <p><a href="#">12 Feb, 2020</a></p>
                  </li>
                </ul>
              </div>
              <div class="categories single-widget">
                <h4>Categories</h4>
                <ul>
                  <li><a href="#">Photography</a></li>
                  <li><a href="#">Education</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Travel</a></li>
                  <li><a href="#">Sports</a></li>
                  <li><a href="#">Technology</a></li>
                  <li><a href="#">Development</a></li>
                  <li><a href="#">Design</a></li>
                </ul>
              </div>
              <div class="tags single-widget">
                <h4>Tags</h4>
                <ul>
                  <li><a href="#">Corporate</a></li>
                  <li><a href="#">Web</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Photoshop</a></li>
                  <li><a href="#">Minimal</a></li>
                  <li><a href="#">Popular</a></li>
                  <li><a href="#">Design</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Blog Section End  -->
    
<?php get_footer(); ?>