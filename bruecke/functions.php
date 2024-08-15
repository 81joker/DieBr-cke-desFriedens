<?php
require get_template_directory() . '/inc/customizer.php';

function bruecke_load_scripts()
{



    // Bootstrap core CSS
    wp_enqueue_style('bruecke-template-style', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('custom-google-fonts', '//use.fontawesome.com/releases/v5.15.4/css/all.css');


    /** Additional CSS File **/
    wp_enqueue_style('bruecke-fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.css');
    wp_enqueue_style('bruecke-edu-meeting-css', get_template_directory_uri() . '/assets/css/templatemo-edu-meeting.css');
    wp_enqueue_style('environs-owl.carousel.min.css', get_theme_file_uri('/assets/css/owl.css'), array(), '1.0.0');
    wp_enqueue_style('bruecke-lightbox.css', get_template_directory_uri() . '/assets/css/lightbox.css');



    // JavaScript Libraries
    // Bootstrap core JavaScript
    wp_enqueue_style('google-fonts-googleapis', '//fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900', array(), null);


    // JavaScript + CSS Event   
    wp_enqueue_style('bruecke-event', get_template_directory_uri() . '/assets/css/event/event.css'); 
    wp_enqueue_script('event-query-1.11.2.js', get_template_directory_uri(). '/assets/js/event/jquery-1.11.2.min.js', array('jquery'), '', true);
    wp_enqueue_script('event-datepicker.js', get_template_directory_uri(). '/assets/js/event/datepicker.js', array('jquery'), '1.0', true);
    wp_enqueue_script('event-plugins.js', get_template_directory_uri(). '/assets/js/event/plugins.js', array('jquery'), '1.0', true);
    wp_enqueue_script('event-main.js', get_template_directory_uri(). '/assets/js/event/main.js', array('jquery'), '1.0', true);




    wp_enqueue_script('bruecke-jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array('jquery'), '', true);


    wp_enqueue_style('brucke-bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '5.2.3');
    wp_enqueue_script('bruecke-bootstrap-bundle-js', '//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js');



    // wp_enqueue_script('bruecke-isotope-js', get_template_directory_uri(). '/assets/js/isotope.js', array('jquery'), '1.0', true);
    // wp_enqueue_script('bruecke-isotope-main', get_template_directory_uri(). '/assets/js/isotope.min.js', array('jquery'), '', true);
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.6.0', true);

    // Enqueue Isotope.js script
    // Enqueue jQuery
    // wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.6.0', true);

    // Enqueue Isotope.js script
    wp_enqueue_script('bruecke-isotope-main', get_template_directory_uri() . '/assets/js/isotope.min.js', array('jquery'), null, true);
    wp_enqueue_script('bruecke-custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true);



    wp_enqueue_script('lightbox-js', get_template_directory_uri() . '/assets/js/owl-carousel.js', array('jquery'), '1.0', true);
    // wp_enqueue_script('bruecke-owl-carousel-js', get_theme_file_uri('/assets/js/owl-carousel.js'), array('jquery'), '1.0', true);


    wp_enqueue_script('lightbox-js', get_template_directory_uri() . '/assets/js/lightbox.js', array('jquery'), '1.0', true);
    // wp_enqueue_script('bruecke-lightbox-js', get_theme_file_uri('/assets/js/lightbox.js'), array('jquery'), '1.0', true);


    wp_enqueue_script('bruecke-tabs-js', get_template_directory_uri() . '/assets/js/tabs.js', array('jquery'), '1.0', true);
    // wp_enqueue_script('bruecke-tabs-js', get_theme_file_uri('/assets/js/tabs.js'), array('jquery'), '1.0', true);


    wp_enqueue_script('bruecke-video-js', get_template_directory_uri() . '/assets/js/video.js', array('jquery'), '1.0', true);
    // wp_enqueue_script('bruecke-video-js', get_theme_file_uri('/assets/js/video.js'), array('jquery'), '1.0', true);

    wp_enqueue_script('slick-slider-js', get_template_directory_uri() . '/assets/js/slick-slider.js', array('jquery'), '', true);


    wp_enqueue_script('main-js', get_theme_file_uri('/assets/js/main.js'), array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'bruecke_load_scripts');

function bruecke_config()
{

    $textdomain = 'bruecke';
    load_theme_textdomain($textdomain, get_template_directory() . '/languages/');

    register_nav_menus(
        array(
            'bruecke_main_menu' => esc_html__('Main Menu', 'bruecke'),
            'bruecke_footer_menu' => esc_html__('Footer Menu', 'bruecke')
        )
    );

    $args = array(
        'height'    => 425,
        'width'     => 1920
    );
    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
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
add_action('after_setup_theme', 'bruecke_config', 0);



function bruecke_adjust_queries($query)
{
    if (!is_admin() and is_post_type_archive('event') and $query->is_main_query()) {
        $today = date('Ymd');
        $query->set('meta_key', 'event_date');
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'ASC');
        $query->set('meta_query', array(
            array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
            )
        ));
    }
}

add_action('pre_get_posts', 'bruecke_adjust_queries');

function add_class_to_content($content) {
    if (is_singular('event')) {
        $content = preg_replace('/<p([^>]*)>/', '<p$1 class="description">', $content, 1);
        return $content;
    }
    return $content;
}
add_filter('the_content', 'add_class_to_content');