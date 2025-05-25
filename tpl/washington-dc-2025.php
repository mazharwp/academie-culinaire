<?php
/*
Template Name: Washington DC 2025
*/
get_header();

require 'inner.php';

?>

<style>
section.page-banner.page-border {
    display: none;
}

.justify-content-center {
    justify-content: center !important;
    top: -30px;
    position: relative;
}
.trophy-roland-chef-txt-info p {
    color: rgba(19, 29, 58, 0.95);
    font-size: 25px;
    font-weight: 400;
    line-height: 42px;
    margin-bottom: 0;
}
.trophy-roland-sec-container {
    padding: 70px 0 0 0 !important;
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
.quebec-video-box-txt {
    display: none;}

.criteria-btns1 {
    width: 70%;
}

.criteria-btns .custom-btn-2 .btnDefault {
    width: 300px;
}
.custom-btn-2 {
    padding: 10px;
}
</style>


    <section class="quebec-city-sec" style="background-image:linear-gradient(90deg, #047422 0%, #047422 0.01%, rgba(153, 132, 115, 0.00) 100%), url(<?php the_field('page_banner'); ?>); ?>">
        <div class="container-fluid">
            <div class="guest-banner-sec quebec-city">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="guest-banner-info quebec-city-info">
                            <div class="custom-btn-2">
                                    <button class="btnDefault" onclick="goBack()">
                                        <span class="pe-3">
                                           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-left-arrow.png" class="right-arrow change-img1">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-left-green-arrow.png" class="right-arrow change-img2">
                                        </span>
                                        <span>Back</span>
                                    </button>
                            </div>

                            <h5><?php the_field('date'); ?></h5>
                            <h1><?php the_field('page_title'); ?></h1>
                        </div>
                    </div>
                </div>
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
                                    <p style="text-align:center; font-size: 18px; line-height: 35px;"><?php the_field('description'); ?></p>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="quebec-video-container">
        <div class="container-fluid">
            <div class="quebec-video-box">
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="quebec-city-blog-sec">
        <div class="container-fluid">
            <div class="quebec-city-blog-info">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="quebec-city-blog-info-left">
                            <h3><?php the_field('section_title'); ?></h3>
                            <?php the_field('section_description'); ?>
                           <div class="custom-btn-2">
                                <?php if (have_rows('button_type_section1')) : ?>
                                    <?php while (have_rows('button_type_section1')) : the_row(); ?>
                                        <a href="<?php the_sub_field('button_link112'); ?>">
                                            <button class="btnDefault">
                                                <span><?php the_sub_field('button_title112'); ?></span>
                                                <span class="ps-2">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/white_arrow.svg" class="right-arrow change-img1">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/black-arrow.svg" class="right-arrow change-img2">
                                                </span>
                                            </button>
                                        </a>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 px-0">
                        <div class="quebec-city-blog-info-right">
                            <img src="<?php the_field('right_images'); ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="quebec-city-blog-sec quebec-city-blog-sec2">
        <div class="container-fluid">
            <div class="quebec-city-blog-info">
                <div class="row">
                    <div class="col-lg-6 px-0">
                        <div class="quebec-city-blog-info-right">
                            <img src="<?php the_field('left_images'); ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="quebec-city-blog-info-left">
                            <h3><?php the_field('title2'); ?></h3>
                            <?php the_field('description2'); ?>
                            
                                <section class="criteria-btn-group">
                                    <div class="container-fluid">
                                        <div class="criteria-btn-group-info">
                                            <div class="criteria-btns">
                                                <?php if( have_rows('button_type') ): ?>
                                                    <?php while( have_rows('button_type') ): the_row(); ?>
                                                        <div class="custom-btn-2">
                                                            <a href="<?php the_sub_field('button_link112'); ?>" target="_blank">
                                                                <button class="btnDefault">
                                                                    <span><?php the_sub_field('button_title112'); ?></span>
                                                                    <span class="ps-2">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/white_arrow.svg" class="right-arrow change-img1">
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/black-arrow.svg" class="right-arrow change-img2">
                                                                    </span>
                                                                </button>
                                                            </a>
                                                        </div>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </section>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
     <section class="trophy-roland-sec-container">
        <div class="container-fluid">
            <div class="the-jean-chef">
                <div class="trophy-roland-chef-txt">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="trophy-roland-chef-txt-info" style="text-align: center;">
                                    <h2 class="qualify"><?php the_field('video_title111'); ?></h2>
                                        <div class="quebec-video-box-txt1">
                                            <?php if( have_rows('video_section') ): ?>
                                                <div class="row">
                                                    <?php 
                                                    $counter = 0; 
                                                    while( have_rows('video_section') ): the_row(); 
                                                    ?>
                                                    <div class="col-12 col-md-6">
                                                        <?php if( get_sub_field('video_url') ): ?>
                                                            <!-- Local or uploaded video -->
                                                            <video class="myVideo" controls muted poster="<?php the_sub_field('you_tube_images'); ?>">
                                                                <source src="<?php the_sub_field('video_url'); ?>" type="video/mp4">
                                                            </video>
                                                            <span class="play-btn">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Video_duotone.png" alt="video" class="img-fluid">
                                                            </span>
                                        
                                                        <?php elseif( get_sub_field('you_tube') ): ?>
                                                            <!-- Display YouTube video using the iframe -->
                                                            <?php
                                                            $youtube_url = get_sub_field('you_tube');
                                                            parse_str( parse_url( $youtube_url, PHP_URL_QUERY ), $youtube_params );
                                                            $youtube_id = isset($youtube_params['v']) ? $youtube_params['v'] : basename($youtube_url); // Get video ID
                                                            $embed_url = 'https://www.youtube.com/embed/' . esc_attr( $youtube_id );
                                                            ?>
                                                            <iframe width="100%" height="315" src="<?php echo esc_url( $embed_url ); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        
                                                        <?php elseif( get_sub_field('you_tube_images') ): ?>
                                                            <!-- Display YouTube thumbnail image -->
                                                            <img src="<?php the_sub_field('you_tube_images'); ?>" alt="YouTube image" class="single-images">
                                                        
                                                        <?php endif; ?>
                                                    </div>
                                        
                                                    <?php
                                                    // Increment counter and close/open a new row after 2 items
                                                    $counter++;
                                                    if( $counter % 2 == 0 ): ?>
                                                        </div><div class="row"> <!-- Close current row and open a new one -->
                                                    <?php endif; ?>
                                        
                                                    <?php endwhile; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="criteria-btn-group">
        <div class="container-fluid">
            <div class="criteria-btn-group-info">
                
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

<script>
function goBack() {
    window.history.back();
}
</script>

<?php get_footer();  ?>