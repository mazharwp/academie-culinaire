<?php
/*
Template Name: Member Area
*/

if ( is_user_logged_in() ) {
    $redirect_url = home_url('/member-access/');
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
.btnDefault::after {
    background: #fafafa00;}

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
                            <?php if($register==1){?>
                            <div class="thank-you-message contact-p" id="thank-you-message">
                                    <p><?php the_field('thank_you_message'); ?></p>
                                </div>
                            <?php }?>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="login-tab" data-bs-toggle="pill" href="#login" role="tab" aria-controls="login" aria-selected="true"><?php the_field('login_title1111'); ?></a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link thank-you-message" id="register-tab" data-bs-toggle="pill" href="#register" role="tab" aria-controls="register" aria-selected="false"><?php the_field('register_title1111'); ?></a>
                                </li>
                            </ul>
                           <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                                <div class="col-lg-6">
                                     <?php the_field('left_shortcode'); ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                <div class="col-lg-6">
                                    <?php the_field('right_shortcode'); ?>
                                </div>
                            </div>
                        </div>
                        
                     
                        <div class="col-lg-5"></div>
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

<?php get_footer(); ?>
