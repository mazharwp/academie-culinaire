<?php
/*
Template Name: Your Member Page
*/

if (!is_user_logged_in() ) {
   $redirect_url = home_url('/member-access/my-member-area/');
    wp_redirect($redirect_url);
    exit();
} 

get_header(); 

require 'inner.php';
?>



  <section class="member-info section-gap mb-5 about-company-quotes-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
         
	<div class="tab-content" id="nav-tabContent">
		<div class="tab-pane fade show active" id="usaMembers" role="tabpanel" aria-labelledby="usaMembers-tab" tabindex="0">
		
			<section class="member-chefs">
				<div class="container">					
					<?php if( have_rows('your_member') ): ?>
						<?php while( have_rows('your_member') ): the_row(); ?>
							
							<div class="chefs-main">
								<div class="row">
									<?php if( have_rows('member_chefs') ): ?>
										<?php while( have_rows('member_chefs') ): the_row(); ?>
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
																		<h5><?php the_sub_field('member_title'); ?></h5>
																		<h2><?php the_sub_field('member_description'); ?></h2>
																	</div>
																	<div class="custom-btn-3">
																		<a href="<?php the_sub_field('button_link'); ?>" target="_blank" >
																		
											
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