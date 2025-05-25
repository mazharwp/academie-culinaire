<?php
/*
Template Name: Enter the competition
*/
get_header();

require 'inner.php';

?>

<style>
    .btnDefault::after {
    background: #fafafa00;
}
div.wpforms-container-full .wpforms-form input {
    clear: both !important;
    margin-left: 0 !important;
    height: 60px !important;
}
</style>
    
  <!--competition-sec--==Section==content====-->

  <section class="competition-text-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="competition-text">
                        <h4><?php the_field('about_title'); ?></h4>
                        <ul>
                            <?php the_field('about_description'); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
  </section>


<section class="competition-banner-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 px-0">
                    <div class="owl-carousel owl-theme competition-slider">
                        <?php if( have_rows('banner_images') ): ?>
                        <?php while( have_rows('banner_images') ): the_row(); ?>
                            <div class="item">
                                <img src="<?php the_sub_field('slider_image'); ?>" alt="slider" class="img-fluid">
                            </div>
                       <?php endwhile; ?>
                       <?php endif; ?>
                    </div>                    
                </div>
            </div>
        </div>
</section>

  <!--===competition-sec==tab==section-->

<section class="competition-info-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="competition-info-text">
                    <p><?php the_field('section_1_description'); ?></p>
                    <div class="competition-info-boxs">
                        <div class="row g-3 d-flex justify-content-center">
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="competition-info-box">
                                    <p><?php the_field('english_title'); ?></p>
                                    <div class="custom-btn-2">
                                        <a href="<?php the_field('registration_file'); ?>" target="_blank">
                                            <button class="btnDefault competition-info-btn">
                                                <span><?php the_field('registration_form'); ?></span>
                                                <span class="ps-2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/black-arrow.svg" class="right-arrow change-img1">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/black-arrow.svg" class="right-arrow change-img2">
                                                </span>
                                            </button>
                                        </a>
                                    </div>
                                    <div class="custom-btn-2">
                                        <a href="<?php the_field('rule_file'); ?>" target="_blank">
                                            <button class="btnDefault">
                                                <span><?php the_field('rules_and_theme_2024'); ?></span>
                                                <span class="ps-2">
                                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/white_arrow.svg" class="right-arrow change-img1">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/black-arrow.svg" class="right-arrow change-img2">
                                                </span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="competition-info-box competition-info-box2">
                                    <p><?php the_field('france_title'); ?></p>
                                    <div class="custom-btn-2">
                                        <a href="<?php the_field('france_registration_file'); ?>" target="_blank">
                                            <button class="btnDefault competition-info-btn">
                                                <span><?php the_field('france_registration_form_2024'); ?></span>
                                                <span class="ps-2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/black-arrow.svg" class="right-arrow change-img1">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/black-arrow.svg" class="right-arrow change-img2">
                                                </span>
                                            </button>
                                        </a>
                                    </div>
                                    <div class="custom-btn-2">
                                        <a href="<?php the_field('france_rule_file'); ?>" target="_blank">
                                            <button class="btnDefault">
                                                <span><?php the_field('france_rules'); ?></span>
                                                <span class="ps-2">
                                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/white_arrow.svg" class="right-arrow change-img1">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/black-arrow.svg" class="right-arrow change-img2">
                                                </span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="competition-info-box competition-info-box3">
                                    <span class="competition-btn-text">
                                        <?php the_field('register_description'); ?>
                                    </span>
                                    <div class="custom-btn-2">
                                        <a href="<?php the_field('register_link'); ?>" target="_blank">
                                            <button class="btnDefault">
                                                <span><?php the_field('register_text'); ?></span>
                                                <span class="ps-2">
                                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/white_arrow.svg" class="right-arrow change-img1">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/black-arrow.svg" class="right-arrow change-img2">
                                                </span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="competition-schedule-sec">
    <div class="container-fluid">
       <div class="competition-schedule-text">
        <div class="row g-3">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="competition-schedule-left">
                    <h6><?php the_field('schedule_title'); ?></h6>
                    <h5><?php the_field('schedule_description'); ?></h5>
                    <div class="custom-btn-2">
                        <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight1" aria-controls="offcanvasRight">
                            <button class="btnDefault">
                                <span><?php the_field('contact_button'); ?></span>
                                <span class="ps-2">
                                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/white_arrow.svg" class="right-arrow change-img1">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/black-arrow.svg" class="right-arrow change-img2">
                                </span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-6 col-md-6 col-sm-6">
                <div class="competition-schedule-right">
                <img src="<?php the_field('right_banner'); ?>" alt="right banner" class="img-fluid">
                </div>
            </div>
        </div>
       </div>
    </div>
</section>
 
<div class="competition-contact-form">
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight1" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <i class="fa fa-times text-reset contact-Btn" data-bs-dismiss="offcanvas" aria-label="Close"></i>
        </div>
        <div class="offcanvas-body">
          <h5><?php the_field('left_top_section'); ?></h5>
          <p><?php the_field('left_top_content'); ?></p>
            <div class="registration-form">

                <?php the_field('shortcode'); ?>

            </div>

          </div>

          <div class="competition-contact-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_conatact.png" alt="logo" class="img-fluid">
            <h6><?php the_field('left_botton_section'); ?></h6>
            <p><?php the_field('left_bottom_content'); ?></p>
          </div>

        </div>
    </div>
</div>
    


<section class="exceptional-partners">
    <div class="container">
        <div class="exceptional-partners-text" style="background-image:url(<?php the_field('watermark_image'); ?>); background-repeat: no-repeat; background-position: center; overflow: hidden;">
            <div class="row">
                <div class="col-lg-12">
                    <h6><?php the_field('partner_title'); ?></h6>
                    <p><?php the_field('partner_description'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>



<?php require 'brand-logo.php'; ?>


    <section class="donate-sec competition-donate-sec">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="donate-main text-center">
                <div class="donate-content text-center mobile-view donateBox-here">
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