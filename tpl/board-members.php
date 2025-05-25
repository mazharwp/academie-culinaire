<?php
/*
Template Name: Board Members
*/
get_header(); 

require 'inner.php';
?>

 <!--  <section class="our-members position-relative section-gap">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-12 col-12">
          <div class="about-content our-member-content">
            <div class="desc">
              <h2><center><?php the_field('description'); ?></center></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </section> -->

  <section class="member-info section-gap mb-0 about-company-quotes-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
         
	<div class="tab-content" id="nav-tabContent">
		<div class="tab-pane fade show active" id="usaMembers" role="tabpanel" aria-labelledby="usaMembers-tab" tabindex="0">
		
			<section class="member-chefs">
				<div class="container">					
					<?php if( have_rows('board_members') ): ?>
						<?php while( have_rows('board_members') ): the_row(); ?>
							
							<div class="chefs-main">
								<div class="row">
									<?php if( have_rows('member_information') ): ?>
										<?php while( have_rows('member_information') ): the_row(); ?>
											<div class="col-lg-6">
												<div class="member-chef-box">
													<div class="card mb-3 light-red">
														<div class="row g-0">
															<div class="col-md-6 chefs-card-img">
																<?php $image = get_sub_field('member_image'); ?>
																<img loading="lazy"src="<?php echo $image['url']; ?>" class="img-fluid" alt="<?php echo $image['alt']; ?>">
															</div>
															<div class="col-md-6">
																<div class="card-body">
																	<div class="chefs-card-content">
																		
																		<h5><?php the_sub_field('member_text'); ?></h5>
																		<h2><?php the_sub_field('member_chefs_title'); ?></h2>
																	</div>
																	<div class="custom-btn-3">
																		<a href="<?php the_sub_field('member_button_link'); ?>" target="_blank" >
																		
											
																			<button class="btnDefault"> 
																				<span><?php the_sub_field('member_button'); ?></span>
																				<span class="ps-2">
																					<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg" class="right-arrow" alt="<?php echo $image['alt']; ?>" >
																				</span>
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
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</section>

		</div>
	   
			  </div>
		   </div>
		 </div>
		</div>
  </section>

<?php require 'botton-news.php'; ?>
  
<?php get_footer(); ?>