<?php

/*

Template Name: Our Chefs Members

*/

get_header(); 
require 'inner.php';
?>

<section class="our-members position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 col-12">
                <div class="about-content our-member-content">
                    <div class="desc">
                        <p><?php the_field('description'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="watermark-img">
        <img loading="lazy" alt="<?php echo $image['alt']; ?>" src="<?php echo get_template_directory_uri(); ?>/assets/img/watermarkacf.png"
            class="img-fluid">
    </div>

</section>


<section class="member-info section-gap mb-0 about-company-quotes-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="usaMembers-tab" data-bs-toggle="pill"
                            data-bs-target="#usaMembers" type="button" role="tab" aria-controls="usaMembers"
                            aria-selected="true"><span class="pe-3"> <img loading="lazy" alt="<?php echo $image['alt']; ?>"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/our-members/usa-flage.png"
                                    alt="<?php echo $image['alt']; ?>">
                            </span> <?php echo __('USA Members', 'textdomain'); ?>
                        </button>

                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="canadaMembers-tab" data-bs-toggle="pill"
                            data-bs-target="#canadaMembers" type="button" role="tab" aria-controls="canadaMembers"
                            aria-selected="false"><span class="pe-3"> <img loading="lazy" alt="<?php echo $image['alt']; ?>"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/our-members/canada-flage.png"
                                    alt="<?php echo $image['alt']; ?>">
                            </span> <?php echo __('Canada Members', 'textdomain'); ?>
                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="retiredMembers-tab" data-bs-toggle="pill"
                            data-bs-target="#retiredMembers" type="button" role="tab" aria-controls="retiredMembers"
                            aria-selected="false"><span class="pe-3"> <img loading="lazy" alt="<?php echo $image['alt']; ?>"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/our-members/retired.png"
                                    alt="<?php echo $image['alt']; ?>">
                            </span> <?php echo __('Retired Members', 'textdomain'); ?>
                        </button>
                    </li>

                </ul>

<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="usaMembers" role="tabpanel" aria-labelledby="usaMembers-tab" tabindex="0">
        <section class="member-chefs">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-3 col-md-8 col-8">
                        <div class="member-chefs-title">
                            <h2><?php the_field('usa_member111'); ?></h2>
                        </div>
                    </div>
                        <div class="col-lg-2 col-md-4 col-4 d-flex justify-content-end">
                            <div class="select-menu active">
                                <div class="select-btn">
                                    <span class="dropdown-text" id="usa_state_name"><?php the_field('option_title111'); ?></span>
                                        <span><img loading="lazy" alt="<?php echo $image['alt']; ?>" src="<?php echo get_template_directory_uri(); ?>/assets/img/our-members/down-arrow.svg"></span>
                                </div>
                                    <ul class="options" id="usa_state_list"> </ul>
                            </div>
                        </div>
                </div>

            <?php
			$parent_terms = get_terms(array(
				'taxonomy' => 'country',
				'parent' => 73,
				'hide_empty' => false,
			));

			foreach ($parent_terms as $parent_term) {
				// Query posts for each parent term
				$args = array(
					'post_type' => 'our_staff',
					'posts_per_page' => -1,
					'orderby' => 'date',
                    'order' => 'ASC', 
					'tax_query' => array(
						array(
							'taxonomy' => 'country',
							'field' => 'term_id',
							'terms' => $parent_term->term_id,
						),
					),
				);
				$staff_query = new WP_Query($args);

				if ($staff_query->have_posts()) {
					echo '<div class="boardMember" id="' . esc_attr(strtolower(str_replace(' ', '_', $parent_term->name))) . '">';
					echo '<div class="row">';
					echo '<div class="col-lg-12">';
					echo '<div class="sec-title position-relative">';
					echo '<p>' . esc_html($parent_term->name) . '</p>';
					echo '</div>';
					echo '</div>';
					echo '</div>';
					echo '<div class="chefs-main">';
					echo '<div class="row">';

					while ($staff_query->have_posts()) {
					$staff_query->the_post();
            ?>
            <div class="col-lg-6">
                <div class="member-chef-box">
                    <div class="card light-red">
                        <div class="row g-0">
                            <div class="col-md-6 chefs-card-img">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img loading="lazy" src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid" alt="<?php the_title_attribute(); ?>">
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="chefs-card-content">
                                        <h5><?php the_title(); ?></h5>
                                        <?php
                                        $subtitle = get_post_meta(get_the_ID(), '_our_staff_subtitle', true);
                                        if (!empty($subtitle)) {
                                            echo '<p>' . esc_html($subtitle) . '</p>';
                                        }
                                        ?>
                                       <h2><?php echo strip_tags(get_the_content()); ?></h2>
                                    </div>
                                    <?php
								
                                    $third_party_url = get_post_meta(get_the_ID(), '_staff_third_party_url', true);
                                    if (!empty($third_party_url)) :
                                        ?>
                                        <div class="custom-btn-3">
                                            <a href="<?php echo esc_url($third_party_url); ?>" target="_blank">
                                                <button class="btnDefault">
                                                    <span><?php echo get_field('website_button', 'option'); ?></span>
                                                    <span class="ps-2">
                                                        <img loading="lazy" alt="Arrow" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/right-arrow.svg'); ?>" class="right-arrow">
                                                    </span>
                                                </button>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
				}
				echo '</div>'; // close .row
				echo '</div>'; // close .chefs-main
				echo '</div>'; // close .boardMember

				wp_reset_postdata();
			}
		}
			?>

			<?php

				$parent_terms = get_terms(array(
				'taxonomy' => 'country',
				'parent' => 73,
				'hide_empty' => false,
			));

			if (!empty($parent_terms) && !is_wp_error($parent_terms)) {
$state_list_html = '<li class="option" data-target="all"><span><img loading="lazy" alt="right arrow" src="' . get_template_directory_uri() . '/assets/img/right-arrow.svg"></span><span class="option-text">' . get_field('option_title111') . '</span></li>';

				foreach ($parent_terms as $state) {
					$state_slug = strtolower(str_replace(" ", "_", $state->name));
					$state_list_html .= '<li class="option" data-target="'. $state_slug .'"><span><img loading="lazy" alt="right arrow" src="'.get_template_directory_uri().'/assets/img/right-arrow.svg"></span><span class="option-text">'. $state->name .'</span></li>';
				}
			}
                    ?>
                   
               </div> 
        </section>
    </div>

    <!--Canada Member-->

            <div class="tab-pane fade" id="canadaMembers" role="tabpanel" aria-labelledby="canadaMembers-tab" tabindex="0">
                <section class="member-chefs">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-3">
                                <div class="member-chefs-title">
                                    <h2><?php the_field('canada_member111'); ?></h2>
                                </div>
                            </div>
                            <div class="col-lg-2 d-flex justify-content-end">
                                <div class="select-menu active">
                                    <div class="select-btn">
                                                <span class="dropdown-text"><?php the_field('option_title111'); ?></span>
                                                <span><img loading="lazy" alt="<?php echo $image['alt']; ?>"
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/our-members/down-arrow.svg"></span>

                                    </div>
                                    <ul class="options" id="canada_state_list"></ul>
                                </div>
                            </div>
                        </div>
                       <?php

			$parent_terms = get_terms(array(
				'taxonomy' => 'country',
				'parent' => 72,
				'hide_empty' => false,
			));

			// Loop through each parent term
			foreach ($parent_terms as $parent_term) {
				// Query posts for each parent term
				$args = array(
					'post_type' => 'our_staff',
					'posts_per_page' => -1,
					'orderby' => 'date',
                    'order' => 'ASC',
					'tax_query' => array(
						array(
							'taxonomy' => 'country',
							'field' => 'term_id',
							'terms' => $parent_term->term_id,
						),
					),
				);
			$staff_query = new WP_Query($args);

			if ($staff_query->have_posts()) {
				// Output the boardMember section for each parent term
				echo '<div class="boardMember" id="' . esc_attr(strtolower(str_replace(' ', '_', $parent_term->name))) . '">';
				echo '<div class="row">';
				echo '<div class="col-lg-12">';
				echo '<div class="sec-title position-relative">';
				echo '<p>' . esc_html($parent_term->name) . '</p>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
				echo '<div class="chefs-main">';
				echo '<div class="row">';

				// Loop through each post and output its content
				while ($staff_query->have_posts()) {
					$staff_query->the_post();
					?>
            <div class="col-lg-6">
                <div class="member-chef-box">
                    <div class="card light-red">
                        <div class="row g-0">
                            <div class="col-md-6 chefs-card-img">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img loading="lazy" src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid" alt="<?php the_title_attribute(); ?>">
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="chefs-card-content">
                                        <h5><?php the_title(); ?></h5>
                                        <?php
                                        $subtitle = get_post_meta(get_the_ID(), '_our_staff_subtitle', true);
                                        if (!empty($subtitle)) {
                                            echo '<p>' . esc_html($subtitle) . '</p>';
                                        }
                                        ?>
                                        <h2><?php echo strip_tags(get_the_content()); ?></h2>
                                    </div>
                                    <?php
                                    $third_party_url = get_post_meta(get_the_ID(), '_staff_third_party_url', true);
                                    if (!empty($third_party_url)) :
                                        ?>
                                        <div class="custom-btn-3">
                                            <a href="<?php echo esc_url($third_party_url); ?>" target="_blank">
                                                <button class="btnDefault">
                                                    <span><?php echo get_field('website_button', 'option'); ?></span>
                                                    <span class="ps-2">
                                                        <img loading="lazy" alt="Arrow" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/right-arrow.svg'); ?>" class="right-arrow">
                                                    </span>
                                                </button>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        echo '</div>'; // close .row
        echo '</div>'; // close .chefs-main
        echo '</div>'; // close .boardMember

        wp_reset_postdata();
				}
			}
			?>
			<?php

				$parent_terms = get_terms(array(
				'taxonomy' => 'country',
				'parent' => 72,
				'hide_empty' => false,
			));

			if (!empty($parent_terms) && !is_wp_error($parent_terms)) {
				$state_list_html1 = '<li class="option" data-target="all"><span><img loading="lazy" alt="right arrow" src="' . get_template_directory_uri() . '/assets/img/right-arrow.svg"></span><span class="option-text">' . get_field('option_title111') . '</span></li>';

				foreach ($parent_terms as $state) {
					$state_slug = strtolower(str_replace(" ", "_", $state->name));
					$state_list_html1 .= '<li class="option" data-target="'. $state_slug .'"><span><img loading="lazy" alt="right arrow" src="'.get_template_directory_uri().'/assets/img/right-arrow.svg"></span><span class="option-text">'. $state->name .'</span></li>';
				}
			}
				?>
            </div>
        </section>
    </div>

    <!--Retired Member-->
    <div class="tab-pane fade" id="retiredMembers" role="tabpanel" aria-labelledby="retiredMembers-tab" tabindex="0">
        <section class="member-chefs">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-3">
                            <div class="member-chefs-title">
                                <h2><?php the_field('retired_member111'); ?></h2>
                            </div>
                        </div>
                    </div>
            <div class="row">
                <div class="col-lg-12">
                   <div class="sec-title position-relative">
                        <p>Members</p>
                    </div>
                </div>
             </div>
    <div class="chefs-main">
        <div class="row">
		<?php
		// Query posts for the specific country term ID 72
		$selected_term_id = 71; // The term ID for your desired taxonomy
		$args = array(
			'post_type' => 'our_staff',
			'posts_per_page' => -1,
			'orderby' => 'date',
            'order' => 'ASC',
			'tax_query' => array(
				array(
					'taxonomy' => 'country',
					'field'    => 'term_id',
					'terms'    => $selected_term_id,
				),
			),
			'orderby' => 'date', // Order by post date
			'order'   => 'ASC', // Ascending order
		);

		$query = new WP_Query($args);

		if ($query->have_posts()) :
			while ($query->have_posts()) : $query->the_post();
				$third_party_url = get_post_meta(get_the_ID(), '_staff_third_party_url', true);
        ?>
        <div class="col-lg-6">
            <div class="member-chef-box">
                <div class="card light-red">
                    <div class="row g-0">
                        <div class="col-md-6 chefs-card-img">
                            <?php if (has_post_thumbnail()) : ?>
                                <img loading="lazy" src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="chefs-card-content">
                                    <h5><?php the_title(); ?></h5>
                                    <?php
                                    $subtitle = get_post_meta(get_the_ID(), '_our_staff_subtitle', true);
                                    if (!empty($subtitle)) {
                                        echo '<p class="staff-subtitle">' . esc_html($subtitle) . '</p>';
                                    }
                                    ?>
                                    <div class="content">
                                        <?php echo '<h2>' . strip_tags(get_the_content()) . '</h2>'; ?>
                                    </div>
                                </div>
                                <?php
                                if (!empty($third_party_url)) :
                                    ?>
                                    <div class="custom-btn-3">
                                        <a href="<?php echo esc_url($third_party_url); ?>" target="_blank">
                                            <button class="btnDefault">
                                                <span><?php echo get_field('website_button', 'option'); ?></span>
                                                <span class="ps-2">
                                                    <img loading="lazy" alt="Arrow" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/right-arrow.svg'); ?>" class="right-arrow">
                                                </span>
                                            </button>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    endwhile;
endif;
wp_reset_postdata();
?>

                          </div>
                      </div>       
                   </div>
                </section>
            </div> 
         <!--end Retired -->

        </div>
       </div>
      </div>
    </div>
</section>


<?php require 'botton-news.php'; ?>


<script>
    var state_list_html = '<?php echo $state_list_html; ?>';
    console.log(state_list_html);
    document.getElementById('usa_state_list').innerHTML=state_list_html;
    var state_list_html1 = '<?php echo $state_list_html1; ?>';
    console.log(state_list_html1);
    document.getElementById('canada_state_list').innerHTML=state_list_html1;
</script>
<?php get_footer(); ?>