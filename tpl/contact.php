<?php
/*
Template Name: Contact
*/
get_header();

require 'inner.php';
?>

<style>
input {
    width: 100%;
}
.form-container textarea {
    width: 100%;}
    
div#wpforms-19835-field_2-container {
    margin-top: 15px;
}
div#wpforms-19835-field_1-container {
    margin-top: 15px;
}
div#wpforms-19838-field_1-container {
    margin-top: 15px;
}
div#wpforms-19838-field_2-container {
    margin-top: 15px;
}
.btnDefault::after {
    background: #fafafa00;}
button#wpforms-submit-19835:hover {
    color: #167446 !important;
    background: transparent !important;
    border: 2px solid #167446 !important;
}
button#wpforms-submit-19838:hover {
    color: #167446 !important;
    background: transparent !important;
    border: 2px solid #167446 !important;
}
.form-container {
    margin-top: 30px;
}
.contus {
    padding-bottom: 15px;
}
</style>


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
            <div class="row justify-content-end">
                <div class="col-lg-10 ">
                    <div class="contact-form-image" style="background-image:url(<?php the_field('left_banner'); ?>); "></div>
					
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home1-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home1" type="button" role="tab" aria-controls="pills-home1"
                                aria-selected="true">
                                <div class="white-bg-contact">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11"
                                        fill="none">
                                        <path
                                            d="M13.1875 0.5H1.8125C1.08789 0.5 0.5 1.06612 0.5 1.76389V9.34722C0.5 10.045 1.08789 10.6111 1.8125 10.6111H13.1875C13.9121 10.6111 14.5 10.045 14.5 9.34722V1.76389C14.5 1.06612 13.9121 0.5 13.1875 0.5ZM13.1875 1.76389V2.83819C12.575 3.32005 11.5961 4.06785 9.50703 5.64245C9.04766 5.99002 8.13438 6.82998 7.5 6.81944C6.86562 6.82998 5.95234 5.99002 5.49297 5.64245C3.40391 4.06785 2.425 3.32005 1.8125 2.83819V1.76389H13.1875ZM1.8125 9.34722V4.46019C2.43867 4.94204 3.32734 5.61612 4.68086 6.63513C5.27969 7.08802 6.32422 8.0886 7.5 8.08333C8.66758 8.0886 9.70117 7.10382 10.3191 6.63776C11.6727 5.61612 12.5613 4.94204 13.1875 4.46019V9.34722H1.8125Z"
                                            fill="#047422" />
                                    </svg>
                                </div>
                                <p><?php the_field('contact_title'); ?></p>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile1-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile1" type="button" role="tab" aria-controls="pills-profile1"
                                aria-selected="false">
                                <div class="green-bg-contact">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="15" viewBox="0 0 10 15"
                                        fill="none">
                                        <path
                                            d="M1.0707 9.26416C1.0707 7.93868 2.14522 6.86416 3.4707 6.86416H6.52972C7.85521 6.86416 8.92972 7.93868 8.92972 9.26416V13.8996H1.0707V9.26416Z"
                                            stroke="white" stroke-width="1.2" />
                                        <circle cx="5.00027" cy="2.55887" r="2.05887" fill="white" />
                                    </svg>
                                </div>
                                <p><?php the_field('member_title'); ?></p>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home1" role="tabpanel"
                            aria-labelledby="pills-home1-tab">
                            <div class="form-container-main">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <form method="post" action="<?php echo esc_url(get_permalink()); ?>" class="form-container"> 
                                               <?php the_field('left_shortcode'); ?> 
                                        </form>
                                    </div>
                                    <div class="col-lg-5"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile1" role="tabpanel"
                            aria-labelledby="pills-profile1-tab">
                            <div class="form-container-main">
                                <div class="row">
                                    <div class="col-lg-7">
										<form method="post" action="<?php echo esc_url(get_permalink()); ?>" class="form-container"> 
                                            <?php the_field('right_shortcode'); ?>
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