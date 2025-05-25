<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>
<section class="checkout-sec">
    <div class="container-fluid">
        <div class="checkout-container">
            
<form name="checkout" method="post" class="checkout woocommerce-checkout" id="checkoutForm" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

<div class="row">
                <div class="col-lg-7">
                  <div class="checkout-form">
                    <a href="<?php echo bloginfo('url');?>/cart/" class="shop-back-btn" style="color: #000;">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16" fill="none">
                          <path d="M7.57031 0C7.57031 0 7.6041 6.43512 0.9994 7.70167" stroke="#068F2B" stroke-opacity="0.96" stroke-width="1.4" stroke-miterlimit="10"></path>
                          <path d="M20 7.69922H0" stroke="#068F2B" stroke-opacity="0.96" stroke-width="1.4" stroke-miterlimit="10"></path>
                          <path d="M1.00072 7.7002C1.00072 7.7002 7.22401 8.84734 7.1178 15.2739" stroke="#068F2B" stroke-opacity="0.96" stroke-width="1.4" stroke-miterlimit="10"></path>
                        </svg>
                      </span> Back
                    </a>
                    <h1>Checkout</h1>
                    <h5>Billing information</h5>
                    <p>We'll use this email to send you details and updates about your order.</p>
	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
		

			
		

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>
	</div>
	</div>
	  <div class="col-lg-5">
                  <div class="cart-sec-right">
				  <h2><?php esc_html_e( 'Order summary', 'woocommerce' ); ?></h2>
	<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
	
	
	
	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
</div></div>
</form>
   </div>
                  </div>
                </section>
<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js" defer></script>
