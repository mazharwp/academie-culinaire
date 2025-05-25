(function($){
    $(document).ready(function(){
        var emailField = $('#wpforms-1164-field_1'); // Adjust the selector to match your form's email field ID
        var form = $('#wpforms-form-1164'); // Adjust the form ID to match your form
        var submitButton = form.find('button[type="submit"]'); // Find the submit button
        var emailExists = false; // Track if the email exists

        emailField.on('input', function(){
            var email = $(this).val();
            $('.email-error').remove(); // Remove any previous error messages

            // Log the email being checked
            console.log("Checking email:", email);

            $.ajax({
                url : wpforms_ajax_object.ajax_url,
                type : 'POST',
                data : {
                    'action': 'check_if_email_exists',
                    'email': email
                },
                success: function(response) {
                    // Log the response for debugging
                    console.log("AJAX Response:", response);

                    if(response === 'exists') {
                        emailExists = true; // Set the flag if email exists
                        emailField.after('<span class="email-error" style="color: red;">This email already exists.</span>');
                        submitButton.prop('disabled', true); // Disable the submit button
                    } else {
                        emailExists = false; // Reset the flag if email does not exist
                        submitButton.prop('disabled', false); // Enable the submit button
                    }
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error:", status, error); // Log any errors
                }
            });
        });

        form.on('submit', function(e) {
            if(emailExists) {
                e.preventDefault();  // Prevent form submission if email exists
            }
        });
    });
})(jQuery);
