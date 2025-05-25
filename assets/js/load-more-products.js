jQuery(function($){
    $('#loadMore').on('click', function(e){
        e.preventDefault();

        var button = $(this),
            data = {
                'action': 'load_more',
                'page': load_more_params.current_page,
                'posts_per_page': load_more_params.posts_per_page
            };

        $.ajax({
            url: load_more_params.ajaxurl,
            data: data,
            type: 'POST',
            beforeSend: function(xhr){
                button.text('Loading...'); // change the button text, you can also add a preloader image
            },
            success: function(data){
                if(data) {
                    button.text('Load more').before(data); // insert new posts
                    load_more_params.current_page++;

                    if (load_more_params.current_page == load_more_params.max_page)
                        button.remove(); // if last page, remove the button

                } else {
                    button.remove(); // if no data, remove the button as well
                }
            }
        });
    });
});
