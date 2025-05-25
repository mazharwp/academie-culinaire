<?php
/*
Template Name: Qualifying Criteria
*/
get_header();

require 'inner.php';

?>
<style>
   
    .btnDefault::after {
    background: #fafafa00;
}
.wpforms-field-row.wpforms-field-large {
    gap: 0px;
}
.the-jean-chef .the-jean-chef-topdiv .the-jean-chef-left {
    height: 671px;
}
@media screen and (min-width: 769px) and (max-width: 2500px) { 
.trophy-roland-chef-txt-info {
    padding: 70px 50px 35px 100px;
    background: #F5E3EC !important;
    border-radius: 50px;
    margin-bottom: 50px;
}
}

@media screen and (min-width: 300px) and (max-width: 768px) { 
.trophy-roland-chef-txt-info {
    padding: 20px 50px 50px 20px;
    background: #F5E3EC !important;
    border-radius: 50px;
    margin-bottom: 50px;
}
}

.trophy-roland-chef-txt-info h3 {
    font-size: 22px;}
    .qualify{
        color: #131D3A;
        font-family: "Playfair Display";
        font-style: italic;
        font-weight: 500;
        line-height: normal;
        letter-spacing: 1.28px;
        margin-bottom: 34px;
        text-align: center;
            font-size: 45px;}
    }
</style>

<section class="the-jean-chef-sec trophy-roland-sec-container">
        <div class="container-fluid">
            <div class="the-jean-chef">

                <div class="trophy-roland-chef-txt">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="trophy-roland-chef-txt-info">
                                    <h2 class="qualify"><?php the_field('title11'); ?></h2>
                                            <p style="text-align:center; font-size: 18px; line-height: 35px;"><?php the_field('section_description21'); ?></p>
                							<?php if( have_rows('all_section') ): ?>
                							<?php while( have_rows('all_section') ): the_row(); ?>
                								<h3><?php the_sub_field('title111'); ?></h3>
                								<p><?php the_sub_field('description111'); ?></p>
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