<?php
/*
Template Name: Renew Membership
*/

if (!is_user_logged_in() ) {
   $redirect_url = home_url('/member-access/my-member-area/');
    wp_redirect($redirect_url);
    exit();
} 

get_header();

require 'inner.php';
?>



    <!--==renew-membership==top-section=====================-->

    <!-- 
    <section class="renew-membership-sec page-banner page-border">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 px-0">
            <div class="page-banner-title page-banner-heading">
              <h2><?php the_field('title'); ?></h2>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    
  <!--member-text--==Section==content====-->

  <div class="member-text-sec">
    <div class="desc">
        <p><?php the_field('description'); ?></p>
    </div>
  </div>


  <!--===renew-membership==tab==section-->

  <section class="renew-member-box-sec" style="background-image:url(<?php the_field('banner'); ?>); ">
 
  
  
      <div class="items-div">

        <div class="items">
          <div class="renew-member-box">
            <div class="renew-member-box-text">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/renew-pay-img.png" alt="PayPal" class="img-fluid">
              <p><?php the_field('paypal_title'); ?></p>
            </div>
            <div class="renew-member-box-btn">
				<?php the_field('left_shortcode'); ?>
            </div>
            <!--<h6><?php the_field('paypal_text'); ?></h6>-->
          </div>
        </div>

        <div class="items">
          <div class="renew-member-box-middile">
              <h6><?php the_field('questions_title'); ?></h6>
             <p><?php the_field('q-description'); ?></p>
            <a href="<?php the_field('email_link'); ?>"><?php the_field('email'); ?></a>
          </div>
        </div>

        <div class="items">
            <div class="renew-member-box-right">
                <h6><?php the_field('pay_title'); ?></h6>
               <p><?php the_field('pay-description'); ?></p>
            </div>
          </div>

    </div>
  </section>


    <section class="renew-member-form-sec">
            <div class="items-form-box">
                      <div class="renew-form-items-left">
                        <img src="<?php echo get_field('left_banner'); ?>" alt="form-img" class="img-fluid">
                      </div>
                    <div class="renew-form-items-right">
                        <?php the_field('right_shortcode'); ?>
                    </div>
                </div>
    </section>

 


<?php require 'botton-news.php'; ?>


<?php get_footer();  ?>


