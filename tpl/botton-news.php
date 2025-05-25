<section class="news custom-border-btm section-gap <?php the_field('news_class'); ?>">
    <div class="container-fluid">
        <div class="row me-0 align-items-center news-topContent">
            <div class="col-lg-12">
                <div class="news-content">
                    <div class="title textsec">
                        <h2><?php the_field('news_text', 'option'); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="news-inner">
        <div class="news-slider owl-carousel">
            <?php
            // Define the query arguments
            $news_query_args = array(
                'post_type' => 'post',
                'cat' => '1', // Replace 'your-news-category-ID' with the actual category ID
                'posts_per_page' => -1, // Number of posts to display
            );

            // Execute the query
            $news_query = new WP_Query($news_query_args);

            // Loop through the posts
            if ($news_query->have_posts()) :
                while ($news_query->have_posts()) : $news_query->the_post();
            ?>
            <div class="item">
                <div class="news-card">
                  
                        <div class="news-img">
                            <?php 
                                 $featured_img_url = 'https://tribalrootsimports1.b-cdn.net/320x468.avif';
                                if(get_the_post_thumbnail_url($post_id,'full')){
                                     $featured_img_url = get_the_post_thumbnail_url($post_id,'full');
                                }
							   
								?>

                            <img loading="lazy" width="600" height="470" data-srcset="<?php echo $featured_img_url;?>"
                                srcset="https://tribalrootsimports1.b-cdn.net/320x468.avif"
                                class="img-fluid newImage lazyimage" alt="<?php the_title(); ?>" decoding="async" fetchpriority="high">
                        </div>
                        <div class="news-content-info">
                            <div class="news-date">
                                <span><?php echo get_the_date('F j, Y'); ?></span>
                            </div>
                            <div class="news-title">
                                <h2><?php the_title(); ?></h2>
                            </div>
                            <div class="news-btn">
                                <div class="custom-btn">
                                    <a href="<?php the_permalink(); ?>" class="border-animate"><?php the_field('news_button', 'option'); ?> <img
                                            loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/white-right.svg"
                                            class="right-arrow" alt="<?php the_title(); ?>"></a>
                                </div>
                            </div>
                        </div>
                   
                </div>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo 'No posts found';
            endif;
            ?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="custom-btn">
                    <a href="<?php bloginfo('url')?>/news/" class="border-animate"><?php the_field('all_news_button', 'option'); ?> <img
                            loading="lazy" alt="right-arrow"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg"
                            class="right-arrow"></a>
                </div>
            </div>
        </div>
    </div>
</section>