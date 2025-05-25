jQuery(document).ready(function($) {
    $('.single_add_to_cart_button').on('click', function(e) {
        e.preventDefault();

        var $thisbutton = $(this),
            $form = $thisbutton.closest('form.cart'),
            id = $thisbutton.val(),
            product_qty = $form.find('input[name=quantity]').val() || 1,
            product_id = $form.find('input[name=product_id]').val() || id,
            variation_id = $form.find('input[name=variation_id]').val() || 0;

        var data = {
            action: 'custom_ajax_add_to_cart',
            product_id: product_id,
            quantity: product_qty,
            variation_id: variation_id,
            nonce: custom_ajax_add_to_cart_params.nonce
        };

        $.post(custom_ajax_add_to_cart_params.ajax_url, data, function(response) {
            if (response) {
                $(document.body).trigger('added_to_cart', [response.fragments, response.cart_hash, $thisbutton]);
                showAddToCartPopup();
            }
        });

        return false;
    });

    function showAddToCartPopup() {
        var popup = $('<div class="custom-add-to-cart-popup">Product added to cart! <button id="go-to-cart">Go to Cart</button></div>');
        $('body').append(popup);
        popup.fadeIn(400);
        
        $('#go-to-cart').on('click', function() {
            window.location.href = '/cart';
        });

        setTimeout(function() {
            popup.fadeOut(400, function() {
                $(this).remove();
            });
        }, 5000); // Hide the popup after 5 seconds
    }
});
