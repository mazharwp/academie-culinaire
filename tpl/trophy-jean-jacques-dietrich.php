<?php
/*
Template Name: The Jean-Jacques Dietrich Trophy
*/
get_header();

require 'inner.php';

?>
<style>

   @media screen and (min-width: 769px) and (max-width: 2500px) { 
    .video-container {
                position: relative;
                width: 100%;
                left: -12px;
            }
    
    .finalists-video-sec1 iframe {
        height: 600px;
        }
   }

        .video-container iframe {
            width: 100%;
          
        }
        
        .overlay-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: auto;
            cursor: pointer;
           
    }

  section.page-banner.page-border.the-jean-sec {
    background-position: center;
    background-size: cover;
    height: 300px;
}
@media (min-width: 320px) and (max-width: 480px) {
    .background-rectangle {
        display: block;
    }
}
@media (min-width: 320px) and (max-width: 768px) {
.background-rectangle {
    height: auto;
    margin-bottom: 24px;
    margin-top: -50px;
}}

</style>

    <section class="the-jean-chef-sec">
        <div class="container-fluid">
            <div class="the-jean-chef">
                <div class="the-jean-chef-topdiv">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-6">
                            <div class="the-jean-chef-left">
                                <img src="<?php the_field('page_banner'); ?>" alt="About image" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-6 d-flex align-items-center">
                            <div class="the-jean-chef-right">
                                <h6><?php the_field('sub_title'); ?></h6>
                                <h3><?php the_field('page_title'); ?></h3>
                                <?php the_field('page_description'); ?>
                            </div>  
                        </div>
                    </div>
                </div>
     <section class="trophies-video section-gap pt-0">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="finalists-video-sec1 video-container">
                <?php if ( get_field( 'video_url' ) ): ?>
                    <!-- Video with thumbnail -->
                    <video id="youtube-video" controls muted poster="<?php the_field('you_tube_images'); ?>">
                        <source src="<?php the_field('video_url'); ?>" type="video/mp4">
    					<img src="<?php the_field('you_tube_images'); ?>" alt="Italian Trulli" class="overlay-image" onclick="playVideo()" />
                    </video>
    				
                    <?php elseif ( get_field( 'you_tube' ) ): ?>
    				<!-- YouTube iframe -->

                    <?php if ( get_field( 'you_tube' ) ): ?>
                    <div id="youtube-video">
                        <?php
                        // Get the YouTube URL from the custom field
                        $youtube_url = get_field('you_tube');
                
                        // Extract the YouTube video ID from the URL
                        parse_str( parse_url( $youtube_url, PHP_URL_QUERY ), $youtube_params );
                        $youtube_id = $youtube_params['v'];
                
                        // Create the embed URL
                        $embed_url = 'https://www.youtube.com/embed/' . esc_attr( $youtube_id );
                        ?>
                        <iframe width="560" height="315" src="<?php echo esc_url( $embed_url ); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                <?php endif; ?>


                    
                <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
     <script>
        function playVideo() {
            var iframe = document.getElementById('youtube-video');
            var overlayImage = document.querySelector('.overlay-image');
            overlayImage.style.display = 'none';
            var player = new YT.Player(iframe, {
                events: {
                    'onReady': function(event) {
                        event.target.playVideo();
                    }
                }
            });
        }
        
        // Load the YouTube API script
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    </script>
                <div class="the-jean-trip" style="background-image:linear-gradient(307deg, rgba(253, 254, 253, 0) -8.6%, rgb(237, 216, 226) 57.39%, rgb(237, 216, 226) 107.48%, rgb(237, 216, 226) 107.49%),url(<?php the_field('banner_images1'); ?>); ?>">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="the-jean-trip-txt">
                                <h5><?php the_field('guests_title'); ?></h5>
                                <p><?php the_field('guests_description'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="the-jean-competition-btn">
                    <div class="row">
                        <div class="col-lg-8 col-md-6 d-flex align-items-center">
                            <div class="jean-competition-btn-txt">
                                <h6><?php the_field('about_title'); ?></h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex align-items-center justify-content-end">
                            <div class="jean-competition-btn">
                                <div class="custom-btn-2">
                                    <a href="<?php the_field('button_link11'); ?>" target="_blank">
                                        <button class="btnDefault">
                                            <span><?php the_field('bottom_title11'); ?></span>
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


    <section class="trophy-passion-news the-jean-slider-sec">
        <div class="container-fluid">
            <div class="trophy-passion-news-text the-jean-slider-txt">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="passion-news-text">
                            <h4><?php the_field('slider_title'); ?></h4>
                        </div>
                    </div>
                </div>
            </div>

           <div class="passion-news-slider-sec">
            <div class="row">
                <div class="col-lg-12 px-0">
                    <div class="owl-carousel owl-theme passion-news-slider">
                        <?php if( have_rows('slider_banner') ): ?>
                            <?php while( have_rows('slider_banner') ): the_row(); ?>
                                <div class="item">
                                    <img src="<?php the_sub_field('slider_images2'); ?>" alt="slider" class="img-fluid">
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>

                </div>  
            </div>

           </div>

        </div>
    </section>

    <section class="the-jean-blog-sec">
        <div class="container-fluid">
            <div class="the-jean-blog">
                        <div class="row">
                            <?php if( have_rows('contest') ): ?>
                                <?php while( have_rows('contest') ): the_row(); ?>
                                    <div class="col-lg-4 col-md-6 col-sm-6 mb-3 d-flex align-items-stretch">
                                        <div class="card <?php the_sub_field('bg_class'); ?> ">
                                            <img src="<?php the_sub_field('images'); ?>" class="card-img-top" alt="Card Image">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title"><?php the_sub_field('title'); ?></h5>
                                                <p class="card-text mb-3"><?php the_sub_field('description'); ?></p>
                                                <div class="col-lg-12 mt-auto align-self-start">
                                                    <div class="custom-btn">
                                                        <a href="<?php the_sub_field('button_link'); ?>" class="border-animate"><?php the_sub_field('button'); ?> <img loading="lazy" alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg" class="right-arrow"></a>
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

    <div class="background-rectangle-container">
        <div class="container-fluid">
            <div class="background-rectangle"><br>
                <div class="col-lg-8 col-md-4 d-flex align-items-center justify-content-end">
                            <div class="jean-competition-btn">
                                <div class="custom-btn-2">
                                    <a href="<?php the_field('competition_button_link'); ?>" target="_blank">
                                        <button class="btnDefault">
                                            <span><?php the_field('competition_button1'); ?></span>
                                            <span class="ps-2">
<img src="<?php echo bloginfo('url');?>/wp-content/themes/academie-culinaire/assets/images/white_arrow.svg" class="right-arrow change-img1">
<img src="<?php echo bloginfo('url');?>/wp-content/themes/academie-culinaire/assets/images/black-arrow.svg" class="right-arrow change-img2">
                                            </span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>


  
    <section class="trophy-passion-banner-sec the-jean-banner-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 px-0">
                    <div class="owl-carousel owl-theme passion-news-slider2">
                        <?php if( have_rows('banner_slider_bottom') ): ?>
                            <?php while( have_rows('banner_slider_bottom') ): the_row(); ?>
                                <div class="item">
                                    <img src="<?php the_sub_field('bottom_slider_main'); ?>" alt="" class="img-fluid">
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
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