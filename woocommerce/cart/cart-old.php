<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.9.0
 */

defined( 'ABSPATH' ) || exit;

?>
<section class="shop-cart-sec">
    <div class="container-fluid">
        <div class="shop-cart-container">
            <div class="row">
			    <div class="col-lg-8">
                    <div class="cart-sec-left">
<?php do_action( 'woocommerce_before_cart' ); ?>
    <a href="shop-detail.html" class="shop-back-btn"><span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16" fill="none">
                        <path d="M7.57031 0C7.57031 0 7.6041 6.43512 0.9994 7.70167" stroke="#068F2B" stroke-opacity="0.96" stroke-width="1.4" stroke-miterlimit="10"/>
                        <path d="M20 7.69922H0" stroke="#068F2B" stroke-opacity="0.96" stroke-width="1.4" stroke-miterlimit="10"/>
                        <path d="M1.00072 7.7002C1.00072 7.7002 7.22401 8.84734 7.1178 15.2739" stroke="#068F2B" stroke-opacity="0.96" stroke-width="1.4" stroke-miterlimit="10"/>
                        </svg></span> Back</a>
                        <h2>Your Cart</h2>
<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
	<?php do_action( 'woocommerce_before_cart_table' ); ?>


			<?php do_action( 'woocommerce_before_cart_contents' ); ?>

			<?php
foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
    $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
    $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
    $product_name = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );

    if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
        $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
        ?>
        <div class="cart-details">
            <?php
            $thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image('woocommerce_thumbnail', array('class' => 'img-fluid')), $cart_item, $cart_item_key);
            if (! $product_permalink) {
                echo $thumbnail; // PHPCS: XSS ok.
            } else {
                printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail); // PHPCS: XSS ok.
            }
            ?>
            <div class="cart-details-txt">
                <p data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
                    <?php
                    if (! $product_permalink) {
                        echo wp_kses_post( $product_name . '&nbsp;' );
                    } else {
                        echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
                    }
                    do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );
                    echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.
                    if ($_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] )) {
                        echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
                    }
                    ?>
                </p>
                <div class="cart-details-amount" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
                    <h4><?php echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok. ?></h4>
                </div>
                <div class="qty-input-box" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
                    <div class="product_data">
                        <div class="text-center" id="qty_selector_<?php echo esc_attr( $cart_item_key ); ?>">
                            <a class="decrement-btn" id="decrement_<?php echo esc_attr( $cart_item_key ); ?>" data-cart-item-key="<?php echo esc_attr( $cart_item_key ); ?>">
                                <i class="fa fa-minus"></i>
                            </a>
                            <input type="text" id="qty_input_<?php echo esc_attr( $cart_item_key ); ?>" class="qty-input text-center" name="cart[<?php echo esc_attr( $cart_item_key ); ?>][qty]" value="<?php echo esc_attr( $cart_item['quantity'] ); ?>" readonly>
                            <a class="increment-btn" id="increment_<?php echo esc_attr( $cart_item_key ); ?>" data-cart-item-key="<?php echo esc_attr( $cart_item_key ); ?>">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="javascript:void(0)" class="cart-remove-btn">
                <?php
                echo apply_filters('woocommerce_cart_item_remove_link', sprintf(
                    '<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
                    esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                    esc_attr( sprintf( __( 'Remove %s from cart', 'woocommerce' ), wp_strip_all_tags( $product_name ) ) ),
                    esc_attr( $product_id ),
                    esc_attr( $_product->get_sku() )
                ), $cart_item_key );
                ?>
            </a>
        </div>
        <?php
    }
}
?>

			<?php do_action( 'woocommerce_cart_contents' ); ?>

			<tr>
				<td colspan="6" class="actions">

					<?php if ( wc_coupons_enabled() ) { ?>
						<div class="coupon">
							<label for="coupon_code" class="screen-reader-text"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_html_e( 'Apply coupon', 'woocommerce' ); ?></button>
							<?php do_action( 'woocommerce_cart_coupon' ); ?>
						</div>
					<?php } ?>

					<button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

					<?php do_action( 'woocommerce_cart_actions' ); ?>

					<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
				</td>
			</tr>

			<?php do_action( 'woocommerce_after_cart_contents' ); ?>
		</tbody>
	</table>
	<?php do_action( 'woocommerce_after_cart_table' ); ?>
</form>
</div>
</div>
<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>
  <div class="col-lg-4">
                    <div class="cart-sec-right">
<div class="cart-collaterals">
	<?php
		/**
		 * Cart collaterals hook.
		 *
		 * @hooked woocommerce_cross_sell_display
		 * @hooked woocommerce_cart_totals - 10
		 */
		do_action( 'woocommerce_cart_collaterals' );
	?>
</div>

<?php do_action( 'woocommerce_after_cart' ); ?>
    </div>
        </div>
            </div>
        </div>
    </div>
</section>