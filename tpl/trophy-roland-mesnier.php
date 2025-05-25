<?php
/*
Template Name: Trophy Roland Mesnier
*/
get_header();

require 'inner.php';

?>
<style>
   
    .btnDefault::after {
    background: #fafafa00;
}
section.page-banner.page-border.trophy-roland-sec {
    background-size: 100% 100%;
}

div.wpforms-container-full .wpforms-form .wpforms-submit-spinner{
  margin: auto !important;
  padding: 30px 0 !important;
}

.trophy-roland-trip{
  min-height: 615px;
}
.trophy-roland-trip .the-jean-trip-txt p {
    font-size: 25px;
    line-height: 45px;
    margin-bottom: 30px;
}
.trophy-roland-trip .the-jean-trip-txt h6 {
    font-size: 22px;
    line-height: 30px;
}
</style>

       <section class="the-jean-chef-sec trophy-roland-sec-container">
        <div class="container-fluid">
            <div class="the-jean-chef">
                <div class="the-jean-chef-topdiv">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-6">
                            <div class="the-jean-chef-left">
                                <img src="<?php the_field('page_banner'); ?>" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-6 d-flex align-items-center">
                            <div class="the-jean-chef-right">
                                <h3><?php the_field('sub_title'); ?></h3>
                                <h6 class="pb-3"><?php the_field('page_title'); ?></h6>
                                <?php the_field('page_description'); ?>
                            </div>  
                        </div>
                    </div>
                </div>

                <div class="the-jean-trip trophy-roland-trip" style="background-image:linear-gradient(307deg, rgba(253, 254, 253, 0) -8.6%, rgb(237, 216, 226) 57.39%, rgb(237, 216, 226) 107.48%, rgb(237, 216, 226) 107.49%),url(<?php the_field('banner_images1'); ?>); ?>">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="the-jean-trip-txt">
                                <p><?php the_field('guests_description'); ?></p>
                                <h6><?php the_field('guests_title'); ?></h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="trophy-roland-chef-txt">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trophy-roland-chef-txt-info">
                                <h3><?php the_field('section_title2'); ?></h3>
                                <p><?php the_field('section_description2'); ?></p>
                                <h6><?php the_field('section_short_description2'); ?></h6>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="trophy-roland-competition">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 d-flex align-items-center">
                            <div class="trophy-roland-competition-left">
                                <h4><?php the_field('description3'); ?></h4>
                                
                                <?php
                                    // Get the ACF date field value
                                    $event_date = get_field('event_date');
                                    
                                    // Check if the date is set
                                    if( $event_date ) {
                                        // Convert the date to a timestamp
                                        $event_timestamp = strtotime($event_date);
                                        
                                        // Get the current date timestamp
                                        $current_timestamp = current_time('timestamp');
                                    
                                        // Calculate the difference in days
                                        $days_until_event = ceil(($event_timestamp - $current_timestamp) / DAY_IN_SECONDS);
                                    
                                        // Display the message
                                        if ($days_until_event > 0) {
                                            ?>
                                            <h3><?php echo $days_until_event; ?> <span>days</span></h3>
                                            <?php
                                        } elseif ($days_until_event === 0) {
                                            echo '<h3>The event is today!</h3>';
                                        } else {
                                            ?>
                                            <h3>Closed</h3>
                                            <?php
                                        }
                                    }

                                    ?>
                            </div>
                        </div>


                        <div class="col-lg-7 col-md-6">
                            <div class="trophy-roland-competition-right">
                                <img src="<?php the_field('right_image'); ?>" alt="right_images">
                            </div>
                        </div>
                    </div>
                </section>


                <div class="the-jean-competition-btn trophy-roland-competition-btn">
                    <div class="row">
                        <div class="col-lg-8 col-md-6 d-flex align-items-center">
                            <div class="jean-competition-btn-txt">
                                <h6><?php the_field('about_title'); ?></h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex align-items-center justify-content-end">
                            <div class="jean-competition-btn">
                                <div class="custom-btn-2">
                                    <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight">
                                        <button class="btnDefault">
                                            <span><?php the_field('bottom_title'); ?></span>
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
    </section>


    <div class="competition-contact-form wp-form-cometition">
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight2" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <i class="fa fa-times text-reset contact-Btn" data-bs-dismiss="offcanvas" aria-label="Close"></i>
        </div>
        <div class="offcanvas-body">
          <h5><?php the_field('register_and_download'); ?></h5>
          <p><?php the_field('register_and_download_description'); ?></p>
            <div class="registration-form">

                <?php the_field('left_shortcode'); ?>
                <p><?php the_field('register_and_download_description_bottom'); ?></p>

            </div>

        </div>

          <div class="competition-contact-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_conatact.png" alt="logo" class="img-fluid">
            <h6><?php the_field('sidebar_title'); ?></h6>
            <p><?php the_field('sidebar_description'); ?></p>
          </div>

    </div>
</div>


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
          <h5><?php the_field('sidebar_contact'); ?></h5>
          <p><?php the_field('sidebar_contact_description'); ?></p>
            <div class="registration-form">

                <?php the_field('right_shortcode'); ?>

            </div>

        </div>

          <div class="competition-contact-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_conatact.png" alt="logo" class="img-fluid">
            <h6><?php the_field('sidebar_contact_bottom'); ?></h6>
            <p><?php the_field('sidebar_contact_description_bottom'); ?></p>
          </div>

    </div>
</div>


    
    <section class="exceptional-partners">
        <div class="container">
            <div class="exceptional-partners-text">
                <div class="row">
                    <div class="col-lg-12">
                        <h6><?php the_field('partners_title'); ?></h6>
                        <p><?php the_field('partners_description'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>



 <?php require 'brand-logo.php'; ?>

    <section class="donate-sec trophy-passion-donate">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="donate-main text-center passion-donate">
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