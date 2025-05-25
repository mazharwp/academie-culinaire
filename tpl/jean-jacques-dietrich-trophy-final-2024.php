<?php
/*
Template Name: Jean-Jacques Dietrich Trophy / Final 2024
*/
get_header();

require 'inner.php';

?>

<style>
    iframe {
    height: 500px !important;
}
</style>

 <section class="the-final-winner-sec">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col-lg-12 d-flex justify-content-center">
                                  <div class="the-final-winner">
                                      <div class="the-final-winner-img">
                                          <img src="<?php the_field('page_banner'); ?>" alt="banner" class="img-fluid">
                                      </div>
                                      <div class="the-final-winner-txt">
                                          <h5><?php the_field('sub_title'); ?> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/winner-cup.png" alt="" class="img-fluid"></h5>
                                          <h4><?php the_field('page_title'); ?></h4>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
  </section>

 


  
   <section class="finalists-sec">
              <div class="container-fluid">
                  <div class="finalists-sec-container">
                      <h4><?php the_field('finalists-title'); ?></h4>
                      <div class="row">
                            <?php if( have_rows('contest') ): ?>
                             <?php while( have_rows('contest') ): the_row(); ?>
                          <div class="col-lg-6 col-md-6">
                             
                              <div class="finalists-sec-box">
                                 <div class="row">
                                      
                                          <div class="col-lg-6">
                                             <div class="finalists-sec-box-img">
                                                  <?php $image = get_sub_field('images'); ?>
                                                    <img loading="lazy"src="<?php echo $image['url']; ?>" class="img-fluid" alt="<?php echo $image['alt']; ?>">
                                              </div>
                                          </div>
                                          <div class="col-lg-6">
                                              <div class="finalists-sec-box-txt">
                                                  <h6><?php the_sub_field('title'); ?></h6>
                                                  <p><?php the_sub_field('description'); ?></p>
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
      </section>

      <section class="finalists-Vsec">
        <div class="container-fluid">
            <div class="finalists-video-contaier">
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
                            $youtube_id = isset($youtube_params['v']) ? $youtube_params['v'] : '';
                    
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
        </div>
      </section>


  </div>


    


    <section class="trophy-passion-news finalists-sec-news">
        <div class="container-fluid">
            <div class="trophy-passion-news-text finalists-sec-news-text">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="passion-news-text">
                            <h6><?php the_field('slider_top_title'); ?></h6>
                            <h4><?php the_field('slider_subtitle'); ?></h4>
                            <p><?php the_field('slider_description'); ?></p>
                        </div>
                    </div>
                </div>
            </div>

          <div class="passion-news-slider-sec">
            <div class="row">
                <div class="col-lg-12 px-0">
                    <div class="owl-carousel owl-theme passion-news-slider owl-loaded owl-drag">
                         <?php if( have_rows('banner_slider_bottom') ): ?>
                            <?php while( have_rows('banner_slider_bottom') ): the_row(); ?>
                                <div class="item">
                                    <img src="<?php the_sub_field('bottom_slider_main'); ?>" alt="slider" class="img-fluid">
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        
                    </div>                    
                </div>  
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="custom-btn">
                            <a href="<?php the_field('button_file'); ?>" target="_blank" class="border-animate"><?php the_field('silder_title'); ?> <img loading="lazy" alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg" class="right-arrow"></a>
                        </div>
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