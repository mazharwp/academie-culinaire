<?php
/*
Template Name: BRUNO BERTIN 1
*/
get_header();

require 'inner.php';

?>

<section>
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
</section>

  <!--francois-sec-section blog--==Section==content====-->


    <section class="francois-chef-sec">
        <div class="container-fluid">
            <div class="francois-chef-box ">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div class="francois-chef-left-box">
                            <img src="<?php the_field('left_image'); ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-7 col-lg-7 col-md-6 d-flex align-items-center">
                        <div class="francois-chef-right-box">
                            <h6><?php the_field('paragraphp1'); ?></h6>
                            <h4><?php the_field('heading1'); ?></h4>
                            <p><?php the_field('description1'); ?></p>
                           
                           <div class="francois-chef-right-review">
                            <p><?php the_field('review1'); ?></p>
                           </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="francois-chef-box2">
                <div class="row">
                    <div class="col-lg-5 col-lg-5 col-md-5 d-flex align-items-center justify-content-center">
                        <div class="francois-chef-left-box">
                            <h6><?php the_field('title2'); ?></h6>
                            <h4><?php the_field('test2'); ?></h4>
                            <p><?php the_field('description2'); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-lg-7 col-md-7">
                        <div class="francois-chef-right-box">
                            <img src="<?php the_field('right_image'); ?>" alt="" class="img-fluid">
                        </div>
                    </div>

                </div>
            </div>

            <div class="francois-servings-table">
                <h4><?php the_field('title3'); ?></h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <h3><?php the_field('language3'); ?></h3>
                        <?php the_field('table'); ?>
                    </table>
                </div>
                <ul>
                    <?php the_field('description3'); ?>
                </ul>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <h3><?php the_field('language4'); ?></h3>
                       <?php the_field('table2'); ?>
                    </table>
					
                </div>
				<ul><?php the_field('short_description2'); ?></ul>
				
				
				
				
				
				<div class="table-responsive">
                    <table class="table table-hover">
                        <h3><?php the_field('title5'); ?></h3>
                       <?php the_field('decription5'); ?>
                    </table>
					
                </div>
				<ul><?php the_field('short_description4'); ?></ul>
                
               
				



               
                <div class="francois-servings-list">
                    
                    
                    <h3><?php the_field('title7'); ?></h3>
                    <ul>
                       <?php the_field('short_description3'); ?>
                    </ul>
                </div>

				

            </div>

        </div>
    </section>

    <section class="francois-social-container">
    <div class="container-fluid">
        <div class="francois-social-box">
            <div class="francois-social-info">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 d-flex align-items-center">
                        <div class="francois-social-text">
                            <h6> <?php the_field('title6'); ?></h6>
                                <?php if( have_rows('social_icons') ): ?>
                                    <?php while( have_rows('social_icons') ): the_row(); ?>
                               <div class="francois-social-icon">
                                    
                                            <a href="<?php the_sub_field('fb_link'); ?>"  target="_blank"><i class="fab fa-facebook-f"></i></a>
                                            <a href="<?php the_sub_field('tw_link'); ?>"  target="_blank"><i class="fab fa-twitter"></i></a>
                                            <a href="<?php the_sub_field('ld_link'); ?>"  target="_blank"><i class="fab fa-linkedin-in"></i></a>  
                                        
                                </div>
                                <?php endwhile; ?>
                                    <?php endif; ?>

                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 d-flex align-items-center justify-content-end">
                       <div class="francois-social-btn">
                        <div class="custom-btn-2">
                            <a href="<?php the_field('button_link'); ?>" target="_blank">
                                <button class="btnDefault">
                                    <span><?php the_field('download_button'); ?></span>
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

    <section class="francois-chef-banner-sec mb-50">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 px-0">
                        <div class="owl-carousel owl-theme francois-chef-slider">                              

                                    <?php if( have_rows('banner_slider') ): ?>
                                        <?php while( have_rows('banner_slider') ): the_row(); ?>
                                            <div class="item">
                                                <img src="<?php the_sub_field('slider_images12'); ?>" alt="slider" class="img-fluid">
                                                <h5><?php the_sub_field('slidet_text'); ?></h5>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                            
                        </div>                    
                    </div>
                </div>
            </div>
    </section>





<section class="donate-sec competition-donate-sec">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="donate-main text-center">
                <div class="donate-content text-center mobile-view donateBox-here">
                <h2><?php the_field('donate_name', 'option'); ?></h2>
                        <h5><?php the_field('donate_title', 'option'); ?></h5>
                        <p><?php the_field('donate_description', 'option'); ?></p>
                  <div class="custom-btn-2">
                      <a href="<?php the_field('donate_button_link1', 'option'); ?>" target="_blank">
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