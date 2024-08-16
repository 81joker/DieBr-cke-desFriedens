<?php
/* Template Name: Kontakt Template */
?>
<?php get_header(); ?>

<section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact"   method="post">
              <input type="hidden" name="contact_nonce" value="<?php echo wp_create_nonce('contact_form_nonce'); ?>">
              <?php /* wp_nonce_field('contact_form_nonce', '_wpnonce'); */?>
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Let's get in touch</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="YOURNAME...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="subject" type="text" id="subject" placeholder="SUBJECT...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="right-info">
            <ul>
              <li>
                <h6>Phone Number</h6>
                <span>010-020-0340</span>
              </li>
              <li class="email-contact">
                <h6>Email Address</h6>
                <span>info@brueckedesfriedens.at</span>
              </li>
              <li>
                <h6>Street Address</h6>
                <span>Längenfeldgasse - 68\4\1, 1120 Wien</span>
              </li>
              <!-- <li>
                <h6>facebook URL</h6>
                <span><a href="https://www.facebook.com/Diebrueckedesfriedens/?locale=de_DE"  target="_blank" class="text-wihte">Facebook </a></span>
              </li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>