jQuery(function($) {
    // Handle increment button click
    $('body').on('click', '.increment-btn', function(e) {
        e.preventDefault(); // Prevent default action

        // Find the associated input field
        var $input = $(this).siblings('.qty-input');
        var currentQuantity = parseInt($input.val(), 10);

        // Increment quantity by 1
        var newQuantity = currentQuantity + 1;
        $input.val(newQuantity).trigger('change');
        
        // Alert the new quantity
        alert('Quantity incremented to: ' + newQuantity);
    });

    // Handle decrement button click
    $('body').on('click', '.decrement-btn', function(e) {
        e.preventDefault(); // Prevent default action

        // Find the associated input field
        var $input = $(this).siblings('.qty-input');
        var currentQuantity = parseInt($input.val(), 10);

        // Decrement quantity by 1, ensuring it doesn't go below 1
        if (currentQuantity > 1) {
            var newQuantity = currentQuantity - 1;
            $input.val(newQuantity).trigger('change');
            
            // Alert the new quantity
            alert('Quantity decremented to: ' + newQuantity);
        }
    });

    // On quantity change, update the cart
    $('body').on('change', '.qty-input', function() {
        var $input = $(this);
        var cartItemKey = $(this).closest('.input-group').find('.increment-btn').data('cart-item-key');
        var newQuantity = $input.val();

        // Send an AJAX request to update the cart
        $.ajax({
            type: 'POST',
            url: wc_cart_params.ajax_url,
            data: {
                action: 'woocommerce_update_cart_item',
                cart_item_key: cartItemKey,
                quantity: newQuantity
            },
            success: function(response) {
                // Reload the page to reflect changes
                window.location.reload();
            }
        });
    });
});
