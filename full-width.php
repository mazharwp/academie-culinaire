<?php
/*
Template Name: Full Width Template
*/
get_header();

require 'tpl/inner.php';
?>

<style>
.quotes-content {
    padding: 50px 0px 50px 0px;
}
div#gallery-1 {
    display: grid;
   grid-template-columns: repeat(4, 1fr);
    gap: 8px;
}
img.attachment-medium.size-medium {
    width: 330px;
    height: 220px;
}
</style
    
<section class="about-company-quotes">
    <div class="container">
        <div class="row">
            <div class="quotes-content align-self-center">
                <?php
                // Check if the Flexible Content field has rows of data
                if ( have_rows('flexible_content') ) :
                    // Loop through the rows of data
                    while ( have_rows('flexible_content') ) : the_row();
                
                        // Case: Content layout
                        if ( get_row_layout() == 'content' ) :
                            $text = get_sub_field('text');
                            $image = get_sub_field('images');
                            ?>
                            <div class="content-layout">
                                <?php echo wp_kses_post($text); ?>
                                
                                <?php 
                                if ( $image ) {
                                    // Output the image using its URL or ID
                                    if ( isset($image['ID']) ) {
                                        echo wp_get_attachment_image($image['ID'], 'full', array('class' => 'img-fluid'));
                                    } else {
                                        echo '<img src="' . esc_url($image['url']) . '" class="img-fluid" alt="' . esc_attr($image['alt']) . '">';
                                    }
                                }
                                ?>

                            </div>
                            <?php

                        // Case: Download layout
                        elseif ( get_row_layout() == 'download' ) : 
                            $file = get_sub_field('file');
                            $button_label = get_sub_field('button_label');
                            ?>
                            
                    
                            <div class="download">
                                <div class="custom-btn-2">
                                   <a href="<?php echo esc_url($file['url']); ?>">
                                        <button class="btnDefault">
                                            <span><?php echo esc_html($button_label); ?></span>
                                            <span class="ps-2">
                                                <img loading="lazy" alt="Arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/white-right-arrow.svg" class="right-arrow change-img1">
                                                <img loading="lazy" alt="Arrow" src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg" class="right-arrow change-img2">
                                            </span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <div class="gallery-images">
                                <?php if( have_rows('gallery') ): ?>
                                    <?php while( have_rows('gallery') ): the_row(); ?>
                                        <div class="item">
                                            <div class="banner-img">
                                                <?php 
                                                    $image = get_sub_field('gallery_images');
                                                    if( $image ): 
                                                        $image_url = $image['url']; // or use $image['sizes']['thumbnail'] for specific sizes
                                                        $image_alt = $image['alt']; 
                                                ?>
                                                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>" />
                                                <?php else: ?>
                                                    <p>No image found.</p>
                                                <?php endif; ?>
                       
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php else: ?>
                                   
                                <?php endif; ?>
                                
                            </div>
                            
                            
                            <?php
                        endif;
                
                    // End loop
                    endwhile;
                
                // No value
                else :
                    ?>
                    <p>No content available.</p>
                    <?php
                endif;
                ?>
            </div>
        </div>
    </div>
</section>



<section class="exceptional-partners">
    <div class="container">
        <div class="exceptional-partners-text">
            <div class="row">
                <div class="col-lg-12">
                    <?php if (have_rows('partner_content')): ?>
                        <?php while (have_rows('partner_content')): the_row(); ?>
                            <?php if (get_row_layout() == 'partner_tab'): // Replace 'your_layout_name' with the layout name you want to display ?>
                                <h6><?php the_sub_field('partner_title'); ?></h6>
                                <p><?php the_sub_field('partner_description'); ?></p>
                            <?php endif; ?>
                            <!-- Add additional layouts and their fields as needed -->
                        <?php endwhile; ?>
                    <?php else: ?>
                        <!-- No flexible content found -->
                        <h6>No content available</h6>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>




<?php require 'tpl/brand-logo.php'; ?>

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