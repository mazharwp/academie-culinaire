<?php get_header(); ?>

<style>
.brand-logo-sec {
    padding-bottom: 0px !important;
}
</style>
<section class="banner-sec">
  <div class="container-fluid">
    <div class="banner-content">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-margin">
            <div class="custom-btn-3">

              <button class="btnDefault" onclick="history.back()">
                <a href="/news" class="shop-back-btn">
                <span class="pe-2">
                  <img loading="lazy" alt="image"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-left-arrow.png"
                    class="right-arrow change-img1">
                  <img loading="lazy" alt="image"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-left-green-arrow.png"
                    class="right-arrow change-img2">
                </span> <span class="text">Back</span>
              </a>
              </button>

            </div>
            <h6><?php echo get_the_date('F j, Y'); ?></h6>
            <div class="border-before">
              <p><?php the_title(); ?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-7">

          <div class="img-banner-detail"
            style="background: url('<?php echo get_the_post_thumbnail_url($post_id,'full'); ?>'); background-size: cover; background-repeat: no-repeat;">

            <?php 
							$featured_img_url = get_the_post_thumbnail_url($post_id,'full');
						?>
            <img width="600" height="470" data-srcset="<?php echo $featured_img_url;?>"
              srcset="https://tribalrootsimports1.b-cdn.net/320x468.avif" class="img-fluid newImage lazyimage" alt=""
              decoding="async" fetchpriority="high">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="blog-detail-sec">
  <div class="container">
    <div class="row justify-content-center">
      <div class="white-detail-stripe"></div>
      <div class="col-lg-11">
        <div class="content-box">
          <?php
                    // Start the Loop
                    while (have_posts()) : the_post();
                        // Display post content
                        the_content();
                    endwhile; // End of the loop.
          ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php echo do_shortcode('[brand_logo]'); ?>


<section class="donate-sec donate-detail-sec donate-sec-inner">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="donate-main donate-main-award text-center">
          <div class="donate-content donate-content-recipe text-center mobile-view">
            <h2><?php the_field('donate_name', 'option'); ?></h2>
                <h5><?php the_field('donate_title', 'option'); ?></h5>
                <p><?php the_field('donate_description', 'option'); ?></p>
            <div class="custom-btn-2">
             <a href="<?php the_field('donate_button_link1', 'option'); ?>">
                <button class="btnDefault">
                <span><?php the_field('donate_button', 'option'); ?></span>
                  <span class="ps-2">
                    <img loading="lazy" alt="image"
                      src="<?php echo get_template_directory_uri(); ?>/assets/img/white-right-arrow.svg"
                      class="right-arrow change-img1">
                    <img loading="lazy" alt="image"
                      src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg"
                      class="right-arrow change-img2">
                  </span>
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>