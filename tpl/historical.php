<?php
/*
Template Name: Hostorical
*/
get_header();

require 'inner.php';
?>


<!-- 3 -->
<section class="stories-sec">
  <div class="container-fluid" data-aos="fade-down" data-aos-duration="2000">
    <div class="row">
      <div class="col-lg-10">
        <div class="story purple-bg">

          <div class="row">
            <div class="col-lg-5 ps-lg-0 story-img-left-container" style="background-image:url(<?php the_field('section_1_image'); ?>)" alt="wine">
              <div class="story-img-container">
                <img class="img-fluid" src="<?php the_field('section_1_image'); ?>" alt="wine">
              </div>
            </div>
            <div class="col-lg-7">
              <p><?php the_field('section_1_description'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid" data-aos="fade-down" data-aos-duration="2000">
    <div class="row justify-content-end">
      <div class="col-lg-10">
        <div class="story salmon-bg">
          <div class="row justify-content-end">
            <div class="col-lg-7">
              <p><?php the_field('section_2_description'); ?></p>
            </div>
            <div class="col-lg-5 story-img-right-container" style="background-image:url(<?php the_field('section_2_image'); ?>)" alt="wine">
              <div class="story-img-container">
                <img class="img-fluid" src="<?php the_field('section_2_image'); ?>" alt="wine">
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid" data-aos="fade-down" data-aos-duration="2000">
    <div class="row">
      <div class="col-lg-10">
        <div class="story green-bg">

          <div class="row">
            <div class="col-lg-5 ps-lg-0 story-img-left-container" style="background-image:url(<?php the_field('section_3_image'); ?>)" alt="wine">
              <div class="story-img-container">
                <img class="img-fluid" src="<?php the_field('section_3_image'); ?>" alt="wine">
              </div>
            </div>
            <div class="col-lg-7">
              <p><?php the_field('section_3_description'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="donate-sec donate-sec-inner">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="donate-main text-center">
          <div class="donate-content text-center">
            <h2><?php the_field('donate_name', 'option'); ?></h2>
                        <h5><?php the_field('donate_title', 'option'); ?></h5>
                        <p><?php the_field('donate_description', 'option'); ?></p>
            <div class="custom-btn-2">
              <a href="<?php the_field('donate_button_link1', 'option'); ?>">
                                <button class="btnDefault">
                                    <span><?php the_field('donate_button', 'option'); ?></span>
                                    <span class="ps-2">
                                        <img loading="lazy" alt="Donate" src="<?php echo get_template_directory_uri(); ?>/assets/img/white-right-arrow.svg" class="right-arrow change-img1">
                                        <img loading="lazy" alt="Donate" src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg" class="right-arrow change-img2">
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

<?php require 'botton-news.php'; ?>

<?php get_footer();  ?>