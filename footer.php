<footer class="pb-0 footer-area-before">
  <div class="container footer-sec">
    <div class="logo-info">
      <div class="row align-items-center">
        <div class="col-lg-3 col-md-4">
          <div class="footer-logo">
            <a href="<?php echo home_url(); ?>"><img
                data-srcset="<?php echo get_field('footer_logo', 'option')['url'];?>"
                alt="Academie Culinaire De FrAnce USA & Canada Delegation" srcset="https://tribalrootsimports1.b-cdn.net/320x468.avif" class="img-fluid lazyimage"     id="#animate-anything-css" /></a>
          </div>
        </div>
        <div class="col-lg-5 col-md-8">
          <div class="footer-info">
            <p><?php the_field('footer_heading', 'option');?></p>
          </div>
        </div>
      </div>
    </div>


    <div class="footer-navbar" id="mobile-view">
      <div class="row justify-content-lg-between justify-content-md-between justify-content-center">
        <div class="col-md-7 mb-2 col-8">
          <div class="footer-nav">
            <?php if (have_rows('connect_social_icons', 'option')): ?>
            <div class="nav-title">
              <p>Connect</p>
            </div>
            <ul class="list-unstyled footer-social-media social-item2">
              <?php while (have_rows('connect_social_icons', 'option')) : the_row(); ?>
              <li><a href="<?php the_sub_field('fb_link'); ?>" target="_blank" title="Facebook" aria-label="Facebook"><i class="fa-brands
                    fa-facebook-f"></i></a></li>
                <li><a href="<?php the_sub_field('ld_link'); ?>" target="_blank" title="Linkedin" aria-label="Linkedin"><i class="fab
                    fa-linkedin-in"></i></a></li>
                <li><a href="<?php the_sub_field('tw_link'); ?>" target="_blank" title="Twitter" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                </li>
                <li><a href="<?php the_sub_field('istagram_link'); ?>" target="_blank" title="Instagram" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </li>
                <li><a href="<?php the_sub_field('envelope_link'); ?>" target="_blank" title="Envelope" aria-label="Envelope"><i class="fas fa-envelope"></i></a>
                </li>
              <?php endwhile; ?>
            </ul>
          </div>
          <?php endif; ?>
        </div>
        <div class="col-md-4 mb-4 col-12">
          <div class="footer-form">
            <div class="form-title text-center">
              <p><?php the_field('subscribe_to_our_news', 'option');?></p>
            </div>
            <div class="registration-form">
                  <?php echo do_shortcode(get_field('subscribe_shortcode_footer',  'option')); ?>
                </div>
          </div>
        </div>


        <div class="col-md-12">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  <?php the_field('explore_links_text', 'option');?>
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="footer-nav">
                    <div class="row">
                      <div class="col-lg-6">
                        <ul class="list-unstyled">
                          <?php
                                // explore-primary
                                wp_nav_menu( array(
                                  'theme_location' => 'mobile-menu',
                                  'container'      => false,
                                  'items_wrap'     => '%3$s',
                                  'link_before'    => '',
                                  'depth'          => 1, 
                                  'fallback_cb'    => false
                                ) );
                                ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  <?php the_field('learn_links_text', 'option');?>
                </button>
              </h2>

              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="footer-nav">
                    <ul class="list-unstyled">
                      <?php
              // learn Menu
              wp_nav_menu( array(
              'theme_location' => 'learn',
              'container'      => false,
              'items_wrap'     => '%3$s', 
              'link_before'    => '',
              'depth'          => 1, 
              'fallback_cb'    => false 
                ) );
            ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-navbar" id="tab-view">
      <div class="row justify-content-between">
        <div class="col-md-7 mb-4">
          <div class="footer-nav">
            <?php if (have_rows('connect_social_icons', 'option')): ?>
            <div class="nav-title">
              <p><?php the_field('connect_social_icons', 'option');?></p>
            </div>
            <div class="social-media">
              <ul class="list-unstyled footer-social-media social-item2">
                <?php while (have_rows('connect_social_icons', 'option')) : the_row(); ?>
                <li><a href="<?php the_sub_field('fb_link'); ?>" target="_blank" title="Facebook" aria-label="Facebook"><i class="fa-brands
                    fa-facebook-f"></i></a></li>
                <li><a href="<?php the_sub_field('ld_link'); ?>" target="_blank" title="Linkedin" aria-label="Linkedin"><i class="fab
                    fa-linkedin-in"></i></a></li>
                <li><a href="<?php the_sub_field('tw_link'); ?>" target="_blank" title="Twitter" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                </li>
                <li><a href="<?php the_sub_field('istagram_link'); ?>" target="_blank" title="Instagram" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </li>
                <li><a href="<?php the_sub_field('envelope_link'); ?>" target="_blank" title="Envelope" aria-label="Envelope"><i class="fas fa-envelope"></i></a>
                </li>
                <?php endwhile; ?>
              </ul>
            </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-md-5 mb-4">
          <div class="footer-form">
            <div class="form-title text-center">
              <p><?php the_field('subscribe_to_our_news', 'option');?></p>
            </div>
            <div class="registration-form">
                  <?php echo do_shortcode(get_field('subscribe_shortcode_footer',  'option')); ?>
            </div>
          </div>
        </div>


        <div class="col-md-12">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  <?php the_field('explore_links_text', 'option');?>
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="footer-nav">
                    <div class="row">
                      <div class="col-lg-6">
                        <ul class="list-unstyled">
                          <?php
                                // explore-primary
                                wp_nav_menu( array(
                                  'theme_location' => 'explore-primary',
                                  'container'      => false,
                                  'items_wrap'     => '%3$s',
                                  'link_before'    => '',
                                  'depth'          => 1, 
                                  'fallback_cb'    => false
                                ) );
                            ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  <?php the_field('learn_links_text', 'option');?>
                </button>
              </h2>

              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="footer-nav">
                    <ul class="list-unstyled">
                      <?php
                                // learn Menu
                                wp_nav_menu( array(
                                  'theme_location' => 'learn',
                                  'container'      => false,
                                  'items_wrap'     => '%3$s', 
                                  'link_before'    => '',
                                  'depth'          => 1, 
                                  'fallback_cb'    => false 
                                ) );
                          ?> </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-navbar" id="desktop-view">
      <div class="row">
        <div class="col-lg-5">
          <div class="footer-nav">
            <div class="nav-title">
              <p>Explore</p>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled">
                  <?php
                                // explore-primary
                                wp_nav_menu( array(
                                  'theme_location' => 'explore-primary',
                                  'container'      => false,
                                  'items_wrap'     => '%3$s',
                                  'link_before'    => '',
                                  'depth'          => 1, 
                                  'fallback_cb'    => false
                                ) );
                    ?>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled">
                  <?php
                                // explore-secondary
                                wp_nav_menu( array(
                                  'theme_location' => 'explore-secondary',
                                  'container'      => false,
                                  'items_wrap'     => '%3$s',
                                  'link_before'    => '',
                                  'depth'          => 1, 
                                  'fallback_cb'    => false 
                                ) );
                    ?>
                </ul>
              </div>
            </div>



          </div>
        </div>
        <div class="col-lg-2">
          <div class="footer-nav">
            <div class="nav-title">
              <p>Learn</p>
            </div>

            <ul class="list-unstyled">
              <?php
                                // learn Menu
                                wp_nav_menu( array(
                                  'theme_location' => 'learn',
                                  'container'      => false,
                                  'items_wrap'     => '%3$s', 
                                  'link_before'    => '',
                                  'depth'          => 1, 
                                  'fallback_cb'    => false 
                                ) );
                ?>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-8">
          <div class="footer-nav">
            <?php if (have_rows('connect_social_icons', 'option')): ?>
            <div class="nav-title">
              <p>Connect</p>
            </div>
            <div class="social-media">
              <ul class="list-unstyled footer-social-media social-item2">
                <?php while (have_rows('connect_social_icons', 'option')) : the_row(); ?>
                <li><a href="<?php the_sub_field('fb_link'); ?>" target="_blank" title="Facebook" aria-label="Facebook"><i class="fa-brands
                    fa-facebook-f"></i></a></li>
                <li><a href="<?php the_sub_field('ld_link'); ?>" target="_blank" title="Linkedin" aria-label="Linkedin"><i class="fab
                    fa-linkedin-in"></i></a></li>
                <li><a href="<?php the_sub_field('tw_link'); ?>" target="_blank" title="Twitter" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                </li>
                <li><a href="<?php the_sub_field('istagram_link'); ?>" target="_blank" title="Instagram" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </li>
                <li><a href="<?php the_sub_field('envelope_link'); ?>" target="_blank" title="Envelope" aria-label="Envelope"><i class="fas fa-envelope"></i></a>
                </li>
                <?php endwhile; ?>
              </ul>
            </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-lg-2 col-md-4">
          <div class="footer-form">
            <div class="form-title text-center">
              <p><?php /*the_field('subscribe_to_our_news', 'option');*/?></p>
            </div>
            <div class="registration-form">
                 <?php /*echo do_shortcode(get_field('subscribe_shortcode_footer',  'option'));*/ ?>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="copy-right">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <p><?php the_field('copyright', 'option');?></p>
        </div>
      </div>
    </div>
  </div>
</footer>


<div class="backTotop go-top" id="backToTop">
  <a href=""><img loading="lazy" alt="image" loading="lazy"
      src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/back-to-top.png"
      class="goTotop-move"></a>
</div>

<?php if (!is_page('cart') &&  !is_page('checkout')) { ?>
<script src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/gsap.min.js" ></script>
<script src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/scrollTrigger.min.js" ></script>
<script src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/animation.js" ></script>
<script src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/jquery-3.7.0.js" ></script>
<script src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/owl.carousel.min.js" ></script>
<script src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/owl.carousel.js" ></script>
<script src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/bootstrap/js/popper.min.js" ></script>
<script src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/bootstrap/js/bootstrap.min.js" ></script>
<script src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/shop.js" ></script>
<script src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/main.js" ></script>
<script src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/my-main.js" ></script>
<script src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/js/competition.js" ></script>
<?php } ?>

<script>
document.addEventListener("DOMContentLoaded", function() {

  var lazyloadImages = document.querySelectorAll(".lazyimage");

  var lazyloadThrottleTimeout;



  function lazyload() {

    if (lazyloadThrottleTimeout) {

      clearTimeout(lazyloadThrottleTimeout);

    }



    lazyloadThrottleTimeout = setTimeout(function() {

      var scrollTop = window.pageYOffset;

      lazyloadImages.forEach(function(img) {

        if (img.offsetTop < (window.innerHeight + scrollTop)) {

          img.srcset = img.dataset.srcset;

          img.classList.remove('lazyimage');

        }

      });

      lazyloadImages.forEach(function(source) {

        if (source.offsetTop < (window.innerHeight + scrollTop)) {

          source.srcset = source.dataset.srcset;

          source.classList.remove('lazyimage');

        }

      });

      if (lazyloadImages.length = me = 0) {

        document.removeEventListener("scroll", lazyload);

        window.removeEventListener("resize", lazyload);

        window.removeEventListener("orientationChange", lazyload);

      }

    }, 20);

  }



  document.addEventListener("scroll", lazyload);

  window.addEventListener("resize", lazyload);

  window.addEventListener("orientationChange", lazyload);

});
</script>
<?php wp_footer();?>
</body>

</html>