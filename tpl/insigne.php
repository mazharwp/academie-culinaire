<?php
/*
Template Name: Insigne
*/
get_header();

require 'inner.php';
?>
<style>
    section.insigne-main-img {
    background-size: cover;
}
</style>


    <!-- <section class="insigne-banner page-banner page-border" style="background-image:url(<?php the_field('banner_image'); ?>); ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-title">
                        <h2><?php the_field('title'); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- 2 -->

    <?php if (have_rows('inner_section')): ?>
    <?php while (have_rows('inner_section')): the_row(); ?>
        <section class="insigne-content-sec">
            <div class="container-fluid">
                <div class="row insigne-gap-col">
                    <div class="col-lg-4">
                        <div class="insig-bg">
                            <img class="img-fluid" src="<?php the_sub_field('left_side'); ?>" alt="insigne">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="insigne-text">
                            <?php the_sub_field('description'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="insigne-main-img" style="background-image:url(<?php the_sub_field('banner_image'); ?>); "></section>
    <?php endwhile; ?>
<?php endif; ?>


    <section class="donate-sec donate-sec-inner donate-insigne-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="donate-main donate-main-recipe text-center">
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

<?php require 'botton-news.php'; ?>

<?php get_footer();  ?>