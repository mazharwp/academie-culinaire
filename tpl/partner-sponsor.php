<?php
/*
Template Name: Our Partners
*/
get_header(); 

require 'inner.php';
?>

<style>
iframe {
  visibility: visible !important;
  height: 285px !important; 

}
.single-images {
    width: 500px;
}
@media screen and (min-width: 300px) and (max-width: 768px) { 
.custom-btn-2.our-contact-btn {
    padding: 60px 0 0 10px;
}
.our-partner-tab-box-text-right {
    display: block;
}
}
</style>
    
  <!--Our Partners==Section==content====-->

  <div class="our-partner-text-sec">
    <div class="desc">
      <p><?php the_field('description'); ?></p>
    </div>
  </div>


  <!--===Our Partners==tab==section-->
<section class="our-partner-tab-sec">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-12 px-0">
                      <ul class="nav nav-pills sticky-top" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="usaMembers-tab" data-bs-toggle="pill" data-bs-target="#usaMembers"
                            type="button" role="tab" aria-controls="usaMembers" aria-selected="true"><span class="pe-3"> <img
                                loading="lazy" alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/Ellipse 289.png" alt="tab-images">
                            </span> <?php the_field('platinum_tab'); ?></button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="canadaMembers-tab" data-bs-toggle="pill" data-bs-target="#canadaMembers"
                            type="button" role="tab" aria-controls="canadaMembers" aria-selected="false"><span class="pe-3"> <img
                                loading="lazy" alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/Ellipse 290.png" alt="tab-images">
                            </span> <?php the_field('premium_tab'); ?></button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="retiredMembers-tab" data-bs-toggle="pill" data-bs-target="#retiredMembers"
                            type="button" role="tab" aria-controls="retiredMembers" aria-selected="false"><span class="pe-3"> <img
                                loading="lazy" alt="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/Ellipse 291.png" alt="tab-images">
                            </span> <?php the_field('silver_tab'); ?></button>
                        </li>
                      </ul>


        <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="usaMembers" role="tabpanel" aria-labelledby="usaMembers-tab"
                  tabindex="0">
                <section class="our-partner-tab-content">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-lg-12 d-flex ">
                        <div class="our-tab-heading">
                          <h2><?php the_field('platinum_tab'); ?></h2>
                        </div>
                      </div>
                    </div>

                    
                       <div class="row donate-box-margin">
                                <?php if( have_rows('platinum_plan') ): ?>
                                <?php while( have_rows('platinum_plan') ): the_row(); ?>
                            <div class="col-lg-12">
                                
                                <div class="our-partner-tab-box">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-6 col-sm-6">
                                          <div class="our-partner-tab-box-img">
                                            <?php if ( get_sub_field( 'video_url' ) ): ?>
                                                <video class="videoPlayer" controls muted poster="<?php the_sub_field('you_tube_images'); ?>">
                                                    <source src="<?php the_sub_field('video_url'); ?>" type="video/mp4">
                                                </video>
                                                <span class="play-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Video_duotone.png" alt="video" class="img-fluid"></span>
                                            
                                            <?php elseif ( get_sub_field( 'you_tube' ) ): ?>
                                                <?php
                                                // Get the YouTube URL from the custom field
                                                $youtube_url = get_sub_field('you_tube');
                                        
                                                // Extract the YouTube video ID from the URL
                                                parse_str( parse_url( $youtube_url, PHP_URL_QUERY ), $youtube_params );
                                                $youtube_id = $youtube_params['v'];
                                        
                                                // Create the embed URL
                                                $embed_url = 'https://www.youtube.com/embed/' . esc_attr( $youtube_id );
                                                ?>
                                                <iframe width="100%" height="100%" src="<?php echo esc_url( $embed_url ); ?>" frameborder="0" allowfullscreen></iframe>
                                            
                                            <?php elseif ( get_sub_field('you_tube_images') ): ?>
                                                <img src="<?php the_sub_field('you_tube_images'); ?>" alt="YouTube image" class="single-images">
                                            
                                            <?php endif; ?>
                                        </div>

                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 d-flex align-items-center">
                                          <div class="our-partner-tab-box-text">  
                                             <div class="our-partner-tab-box-text-left">
                                              <img src="<?php the_sub_field('logo_image'); ?>" alt="logo-image" class="img-fluid">
                                              <span><?php the_sub_field('logo_title'); ?></span>
                                             </div>
                                             <div class="our-partner-tab-box-text-right">
                                              <div class="custom-btn-2 find-out-more-btn">
                                                <a href="<?php the_sub_field('button_left'); ?>" target="_blank">
                                                  <button class="btnDefault"> <span><?php the_sub_field('button_left_name'); ?></span> <span class="ps-2"> <img loading="lazy" alt="image"
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/next-arrow1.png" class="right-arrow"></span>
                                                  </button>
                                                </a>
                                              </div>
                                              <div class="custom-btn-2 our-contact-btn">
                                                <a href="<?php the_sub_field('button_right'); ?>">
                                                  <button class="btnDefault"> <span><?php the_sub_field('button_right_name'); ?></span> <span class="ps-2"> <img loading="lazy" alt="image"
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/next-arrow1.png" class="right-arrow"></span>
                                                  </button>
                                                </a>
                                              </div>
                                             </div>
                                          </div>
                                        </div>
                                      
                                    </div>
                                </div>
                                
                             </div>
                             <?php endwhile; ?>
                             <?php endif; ?>   
                                
                    </div>

                </div>
            </section>
        </div>

            <div class="tab-pane fade" id="canadaMembers" role="tabpanel" aria-labelledby="canadaMembers-tab"
                  tabindex="0">
                  <section class="our-partner-tab-content">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-lg-12 d-flex ">
                          <div class="our-tab-heading">
                           <h2><?php the_field('premium_tab'); ?></h2>
                          </div>
                        </div>
                      </div>


                 <div class="row donate-box-margin">
                       <?php if( have_rows('premium_plan') ): ?>
                                <?php while( have_rows('premium_plan') ): the_row(); ?>
                            <div class="col-lg-12">
                                
                                <div class="our-partner-tab-box">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-6 col-sm-6">
                                          <div class="our-partner-tab-box-img">  
                                            <?php if ( get_sub_field( 'video_url' ) ): ?>
                                                <video class="videoPlayer" controls muted poster="<?php the_sub_field('you_tube_images'); ?>">
                                                    <source src="<?php the_sub_field('video_url'); ?>" type="video/mp4">
                                                </video>
                                                <span class="play-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Video_duotone.png" alt="video" class="img-fluid"></span>
                                            
                                            <?php elseif ( get_sub_field( 'you_tube' ) ): ?>
                                                <?php
                                                // Get the YouTube URL from the custom field
                                                $youtube_url = get_sub_field('you_tube');
                                        
                                                // Extract the YouTube video ID from the URL
                                                parse_str( parse_url( $youtube_url, PHP_URL_QUERY ), $youtube_params );
                                                $youtube_id = $youtube_params['v'];
                                        
                                                // Create the embed URL
                                                $embed_url = 'https://www.youtube.com/embed/' . esc_attr( $youtube_id );
                                                ?>
                                                <iframe width="100%" height="100%" src="<?php echo esc_url( $embed_url ); ?>" frameborder="0" allowfullscreen></iframe>
                                            
                                            <?php elseif ( get_sub_field('you_tube_images') ): ?>
                                                <img src="<?php the_sub_field('you_tube_images'); ?>" alt="YouTube image" class="single-images">
                                            
                                            <?php endif; ?>
                                        </div>

                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 d-flex align-items-center">
                                          <div class="our-partner-tab-box-text">  
                                             <div class="our-partner-tab-box-text-left">
                                              <img src="<?php the_sub_field('logo_image'); ?>" alt="logo-image" class="img-fluid">
                                              <span><?php the_sub_field('logo_title'); ?></span>
                                             </div>
                                             <div class="our-partner-tab-box-text-right">
                                              <div class="custom-btn-2 find-out-more-btn">
                                                <a href="<?php the_sub_field('button_left'); ?>" target="_blank">
                                                  <button class="btnDefault"> <span><?php the_sub_field('button_left_name'); ?></span> <span class="ps-2"> <img loading="lazy" alt="image"
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/next-arrow1.png" class="right-arrow"></span>
                                                  </button>
                                                </a>
                                              </div>
                                              <div class="custom-btn-2 our-contact-btn">
                                                <a href="<?php the_sub_field('button_right'); ?>">
                                                  <button class="btnDefault"> <span><?php the_sub_field('button_right_name'); ?></span> <span class="ps-2"> <img loading="lazy" alt="image"
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/next-arrow1.png" class="right-arrow"></span>
                                                  </button>
                                                </a>
                                              </div>
                                             </div>
                                          </div>
                                        </div>
                                      
                                    </div>
                                </div>
                                
                             </div>
                             <?php endwhile; ?>
                             <?php endif; ?> 
                    </div>
                    </div>
                  </section>
                </div>

                <div class="tab-pane fade" id="retiredMembers" role="tabpanel" aria-labelledby="retiredMembers-tab"
                  tabindex="0">
      
                  <section class="our-partner-tab-content">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-lg-12 d-flex ">
                          <div class="our-tab-heading">
                            <h2><?php the_field('silver_tab'); ?></h2>
                          </div>
                        </div>
                      </div>
  
                      
                    <div class="row donate-box-margin">
                       <?php if( have_rows('silver_plan') ): ?>
                                <?php while( have_rows('silver_plan') ): the_row(); ?>
                            <div class="col-lg-12">
                                
                                <div class="our-partner-tab-box">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-6 col-sm-6">
                                          <div class="our-partner-tab-box-img">
                                            <?php if ( get_sub_field( 'video_url' ) ): ?>
                                                <video class="videoPlayer" controls muted poster="<?php the_sub_field('you_tube_images'); ?>">
                                                    <source src="<?php the_sub_field('video_url'); ?>" type="video/mp4">
                                                </video>
                                                <span class="play-btn">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Video_duotone.png" alt="video" class="img-fluid">
                                                </span>
                                            
                                            <?php elseif ( get_sub_field( 'you_tube' ) ): ?>
                                                <?php
                                                // Get the YouTube URL from the custom field
                                                $youtube_url = get_sub_field('you_tube');
                                        
                                                // Extract the YouTube video ID from the URL
                                                parse_str( parse_url( $youtube_url, PHP_URL_QUERY ), $youtube_params );
                                                $youtube_id = $youtube_params['v'];
                                        
                                                // Create the embed URL
                                                $embed_url = 'https://www.youtube.com/embed/' . esc_attr( $youtube_id );
                                                ?>
                                                <iframe width="100%" height="100%" src="<?php echo esc_url( $embed_url ); ?>" frameborder="0" allowfullscreen></iframe>
                                            
                                            <?php elseif ( get_sub_field('you_tube_images') ): ?>
                                                <img src="<?php the_sub_field('you_tube_images'); ?>" alt="YouTube image" class="single-images">
                                            
                                            <?php endif; ?>
                                        </div>

                                        </div>
                                        <div class="col-lg-7 col-md-6 col-sm-6 d-flex align-items-center">
                                          <div class="our-partner-tab-box-text">  
                                             <div class="our-partner-tab-box-text-left">
                                              <img src="<?php the_sub_field('logo_image'); ?>" alt="logo-image" class="img-fluid">
                                              <span><?php the_sub_field('logo_title'); ?></span>
                                             </div>
                                             <div class="our-partner-tab-box-text-right">
                                              <div class="custom-btn-2 find-out-more-btn">
                                                <a href="<?php the_sub_field('button_left'); ?>" target="_blank">
                                                  <button class="btnDefault"> <span><?php the_sub_field('button_left_name'); ?></span> <span class="ps-2"> <img loading="lazy" alt="image"
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/next-arrow1.png" class="right-arrow"></span>
                                                  </button>
                                                </a>
                                              </div>
                                              <div class="custom-btn-2 our-contact-btn">
                                                <a href="<?php the_sub_field('button_right'); ?>">
                                                  <button class="btnDefault"> <span><?php the_sub_field('button_right_name'); ?></span> <span class="ps-2"> <img loading="lazy" alt="image"
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/next-arrow1.png" class="right-arrow"></span>
                                                  </button>
                                                </a>
                                              </div>
                                             </div>
                                          </div>
                                        </div>
                                      
                                    </div>
                                </div>
                                
                             </div>
                             <?php endwhile; ?>
                             <?php endif; ?> 
                    </div>  

                    </div>
                  </section>
      
                </div>
        </div>
     </div>
     </div>
    </div>
</section>


 

<section class="donate-sec ">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="donate-main text-center donate-sec-container">
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

<?php get_footer(); ?>