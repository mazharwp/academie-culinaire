<section class="donate-sec donate-detail-sec donate-sec-inner">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="donate-main donate-main-award text-center">
          <div class="donate-content donate-content-recipe text-center mobile-view">
            <h2><?php the_field('donate_name', 'option'); ?></h2>
                <h5><?php the_field('donate_title', 'option'); ?></h5>
                <p><?php the_field('donate_description', 'option'); ?></p>
            <div class="custom-btn-2">
                <a href="<?php the_field('donate_button_link1', 'option'); ?>">
                <button class="btnDefault">
                <span><?php the_field('donate_button', 'option'); ?></span>
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
    </div>
  </div>
</section>