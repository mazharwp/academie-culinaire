<?php
/*
Template Name: About Page
*/
get_header();

require 'inner.php';

?>

<style>
.about-sub-text.about-page-banner-sign1 p {
    margin-bottom: 2rem;

}
</style>


<section class="about-us position-relative section-gap pb-0">
    <div class="container">
        <div class="row justify-content-lg-between justify-content-md-around">
            <div class="col-lg-2 col-md-4 col-5">
                <div class="about-sub-img">
                    <img loading="lazy" alt="image" src="<?php the_field('about_top_image'); ?>" class="img-fluid">
                </div>
                <div class="about-sub-text">
                    <p><?php the_field('about_title'); ?></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="about-content about-page-content">
                    <div class="desc">
                        <p><?php the_field('about_text'); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="about-sub-text about-page-banner-sign1">
                    <p><?php the_field('about_watermark_text'); ?></p>
                </div>

                <div class="about-banner about-page-banner">
                    <img loading="lazy" alt="image" data-srcset="<?php the_field('about_image'); ?>"
                        srcset="https://tribalrootsimports1.b-cdn.net/320x468.avif" class="img-fluid lazyimage">
                </div>
            </div>

        </div>
    </div>
    <div class="watermark-img">
        <img loading="lazy" alt="image" src="<?php the_field('about_watermark_image'); ?>" class="img-fluid">
    </div>
</section>

<section class="about-company section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-company-info">
                    <p><?php the_field('about_description'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-company-quotes">
    <div class="container">
        <div class="row company-quotes">
            <div class="col-lg-7 company-quotes-img"
                style="background-image:url(<?php the_field('about_section_1_image'); ?>); ?>"></div>
            <div class="col-lg-5 d-flex">
                <div class="quotes-content align-self-center">
                    <h2><?php the_field('about_section_1_title'); ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-company-quotes-2">
    <div class="container">
        <div class="row company-quotes">
            <div class="col-lg-5 d-flex">
                <div class="quotes-content align-self-center">
                    <h2><?php the_field('about_section_2_title'); ?></h2>
                </div>
            </div>
            <div class="col-lg-7 company-quotes-img"
                style="background-image:url(<?php the_field('about_section_2_image'); ?>); ?>"></div>
        </div>
    </div>
</section>


<section class="donate-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 donate-btm-gap">
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