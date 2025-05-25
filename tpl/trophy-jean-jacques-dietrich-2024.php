<?php
/*
Template Name: TROPHY JEAN-JACQUES DIETRICH 2024
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

    iframe {
    height: 500px !important;
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


    

     <section class="guest-text-box">
        <div class="container">
            <div class="row">
                    <div class="col-lg-12">
                       <div class="finalists-video-sec">
                            <?php if ( get_field( 'video_url' ) ): ?>
                                <video class="videoPlayer" controls muted poster="<?php the_field('you_tube_images'); ?>">
                                    <source src="<?php the_field('video_url'); ?>" type="video/mp4">
                                </video>
                                <span class="play-btn">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Video_duotone.png" alt="video" class="img-fluid">
                                </span>
                            
                            <?php elseif ( get_field( 'you_tube' ) ): ?>
                                <?php
                                // Get the YouTube URL from the custom field
                                $youtube_url = get_field('you_tube');
                        
                                // Extract the YouTube video ID from the URL
                                parse_str( parse_url( $youtube_url, PHP_URL_QUERY ), $youtube_params );
                                $youtube_id = $youtube_params['v'];
                        
                                // Create the embed URL
                                $embed_url = 'https://www.youtube.com/embed/' . esc_attr( $youtube_id );
                                ?>
                                <iframe width="100%" height="100%" src="<?php echo esc_url( $embed_url ); ?>" frameborder="0" allowfullscreen></iframe>
                            
                            <?php elseif ( get_field( 'you_tube_images' ) ): ?>
                                <img src="<?php the_field('you_tube_images'); ?>" alt="YouTube image" class="single-images">
                            
                            <?php endif; ?>
                        </div>


                    </div>
            </div>
        </div>
    </section>


    <section class="trophy-passion-news finalists-sec-news">
        <div class="container-fluid">
            <div class="trophy-passion-news-text finalists-sec-news-text">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="passion-news-text">
                           
                            <h4><?php the_field('about_title'); ?></h4>
                            <p><?php the_field('schedule_description'); ?></p>
                        </div>
                          <section class="criteria-btn-group">
            <div class="container-fluid">
                <div class="criteria-btn-group-info">
                    <div class="criteria-btns">
                        <div class="custom-btn-2">
                            <a href="<?php the_field('button_link_1'); ?>" target= "_blank">
                                <button class="btnDefault">
                                    <span> <?php the_field('button_1'); ?></span>
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
                            <a href="<?php the_field('button_link_2'); ?>" target="_blank">
                                <button class="btnDefault">
                                    <span> <?php the_field('button_2'); ?> </span>
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
                            <a href="<?php the_field('button_link_3'); ?>" target="_blank">
                                <button class="btnDefault">
                                    <span> <?php the_field('button_3'); ?></span>
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

                    </div>
                </div>
            </div>        
        </div>
    </section>


      


    <section class="brand-logo-sec guest-reservation-logo">
        <div class="container">
            <div class="client-logo">
                <div class="client-logo-slider">
                    <div class="brand-logo-slider owl-carousel">
                       <?php if( have_rows('logo_banner', 'option') ): ?>
                    <?php while( have_rows('logo_banner', 'option') ): the_row(); ?>
                            <div class="item">
                                <div class="client-logo-box">
                                    <a href="<?php the_sub_field('logo_banner_url1'); ?>" target="_blank">
                                <img src="<?php the_sub_field('logo_image'); ?>" alt="Brand logo">
                                </a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                       
                    </div>                    
                </div>
            </div>
        </div>
    </section>


    <section class="guest-reservation-contact-sec">
        <div class="container-fluid">
            <div class="reservation-contact-info">
                <div class="row">
                    <!-- <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                        <div class="reservation-contact-info-left text-center">
                            <img src="<?php the_field('left_banner'); ?>" alt="left image" class="img-fluid">
                            <h6><?php the_field('left_title'); ?>!</h6>
                            <p> <?php the_field('left_description'); ?> </p>
                            <a href="<?php the_field('email_link'); ?>"><?php the_field('email'); ?></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-center">
                        <div class="reservation-contact-info-right text-center">
                            <img src="<?php the_field('right_banner'); ?>" alt="right image" class="img-fluid">
                            <h6><?php the_field('right_title'); ?></h6>
                            <p> <?php the_field('right_description'); ?></p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>


    <section class="donate-sec guest-donate">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="donate-main text-center francois-donate">
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

<script>
function goBack() {
    window.history.back();
}
</script>

<?php get_footer();  ?>