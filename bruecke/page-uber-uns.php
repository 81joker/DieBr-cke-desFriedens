<?php get_header(); ?>



<?php get_header(); ?>


<?php
if (have_posts()) :
    while (have_posts()) : the_post();?>



<?php 
    the_content();
?>
<?php
    endwhile;
?>
  

<?php endif; ?> 




<?php get_footer(); ?>


<section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Unsere beliebten Aktiv</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-courses-item owl-carousel">
            <div class="item">
              <img src="<?php echo get_theme_file_uri('assets/images/course-01.jpg') ?>" alt="Course One">
              <div class="down-content">
                <h4>Some quick example text to build on the card title and make up the bulk of the card's content.</h4>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>




<?php get_footer(); ?>