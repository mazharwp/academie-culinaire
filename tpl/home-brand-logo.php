<section class="client-logo">
    <div class="client-logo-slider">
        <div class="clients-carousel owl-carousel">
            <?php if( have_rows('logo_banner', 'option') ): ?>
            <?php while( have_rows('logo_banner', 'option') ): the_row(); ?>
            <div class="item">
                <div class="client-logo-box">
                    <a href="<?php the_sub_field('logo_banner_url1'); ?>" target="_blank">
                        <img loading="lazy" src="<?php the_sub_field('logo_image'); ?>" alt="Brand logo" />
                    </a>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>