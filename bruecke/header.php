<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta charset="utf-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <!-- Additional CSS Files -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="page" class="site">
        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
           <div class="spinner-grow text-primary" role="status"></div>
        </div>
    <!-- Spinner End -->





        <!-- Navbar start Header Area Start -->
         <?php  include('navbar.php');  ?>
        <!-- ***** Banner Area Start  ***** -->

        <?php
if (!is_front_page()) :
        $args = $_SERVER['REQUEST_URI'];
        $args = ltrim($args, '/'); 
        $args = rtrim($args, '/'); 
        $args = ucfirst($args);
        get_template_part( 'parts/content', 'breadcrumb' , $args);
        ?>
<?php endif;?>
    
