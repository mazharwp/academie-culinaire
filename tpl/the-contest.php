<?php
/*
Template Name: Rules & Regulation
*/
get_header();

require 'inner.php';

?>


    <section class="the-contest-info">
        <div class="container-fluid">
            <div class="the-contest-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="the-contest-txt">
                            <h2><?php the_field('page_title'); ?></h2>
                            <div class="the-contest-btn">
                                <div class="custom-btn-2">
                                    <a href="<?php the_field('left_button_link'); ?>" target="_blank">
                                        <button class="btnDefault"> <span><?php the_field('left_button'); ?> </span>
                                            <span class="ps-2">
                                                <img loading="lazy" alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/white-right-arrow.svg" class="right-arrow change-img1">
                                                
                                            <img loading="lazy" alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg" class="right-arrow change-img2"></span>
                                        </button>
                                    </a>
                                  </div>
                                  <div class="custom-btn-2">
                                    <a href="<?php the_field('right_button_link'); ?>" target="_blank">
                                        <button class="btnDefault"> <span><?php the_field('right_button'); ?></span>
                                            <span class="ps-2">
                                                <img loading="lazy" alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/white-right-arrow.svg" class="right-arrow change-img1">
                                                
                                            <img loading="lazy" alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg" class="right-arrow change-img2"></span>
                                        </button>
                                    </a>
                                  </div>
                            </div>
                        </div>


                        <div class="the-contest-article-sec">
                             <div class="the-contest-article-sec">
                                <?php if( have_rows('articles_repeater') ): ?>
                                    <?php while( have_rows('articles_repeater') ): the_row(); ?>
                                        <div class="the-contest-article1">
                                            <div class="content-article-title">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stylus 2.png" alt="" class="img-fluid"> 
                                                <h5><?php the_sub_field('title'); ?></h5>
                                            </div>
                                            <h6><?php the_sub_field('sub_title'); ?></h6>
                                            <p><?php the_sub_field('description'); ?></p>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>                      
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