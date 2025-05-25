<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility.
 * We try to do this as little as possible, but it does happen. When this occurs the version of the.
 * template file will be bumped and the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */


defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>

<section class="shop-cart-sec">
    <div class="container-fluid">
        <div class="shop-cart-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="cart-sec-left">
                        <a class="shop-back-btn" onclick="history.back()"><span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16" fill="none">
                        <path d="M7.57031 0C7.57031 0 7.6041 6.43512 0.9994 7.70167" stroke="#068F2B" stroke-opacity="0.96" stroke-width="1.4" stroke-miterlimit="10"/>
                        <path d="M20 7.69922H0" stroke="#068F2B" stroke-opacity="0.96" stroke-width="1.4" stroke-miterlimit="10"/>
                        <path d="M1.00072 7.7002C1.00072 7.7002 7.22401 8.84734 7.1178 15.2739" stroke="#068F2B" stroke-opacity="0.96" stroke-width="1.4" stroke-miterlimit="10"/>
                        </svg></span> Back</a>
                        <h2><?php esc_html_e( 'Your Cart', 'woocommerce' ); ?></h2>

                        <?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                            $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                            $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                            if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                                $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                                ?>
                                <div class="cart-details <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
                                    <img src="<?php echo esc_url( wp_get_attachment_url( $_product->get_image_id() ) ); ?>" alt="" class="img-fluid">
                                    <div class="cart-details-txt">
                                        <p><?php echo $product_permalink ? sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ) : $_product->get_name(); ?></p>
                                        <div class="cart-details-amount">
                                            <h4>
                                                <?php echo WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ); ?>
                                                <span><?php if ( $_product->is_on_sale() ) echo wp_kses_post( $_product->get_price_html() ); ?></span>
                                            </h4>
                                            <div class="qty-input-box">
                                                <?php if ( $_product->is_sold_individually() ) : ?>
                                                    <div class="quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
                                                        1
                                                    </div>
                                                <?php else : ?>
                                                    <?php
                                                    $product_quantity = woocommerce_quantity_input(
                                                        array(
                                                            'input_name'   => "cart[{$cart_item_key}][qty]",
                                                            'input_value'  => $cart_item['quantity'],
                                                            'max_value'    => $_product->get_max_purchase_quantity(),
                                                            'min_value'    => '0',
                                                            'product_name' => $_product->get_name(),
                                                        ),
                                                        $_product,
                                                        false
                                                    );

                                                    echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
                                                    ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
                                        '<a href="%s" class="cart-remove-btn" aria-label="%s" data-product_id="%s" data-product_sku="%s">Remove</a>',
                                        esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                        esc_html__( 'Remove this item', 'woocommerce' ),
                                        esc_attr( $product_id ),
                                        esc_attr( $_product->get_sku() )
                                    ), $cart_item_key );
                                    ?>
                                </div>
                                <?php
                            }
                        } ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart-sec-right">
                        <h2><?php esc_html_e( 'Cart Totals', 'woocommerce' ); ?></h2>
                        <table class="table">
                            <tbody>
                              <tr>
                                <td><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></td>
                                <td><?php wc_cart_totals_subtotal_html(); ?></td>
                              </tr>

                              <tr class="shipping1">
                                <td><?php wc_cart_totals_shipping_html(); ?></td>
                              </tr>

                              <tr>
                                <td><?php esc_html_e( 'Total', 'woocommerce' ); ?></td>
                                <td class="total-amount"><?php wc_cart_totals_order_total_html(); ?></td>
                              </tr>
                            </tbody>
                          </table>
                          <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="shop-detail-btn"> CHECKOUT <span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="23" viewBox="0 0 30 23" fill="none">
                            <path d="M0 11.1503H30" stroke="white" stroke-width="1.4" stroke-miterlimit="10"/>
                            <path d="M20.9844 0C20.9844 0 20.9421 9.30833 29.198 11.1404" stroke="white" stroke-width="1.4" stroke-miterlimit="10"/>
                            <path d="M28.9176 11.1504C28.9176 11.1504 21.1384 12.8098 21.2712 22.1058" stroke="white" stroke-width="1.4" stroke-miterlimit="10"/>
                          </svg></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php do_action( 'woocommerce_after_cart' ); ?>
