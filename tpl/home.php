<?php
/*
Template Name: Home Page
*/
get_header(); 
?>


<section class="banner">
    <div class="banner-slider owl-carousel owl-theme">
        <?php if( have_rows('banner_images') ): ?>
        <?php while( have_rows('banner_images') ): the_row(); ?>
        <div class="item">
            <div class="banner-img">
                <img src="<?php the_sub_field('slider_image'); ?>" alt="slider images" />
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<!-- <section class="logo-marquee racesWrapper">
    <div class="container-fluid">
        <div class="col-lg-12">
            <marquee>
                <div class="banner-bottom races">
                    <img src="<?php the_field('logo_image'); ?>" alt="Logo" class="img-fluid">
                    <p><?php the_field('welcome_message'); ?></p>
                </div>
            </marquee>
        </div>
    </div>
</section> -->

<!-- <section class="logo-marquee racesWrapper">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="marquee-container">
                <marquee id="marquee" class="marquee-content" behavior="scroll" direction="left"
                    onmouseover="stopMarquee()" onmouseout="startMarquee()">
                    <span><img loading="lazy" alt="Academie Culinaire De FrAnce USA" src="<?php the_field('logo_image'); ?>" alt="Logo"
                            class="img-fluid"> <?php the_field('welcome_message'); ?></span>
                    <span><img loading="lazy" alt="Academie Culinaire De FrAnce USA" src="<?php the_field('logo_image'); ?>" alt="Logo"
                            class="img-fluid"> <?php the_field('welcome_message'); ?></span>
                    <span><img loading="lazy" alt="Academie Culinaire De FrAnce USA" src="<?php the_field('logo_image'); ?>" alt="Logo"
                            class="img-fluid"><?php the_field('welcome_message'); ?></span>
                </marquee>
            </div>
        </div>
    </div>
</section> -->


<div class="marquee">
    <div class="track">
        <div class="content" id="marquee"><span><img loading="lazy" alt="Academie Culinaire De FrAnce USA" src="<?php the_field('logo_image'); ?>"
                    alt="Logo" class="img-fluid">
                <?php the_field('welcome_message'); ?></span> <span><img loading="lazy" alt="Academie Culinaire De FrAnce USA"
                    src="<?php the_field('logo_image'); ?>" alt="Logo" class="img-fluid">
                <?php the_field('welcome_message'); ?></span> <span><img loading="lazy" alt="Academie Culinaire De FrAnce USA"
                    src="<?php the_field('logo_image'); ?>" alt="Logo" class="img-fluid">
                <?php the_field('welcome_message'); ?></span> <span><img loading="lazy" alt="Academie Culinaire De FrAnce USA"
                    src="<?php the_field('logo_image'); ?>" alt="Logo" class="img-fluid">
                <?php the_field('welcome_message'); ?></span> </div>
    </div>
</div>

<section class="home-about-us position-relative custom-border-btm">
    <div class="container">
        <div class="row justify-content-between flex-wrap-reverse">
            <div class="col-lg-6 col-md-7 col-12 ">
                <div class="about-content textsec">
                    <div class="title about-textsec">
                        <h2><?php the_field('about_title'); ?></h2>
                    </div>
                    <div class="desc">
                        <p><?php the_field('about_us_description'); ?></p>
                    </div>
                    <div class="custom-btn">
                        <a href="<?php echo esc_url(get_field('about_read_more_link')); ?>"
                            class="border-animate"><?php the_field('about_read_more_text'); ?> <img loading="lazy"
                                alt="Academie Culinaire De FrAnce USA" src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg"
                                class="right-arrow" alt="right-arrow"></a>

                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-5 col-12 mb-lg-0 mb-4">
                <div class="about-banner banner-image card-2">
                    <img loading="lazy" src="<?php the_field('about_banner_image'); ?>" class="img-fluid" alt="About Us">
                </div>
            </div>

        </div>
    </div>
    <div class="watermark-img ">
        <img loading="lazy" src="<?php the_field('watermark_image'); ?>" class="img-fluid star" alt="watermark">
    </div>
</section>



<section class="chefs-recipes chefsRecipe custom-border-btm">
    <div class="container">
        <div class="row align-items-center recipe-topContent">
            <div class="col-lg-5 col-md-11">
                <div class="recipes-content">
                    <div class="title textsec our-textsec">
                        <h2><?php the_field('recipes_section_title'); ?></h2>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-11">
                <div class="recipes-content">
                    <div class="sub-title">
                        <p class="text-p"><?php the_field('recipes_section_description'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="chefs-recipes-inner hasWidget">
        <div class="newsCollection chefs-recipes-slider  owl-carousel">
            <?php if( have_rows('recipe_items') ): ?>
            <?php while( have_rows('recipe_items') ): the_row(); ?>
            <div class="item">
                <div class="chefs-recipes-card">
                    <div class="recipes-card-img">
                        <img loading="lazy" data-srcset="<?php the_sub_field('recipe_image'); ?>"
                            srcset="https://tribalrootsimports1.b-cdn.net/320x468.avif"
                            class="inner-img img-fluid lazyimage" alt="Chefs Recipes">
                    </div>
                    <div class="card-text">
                        <h3><?php the_sub_field('recipe_title'); ?></h3>

                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="custom-btn">
                    <a href="<?php the_field('recipes_read_link'); ?>"
                        class="border-animate"><?php the_field('recipe_read_more'); ?> <img loading="lazy" 
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg"
                            class="right-arrow" alt="right-arrow"></a>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="quote-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="quote-inner">
                    <div class="quote-bg-img"
                        style="background-image:url(<?php the_field('defend_watermark_image'); ?>);"></div>
                    <div class="quote-text" <?php echo esc_html(get_field('defend_description')); ?>>
                        <p id="quote"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    var string = '<?php echo esc_html(get_field('defend_description')); ?>';
    </script>
</section>


<section class="board-members">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="member-top-content custom-border-btm" id="mobile-view">
                    <div class="title text-p">
                        <h2><?php the_field('board_members_title'); ?></h2>
                    </div>
                </div>
            </div>
            <div class="board-members-slider">
                <div class="board-member-slider owl-carousel owl-theme">
                    <?php if( have_rows('board_members') ): ?>
                    <?php while( have_rows('board_members') ): the_row(); ?>
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-5 col-md-6 pe-0">
                                <div class="member-img">
                                    <div class="member-img">
                                        <img loading="lazy" data-srcset="<?php the_sub_field('member_image'); ?>" alt="Member"
                                            srcset="https://tribalrootsimports1.b-cdn.net/320x468.avif"
                                            class="img-fluid lazyimage">
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 member-content-bg ps-0 pe-0">
                                <div class="member-top-content custom-border-btm" id="desktop-view">
                                    <div class="title text-p">
                                        <h2><?php the_field('board_members_title'); ?></h2>
                                    </div>
                                </div>
                                <div class="member-content-main">

                                    <div class="member-content">
										<div class="title">
                                            <h3><?php the_sub_field('member_position'); ?></h3>
                                        </div>
                                        <div class="sub-title">
                                            <p><?php the_sub_field('member_name'); ?></p>
                                        </div>
                                        
                                        <div class="board-member-btn">
                                            <a href="<?php the_sub_field('bio_link'); ?>">
                                                <button class="btnDefault" aria-label="Right Arrow">
                                                    <span><?php the_sub_field('bio_text'); ?></span>
                                                    <span class="ps-2">
                                                        <img loading="lazy" alt="Academie Culinaire De FrAnce USA"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/img/white-right-arrow.svg"
                                                            class="right-arrow change-img1">
                                                        <img loading="lazy" alt="Academie Culinaire De FrAnce USA"
                                                            src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg"
                                                            class="right-arrow change-img2">
                                                    </span>
                                                </button>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-12 text-end">
                                        <div class="custom-btn">
                                            <a href="<?php the_field('bm_see_all_recipes_link'); ?>"
                                                class="border-animate"><?php the_field('bm_see_all_recipes_text'); ?>
                                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg"
                                                    class="right-arrow" alt="right-arrow"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-partner ourPartner custom-border-btm">
    <div class="parent">
        <div id="rightBannerimg" class="img hand"
            style="background-image:url(<?php the_field('partner_image'); ?>); ?>"></div>
    </div>
    <div class="acf-text">
        <span><?php the_field('partner_watermark_text'); ?></span>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-lg-start text-center">
                <div class="partner-content textsec">
                    <div class="title ourpatner-textsec">
                        <h2><?php the_field('partner_name'); ?></h2>
                    </div>
                    <div class="desc">
                        <p><?php the_field('partner_content'); ?></p>
                    </div>
                </div>
                <div class="custom-btn-2">
                    <a href="<?php the_field('partner_link'); ?>">
                        <button class="btnDefault" aria-label="Follow Us on LinkedIn">
                            <span><?php the_field('button_title111'); ?></span>
                            <span class="ps-2">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/white-right-arrow.svg"
                                    class="right-arrow change-img1" alt="right-arrow">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg"
                                    class="right-arrow change-img2" alt="right-arrow">
                            </span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require 'home-brand-logo.php'; ?>


<section class="opportunity opportopportunitySec custom-border-btm ">
    <div class="container">
        <div class="row align-items-center opportunity-topContent">
            <div class="col-lg-5 col-md-5">
                <div class="opportunity-content">
                    <div class="title textsec opportunity-textsec">
                        <h2><?php the_field('opportunity_title'); ?></h2>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-7">
                <div class="opportunity-follow">
                    <div class="follow-btn">
                        <a href="<?php the_field('follow_us_on_linkedin'); ?>"><button aria-label="Follow Us on LinkedIn"> <img
                                    loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/linkdin.png"
                                    class="img-fluid pe-2" alt="linkdin-icon"><?php the_field('follow_us_on_linkedin_title'); ?></button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="opportunity-sub-title">
            <div class="row">
                <div class="col-lg-12">
                    <p><?php the_field('opportunity_description'); ?></p>
                </div>
            </div>
        </div>

        <div class="opportunity-main">
            <div class="row">
                <?php if( have_rows('linkedin_feeds') ): ?>
                <?php while( have_rows('linkedin_feeds') ): the_row(); ?>
                <div class="col-lg-4">



                    <div class="opportunity-inner">
                        <div class="opportunity-card">
                            <div class="blog-img">
                                <a href="<?php echo get_sub_field('read_more'); ?>" target="_blank">
                                    <img loading="lazy" src="<?php the_sub_field('linkedin_image'); ?>" class="img-fluid"
                                        alt="<?php the_sub_field('linkedin_title'); ?>"> </a>
                            </div>

                            <div class="blog-content">
                                <div class="blog-title">
                                    <h2><?php the_sub_field('linkedin_title'); ?></h2>
                                </div>
                                <div class="blog-desc">
                                    <p><?php echo wp_trim_words( get_sub_field('linkedin_description'), 7 ); ?></p>
                                    <div class="blog-btn text-end">
                                        <div class="custom-btn">
                                            <a href="<?php the_sub_field('read_more'); ?>" target="_blank"
                                                class="border-animate"><?php the_field('button_title111'); ?>
                                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg"
                                                    class="right-arrow" alt="Right Arrow"></a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>

            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="custom-btn">
                        <a href="<?php bloginfo('url')?>/opportunity/" class="border-animate"><?php the_field('opportunity_button111'); ?>
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg"
                                class="right-arrow" alt="All Opportunity image"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require 'botton-news.php'; ?>

<?php get_footer();  ?>