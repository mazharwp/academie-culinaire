jQuery(document).ready(function($) {
    // Event listener for increment button
    $('body').on('click', '.increment-btn', function(e) {
        e.preventDefault();
        
        var cartItemKey = $(this).data('cart-item-key');
        var $input = $('#qty_input_' + cartItemKey); // Select the input field
        var currentVal = $input.val(); // Get the value as a string
        
        // Alert the current value and cart item key
      //  alert('Current Value: ' + currentVal + ' | Cart Item Key: ' + cartItemKey);
        
        // Convert currentVal to a number
        var currentValNumber = Number(currentVal);
        var newVal = currentValNumber + 1; // Increment the value
        
        // Update the input field with the new value
        $input.val(newVal);
        
        // Update the cart item quantity via AJAX
        $.ajax({
            url: wc_cart_params.ajax_url,
            type: 'POST',
            data: {
                action: 'update_cart_item_quantity',
                cart_item_key: cartItemKey,
                quantity: newVal
            },
            success: function() {
                updateCartTotal(); // Update cart total after success
                // Optionally reload the page
                location.reload();
            }
        });
    });

    // Event listener for decrement button
    $('body').on('click', '.decrement-btn', function(e) {
        e.preventDefault();
        
        var cartItemKey = $(this).data('cart-item-key');
        var $input = $('#qty_input_' + cartItemKey); // Select the input field
        var currentVal = $input.val(); // Get the value as a string
        
        // Alert the current value and cart item key
       // alert('Current Value: ' + currentVal + ' | Cart Item Key: ' + cartItemKey);
        
        // Convert currentVal to a number
        var currentValNumber = Number(currentVal);
        var newVal = currentValNumber - 1; // Decrement the value
        
        // Ensure the new value is not less than 1
        if (newVal >= 1) {
            $input.val(newVal); // Update the input field with the new value
            
            // Update the cart item quantity via AJAX
            $.ajax({
                url: wc_cart_params.ajax_url,
                type: 'POST',
                data: {
                    action: 'update_cart_item_quantity',
                    cart_item_key: cartItemKey,
                    quantity: newVal
                },
                success: function() {
                    updateCartTotal(); // Update cart total after success
                    // Optionally reload the page
                    location.reload();
                }
            });
        }
    });

    // Function to update the cart total
    function updateCartTotal() {
        $.ajax({
            url: wc_cart_params.ajax_url,
            type: 'POST',
            data: {
                action: 'update_cart_total'
            },
            success: function(response) {
                $('#cart-total').html(response);
            }
        });
    }
});
