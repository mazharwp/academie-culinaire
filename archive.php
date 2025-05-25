<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Prologic_Poster
 */

get_header();
?>

<div class="container mt-5">
    <?php
    // Get the current category
    $category = get_queried_object();

    // Display category name
    echo '<h2 class="text-center mb-4">' . $category->name . '</h2>';
    ?>

    <div class="row">
        <?php
        // Query posts from the current category
        $args = array(
            'category_name' => $category->slug,
            'posts_per_page' => -1 // Display all posts
        );
        $query = new WP_Query($args);

        // Check if there are posts
        if ($query->have_posts()) :
            // Loop through posts
            while ($query->have_posts()) :
                $query->the_post();
        ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?php the_post_thumbnail_url('large'); ?>" class="card-img-top" alt="<?php the_title_attribute(); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 150); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
            wp_reset_postdata(); // Reset post data
        else :
            echo '<p>No posts found.</p>';
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>