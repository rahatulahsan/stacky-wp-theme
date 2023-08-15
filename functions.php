<?php 

require_once get_theme_file_path( '/inc/tgm.php' );
require_once get_theme_file_path( '/inc/customizer.php' );

function stacky_theme_setup(){

    load_theme_textdomain('stacky', get_theme_file_uri('/languages'));
    add_theme_support( 'title-tag' );
    add_theme_support('custom-logo');
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support('html5', array('comment-form', 'search-form'));
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'video', 'quote', 'audio', 'link' ) );

}   

add_action('after_setup_theme', 'stacky_theme_setup');


function stacky_assets(){
    wp_enqueue_style( 'style-css', get_stylesheet_uri());

    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', '1.0', 'all');
    wp_enqueue_style( 'lineicon-css', get_template_directory_uri() . '/assets/fonts/line-icons.css', '1.0', 'all');
    wp_enqueue_style( 'slicknav-css', get_template_directory_uri() . '/assets/css/slicknav.css', '1.0', 'all');
    wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', '1.0', 'all');
    wp_enqueue_style( 'owl-theme-css', get_template_directory_uri() . '/assets/css/owl.theme.css', '1.0', 'all');
    wp_enqueue_style( 'magnific-popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.css', '1.0', 'all');
    wp_enqueue_style( 'nivo-lightbox-css', get_template_directory_uri() . '/assets/css/nivo-lightbox.css', '1.0', 'all');
    wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/css/animate.css', '1.0', 'all');
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css', '1.0', 'all');
    wp_enqueue_style( 'stacky-responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', '1.0', 'all');

    wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), 1.0,true);
    wp_enqueue_script( 'bootstratp-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), 1.0,true);
    wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), 1.0,true);
    wp_enqueue_script( 'mixitup-js', get_template_directory_uri() . '/assets/js/jquery.mixitup.js', array('jquery'), 1.0,true);
    wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), 1.0,true);
    wp_enqueue_script( 'nav-js', get_template_directory_uri() . '/assets/js/jquery.nav.js', array('jquery'), 1.0,true);
    wp_enqueue_script( 'scrolling-js', get_template_directory_uri() . '/assets/js/scrolling-nav.js', array('jquery'), 1.0,true);
    wp_enqueue_script( 'easing-js', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array('jquery'), 1.0,true);
    wp_enqueue_script( 'counterup-js', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), 1.0,true);
    wp_enqueue_script( 'lightbox-js', get_template_directory_uri() . '/assets/js/nivo-lightbox.js', array('jquery'), 1.0,true);
    wp_enqueue_script( 'popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), 1.0,true);
    wp_enqueue_script( 'waypoint-js', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), 1.0,true);
    wp_enqueue_script( 'slicknav-js', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array('jquery'), 1.0,true);
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 1.0,true);

    if ( is_singular() ) wp_enqueue_script( "comment-reply" );

}

add_action('wp_enqueue_scripts', 'stacky_assets');


function stacky_post_type() {
    $labels = array(
        'name'                  => _x( 'Pricing Tables', 'Post type general name', 'stacky' ),
        'singular_name'         => _x( 'Pricing Table', 'Post type singular name', 'stacky' ),
        'menu_name'             => _x( 'Pricing Tables', 'Admin Menu text', 'stacky' ),
        'name_admin_bar'        => _x( 'Pricing Table', 'Add New on Toolbar', 'stacky' ),
        'add_new'               => __( 'Add New', 'stacky' ),
        'add_new_item'          => __( 'Add New table', 'stacky' ),
        'new_item'              => __( 'New table', 'stacky' ),
        'edit_item'             => __( 'Edit table', 'stacky' ),
        'view_item'             => __( 'View table', 'stacky' ),
        'all_items'             => __( 'All tables', 'stacky' ),
        
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Pricing Tables',
        'public'             => true,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'pricing-table' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title' ),
        'show_in_rest'       => false,
        'menu_icon'          => 'dashicons-money-alt'
    );
     
    register_post_type( 'Pricing Table', $args );
}
add_action( 'init', 'stacky_post_type' );