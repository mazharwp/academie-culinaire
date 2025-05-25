jQuery(document).ready(function ($) {
    // Loop through all elements with class 'e2pdf-output' (your E2PDF output field)
    $('.e2pdf-output').each(function () {
        let text = $(this).text();
        
        // Remove the unwanted processing fee text
        text = text.replace('3% CC Processing Fee : ', '')
                   .replace('3.5% CC Processing Fee : ', '');

        // Update the text of the element
        $(this).text(text);
    });
});
