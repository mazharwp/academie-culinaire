<?php
/*
Template Name: Registration Form
*/
get_header();

require 'inner.php';
?>


    <!-- 2 -->
    <section class="contact-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-p">
                        <p><?php the_field('description'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3 -->
    <section class="contact-form-sec">
        <div class="container-fluid">
            <div class="row justify-content-around">
                <div class="col-lg-10 ">
                    <div class="contact-form-image" style="background-image:url(<?php the_field('left_banner'); ?>); "></div>
                   
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="form-container-main">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <form method="post" action="<?php echo esc_url(get_permalink()); ?>" class="form-container"> 
                                               <?php the_field('shortcode'); ?>
                                        </form>
                                    </div>
                                    <div class="col-lg-5"></div>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
    </section>

    <!-- 3 -->
    <section class="donate-sec donate-detail-sec donate-contact-sec donate-sec-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="donate-main donate-main-award text-center donate-main-contact">
                        <div class="donate-content donate-content-recipe text-center mobile-view">
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