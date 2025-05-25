<?php
/*
Template Name: Final Vote
*/
get_header();

require 'inner.php';
?>

<style>
form#forminator-module-1709 {
    display: block !important;
}
</style>

  <section class="logo-marquee racesWrapper">
    <div class="container-fluid">
        <div class="col-lg-12">
            <marquee id="marquee" behavior="scroll" direction="left" onmouseover="stopMarquee()"
                onmouseout="startMarquee()">
                <span><img loading="lazy" alt="image" src="<?php the_field('logo_image'); ?>" alt="ACF Logo" class="img-fluid"> <?php the_field('welcome_message'); ?></span>
				<span><img loading="lazy" alt="image" src="<?php the_field('logo_image'); ?>" alt="ACF Logo" class="img-fluid"> <?php the_field('welcome_message'); ?></span>
				<span><img loading="lazy" alt="image" src="<?php the_field('logo_image'); ?>" alt="ACF Logo" class="img-fluid"> <?php the_field('welcome_message'); ?></span>
        </div>
        </marquee>

    </div>
    </div>
</section>

  <!--===final-vote-sec==tab==section-->

    <section class="final-vote-box-sec">
        <div class="vote-form-box">
            <div class="vote-form-items-left">
              <img src="<?php the_field('left_banner'); ?>" alt="form-img" class="img-fluid">
            </div>
            <div class="vote-form-items-right finalVote">
              <?php the_field('shortcode'); ?>
            </div>
        </div>
    </section>



<section class="donate-sec submit-donate-sec final-vote-donate-sec">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="donate-main text-center">
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