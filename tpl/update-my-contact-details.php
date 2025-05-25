<?php
/*
Template Name: Update My Contact Details
*/

if (!is_user_logged_in() ) {
   $redirect_url = home_url('/member-access/my-member-area/');
    wp_redirect($redirect_url);
    exit();
} 

get_header(); 

require 'inner.php';
?>


<style>
.forminator-ui {
    display: block !important;
}
.mdhide p {
    display: none;
}
@media screen and (min-width: 769px) and (max-width: 2500px) { 
div.wpforms-container-full .wpforms-form .wpforms-submit-container {
padding-bottom: 10px !important;
}

@media screen and (min-width: 320px) and (max-width: 768px) { 
    div.wpforms-container-full .wpforms-form .wpforms-submit-container {
padding-bottom: 10px !important;
    }
.donate-sec-inner {
        margin-top: 280px !important;
    }
   div.wpforms-container-full .wpforms-form .wpforms-pagebreak-left .wpforms-page-button {
        width: 100% !important;
}
button#wpforms-submit-824 {
    width: 100%;} 
}
}

    
.mt-5 {
    margin-top: 0rem !important;
}
div.wpforms-container-full {
    margin: 10px;
    background-color: #fff !important;
    padding: 0 30px 0 30px !important;
}
button#wpforms-submit-824 {
    border-radius: 10px;
    background: #047422;
    min-height: 54px;
    padding: 10px 30px 10px 40px;
    color: #FFF;
    font-family: "Red Hat Text", sans-serif;
    font-size: 18px;
    font-style: normal;
    font-weight: 600;
}
.wpforms-field-row.wpforms-field-large {
   gap: 0px;
}
.donate-main {
    top: -7rem;
}

</style>
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

<section class="contact-form-sec">
    <div class="container-fluid">
        <div class="row justify-content-end">
            <div class="col-lg-10 ">
                <div class="contact-form-image" style="background-image:url(<?php the_field('left_banner'); ?>); "></div>

                    <div class="form-container-main">
                        <div class="row">
                                 
                            <div class="col-lg-12">
                              
                                <div class="col-lg-6 mt-5 mdhide">
                                    <?php 
                                        // Display the default shortcode field
                                        the_field('shortcode');
                                        
                                        // Check if the user is logged in
                                        if ( is_user_logged_in() ) {
                                            // Display the shortcode for logged-in users
                                            the_field('user_logged_in_shortcode'); 
                                        }
                                    ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>




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
                                    <span><?php the_field('donate_button'); ?></span>
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

<?php get_footer(); ?>
