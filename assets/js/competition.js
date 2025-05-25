

$(".competition-slider").owlCarousel({
    margin: 30,
    loop: true,
    autoplay: false,
    dots: true,
    nav: true,
    
     navText: [
    "<img src='" +
    site_url +
    "/wp-content/themes/academie-culinaire/assets/img/left-arrow.png'>",

    "<img src='" +
    site_url +
    "/wp-content/themes/academie-culinaire/assets/img/next-arrow.png'>",
  ],
    
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });
  

  $(".brand-logo-slider").owlCarousel({
    margin: 30,
    loop: true,
    autoplay: true,
    dots: false,
    nav: false,
    slideTransition: "linear",

    autoplayTimeout: 3000,
  
    autoplayHoverPause: true,
  
    autoplaySpeed: 3000,
    
     navText: [
    "<img src='" +
    site_url +
    "/wp-content/themes/academie-culinaire/assets/img/left-arrow.png'>",

    "<img src='" +
    site_url +
    "/wp-content/themes/academie-culinaire/assets/img/next-arrow.png'>",
  ],


    responsive: {
      0: {
        items: 2,
      },
      600: {
        items: 4,
      },
      1000: {
        items: 5,
      },
    },
  });
  