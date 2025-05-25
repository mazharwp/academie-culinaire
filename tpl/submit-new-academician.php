<?php
/*
Template Name: Submit New Academician
*/

if (!is_user_logged_in() ) {
   $redirect_url = home_url('/member-access/my-member-area/');
    wp_redirect($redirect_url);
    exit();
} 

get_header(); 

require 'inner.php';
?>


<style>
.submit-form-items {
    width: 48%;
}
.items-submit-form-box .submit-form-items-right {
    margin-left: 50px;
}
form#forminator-module-1706 {
    display: block !important;
}
</style>

   
    <!--==renew-membership==top-section=====================-->

    <!----<section class="submit-new-form-container page-banner page-border">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 px-0">
            <div class="page-banner-title page-banner-heading">
              <h2>Submit New Academician</h2>
            </div>
          </div>
        </div>
      </div>
    </section>  --->
    
  <!--submit--==Section==content====-->

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

  <!--===submit-membership==tab==section-->


    <section class="final-vote-box-sec submit-new-form-sec">
      <div class="vote-form-box items-submit-form-box">
                <div class="vote-form-items-left submit-form-items-left">
                  <img src="<?php the_field('left_banner'); ?>" alt="form-img" class="img-fluid">
                </div>
              <div class="vote-form-items-right submit-form-items-right">
                  <?php the_field('shortcode'); ?>
              </div>
          </div>
    </section>

 

    <section class="donate-sec submit-donate-sec">
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