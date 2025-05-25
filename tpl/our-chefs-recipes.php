<?php
/*
Template Name: Our Chefs Recipes
*/
get_header();

require 'inner.php';
?>




      <section class="intro-sec section-gap" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="2000">
            <div class="container">
                  <div class="intro-container">
                        <p><?php the_field('description'); ?></p>
                  </div>
            </div>
      </section>

      <section class="recipe-sec">
          <div class="container-fluid">
            <div class="row g-4">
                    <?php if (have_rows('recipes_details')) : ?>
                      
                            <?php 
                              $count = 1;
                              while (have_rows('recipes_details')) : the_row(); 
                             
                                if($count==1){ ?>
                                <div class="col-lg-12 p-0" data-aos="fade-down" data-aos-duration="1500">
                                    <div class="overflow-h">
                                
                                        <div class="meal1 meal-container-L"
                                            style="background: url('<?php echo esc_url(get_sub_field('recipes_image'), 'large'); ?>') center/cover no-repeat;">

                                            <div class="recipe-card">

                                                <p><span><?php the_sub_field('caption_title'); ?></span><?php the_sub_field('title'); ?></p>
                                                <div class="excerpt"><?php the_sub_field('description'); ?></div>
                                                <br>
                                                <div class="custom-btn-2">
                                                    <a href="<?php the_sub_field('button_url'); ?>" target="_blank">
                                                        <button class="btnDefault btn-inner-recipe">
                                                            <span><?php the_sub_field('button'); ?></span>
                                                            <span class="ps-2">
                                                                <img loading="lazy" alt="image"
                                                                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/white-right-arrow.svg'); ?>"
                                                                    class="right-arrow change-img1" />
                                                                <img loading="lazy" alt="image"
                                                                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/right-arrow.svg'); ?>"
                                                                    class="right-arrow change-img2" />
                                                            </span>
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              <?php } else {?>
                                 <div class="col-lg-6 col-md-6 pa-0 ps-0">
                                  <div class="overflow-h">
                                      <div class="meal2 meal-container-S"
                                          style="background: url('<?php echo esc_url(get_sub_field('recipes_image')); ?>') center/cover no-repeat;">
                                          <div class="recipe-card recipe-card-s">
                                              <p><span><?php the_sub_field('caption_title'); ?></span><?php the_sub_field('title'); ?></p>
                                              <div class="excerpt"><?php the_sub_field('description'); ?></div>
                                              <br>
                                              <div class="custom-btn-2">
                                                  <a href="<?php the_sub_field('button_url'); ?>" target="_blank">
                                                      <button class="btnDefault btn-inner-recipe">
                                                          <span><?php the_sub_field('button'); ?></span>
                                                          <span class="ps-2">
                                                              <img loading="lazy" alt="image"
                                                                  src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/white-right-arrow.svg'); ?>"
                                                                  class="right-arrow change-img1" />
                                                              <img loading="lazy" alt="image"
                                                                  src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/right-arrow.svg'); ?>"
                                                                  class="right-arrow change-img2" />
                                                          </span>
                                                      </button>
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            <?php } ?>
                               
                            <?php  $count++; if($count==4) $count=1; endwhile; ?>
                     
                    <?php endif; ?>
                </div>


            </div>
      </section>


<section class="donate-sec donate-sec-inner">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
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