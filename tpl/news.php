<?php
/*
Template Name: News
*/
get_header();
require 'inner.php';
?>

<style>
.news-sec .pagination{
	display: flex;
    justify-content: center;
    gap: 20px;
    margin: 20px 0px;
}
	
	.news-sec .pagination span.page-numbers{
		color:#000 !important;
	}
  a.page-numbers {
    border: 1px solid;
    padding: 10px;
}
.news-sec .pagination span.page-numbers {
    border: 1px solid;
    padding: 10px;
}
.news-sec .pagination span.page-numbers.current {
    background: #047422;
    color: #fff !important;
}

</style>

<!-- 3 -->
<section class="intro-sec section-gap intro-sec-img" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="2000">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="news-intro-container">
          <p><?php the_field('description'); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 4 -->

<section class="news-sec">
  <div class="container">
    <div class="row">
      <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
          'post_type' => 'post',
          'category_name' => 'news-awards', // Specify the category slug here
          'posts_per_page' => 10, // Display 10 posts per page
          'paged' => $paged
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
          $post_counter = 1;
          while ($query->have_posts()) : $query->the_post();        
          
          if ($post_counter < 5) { // Large card every 5 posts
        ?>

          <div class="col-lg-6 col-md-6" data-aos="fade-down" data-aos-duration="1500">
             <a href="<?php the_permalink(); ?>" >
              <div class="news-card news-card-page">
                <div class="news-img">
                  <img loading="lazy" alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>"
                    class="img-fluid newImage">
                </div>
                <div class="news-content-info">
                  <div class="news-date">
                    <span><?php echo get_the_date(); ?></span>
                  </div>
                  <div class="news-title">
                    <h2><?php the_title(); ?>
                      <span class="city-name"><?php echo get_field('city_name'); ?></span>
                    </h2>
                  </div>
                  <div class="news-btn">
                    <div class="custom-btn">
                      <a href="<?php the_permalink(); ?>" class="border-animate"><?php echo get_field('read_more', 'option'); ?> <img loading="lazy" alt="Read more"
                          src="<?php echo get_template_directory_uri(); ?>/assets/img/white-right.svg"
                          class="right-arrow"></a>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          
      <?php  } elseif ($post_counter == 5) {?>

          <div class="col-12" data-aos="fade-down" data-aos-duration="1500">
            <a href="<?php the_permalink(); ?>" >
                <div class="news-card news-card-page-L">
                  <div class="news-img">
                    <img loading="lazy" alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>"
                      class="img-fluid newImage">
                  </div>
                  <div class="news-content-info">
                    <div class="news-date">
                      <span><?php echo get_the_date(); ?></span>
                    </div>
                    <div class="news-title">
                      <h2><?php the_title(); ?>
                        <span class="city-name"><?php echo get_field('city_name'); ?></span>
                      </h2>
                    </div>
                    <div class="news-btn">
                      <div class="custom-btn">
                        <a href="<?php the_permalink(); ?>" class="border-animate"><?php echo get_field('read_more', 'option'); ?> <img loading="lazy" alt="Read more"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/white-right.svg"
                            class="right-arrow"></a>
                      </div>
                    </div>
                  </div>
                </div>
            </a>
          </div>

      <?php
          $post_counter = 0;
          }
          $post_counter++;
         endwhile;
         wp_reset_postdata();
        else :
          echo '<p>No content found</p>';
        endif;
      ?>

    </div>

    <div class="pagination">
      <?php
        echo paginate_links(array(
          'total' => $query->max_num_pages
        ));
      ?>
    </div>
  </div>
</section>



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