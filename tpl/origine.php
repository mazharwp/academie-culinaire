<?php
/*
Template Name: Origine
*/
get_header();

require 'inner.php';
?>

<style>
    p.border1:before {
    width: 3px;
    position: absolute;
    left: 40px;
    content: '';
    top: 75px;
    height: 60px;
    background-color: #FFA054;
}
</style>

<section class="stories-sec">
    <?php if (have_rows('section')) : ?>
        <?php 
        $index = 0; // Initialize an index to track the loop iteration
        while (have_rows('section')) : the_row(); 
            $index++;
            // Assign background color based on the index
            $background_color = ($index == 1) ? '#F8EEF3' : (($index == 2) ? '#FEE7D5' : '#ECF6F0');
        ?>
            <div class="container-fluid" data-aos="fade-down" data-aos-duration="2000">
                <div class="row justify-content-<?php echo ($index % 2 == 0) ? 'end' : 'start'; ?>">
                    <div class="col-lg-10">
                        <div class="story" style="background-color:<?php echo $background_color; ?>;">
                            <div class="row">
                                <?php if ($index % 2 != 0) : ?>
                                    <div class="col-lg-5 ps-lg-0 story-img-left-container" style="background-image:url(<?php the_sub_field('image'); ?>)">
                                        <div class="story-img-container">
                                            <img class="img-fluid" src="<?php the_sub_field('image'); ?>" alt="story image">
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <p class="border1" style="font-weight: 600; font-size: 20px;"><?php the_sub_field('title'); ?></p>
                                        <?php the_sub_field('description'); ?>
                                    </div>
                                <?php else : ?>
                                    <div class="col-lg-7">
                                        <p class="border1" style="font-weight: 600; font-size: 20px;"><?php the_sub_field('title'); ?></p>
                                        <?php the_sub_field('description'); ?>
                                    </div>
                                    <div class="col-lg-5 story-img-right-container" style="background-image:url(<?php the_sub_field('image'); ?>)">
                                        <div class="story-img-container">
                                            <img class="img-fluid" src="<?php the_sub_field('image'); ?>" alt="story image">
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>


   <section class="donate-sec donate-sec-inner">
			<div class="container">
			  <div class="row">
				<div class="col-lg-12">
				  <div class="donate-main text-center">
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
   

<?php get_footer();  ?>