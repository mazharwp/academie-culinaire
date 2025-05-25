$(document).ready(function(){
  $(".category-detail-container .col-lg-3").slice(0, 12).show();
  $("#loadMore").on("click", function(e){
    e.preventDefault();
    $(".category-detail-container .col-lg-3:hidden").slice(0, 4).slideDown();
    if($(".category-detail-container .col-lg-3:hidden").length == 0) {
      $("#loadMore").text("No Content").addClass("noContent").hide();
      $(".loadmore-container").hide(); // Hide loadmore-container
    }
  });
  
  // Initial check to hide button and container if all divs are already shown
  if($(".category-detail-container .col-lg-3:hidden").length == 0) {
    $("#loadMore").hide();
    $(".loadmore-container").hide(); // Hide loadmore-container
  }
});



$('.thumbnail').on('click', function(event) {
  event.preventDefault(); // Prevent the default anchor behavior
  var clicked = $(this);
  var newSelection = clicked.data('big');
  $('.mian-thumbnail').attr("src", newSelection); // Update the src attribute of the img
  clicked.parent().find('.thumbnail').removeClass('selected');
  clicked.addClass('selected');
});





$(document).ready(function () {
  $('.increment-btn').click(function (e) {
    e.preventDefault();

    var inc_value = $(this).closest('.product_data').find('.qty-input').val();
    var value = parseInt(inc_value, 10);
    value = isNaN(value) ? 0 : value;
    if (value < 10) {
        value++;
        $(this).closest('.product_data').find('.qty-input').val(value);
    }
});

$('.decrement-btn').click(function (e) {
    e.preventDefault();

    var dec_value = $(this).closest('.product_data').find('.qty-input').val();
    var value = parseInt(dec_value, 10);
    value = isNaN(value) ? 0 : value;
    if (value > 1) {
        value--;
        $(this).closest('.product_data').find('.qty-input').val(value);
    }
});
});

$('.size-box a').on('click', function() {
  $('.size-box a').removeClass('selected');
  
  $(this).addClass('selected');
});


$('.read-more').on('click', function() {
  var moreText = $(this).prev('.more-text');
  moreText.toggle(); // Toggle the visibility of the additional text
  
  // Change the text of the "Read more" link
  if (moreText.is(':visible')) {
      $(this).text('Read less');
  } else {
      $(this).text('Read more');
  }
});



$(".shop-detail-slider").owlCarousel({
  margin: 30,
  loop: true,
  autoplay: false,
  dots: false,
  nav: true,
  navText: [
    "<img src='https://acf-usa.org/demo/wp-content/themes/academie-culinaire/assets/img/left-arrow.png'>",
    "<img src='https://acf-usa.org/demo/wp-content/themes/academie-culinaire/assets/img/next-arrow.png'>",
  ],
  responsive: {
    0: {
      items: 1,
    },

    300: {
      items: 1,
    },

    600: {
      items: 2,
    },
    1000: {
      items: 4,
    },
  },
});



jQuery(document).ready(function($) {
    $(".shop-detail-slider").owlCarousel({
        items: 4, // Show four items at a time, adjust as needed
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true
    });
});


