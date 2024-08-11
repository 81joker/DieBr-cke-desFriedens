<?php
  
  get_header();

  while(have_posts()) {
    the_post(); ?>
<h1>XX</h1>

    
  <?php }

  get_footer();

?>