<?php
require get_template_directory() . '/inc/customizer.php';

function bruecke_load_scripts(){



    // Bootstrap core CSS
    wp_enqueue_style( 'bruecke-template-style',get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );


    /** Additional CSS File **/
    wp_enqueue_style( 'bruecke-fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.css'  );
    wp_enqueue_style( 'bruecke-edu-meeting-css', get_template_directory_uri() . '/assets/css/templatemo-edu-meeting.css'  );
    wp_enqueue_style( 'environs-owl.carousel.min.css', get_theme_file_uri( '/assets/css/owl.css' ), array(), '1.0.0' );
    wp_enqueue_style( 'bruecke-lightbox.css',get_template_directory_uri().'/assets/css/lightbox.css' );



    // JavaScript Libraries
    // Bootstrap core JavaScript
    wp_enqueue_style( 'google-fonts-googleapis', '//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900', array(), null );


    wp_enqueue_script( 'bruecke-jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array( 'jquery' ), '', true );
    // wp_enqueue_script('bruecke-jquery', get_theme_file_uri('/vendor/jquery/jquery.min.js'), array('jquery'), '1.0', true);


    wp_enqueue_script('isotope-js','//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), null);
    // wp_enqueue_script('isotope-js', get_template_directory_uri(). '/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '1.0', true);
    // wp_enqueue_script('bruecke-bootstrap-js', get_theme_file_uri('/vendor/bootstrap/js/bootstrap.bundle.min.js'), array('jquery'), '1.0', true);


    wp_enqueue_script('isotope-js', get_template_directory_uri(). '/assets/js/isotope.min.js', array('jquery'), '1.0', true);
    // wp_enqueue_script('bruecke-isotope-js', get_theme_file_uri('/assets/js/isotope.min.js'), array('jquery'), '1.0', true);

    wp_enqueue_script('lightbox-js', get_template_directory_uri(). '/assets/js/owl-carousel.js', array('jquery'), '1.0', true);
    // wp_enqueue_script('bruecke-owl-carousel-js', get_theme_file_uri('/assets/js/owl-carousel.js'), array('jquery'), '1.0', true);


    wp_enqueue_script('lightbox-js', get_template_directory_uri(). '/assets/js/lightbox.js', array('jquery'), '1.0', true);
    // wp_enqueue_script('bruecke-lightbox-js', get_theme_file_uri('/assets/js/lightbox.js'), array('jquery'), '1.0', true);


    wp_enqueue_script('bruecke-tabs-js', get_template_directory_uri(). '/assets/js/tabs.js', array('jquery'), '1.0', true);
    // wp_enqueue_script('bruecke-tabs-js', get_theme_file_uri('/assets/js/tabs.js'), array('jquery'), '1.0', true);


    wp_enqueue_script( 'bruecke-video-js', get_template_directory_uri() . '/assets/js/video.js', array( 'jquery' ), '1.0', true );
    // wp_enqueue_script('bruecke-video-js', get_theme_file_uri('/assets/js/video.js'), array('jquery'), '1.0', true);
    
    wp_enqueue_script( 'slick-slider-js', get_template_directory_uri() . '/assets/js/slick-slider.js', array( 'jquery' ), '', true );
    
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), null );
    // wp_enqueue_script('bruecke-custom-js', get_theme_file_uri('/assets/js/custom.js'), array('jquery'), '1.0', true);

    wp_enqueue_script('main-js', get_theme_file_uri('/assets/js/main.js'), array('jquery'), '1.0', true);


}
add_action( 'wp_enqueue_scripts', 'bruecke_load_scripts' );

function bruecke_config(){

    $textdomain = 'bruecke';
    load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );

    register_nav_menus(
        array(
            'bruecke_main_menu' => esc_html__( 'Main Menu', 'bruecke' ),
            'bruecke_footer_menu' => esc_html__( 'Footer Menu', 'bruecke' )
        )
    );

    // $args = array(
    //     'height'    => 540,
    //     'width'     => 1920
    // );
    // add_theme_support( 'custom-header', $args );
    // add_theme_support( 'post-thumbnails' );
    // add_theme_support( 'custom-logo', array(
    //     'width' => 200,
    //     'height'    => 110,
    //     'flex-height'   => true,
    //     'flex-width'    => true
    // ) );
    // add_theme_support( 'automatic-feed-links' );
    // add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
    // add_theme_support( 'title-tag' );

    //add_theme_support( 'align-wide' );
    // add_theme_support( 'responsive-embeds' );
    // add_theme_support( 'editor-styles' );
    // add_editor_style( 'style-editor.css' );
    // add_theme_support( 'wp-block-styles' );

}
add_action( 'after_setup_theme', 'bruecke_config', 0 );


