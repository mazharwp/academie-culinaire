<?php
/*
Template Name: Opportunity
*/
get_header();

require 'inner.php';
?>



    <!-- 3 -->
    <section class="intro-sec section-gap" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="2000">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="news-intro-container news-intro-container-border">
                        <p><?php the_field('description'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4 -->

   <div class="container-fluid">
   <div class="row justify-content-center">
      <div class="white-detail-stripe"></div>
      		<div class="col-lg-8">
		        <div class="content-box">
		        	<div class="sk-ww-linkedin-page-post" data-embed-id="57084"></div>
<script src="https://www.sociablekit.com/app/embed/linkedin-page-post/widget.js" async="" defer=""></script>
				</div>

			</div>	
					
		</div>
	</div>
    </div>

  
 
	<!--5-->
   <section class="donate-sec donate-sec-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="donate-main donate-main-recipe text-center">
                        <div class="donate-content donate-content-recipe text-center mobile-view">
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


<?php get_footer();  ?>