<?php get_header(); ?>

<!-- Navbar start Header Area Start -->
<?php include('hero.php');  ?>
<!-- ***** Banner Area  End ***** -->

<?php /** include('static-code.php') **/ ?>



    <?php get_template_part('parts/content', 'event'); ?>
<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>




    <?php
    endwhile;
    ?>


<?php endif; ?>



<?php get_footer(); ?>