<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<style>
a.reset_variations {
    display: none !important;
}
</style>

<?php
	/**
	 * woocommerce_before_main_content hook.
	 *
	 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
	 * @hooked woocommerce_breadcrumb - 20
	 */
	do_action( 'woocommerce_before_main_content' );
?>

<?php while ( have_posts() ) : ?>
	<?php the_post(); ?>

<section class="shop-detail-sec">
        <div class="container-fluid">
            <div class="shop-detail-container">
                <div class="row">
                    <div class="col-lg-8">
                        <?php $main_image_url = get_the_post_thumbnail_url(); ?>
                        <div class="shop-detail-left-sec">
                            <a href="/shop" class="shop-back-btn">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16" fill="none">
                                        <path d="M7.57031 0C7.57031 0 7.6041 6.43512 0.9994 7.70167" stroke="#068F2B" stroke-opacity="0.96" stroke-width="1.4" stroke-miterlimit="10"/>
                                        <path d="M20 7.69922H0" stroke="#068F2B" stroke-opacity="0.96" stroke-width="1.4" stroke-miterlimit="10"/>
                                        <path d="M1.00072 7.7002C1.00072 7.7002 7.22401 8.84734 7.1178 15.2739" stroke="#068F2B" stroke-opacity="0.96" stroke-width="1.4" stroke-miterlimit="10"/>
                                    </svg>
                                </span> Back
                            </a>
                                <div class="image-gallery">
                                    <aside class="thumbnails">
                                        <?php
                                        global $product;

                                        if ( ! $product ) {
                                            echo 'Product not found';
                                            return;
                                        }

                                        $attachment_ids = $product->get_gallery_image_ids();
                                        $main_image_id = $product->get_image_id();
                                        $main_image_url = wp_get_attachment_image_src($main_image_id, 'full')[0];

                                        if ( ! $attachment_ids ) {
                                            echo 'No gallery images found';
                                        }

                                        if ( ! $main_image_url ) {
                                            echo 'Main image not found';
                                        }
                                        ?>

                                        <?php foreach ($attachment_ids as $attachment_id): ?>
                                            <?php
                                            $image_url = wp_get_attachment_image_src($attachment_id, 'thumbnail')[0];
                                            $big_image_url = wp_get_attachment_image_src($attachment_id, 'full')[0];
                                            ?>
                                            <a href="#" class="thumbnail" data-big="<?php echo esc_url($big_image_url); ?>">
                                                <div class="thumbnail-image" style="background-image: url('<?php echo esc_url($image_url); ?>')"></div>
                                            </a>
                                        <?php endforeach; ?>
                                    </aside>

                                </div>
                            <div class="mian-thumbnail-box">
                                    <img src="<?php echo esc_url($main_image_url); ?>" alt="" class="mian-thumbnail img-fluid">
                            </div>
                                                        
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    var thumbnails = document.querySelectorAll('.thumbnail');
                                    var mainImage = document.querySelector('.main-image img');

                                    thumbnails.forEach(function(thumbnail) {
                                        thumbnail.addEventListener('click', function(event) {
                                            event.preventDefault();
                                            var bigImageUrl = this.getAttribute('data-big');
                                            mainImage.src = bigImageUrl;
                                        });
                                    });
                                });
                            </script>
    
                        </div>
                    </div>

                    <div class="col-lg-4 d-flex align-items-center">
                        <div class="shop-detail-right-sec">
                            <?php 
                                global $product;
                                $regular_price = $product->get_regular_price();
                                $sale_price = $product->get_sale_price();

                                if ($sale_price && $regular_price > $sale_price) {
                                    $discount = (($regular_price - $sale_price) / $regular_price) * 100;
                                    echo '<div class="discount-badge">-' . round($discount) . '%</div>';
                                }
                                ?>


                             <h1><?php echo $product->get_price_html();?></h1>
                                <h2><?php echo get_the_title(); // Displays the product title ?></h2>
                                
                               <?php
                                    $full_description = $product->get_short_description();

                                    // Define the number of words to display initially
                                    $word_limit = 20;

                                    // Truncate the description to the specified number of words
                                    $truncated_description = wp_trim_words($full_description, $word_limit, '...');

                                    // Count the number of words in the full description
                                    $full_word_count = str_word_count(strip_tags($full_description));
                                ?>
                                <p>
                                    <span class="initial-text">
                                        <?php echo wp_kses_post($truncated_description); ?>
                                    </span>
                                    
                                    <span class="more-text" style="display:none;">
                                        <?php echo wp_kses_post($full_description); ?>
                                    </span>

                                    <?php if ($full_word_count > $word_limit) : ?>
                                        <span class="read-more" style="cursor:pointer; color:#047422 !important;">Read more</span>
                                    <?php endif; ?>
                                </p>

                           <?php

                                $rating = intval( get_comment_meta( $comment->comment_ID, 'rating', true ) );
                                ?>

                                <div class="woocommerce-review">
                                    <div class="stars">
                                        <?php
                                        for ( $i = 1; $i <= 5; $i++ ) {
                                            $fill = ( $i <= $rating ) ? '#FFBC25' : '#FFBC25';
                                            echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                                <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z" fill="' . esc_attr( $fill ) . '"/>
                                            </svg>';

                                        }
                                        ?>
                                    </div>
                                </div>
    
                            <div class="size-box">
                                <?php
                                    if ( ! $product->is_purchasable() ) {
                                            return;
                                        }

                                        $quantity = isset( $_POST['quantity'] ) ? wc_clean( wp_unslash( $_POST['quantity'] ) ) : 1;
                                        ?>

                                        <div class="quantity-product">
                                            
                                            <?php woocommerce_quantity_input( array( 'min_value' => apply_filters( 'woocommerce_quantity_input_min', 1, $product ), 'max_value' => apply_filters( 'woocommerce_quantity_input_max', -1, $product ), 'step' => apply_filters( 'woocommerce_quantity_input_step', 1, $product ) ), $product, false ); ?>
                                        </div>

                                        <?php
                                        woocommerce_template_single_add_to_cart();
                                        ?>
                             </div>
                             <?php
                                // Get the product tags
                                $product_tags = get_the_terms( get_the_ID(), 'product_tag' );

                                if ( $product_tags && ! is_wp_error( $product_tags ) ) {
                                    $tag_names = wp_list_pluck( $product_tags, 'name' ); // Get the tag names
                                    echo '<span class="tagged_as">Tags: ' . implode( ' / ', $tag_names ) . '</span>';
                                }

                                // Add custom content under the tags if the product is in the 'maison-demarle' category
                                if ( has_term('maison-demarle', 'product_cat', get_the_ID()) ) {
                                    echo '<p class="maison-demarle-source">Source: <a href="https://maison-demarle.com/" target="_blank">Maison DEMARLE</a></p>';
                                }
                                ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="shop-detail-tabs">
        <div class="container-fluid">
            <div class="shop-tabs-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shop-tab-info">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                                    <?php
                                        global $post;

                                        // Get the Product Specifications meta field value
                                        $product_specifications = get_post_meta($post->ID, 'product_specifications_field', true);
                                        if (!empty($product_specifications)) {
                                            echo '<button class="nav-link" id="nav-product-specifications-tab" data-bs-toggle="tab" data-bs-target="#nav-product-specifications" type="button" role="tab" aria-controls="nav-product-specifications" aria-selected="false">Product Specifications</button>';
                                        }

                                        // Get the Brand Story meta field value
                                        $brand_story = get_post_meta($post->ID, 'brand_story_field', true);
                                        if (!empty($brand_story)) {
                                            echo '<button class="nav-link" id="nav-brand-story-tab" data-bs-toggle="tab" data-bs-target="#nav-brand-story" type="button" role="tab" aria-controls="nav-brand-story" aria-selected="false">Brand Story</button>';
                                        }
                                        
                                        // Get the Return Policy meta field value
                                        $return_policy = get_post_meta($post->ID, 'return_policy_field', true);
                                        if (!empty($return_policy)) {
                                            echo '<button class="nav-link" id="nav-return-policy-tab" data-bs-toggle="tab" data-bs-target="#nav-return-policy" type="button" role="tab" aria-controls="nav-return-policy" aria-selected="false">Return Policy</button>';
                                        }

                                        // Get the Additional Information meta field value
                                        $additional_information = wc_get_product($post->ID)->get_attributes();
                                        if (!empty($additional_information)) {
                                            echo '<button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Additional Information</button>';
                                        }
                                    ?>

                                    
                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <h4>Description</h4>
                                    <?php the_content(); ?>
                                </div>

                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <h4>Additional Information</h4>
                                    <?php woocommerce_product_additional_information_tab(); ?>
                                </div>

                                <!-- Product Specifications Tab -->
                                <?php if (!empty($product_specifications)) : ?>
                                    <div class="tab-pane fade" id="nav-product-specifications" role="tabpanel" aria-labelledby="nav-product-specifications-tab">
                                        <h4>Product Specifications</h4>
                                        <?php echo wp_kses_post($product_specifications); ?>
                                    </div>
                                <?php endif; ?>

                                <!-- Brand Story Tab -->
                                <?php if (!empty($brand_story)) : ?>
                                    <div class="tab-pane fade" id="nav-brand-story" role="tabpanel" aria-labelledby="nav-brand-story-tab">
                                        <h4>Brand Story</h4>
                                        <?php echo wp_kses_post($brand_story); ?>
                                    </div>
                                <?php endif; ?>

                                <!-- Return Policy Tab -->
                                <?php if (!empty($return_policy)) : ?>
                                    <div class="tab-pane fade" id="nav-return-policy" role="tabpanel" aria-labelledby="nav-return-policy-tab">
                                        <h4>Return Policy</h4>
                                        <?php echo wp_kses_post($return_policy); ?>
                                    </div>
                                <?php endif; ?>

                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <h4>Reviews</h4>
                                    <?php comments_template(); ?>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

   <?php
        // Ensure WooCommerce functions are available
        if ( function_exists( 'wc_get_products' ) ) {
            // Query for the latest products
            $args = array(
                'limit' => 5, // Limit to 5 products
                'orderby' => 'date',
                'order' => 'DESC',
                'status' => 'publish',
                'return' => 'ids',
            );

            $latest_product_ids = wc_get_products( $args );

            if ( ! empty( $latest_product_ids ) ) :
        ?>
        <section class="shop-detail-slide">
            <div class="container-fluid">
                <div class="shop-slider-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Latest Products</h3>
                            <div class="owl-carousel owl-theme shop-detail-slider">
                                <?php foreach ( $latest_product_ids as $latest_product_id ) :
                                    $latest_product = wc_get_product( $latest_product_id );
                                    $product_image = wp_get_attachment_image_src( get_post_thumbnail_id( $latest_product_id ), 'single-post-thumbnail' );
                                    $product_url = get_permalink( $latest_product_id ); // Get product URL
                                ?>
                                    <div class="item">
                                       <a href="<? echo  $product_url;?>">
                                            <div class="card h-100 category-box">
                                                <div class="category-img">
                                                    <img src="<?php echo esc_url( $product_image[0] ); ?>" class="card-img-top" alt="<?php echo esc_attr( $latest_product->get_name() ); ?>"/>
                                                </div>
                                                <div class="card-body d-flex flex-column">
                                                    <h5 class="card-title"><?php echo esc_html( $latest_product->get_name() ); ?></h5>
                                                    <p class="card-text mt-auto">
                                                        <?php 
                                                            if ( $latest_product->is_type( 'variable' ) ) {
                                                                $sale_price_min    = $latest_product->get_variation_sale_price( 'min', true );
                                                                $regular_price_min = $latest_product->get_variation_regular_price( 'min', true );

                                                                if ( ! empty( $sale_price_min ) && $sale_price_min !== $regular_price_min ) {
                                                                    echo '<span style="text-decoration: line-through;">' . wc_price( $regular_price_min ) . '</span>';
                                                                    echo ' ' . wc_price( $sale_price_min );
                                                                } else {
                                                                    echo wc_price( $regular_price_min );
                                                                }
                                                            } else {
                                                                $regular_price = $latest_product->get_regular_price();
                                                                $sale_price    = $latest_product->get_sale_price();
                                                                
                                                                if ( ! empty( $sale_price ) ) {
                                                                    echo '<span style="text-decoration: line-through;">' . wc_price( $regular_price ) . '</span>';
                                                                    echo ' ' . wc_price( $sale_price );
                                                                } else {
                                                                    echo wc_price( $regular_price );
                                                                }
                                                            }

                                                            ?>

                                                    </p>
                                                </div>
                                            </div>
                                      </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>                    
                        </div>  
                    </div>
                </div>
            </div>
        </section>
<?php endif; } ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const readMoreButton = document.querySelector('.read-more');
    const initialText = document.querySelector('.initial-text');
    const moreText = document.querySelector('.more-text');

    readMoreButton.addEventListener('click', function() {
        // Hide the initial text and show the full description
        initialText.style.display = 'none';
        moreText.style.display = 'inline';
        readMoreButton.style.display = 'none'; // Optionally hide the "Read more" button
    });
});
</script>


<?php endwhile; ?>


<?php
/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );
include_once get_template_directory() . '/tpl/donation_bottom.php';
get_footer( 'shop' );



