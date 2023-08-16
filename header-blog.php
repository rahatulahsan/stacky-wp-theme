<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>

  </head>
  <body>

    <!-- Header Section Start -->
    <header id="hero-area">    
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <?php 
            if(has_custom_logo()){
              the_custom_logo();
            }else{
              echo '<h1><a href='.home_url("/").'>'.get_bloginfo('name'). '</a></h1>';
            }
          ?>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <?php 
            wp_nav_menu(array(
                'theme_location' => 'secondary',
                'menu_class' => 'navbar-nav mr-auto w-100 justify-content-end clearfix',
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse menu-white',
                'container_id' => 'navbarCollapse'
            ));
          ?>
        </div>
      </nav>               
    </header>
    <!-- Header Section End --> 