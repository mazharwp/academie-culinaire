<?php
/*
Template Name: Jean-Jacques Dietrich Trophy / Final 2022
*/
get_header();

require 'inner.php';

?>
<style>
   
    .btnDefault::after {
    background: #fafafa00;
}
.wpforms-field-row.wpforms-field-large {
    display: flex;
    gap: 0px;
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

                <div class="the-jean-trip trophy-roland-trip" style="background-image:linear-gradient(307deg, rgba(253, 254, 253, 0) -8.6%, rgb(237, 216, 226) 57.39%, rgb(237, 216, 226) 107.48%, rgb(237, 216, 226) 107.49%),url(<?php the_field('banner_images111'); ?>); ?>">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="the-jean-trip-txt">
                                <h3><?php the_field('guests_title'); ?></h3>
                                <p><?php the_field('guests_description'); ?></p>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="trophy-roland-chef-txt">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php if (have_rows('the_selections')): ?>
                                <?php while (have_rows('the_selections')): the_row(); ?>
                                    <div class="trophy-roland-chef-txt-info">
                                        <?php if (get_sub_field('title')): ?>
                                            <h3><?php the_sub_field('title'); ?></h3>
                                        <?php endif; ?>
                                        
                                        <?php if (get_sub_field('description')): ?>
                                            <p><?php the_sub_field('description'); ?></p>
                                        <?php endif; ?>
                                        
                                        
                                        
                                        <?php if (get_sub_field('short_description')): ?>
                                            <p><?php the_sub_field('short_description'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>

        

                <div class="the-jean-trip trophy-roland-trip" style="background-image:linear-gradient(307deg, rgba(253, 254, 253, 0) -8.6%, rgb(237, 216, 226) 57.39%, rgb(237, 216, 226) 107.48%, rgb(237, 216, 226) 107.49%),url(<?php the_field('banner_images1'); ?>); ?>">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="the-jean-trip-txt">
                                <h3><?php the_field('title31'); ?></h3>
                                <p><?php the_field('description31'); ?></p>
                                
                            </div>
                        </div>
                    </div>
                </div>


                 <div class="trophy-roland-chef-txt">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trophy-roland-chef-txt-info">
                                <h3><?php the_field('next_title'); ?></h3>
                                <p><?php the_field('next_description'); ?></p>
                                
                            </div>

                            
                        </div>
                    </div>
                </div>


                <section class="criteria-btn-group">
            <div class="container-fluid">
                <div class="criteria-btn-group-info">
                    <div class="criteria-btns">
                        <div class="custom-btn-2">
                            <a href="<?php the_field('rule_link'); ?>" target= "_blank">
                                <button class="btnDefault">
                                    <span><?php the_field('rule_button'); ?></span>
                                    <span class="ps-2">
                                       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/white_arrow.svg" class="right-arrow change-img1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/black-arrow.svg" class="right-arrow change-img2">
                                    </span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="criteria-btns">
                        <div class="custom-btn-2">
                             <a href="<?php the_field('applye_link'); ?>" target= "_blank">
                                <button class="btnDefault">
                                    <span><?php the_field('apply_button'); ?></span>
                                    <span class="ps-2">
                                       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/white_arrow.svg" class="right-arrow change-img1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/black-arrow.svg" class="right-arrow change-img2">
                                    </span>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="criteria-btns">
                        <div class="custom-btn-2">
                             <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight">
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
            </div>
     </section>


     <div class="competition-contact-form wp-form-cometition">
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight2" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <i class="fa fa-times text-reset contact-Btn" data-bs-dismiss="offcanvas" aria-label="Close"></i>
        </div>
        <div class="offcanvas-body">
          <h5><?php the_field('sidebar_title'); ?></h5>
          <p><?php the_field('sidebar_description'); ?></p>
            <div class="registration-form">

                <?php the_field('shortcode'); ?>
                <p><?php the_field('sidebar_sub_title'); ?></p>

            </div>

        </div>

          <div class="competition-contact-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_conatact.png" alt="logo" class="img-fluid">
            <h6><?php the_field('side_bar_bottom_title'); ?></h6>
            <p><?php the_field('side_bar_bottom_description'); ?></p>
          </div>

    </div>
</div>


    <section class="the-jean-chef-sec trophy-roland-sec-container">
          <div class="container-fluid">
            <div class="the-jean-chef">
                <div class="the-jean-chef-topdiv">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-6">
                            <div class="the-jean-chef-left">
                                <img src="<?php the_field('trophy_banner'); ?>" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-6 d-flex align-items-center">
                            <div class="the-jean-chef-right">
                                <h5><?php the_field('trophy_title'); ?></h5>
                                <!-- <h6 class="pb-3"><?php the_field('page_title'); ?></h6> -->
                                <?php the_field('trophy_description'); ?>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </section>

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



         
            <section div class="the-jean-competition-btn trophy-roland-competition-btn">
                        <div class="container-fluid">
                           
                            <div class="row g-3">
                                <div class="col-lg-8 col-md-6 d-flex align-items-center">
                                    <div class="jean-competition-btn-txt">
                                        <h6><?php the_field('about_title'); ?></h6>
                                    </div>
                                </div>

                               
                                 <div class="col-lg-4 col-md-6 d-flex align-items-center justify-content-end">
                                    <div class="jean-competition-btn">
                                         <div class="custom-btn-2"> 
                                            <div class="custom-btn-2">
                                            <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight1" aria-controls="offcanvasRight">
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
                    </section>

                    <div class="competition-contact-form">

                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight1" aria-labelledby="offcanvasRightLabel">
                            <div class="offcanvas-header">
                                <i class="fa fa-times text-reset contact-Btn" data-bs-dismiss="offcanvas" aria-label="Close"></i>
                            </div>
                            <div class="offcanvas-body">
                                <h5><?php the_field('contact_us1'); ?></h5>
                                <p><?php the_field('thanks_you1'); ?></p>
                                <div class="registration-form">

                                    <?php the_field('shortcode_form'); ?>

                                </div>

                              </div>

                              <div class="competition-contact-logo">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_conatact.png" alt="logo" class="img-fluid">
                                    <h6><?php the_field('address11'); ?></h6>
                                    <p><?php the_field('address_description'); ?></p>
                              </div>

                        </div>
                    </div>

                      

               
             

            </div>
        </div>
    </section>


    
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