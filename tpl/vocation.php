<?php
/*
Template Name: Vocation
*/
get_header();

require 'inner.php';
?>


<section class="trophy-section" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="1500">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7 col-md-9 col-12">
        <div class="trophy-content">
          <h6><?php the_field('vocation_title'); ?></h6>
          <ul class="trophy-list">
            <?php the_field('description'); ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="vocation-img" style="background-image:url(<?php the_field('vocation_banner'); ?>); ">
  <div class="white-stripe"></div>
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