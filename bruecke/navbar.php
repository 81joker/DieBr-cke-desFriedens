
    <!-- Sub Header -->
    <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8 d-flex align-items-center">
          <div class="left-content" style="font-size: 13px;">
              <a href="mailto:info@brueckedesfriedens.at" class="text-light me-4"><i class="fas fa-envelope text-white me-2"></i>info@brueckedesfriedens.at</a>
              <a href="#" class="text-light"><i class="fas fa-phone-alt text-white me-2"></i>+43 XXXX</a>
        </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="https://www.facebook.com/Diebrueckedesfriedens/?locale=de_DE"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  
  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                      Die Brücke des Friedens 
                    </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <!-- <li class="scroll-to-section"><a href="#top" class="active">XXXXHome</a></li> -->
                          <li class="scroll-to-section">
                            <a href="<?php echo esc_url(home_url()); ?>" <?php if (is_front_page()) echo 'class="active"'; ?>>Home</a>
                          </li>
                          <li><a href="<?php echo site_url('/uber-uns') ?>">Über Uns</a></li>
                          <li class="scroll-to-section"><a href="#courses">Services</a></li> 
                          <li <?php if (get_post_type() == 'event' OR is_page('past-events')) echo 'class="scroll-to-section active"';  ?>><a href="<?php echo get_post_type_archive_link('event'); ?>">Events</a></li>

                          <li class="scroll-to-section"><a href="<?php echo site_url('/kontakt') ?>">kontakt</a></li> 
                          <li class="scroll-to-section"><a href="<?php echo site_url('/contact') ?>">Contact</a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->