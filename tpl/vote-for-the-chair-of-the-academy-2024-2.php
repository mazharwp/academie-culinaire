<?php
/*
Template Name: Vote for the chair of the academy 2024  

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
.qualify {
    color: #131D3A;
    font-family: "Playfair Display";
    font-style: italic;
    font-weight: 500;
    line-height: normal;
    letter-spacing: 1.28px;
    margin-bottom: 34px;
    text-align: center;
    font-size: 45px;
}
.justify-content-center {
    justify-content: center !important;
    top: -30px;
    position: relative;
}
.trophy-roland-sec-container {
    padding: 70px 0 0 0 !important;
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

  <!--===submit-membership==tab==section-->


    <section class="final-vote-box-sec resistration-form-sec">
            <div class="vote-form-box resistration-form-box">
                      <div class="vote-form-items-left">
                        <img src="<?php the_field('left_banner'); ?>" alt="form-img" class="img-fluid">
                       </div>
                    <div class="vote-form-items-right">
                        <?php the_field('shortcode'); ?>
                    </div>
                </div>
    </section>
    
    
    <section class="the-jean-chef-sec trophy-roland-sec-container">
        <div class="container-fluid">
            <div class="the-jean-chef">
                <div class="trophy-roland-chef-txt">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="trophy-roland-chef-txt-info" style="text-align: center;">
                                    <h2 class="qualify"><?php the_field('title11'); ?></h2>
                                    <p style="text-align:center; font-size: 18px; line-height: 35px;"><?php the_field('section_description21'); ?></p>
                                </div>
                            </div>
                            <div class="custom-btn-2 col-lg-12 d-flex justify-content-center">
                                <a href="<?php the_field('button_url'); ?>" target="_blank">
                                    <button class="btnDefault">
                                        <span><?php the_field('button_text'); ?></span>
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
    </section>


    
    <section class="guest-text-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center my-3">
                    <img src="<?php the_field('bottom_banner'); ?>" alt="form-img" class="img-fluid">
                </div>
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