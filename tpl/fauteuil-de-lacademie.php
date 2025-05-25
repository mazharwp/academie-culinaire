<?php
/*
Template Name: Le Fauteuil de l'Academie Culinaire de France
*/
get_header();

require 'inner.php';

?>

<style>
    iframe {
    height: 500px !important;
}
.the-jean-chef .the-jean-chef-topdiv .the-jean-chef-left {
    height: 671px;
}
.trophy-roland-chef-txt-info {
    padding: 70px 50px 35px 100px;
    background: #F5E3EC !important;
    border-radius: 50px;
    margin-bottom: 50px;
}

.trophy-roland-chef-txt-info h3 {
    font-size: 22px;}
    
section.the-jean-chef-sec.fauteuil-chef.qualifyingcriteria {
    max-width: 100%;}
    section.page-banner.page-border.fauteuil-de-sec {
    background-size: 100% 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
</style>

   <section class="fauteuil-top-heading">
        <div class="container-fluid">
            <div class="fauteuil-top-heading-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="fauteuil-heading-txt">
                            <h2><?php the_field('tile'); ?></h2>
                            <p><?php the_field('sub_title'); ?></p>
                            <h6><?php the_field('description'); ?></h6><br>
                        </div>
                       
                     
                </div>
            </div>
        </div>
    </section>
    
    
    
    <section class="the-jean-chef-sec fauteuil-chef">
        <div class="container-fluid">
            <div class="the-jean-chef">
                <div class="the-jean-chef-topdiv fauteuil-chef-sec">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-6">
                            <div class="the-jean-chef-left fauteuil-chef-left">
                                <img src="<?php the_field('left_banner'); ?>" alt="image" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-6 d-flex align-items-center">
                            <div class="the-jean-chef-right fauteuil-chef-right">
                                <h3><?php the_field('section_title1'); ?></h3>
                                <?php the_field('section_description1'); ?>
                            </div>  
                        </div>
                    </div>
                </div><br>
                 
            </div>
        </div>
    </section>
    
    <section class="the-jean-chef-sec fauteuil-chef qualifyingcriteria">
        <div class="container-fluid">
            <div class="trophy-roland-chef-txt">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="donate-content text-center mobile-view donateBox-here">
                              <h2><?php the_field('title1001'); ?></h2>
                                    <h5><?php the_field('sub_title1001'); ?></h5>
                                    <p><?php the_field('description1001'); ?></p>
                              <div class="custom-btn-2">
                                  <a href="<?php the_field('button_url1001'); ?>" target="_blank">
                                            <button class="btnDefault">
                                                <span><?php the_field('button_title1001'); ?></span>
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

    <section class="trophy-passion-news fauteuil-de-slider">
        <div class="container-fluid">
            <div class="trophy-passion-news-text fauteuil-de-slider-txt">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="passion-news-text">
                            <h4><?php the_field('slider_content'); ?></h4>
                        </div>
                    </div>
                </div>
            </div>
			

           <div class="passion-news-slider-sec">
            <div class="row">
                <div class="col-lg-12 px-0">                 
                    <div class="owl-carousel owl-theme passion-news-slider">
                         <?php if( have_rows('banner_slider2') ): ?>
                            <?php while( have_rows('banner_slider2') ): the_row(); ?>
                        <div class="item">
                            <img src="<?php the_sub_field('bottom_slider2'); ?>" alt="image" class="img-fluid">
                            <h5><?php the_sub_field('slider_subtitle2'); ?></h5>
                        </div>
                         <?php endwhile; ?>
                        <?php endif; ?>    
                    </div>  
                              
                </div>  
            </div>

           </div>

        </div>
    </section>

    <section class="fauteuil-video-sec">
        <div class="container-fluid">
            <div class="fauteuil-videobox">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="fauteuil-videobox-txt">
                            <?php if ( get_field( 'video_url' ) ): ?>
                                <video id="myVideo" controls autoplay muted poster="<?php the_field('you_tube_images'); ?>">
                                    <source src="<?php the_field('video_url'); ?>" type="video/mp4">
                                </video>
                                <!-- <span class="play-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Video_duotone.png" alt="video" class="img-fluid"></span> -->
                            <?php elseif ( get_field( 'you_tube' ) ): ?>
                                <iframe width="100%" height="100%" src="<?php the_field('you_tube'); ?>" frameborder="0" allowfullscreen></iframe>
                            <?php elseif ( get_field( 'you_tube_images' ) ): ?>
                                <img src="<?php the_field('you_tube_images'); ?>" alt="YouTube image" class="single-images">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="exceptional-partners-text">
        <div class="row">
           <div class="col-lg-12">
                <div class="fauteuil-chef-txt">
                    <p><?php the_field('partners_description'); ?></p>
                </div>
            </div>             
        </div>
    </div>


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



<?php get_footer();  ?>