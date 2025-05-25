<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.1.0
 *
 * @var WC_Order $order
 */

defined( 'ABSPATH' ) || exit;
?>
<style>

/* 
order-received */



.order-received-sec{
    padding: 50px 0;
    background: #FFFEFA;
}

.order-container{
    width: 100%;
    max-width: 1310px;
    margin: auto;
}

.thanks-msg h2{
    color: #047422;
    font-family: "Playfair Display";
    font-size: 32px;
    font-style: normal;
    font-weight: 600;
    line-height: 38px;
    letter-spacing: 0.64px;
    text-align: center;
    margin-bottom: 40px;
}

.thanks-details{
    display: flex;
    justify-content: center;
    gap: 35px;
    flex-wrap: wrap;
}

.thanks-details h6{
color: #2A312D;
font-family: "Red Hat Text";
font-size: 14px;
font-style: normal;
font-weight: 400;
line-height: 20px;
border-right: 1px dotted #2A312D;
padding-right: 30px;
}

.thanks-details h6:last-child{
    border-right: 0;
}

.thanks-details h6 span{
    color: #131D3A;
    letter-spacing: 0.64px;
    font-size: 17px;
    font-weight: 700;
    line-height: 34px;
}


.order-details tr td:nth-last-of-type(1){
    vertical-align: middle;
 }

 .order-details tbody tr td,  .order-details tbody tr td h5{
    font-size: 16px;
}



.order-container .order-details{
   padding: 70px 0 30px 0;
}

.order-container .order-details h6{
    color: #2A312D;
    font-family: "Red Hat Text";
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: 20px; 
    letter-spacing: 0.64px;
    margin-bottom: 20px;
}

.order-container .order-details h2, .billing-box h2{
    color: #131D3A;
    font-family: "Playfair Display";
    font-size: 32px;
    font-style: normal;
    font-weight: 400;
    line-height: 38px;
    letter-spacing: 0.64px;
    padding-left: 20px;
    border-left: 3px solid #F57812CC;
    margin-bottom: 30px;
}

.order-container .order-details .table{
    --bs-table-bg: rgba(227, 237, 230, 0.96);
    border-radius: 20px 0px;

}

.order-container .order-details .table>:not(caption)>*>*{
    padding: 25px;
}

.order-container tbody, td, tfoot, th, thead, tr{
    border: 1px solid rgba(128, 117, 92, 0.40);
    
}

.order-container .order-details td p{
    color: rgba(19, 29, 58, 0.80);
    font-family: Sarabun;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: 25px; 
    letter-spacing: 0.16px; 
    margin-bottom: 0;
}

.order-container .order-details td h5 a{
    color: #2A312D;
    font-family: "Playfair Display";
    font-size: 17px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    letter-spacing: 0.17px;
    transition: all 0.5s ease;
}

.order-container .order-details td h5 a:hover{
    color: #167446;
}

.order-container .order-details td{
    color: #2A312D;
    font-family: "roboto";
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    letter-spacing: 0.17px;
}

.order-container .order-details td.total-amount{
    color: #970349;
}

.billing-box p, .billing-box a{
    color: rgba(19, 29, 58, 0.80);
    font-family: Sarabun;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: 25px; 
    letter-spacing: 0.16px;
}

.billing-box a{
    display: inline-block;
    margin-bottom: 8px;
}

.billing-box a i{
    padding-right: 10px;
}

.billing-box a:hover{
    color: #167446;
}

.shipping-address{
    background: #F2DDE7;
    padding: 25px;
    margin-bottom: 20px;
}


@media (max-width:540px){
    .thanks-details {
        gap: 15px;
        flex-wrap: wrap;
        flex-direction: column;
    }
    .order-container .order-details{
        padding: 20px 0;
    }
    .thanks-details h6{
        border: 0;
    }
}
ul.wc-item-meta strong {
    text-transform: capitalize;
}
ul.wc-item-meta {
    padding-left: 0px;
    padding-top: 20px;
}
td.woocommerce-table__product-name.product-name h5 {
 
    display: contents;
}
</style>
<section class="order-received-sec">
    <div class="container-fluid">
        <div class="order-container">
            <div class="row">
                <div class="col-lg-12">
<div class="woocommerce-order">

	<?php
	if ( $order ) :

		do_action( 'woocommerce_before_thankyou', $order->get_id() );
		?>

		<?php if ( $order->has_status( 'failed' ) ) : ?>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></p>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
				<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php esc_html_e( 'Pay', 'woocommerce' ); ?></a>
				<?php if ( is_user_logged_in() ) : ?>
					<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php esc_html_e( 'My account', 'woocommerce' ); ?></a>
				<?php endif; ?>
			</p>

		<?php else : ?>

			<?php wc_get_template( 'checkout/order-received.php', array( 'order' => $order ) ); ?>

			<div class="thanks-details">

				<h6>
					<?php esc_html_e( 'Order number:', 'woocommerce' ); ?><br>
					<span><?php echo $order->get_order_number(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
				</h6>

				<h6>
					<?php esc_html_e( 'Date:', 'woocommerce' ); ?><br>
					<span><?php echo wc_format_datetime( $order->get_date_created() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
				</h6>

				<?php if ( is_user_logged_in() && $order->get_user_id() === get_current_user_id() && $order->get_billing_email() ) : ?>
					<h6>
						<?php esc_html_e( 'Email:', 'woocommerce' ); ?><br>
						<span><?php echo $order->get_billing_email(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
					</h6>
				<?php endif; ?>

				<h6>
					<?php esc_html_e( 'Total:', 'woocommerce' ); ?><br>
					<span><?php echo $order->get_formatted_order_total(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
				</h6>

				<?php if ( $order->get_payment_method_title() ) : ?>
					<h6>
						<?php esc_html_e( 'Payment method:', 'woocommerce' ); ?><br>
						<span><?php echo wp_kses_post( $order->get_payment_method_title() ); ?></span>
					</h6>
				<?php endif; ?>

			</div>

		<?php endif; ?>


		<?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>

	<?php else : ?>

		<?php wc_get_template( 'checkout/order-received.php', array( 'order' => false ) ); ?>

	<?php endif; ?>

</div>
                </div>
            </div>
        </div>
    </div>
</section>