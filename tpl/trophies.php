<?php
/*
Template Name: Trophies Page
*/
get_header();

require 'inner.php';
?>

<style>
.finalists-video-sec1 iframe {
    height: 600px;
}
   .video-container {
            position: relative;
            width: 100%;
            left: -12px;
        }

        .video-container iframe {
            width: 100%;
          
        }

        .overlay-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
             
        }
        .mos1 {
            border-radius: 0 0 0 50px;
            max-width: 100%;
            height: 450px;
            width: 432px;
            margin: 0 0 0 7px;
        }
        .mos2 {
            max-width: 100%;
            height: 450px;
            width: 432px;
            border-radius: 0 0 50px 0;
        }


</style>

<section class="trophies-info position-relative section-gap">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="about-content our-member-content">
          <div class="desc">
            <p><?php the_field('trophies_description'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  <!---<div class="watermark-img">
    <img src="<?php the_field('trophies_watermark_image'); ?>" class="img-fluid">
  </div> -->
  
</section>


 <section class="trophies-video section-gap pt-0">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="finalists-video-sec1 video-container">
            <?php if ( get_field( 'video_url' ) ): ?>
                <!-- Video with thumbnail -->
                <video id="youtube-video" controls muted poster="<?php the_field('you_tube_images'); ?>">
                    <source src="<?php the_field('video_url'); ?>" type="video/mp4">
					<img src="<?php the_field('you_tube_images'); ?>" alt="Italian Trulli" class="overlay-image" onclick="playVideo()" />
                </video>
				
                <?php elseif ( get_field( 'you_tube' ) ): ?>
				<!-- YouTube iframe -->
                <iframe id="youtube-video" width="100%" height="100%" src="<?php the_field('you_tube'); ?>" frameborder="0" allowfullscreen></iframe>
                <!---<span class="play-btn overlay-image1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Video_duotone.png" alt="video" class="img-fluid" ></span> -->
				<img src="<?php the_field('you_tube_images'); ?>" alt="Italian Trulli" class="overlay-image" onclick="playVideo()" />
				<?php elseif ( get_field( 'you_tube_images' ) ): ?>
                
            <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

 <script>
        function playVideo() {
            var iframe = document.getElementById('youtube-video');
            var overlayImage = document.querySelector('.overlay-image');
            overlayImage.style.display = 'none';
            var player = new YT.Player(iframe, {
                events: {
                    'onReady': function(event) {
                        event.target.playVideo();
                    }
                }
            });
        }
        
        // Load the YouTube API script
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    </script>
<!---section code-->
      <?php if( have_rows('the_academy_section') ): ?>
        <?php $count = 0; ?>
        <?php $total_rows = count(get_field('the_academy_section')); ?>
        <?php while( have_rows('the_academy_section') ): the_row(); ?>
          <?php
            $count++;
            $section_image = get_sub_field('section_imge111');
            $section_title = get_sub_field('section_title111');
            $section_description = get_sub_field('section_description111');
            $section_button_name = get_sub_field('section_button_name111');
            $section_button_link = get_sub_field('section_button_link111');
            $background_class = ($count % 2 == 0) ? 'light-red' : 'light-blue';
            $additional_class = ($count === $total_rows) ? 'about-company-quotes-2' : ''; // Apply only to the last one
            $image_class = ($count % 2 == 1) ? 'mos1' : 'mos2'; // Alternating classes for images
          ?>
          <section class="award-sec section-gap pt-0 <?php echo $additional_class; ?>">
            <div class="container-fluid">
              <div class="row <?php echo ($count % 2 == 0) ? 'justify-content-end' : 'justify-content-start'; ?>">
                <div class="col-lg-10 g-0">
                  <div class="card award-card mb-0 <?php echo $background_class; ?>">
                    <div class="row g-0 <?php echo ($count % 2 == 0) ? '' : 'justify-content-end'; ?>">
                      <?php if($count % 2 == 0): ?>
                        <div class="col-lg-4 col-md-6 col-12">
                          <img loading="lazy" alt="image" src="<?php echo esc_url($section_image); ?>" class="img-fluid <?php echo $image_class; ?>">
                        </div>
                      <?php endif; ?>
                      <div class="col-lg-8 col-md-6 col-12 d-flex">
                        <div class="card-body align-self-center pl-83 pr-9rem award-card-cbody2">
                          <h5 class="card-title"><?php echo esc_html($section_title); ?></h5>
                          <p class="card-text"><?php echo esc_html($section_description); ?></p>
                          <div class="card-btn">
                            <div class="custom-btn-2">
                              <a href="<?php echo esc_url($section_button_link); ?>" target="_blank">
                                <button class="btnDefault"> <span><?php echo esc_html($section_button_name); ?></span>
                                  <span class="ps-2">
                                    <img loading="lazy" alt="image"
                                      src="<?php echo get_template_directory_uri(); ?>/assets/img/white-right-arrow.svg"
                                      class="right-arrow change-img1">
                                    <img loading="lazy" alt="image"
                                      src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg"
                                      class="right-arrow change-img2">
                                  </span>
                                </button>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php if($count % 2 != 0): ?>
                        <div class="col-lg-4 col-md-6 col-12">
                          <img loading="lazy" alt="image" src="<?php echo esc_url($section_image); ?>" class="img-fluid <?php echo $image_class; ?>">
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        <?php endwhile; ?>
      <?php endif; ?>



<?php require 'make-donation'; ?>
<?php require 'botton-news.php'; ?>

<?php get_footer();  ?>