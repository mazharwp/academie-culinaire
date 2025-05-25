<?php
/*
Template Name: International Passion Trophy
*/
get_header();

require 'inner.php';

?>

    <section class="trophy-passion-news">
        <div class="container-fluid">
            <div class="trophy-passion-news-text">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="passion-news-text">
                            <h4><?php the_field('slider_title1'); ?></h4>
                            <p><?php the_field('description1'); ?></p>
                        </div>
                    </div>
                </div>
            </div>

           <div class="passion-news-slider-sec">
            <div class="row">
                <div class="col-lg-12 px-0">
                    <div class="owl-carousel owl-theme passion-news-slider">
                        <?php if( have_rows('banner_slider1') ): ?>
                            <?php while( have_rows('banner_slider1') ): the_row(); ?>
                                <div class="item">
                                    <img src="<?php the_sub_field('bottom_slider1'); ?>" alt="slider" class="img-fluid">
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
                             <a href="<?php the_field('button_url1'); ?>" target="_blank" class="border-animate"><?php the_field('button_title1'); ?> <img loading="lazy" alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg" class="right-arrow"></a>

                        </div>
                    </div>
                </div>
            </div>
           </div>

        </div>
    </section>

  
    <section class="trophy-passion-banner-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 px-0">
                    <div class="owl-carousel owl-theme passion-news-slider2">
                        <?php if( have_rows('banner_slider2') ): ?>
                            <?php while( have_rows('banner_slider2') ): the_row(); ?>
                                <div class="item">
                                    <img src="<?php the_sub_field('bottom_slider2'); ?>" alt="slider" class="img-fluid">
                                    <h5><?php the_sub_field('slider_subtitle2'); ?></h5>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                      
                    </div>                    
                </div>
            </div>
        </div>
    </section>

    <section class="trophy-passion-news trophy-passion-news2">
        <div class="container-fluid">
            <div class="trophy-passion-news-text">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="passion-news-text">
                            <h4><?php the_field('slider_top_title'); ?></h4>
                            <p><?php the_field('slider_description'); ?></p>
                        </div>
                    </div>
                </div>
            </div>

           <div class="passion-news-slider-sec">
            <div class="row">
                <div class="col-lg-12 px-0">
                    <div class="owl-carousel owl-theme passion-news-slider">
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