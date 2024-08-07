  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">

    <?php
    $hero_title = get_theme_mod('set_hero_title', __('Please, type some title', 'bruecke'));
    $hero_subtitle = get_theme_mod('set_hero_subtitle', __('Please, type some subtitle', 'bruecke'));
    $hero_text = get_theme_mod('set_hero_text', __('Please, type some Text', 'bruecke'));
    $hero_button_link = get_theme_mod('set_hero_button_link', '#');
    $hero_button_text = get_theme_mod('set_hero_button_text', __('Learn More', 'bruecke'));
    // $hero_height = get_theme_mod( 'set_hero_height', 800 ); to do size image hero 
    $hero_background = wp_get_attachment_url(get_theme_mod('set_hero_background'));
    $hero_background_id = get_theme_mod('set_hero_background');
    $hero_background_mime = get_post_mime_type($hero_background_id);
    ?>
    <?php if (strpos($hero_background_mime, 'image') !== false) : ?>
      <div class="bg-hero">
        <img src="<?php echo esc_url($hero_background) ?>" alt="">
      </div>

    <?php elseif (strpos($hero_background_mime, 'video') !== false) : ?>

      <video autoplay muted loop id="bg-video">
        <source src="<?php echo   $hero_background; ?>" type="video/mp4" />
      </video>

    <?php endif; ?>

    <div class="video-overlay header-text">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="caption">
              <h6><?php echo esc_html( $hero_title ); ?>s</h6>
              <h2><?php echo nl2br( esc_html( $hero_subtitle ) ); ?></h2>
              <p><?php echo nl2br( esc_html( $hero_text) ); ?></p>
              <div class="main-button-red">
                <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->


  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">

            <div class="item">
              <div class="icon">
                <img src="<?php echo get_theme_file_uri('assets/images/service-icon-01.png'); ?>" alt="">
              </div>
              <div class="down-content">
                <h4>Best Education</h4>
                <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
              </div>
            </div>

            <div class="item">
              <div class="icon">
                <img src="<?php echo get_theme_file_uri('assets/images/service-icon-02.png'); ?>" alt="">
              </div>
              <div class="down-content">
                <h4>Best Teachers</h4>
                <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
              </div>
            </div>

            <div class="item">
              <div class="icon">
                <img src="<?php echo get_theme_file_uri('assets/images/service-icon-03.png'); ?>" alt="">
              </div>
              <div class="down-content">
                <h4>Best Students</h4>
                <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
              </div>
            </div>

            <div class="item">
              <div class="icon">
                <img src="<?php echo get_theme_file_uri('assets/images/service-icon-02.png'); ?>" alt="">
              </div>
              <div class="down-content">
                <h4>Online Meeting</h4>
                <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
              </div>
            </div>

            <div class="item">
              <div class="icon">
                <img src="<?php echo get_theme_file_uri('assets/images/service-icon-03.png'); ?>" alt="">
              </div>
              <div class="down-content">
                <h4>Best Networking</h4>
                <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>