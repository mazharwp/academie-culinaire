<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * My Account navigation.
 *
 * @since 2.6.0
 */
 
 ?>
<style>
.billing-box a {
    display: inline-block;
    margin-bottom: 8px;
}
 .billing-box a i {
    padding-left: 10px;
    padding-right: 0;
}
 .billing-box a {
    color: rgba(19, 29, 58, 0.80);
    font-family: Sarabun;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: 25px;
    letter-spacing: 0.16px;
}
 .billing-box h2 {
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
.account-tab-right table tr td {
    background: none;
}
a.woocommerce-button.button.view {
    background: #167446;
    color: #fff;
    padding: 10px !important;
    width: 57px;
    border-radius: 4px;
    transition: all 0.5s ease;
    text-align: center;
}
.woocommerce table.shop_table {
    border: none !important;
}
button.shop-detail-btn.woocommerce-Button.button {
    background: #167446;
    color: #fff;
    padding: 10px !important;
 
    border-radius: 4px;
    transition: all 0.5s ease;
}
.account-detail-sec{
    width: 100%;
    background: #FFFEFA;
    padding: 70px 0 200px 0;
}

.account-detail-con{
    max-width: 1310px;
    width: 100%;
    margin: auto;
}

.account-tab-left .nav-tabs .nav-item.show .nav-link, .account-tab-left .nav-tabs .nav-link.active, 
.account-tab-left .nav-tabs .nav-link, .account-tab-left .nav-tabs{
    background-color: unset;
    border: unset;

}

.account-tab-left .nav-tabs{
    display: flex;
    flex-direction: column;
    border-right: 2px solid #F57812CC;
}

.account-tab-left .nav-tabs .nav-link, .account-tab-left .nav-tabs .nav-link.active{
    color: #4D4638;
    font-family: "Red Hat Text";
    font-size: 18px;
    font-style: normal;
    font-weight: 600;
    line-height: 25px; 
    position: relative;
}

.account-tab-left .nav-tabs .nav-item{
    border: 1px solid #047422;
    width: 100%;
    max-width: 200px;
    text-align: left;
    margin-bottom: 20px;
    border-radius: 10px ;
}

.account-tab-left .nav-tabs .nav-link.active{
    color: #167446;
}

.account-tab-right{
    background: rgba(227, 237, 230, 0.96);
    height: 100%;
    padding: 20px;
}

.account-tab-right h6{
    color: #131D3A;
    font-family: "Playfair Display";
    font-size: 32px;
    font-style: normal;
    font-weight: 400;
    line-height: 38px; 
    letter-spacing: 0.64px;
    margin-bottom: 15px;
}

.account-tab-right p{
    color: rgba(19, 29, 58, 0.80);
    font-family: Sarabun;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: 25px; 
    letter-spacing: 0.16px;
}

.account-tab-right h6 a{
    color: #167446;
    transition: all 0.5s ease;
}

.account-tab-right h6 a:hover{
    color: #131D3A;
}

.account-tab-right #order .table{
    --bs-table-bg: unset;
}

.account-tab-right #order .table tr{
    border: 1px solid  #167446 !important;
}

.account-tab-right #order .table tr td a{
    color: #167446;
}

.account-tab-right #order .table tr td a:hover{
    color: #000;
}

.account-tab-right #order .table tr td a.view-btn, #subscripion .subscripion a, #download .download a{
    background: #167446;
    color: #fff;
    padding: 10px;
    padding: 3px 12px;
    border-radius: 4px;
    transition: all 0.5s ease;
}

.account-tab-right #order .table tr td a.view-btn:hover, #subscripion .subscripion a:hover, #download .download a:hover{
    background: #FFDCC0;
    color: #000;
}

#subscripion .subscripion, #download .download{
    background: #F2DDE7;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    align-items: center;
    padding: 20px;
    border-top: 3px solid #F57812CC;
}

#subscripion .subscripion a, #download .download a{
    padding: 5px 12px;
}
#subscripion .subscripion p, #download .download p{
    margin-bottom: 0;
}

#subscripion .subscripion p span, #download  .download p span{
    padding-right: 10px;
}

#download  .download p span i{
    color: #167446;
}

#address .shipping-address{
    background-color: transparent;
}

#address .shipping-address .billing-box a i{
    padding-left: 10px;
    padding-right: 0;
}
.account-tab-right a {
    color: #167446;
    transition: all 0.5s ease;
}
.account-tab-right .woocommerce-info {
    background: #F2DDE7;
 
    justify-content: space-between;
    flex-wrap: wrap;
    align-items: center;
  
    border-top: 3px solid #F57812CC;
}
a.button.wc-forward {
    padding: 5px 12px !important;
}
a.button.wc-forward {
    background: #167446;
    color: #fff;
  
    border-radius: 4px;
    transition: all 0.5s ease;
}
.woocommerce_account_subscriptions .woocommerce-Button.button {
    background: #167446;
    color: #fff;
    border-radius: 4px;
    transition: all 0.5s ease;
}
 .woocommerce_account_subscriptions .woocommerce-Button.button:hover {
 background: #FFDCC0;
    color: #000;
	}
	
form.woocommerce-EditAccountForm.edit-account .form-control {
    height: 50px;
    border-radius: 7px;
    border: 1px solid #131D3A;
    background: rgba(255, 255, 255, 0.20);
    position: relative;
    color: black !important;
    text-align: left;
}
.form-control {
    text-align: left;
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: var(--bs-body-color);
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-color: var(--bs-body-bg);
    background-clip: padding-box;
    border: var(--bs-border-width) solid var(--bs-border-color);
    border-radius: var(--bs-border-radius);
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
.form-control:focus {
    color: var(--bs-body-color) !important;
    background-color: var(--bs-body-bg) !important;
}
.form-control:focus {
    color: var(--bs-body-color);
    background-color: var(--bs-body-bg);
    border-color: #86b7fe;
    outline: 0;
    box-shadow: 0 0 0 .25rem rgba(13, 110, 253, .25);
}
.form-control:focus {
    border-color: #167446 !important;
    box-shadow: none !important;
}
.account-detail-con button {
    background: #167446 !important;
    color: #fff !important;
    border-radius: 4px !important;
    transition: all 0.5s ease;
}
table.woocommerce-MyAccount-paymentMethods.shop_table.shop_table_responsive.account-payment-methods-table th {
    border: 1px solid #167446 !important;
}
table.woocommerce-MyAccount-paymentMethods.shop_table.shop_table_responsive.account-payment-methods-table td {
    border: 1px solid #167446 !important;
}
</style>
<section class="account-detail-sec">
    <div class="container-fluid">
        <div class="account-detail-con">
            <div class="row">
 <?php
do_action( 'woocommerce_account_navigation' ); ?>
                <div class="col-lg-9">
                    <div class="account-tab-right">

	<?php
		/**
		 * My Account content.
		 *
		 * @since 2.6.0
		 */
		do_action( 'woocommerce_account_content' );
	?>
    </div>     </div>
            </div>

        </div>
    </div>
</section>