 <section class="francois-chef-banner-sec">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 px-0">
                        <div class="owl-carousel owl-theme francois-chef-slider">                              

                                    <?php if( have_rows('banner_slider', 'option') ): ?>
                                        <?php while( have_rows('banner_slider', 'option') ): the_row(); ?>
                                            <div class="item">
                                                <img src="<?php the_sub_field('slider_images12'); ?>" alt="slider" class="img-fluid">
                                                <h5><?php the_sub_field('slidet_text'); ?></h5>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                            
                        </div>                    
                    </div>
                </div>
            </div>
    </section>