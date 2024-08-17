<?php

function bruecke_child_scripts(){
    wp_enqueue_style( 'bruecke-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'bruecke-child-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'bruecke_child_scripts' );