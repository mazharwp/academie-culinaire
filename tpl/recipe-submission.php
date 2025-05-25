<?php
/*
Template Name: Recipe Submission
*/

if (!is_user_logged_in() ) {
   $redirect_url = home_url('/member-access/my-member-area/');
    wp_redirect($redirect_url);
    exit();
} 

get_header(); 

require 'inner.php';
?>


    
  <!--member-text--==Section==content====-->

  <div class="update-contact-text">
    <div class="desc">
      <h6><?php the_field('title_main'); ?></h6>
        <p class="update-text1"><?php the_field('paragraph'); ?></p>
        <p class="update-text2"><?php the_field('new_title'); ?></p>
            <p class="update-text3"><?php the_field('description'); ?></p>
    </div>
  </div>


  <section class="logo-marquee racesWrapper contact-detail-marquee">
    <div class="container-fluid">
        <div class="col-lg-12">
            <marquee id="marquee" behavior="scroll" direction="left" onmouseover="stopMarquee()"
                onmouseout="startMarquee()">
                <span><img loading="lazy" alt="image" src="<?php the_field('logo__image'); ?>" alt="ACF Logo" class="img-fluid"> <?php the_field('welcome_message'); ?></span>
               
        </div>
        </marquee>

    </div>
    </div>
</section>

  <!--===update-contact-detail==div==section-->

  <section class="update-contact-box-sec">
      <div class="contact-items-div">

        <div class="contact-items item2 contact-items-mobile">
            <div class="contact-items-right cDleft"> 
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-detail-img1-mobile.png" alt="img" class="img-fluid">
             </div>
        </div>

            <div class="contact-items item1">
                <div class="contact-items-left"> 
                    <h5><?php the_field('title1'); ?></h5>
                    <ul>
                        <?php the_field('description1'); ?>
                    </ul>
                    <div class="custom-btn-2">
                        <a href="<?php the_field('section_1_button_link'); ?>" target="_blank">
                            <button class="btnDefault"> <span><?php the_field('section_1_button_text'); ?></span>
                                <span class="ps-2">
                                    <img loading="lazy" alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/Import_duotone.png" class="right-arrow change-img1">
                                    
                                <img loading="lazy" alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/Import_duotone_.png" class="right-arrow change-img2"></span>
                            </button>
                        </a>
                      </div>

                </div>
            </div>
            

            <div class="contact-items item2 contact-items-desktop">
                <div class="contact-items-right cDleft"> 
                    <img src="<?php the_field('right_banner'); ?>" alt="img" class="img-fluid">
                 </div>
            </div>
        </div>
  </section>


 
  <section class="update-contact-box-sec2">
    <div class="contact-items-div">
          <div class="contact-items item2 contact-items-mobile">
              <div class="contact-items-right cDright"> 
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-detail-img2-mobile.png" alt="img" class="img-fluid">
               </div>
          </div>

          <div class="contact-items item2 contact-items-desktop">
            <div class="contact-items-right cDright"> 
                <img src="<?php the_field('right_banner1'); ?>" alt="img" class="img-fluid">
             </div>
        </div>

          <div class="contact-items item1">
            <div class="contact-items-left"> 
                <h5><?php the_field('title2'); ?></h5>
                <ul>
                    <?php the_field('description2'); ?>
                </ul>
                <div class="custom-btn-2">
                    <a href="<?php the_field('section_2_button_link'); ?>" target="_blank">
                        <button class="btnDefault"> <span><?php the_field('section_2_button_text'); ?> </span>
                            <span class="ps-2">
                                <img loading="lazy" alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/Import_duotone.png" class="right-arrow change-img1">
                                
                            <img loading="lazy" alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/Import_duotone_.png" class="right-arrow change-img2"></span>
                        </button>
                    </a>
                  </div>

            </div>
        </div>

      </div>
</section>


<section class="contact-detail-review-sec">
    <div class="detail-review-box">
        <h4><?php the_field('review_box'); ?></h4>
    </div>
</section>

<section class="contact-detail-review-items">
    <div class="detail-review-items">
        <div class="detail-review-item review-item1">
            <div class="detail-review-items-box">
                <img src="<?php the_field('left_image'); ?>" alt="image" class="img-fluid detailleft-img">
            </div>
        </div>
        <div class="detail-review-item review-item2">
            <div class="detail-review-items-box">
                <p><?php the_field('bottom_text'); ?></p>
                <img src="<?php the_field('right_image'); ?>" alt="image" class="img-fluid detailright-img">
            </div>
        </div>
    </div>
</section>


<section class="contact-detail-form-sec">
    <div class="contact-detail-form">
        <div class="contact-detail-form-items detail-form-items1">
            <h5><?php the_field('title_left'); ?></h5>
            <p><?php the_field('paragraph_text'); ?></p>
            <h6><?php the_field('title_bottom'); ?></h6>
            <div class="form-line">
                <svg xmlns="http://www.w3.org/2000/svg" width="316" height="124" viewBox="0 0 316 124" fill="none">
                    <path d="M0.331562 11C0.331562 12.4728 1.52547 13.6667 2.99823 13.6667C4.47099 13.6667 5.66489 12.4728 5.66489 11C5.66489 9.52724 4.47099 8.33333 2.99823 8.33333C1.52547 8.33333 0.331562 9.52724 0.331562 11ZM117.998 96L118.46 96.1917L117.998 96ZM315.998 0L310.65 2.17373L315.207 5.71895L315.998 0ZM2.49973 10.9613C-2.01213 69.1148 21.3024 103.838 48.652 117.323C75.9624 130.79 107.32 123.029 118.46 96.1917L117.536 95.8083C106.676 121.971 76.0337 129.71 49.0943 116.427C22.1941 103.162 -0.991307 68.8852 3.49673 11.0387L2.49973 10.9613ZM118.46 96.1917C133.725 59.4161 148.961 41.0292 164.295 32.6295C179.613 24.2386 195.131 25.7558 211.143 29.0687C227.113 32.3728 243.627 37.4869 260.663 36.0624C277.76 34.6326 295.36 26.6333 313.63 3.85871L312.85 3.23298C294.725 25.8273 277.363 33.6623 260.579 35.0658C243.734 36.4745 227.448 31.4209 211.346 28.0895C195.287 24.7669 179.462 23.181 163.815 31.7525C148.183 40.3153 132.833 58.9567 117.536 95.8083L118.46 96.1917Z" fill="url(#paint0_linear_983_1756)"/>
                    <defs>
                      <linearGradient id="paint0_linear_983_1756" x1="322.998" y1="-5.1238e-05" x2="46.9981" y2="69.9999" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#666666"/>
                        <stop offset="0.66" stop-color="#FFBC96"/>
                      </linearGradient>
                    </defs>
                  </svg>
            </div>
        </div>

        <div class="contact-detail-form-items detail-form-items2">
           <?php the_field('shortcode'); ?>
        </div>
    </div>
</section>


<section class="contact-detail-form-box">
    <div class="detail-form-box">
        <div class="detail-form-box-items detail-form-left">
            <p><?php the_field('box_description'); ?></p>
            <a href="<?php the_field('button_link'); ?>" target="_blank"><?php the_field('button_text'); ?> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.png" alt="" class="img-fluid"></a>
        </div>

        <div class="detail-form-box-items detail-form-right">
            <p><?php the_field('box_description1'); ?></p>
            <a href="<?php the_field('button_link1'); ?>" target="_blank"><?php the_field('button_text1'); ?>  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.png" alt="" class="img-fluid"></a>
        </div>

    </div>
</section>


  <section class="donate-sec cdetails-donate-sec" style="background-image:url(<?php the_field('donation_banner'); ?>);">
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