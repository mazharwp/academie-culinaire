<?php
/*
Template Name: PARTNER RESERVATION QUEBEC CITY 2023
*/
get_header();

require 'inner.php';

?>
<style>
section.page-banner.page-border {
    display: none;}

.guest-banner-sec {
    background: linear-gradient(90deg, #047422 0%, #047422 0.01%, rgba(153, 132, 115, 0.00) 100%) !important;
    width: 100%;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    height: 592px;
    left: -14px;
    position: relative;
}
.reservation-contact-info-left, .reservation-contact-info-right {
    width: auto;
    border: none;
}
</style>


    <section class="guest-reservation-sec" style="background-image:url(<?php the_field('page_banner'); ?>); ?>">
        <div class="container-fluid">
            <div class="guest-banner-sec">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="guest-banner-info">
                            <div class="custom-btn-2">
                                
                                     <button class="btnDefault" onclick="goBack()">
                                        <span class="pe-3">
                                           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-left-arrow.png" class="right-arrow change-img1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-left-green-arrow.png" class="right-arrow change-img2">
                                        </span>
                                        <span>Back</span>
                                    </button>
                               
                            </div>

                            <h5><?php the_field('date'); ?></h5>
                            <h1><?php the_field('page_title'); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


  <section class="logo-marquee racesWrapper">
    <div class="container-fluid">
        <div class="col-lg-12">
            <marquee id="marquee" behavior="scroll" direction="left" onmouseover="stopMarquee()"
                onmouseout="startMarquee()">
                <span><img loading="lazy" alt="image" src="<?php the_field('logo_image'); ?>" alt="ACF Logo" class="img-fluid"> <?php the_field('welcome_message'); ?></span>
                <span><img loading="lazy" alt="image" src="<?php the_field('logo_image'); ?>" alt="ACF Logo" class="img-fluid"> <?php the_field('welcome_message'); ?></span>
                <span><img loading="lazy" alt="image" src="<?php the_field('logo_image'); ?>" alt="ACF Logo" class="img-fluid"> <?php the_field('welcome_message'); ?></span>       
            </marquee>
        </div>
    </div>
</section>

<section class="guest-text-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="guest-reservation">
                        <h4><?php the_field('guests_title'); ?></h4>
                        <ul>
                            <?php the_field('guests_description'); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="final-vote-box-sec resistration-form-sec">
            <div class="vote-form-box resistration-form-box">
                      <div class="vote-form-items-left">
                        <img src="<?php the_field('left_banner'); ?>" alt="form-img" class="img-fluid">
                       </div>
                    <div class="vote-form-items-right">
                        <?php the_field('shortcode'); ?>
                    </div>
                </div>
    </section>

 

    <section class="donate-sec submit-donate-sec final-vote-donate-sec">
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


<?php get_footer();  ?>