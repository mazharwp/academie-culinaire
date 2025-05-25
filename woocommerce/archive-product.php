<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 8.6.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

// Example post ID for shop page
$post_id = get_option('woocommerce_shop_page_id'); // Gets the ID of the WooCommerce shop page

// Retrieve the value of 'section_class' field for the specified post ID
$section_class = get_field('section_class', $post_id);

global $product;
?>

<section class="page-banner page-border <?php echo esc_attr($section_class); ?>" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.60) 0.75%, rgba(0, 0, 0, 0.00) 111.99%), url('<?php the_field('banner_image', $post_id); ?>');">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 px-0">
                <div class="page-banner-title <?php the_field('big_banner_text_class', $post_id); ?>">
                    <h2><?php the_field('title', $post_id); ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>


<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>
<?php if ( is_user_logged_in() ) {?>
<section class="shop-category-sec">
        <div class="container-fluid ">
            <div class="shop-category-list">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="shop-list-container-left">
                            <?php echo do_shortcode("[woof  sid='generator_6698ec02975b6' autohide='0' autosubmit='-1' is_ajax='1' ajax_redraw='0' start_filtering_btn='0' btn_position='b' dynamic_recount='-1' hide_terms_count_txt='0' mobile_mode='0' ]");?>

                            <div class="shop-list-container-right">
                                <div class="shop-dropdown short_by">
                              <?php do_action( 'woocommerce_before_shop_loop' ); ?>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    
    </section>
<section class="category-detail-sec">
    <div class="container-fluid">
        <div class="category-detail-container">
		
            <div class="row g-4" >
                <?php
                if ( woocommerce_product_loop() ) {

	                /**
	                 * Hook: woocommerce_before_shop_loop.
	                 *
	                 * @hooked woocommerce_output_all_notices - 10
	                 * @hooked woocommerce_result_count - 20
	                 * @hooked woocommerce_catalog_ordering - 30
	                 */
	                

	                woocommerce_product_loop_start();

	                if ( wc_get_loop_prop( 'total' ) ) {
		                while ( have_posts() ) {
			                the_post();

			                /**
			                 * Hook: woocommerce_shop_loop.
			                 */
			               // do_action( 'woocommerce_shop_loop' );

			                // Custom HTML integration
			                ?>
			                <div class="col-lg-3 col-md-4 col-sm-6 col-shop-css">
			                    <div class="card h-100 category-box">
			                        <div class="category-img">
									
			                            <?php 
											// Get the product ID
											$product_id = get_the_ID(); 

											// Get the product permalink
											$product_link = get_permalink($product_id);

											// Get the product thumbnail with a custom class
											$thumbnail = get_the_post_thumbnail($product_id, 'woocommerce_thumbnail', array('class' => 'card-img-top')); 

											// Output the image wrapped in a link
											echo '<a href="' . esc_url($product_link) . '">' . $thumbnail . '</a>';
											?>

			                        </div>
			                        <div class="card-body d-flex flex-column">
			                            <h5 class="card-title"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
			                            <p class="card-text mt-auto">
			                                <?php if ( $product->is_type( 'variable' ) ) {
												// Get the available variations
												$available_variations = $product->get_available_variations();

												// Initialize minimum price variable
												$min_price = $product->get_variation_price( 'min' );

												// Display the minimum price
												echo '<span class="price">' . wc_price( $min_price ) . '</span>';

											} else {
												echo $product->get_price_html(); // Default price display for non-variable products
											}
											?>
			                            </p>
			                        </div>
			                        <a href="<?php the_permalink(); ?>" class="cart-btn">
			                            <div class="card-footer">
			                                <p><svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
			                                    <path d="M18 5.23635V6.1452H17.1044L16.708 8.14254C16.3395 9.99893 15.9848 11.8573 15.5976 13.7107C15.4937 14.2185 15.2169 14.6745 14.8143 15.001C14.4117 15.3274 13.9084 15.5041 13.3901 15.5009C10.464 15.5121 7.53799 15.5121 4.61195 15.5009C3.47003 15.4963 2.57644 14.7025 2.34948 13.5565C1.8691 11.1139 1.38635 8.67127 0.901219 6.22866C0.897657 6.21034 0.89155 6.19202 0.881882 6.15792H0V5.24194H4.25319C4.49949 4.53359 4.74121 3.83795 4.98394 3.14283C5.14271 2.68738 5.28927 2.22685 5.46381 1.77751C5.65628 1.26449 5.99943 0.82169 6.44817 0.507269C6.89692 0.192849 7.43027 0.0215154 7.97817 0.0157759C8.74149 0.0055984 9.50888 -0.0264601 10.2651 0.0468183C11.4268 0.15928 12.1922 0.837104 12.5825 1.92712C12.955 2.96675 13.3117 4.01351 13.6674 5.05824C13.7142 5.19462 13.7738 5.24042 13.9219 5.23991C15.2068 5.23278 16.4917 5.23584 17.7766 5.23584L18 5.23635ZM5.24143 5.22719H12.7484C12.7306 5.16358 12.7184 5.10964 12.7006 5.05773C12.3744 4.1158 12.0507 3.17489 11.7199 2.23397C11.4212 1.38567 10.7683 0.92972 9.86458 0.927684C9.2926 0.927684 8.72029 0.927684 8.14763 0.927684C7.21028 0.927684 6.56451 1.38567 6.25664 2.26603C5.93435 3.18913 5.61393 4.11258 5.29538 5.03636C5.27807 5.09386 5.26179 5.15442 5.24194 5.22719H5.24143ZM9.42237 12.925V7.82093H8.53794V12.925H9.42237ZM12.671 12.5433V8.19699H11.7815V12.5438L12.671 12.5433ZM5.28367 8.19496V12.5438H6.17369V8.19496H5.28367Z" fill="#047422"></path>
			                                  </svg> Add to cart</p>
			                            </div>
			                        </a>
			                    </div>   
			                </div>
			                <?php
		                }
	                }

	                woocommerce_product_loop_end();

	                // Display WooCommerce pagination
                    woocommerce_pagination();
                } else {
                    do_action( 'woocommerce_no_products_found' );
                }
                ?>
                
               <div class="loadmore-container">
                        <a href="javascript:void(0)" id="loadMore"><img src="<?php echo bloginfo('url');?>/wp-content/uploads/2024/07/logo_ACF-removebg-preview-1-3.png" alt="logo" class="img-fluid"> Load more</a>
                    </div>

            </div>
        </div>
    </div>
</section>
<?php } else { ?>
    <div class="container-fluid">
        <div class="category-detail-container noshoplogin">
  <div class="row">
  <h2 class="nonloginmsg">To access our shop page and view our products, please log in or register on our website.</h2>
                  
					    <div class="col-lg-6 ">
						<h2 class="loginh2"> Login</h2>
                                    <?php echo do_shortcode('[forminator_form id="23213"]'); ?>
									  </div>
                                 <div class="col-lg-6 ">
								 <h2 class="loginh2">Register</h2>
                                    <?php echo do_shortcode('[forminator_form id="1870"]'); ?>
									  </div>
         </div>
		<!--<div class="row"><h2 class="nonloginmsg" style="text-align: center;">Our Shop is Coming Soon!!!</h2></div>-->
		 </div> </div>
                           
<?php

}


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
