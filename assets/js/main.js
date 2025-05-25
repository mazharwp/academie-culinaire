$(document).ready(function () {
  handlePreloader();
});

function handlePreloader() {
  if ($(".preloader").length) {
    $(".preloader").css("display", "none"); // Show the preloader before fading out

    $(".preloader").delay(2500).fadeOut(500);
  }
}

document.addEventListener("click", function (event) {
  if (event.target.matches(".owl-nav button")) {
    var clickedButton = event.target;

    if (!clickedButton.classList.contains("animated")) {
      clickedButton.classList.add("animated");

      setTimeout(function () {
        document.querySelectorAll(".owl-nav button").forEach(function (button) {
          button.classList.remove("animated");
        });
      }, 400);
    }
  }
});

$(".board-member-slider").owlCarousel({
  margin: 20,
  loop: true,
  autoplay: false,
  dots: true,
  nav: false,
  autoplay: true, 
  autoplaySpeed: 2000, 
  autoplayHoverPause: true,
  smartSpeed: 1200,
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


// Delay execution by 4 seconds
setTimeout(function() {
    // Add aria-label to navigation buttons
    $('.owl-prev').attr('aria-label', 'Previous');
    $('.owl-next').attr('aria-label', 'Next');
  
  
    $('.owl-dot').each(function(index) {
      $(this).attr('aria-label', 'Slide ' + (index + 1));
    });
  
  
}, 4000); // 4 seconds delay (4000 milliseconds)


$(document).ready(function () {
  $(".hamburger").click(function () {
    $(this).toggleClass("is-active");
  });
});

$(".clients-carousel").owlCarousel({
  autoplay: true,

  loop: true,

  margin: 15,

  dots: false,

  slideTransition: "linear",

  autoplayTimeout: 3000,

  autoplayHoverPause: true,

  autoplaySpeed: 3000,

  responsive: {
    0: {
      items: 2,
    },

    500: {
      items: 3,
    },

    600: {
      items: 4,
    },

    800: {
      items: 4,
    },

    1200: {
      items: 8,
    },
  },
});

$(".banner-slider").owlCarousel({
  loop: true,

  autoplay: true,
  autoplayTimeout: 3000,
  dots: false,

  nav: true,

  smartSpeed: 1200,

  animateOut: "fadeOut",

  navText: [
    "<img alt='prev-arrow' src='" +
    site_url +
    "/wp-content/themes/academie-culinaire/assets/img/prev-arrow.png'>",

    "<img alt='next-arrow' src='" +
    site_url +
    "/wp-content/themes/academie-culinaire/assets/img/next-arrow.png'>",
  ],

  responsive: {
    0: {
      items: 1,
      dots: true,
    },

    600: {
      items: 1,
      dots: true,
    },

    1000: {
      items: 1,
    },
  },
});

$(".chefs-recipes-slider").owlCarousel({
  margin: 30,

  loop: true,

  dots: false,
  autoplay: true, 
  autoplaySpeed: 2000, 
  autoplayHoverPause: true,
  smartSpeed: 1200,

  nav: true,

  navText: [
    "<img alt='prev-arrow' src='" +
    site_url +
    "/wp-content/themes/academie-culinaire/assets/img/left-arrow.png'>",

    "<img alt='next-arrow' src='" +
    site_url +
    "/wp-content/themes/academie-culinaire/assets/img/next-arrow.png'>",
  ],

  responsive: {
    0: {
      items: 1,
      margin: 0,
      stagePadding: 50,
    },

    600: {
      items: 2,
      margin: 10,
      stagePadding: 52,
    },

    1000: {
      items: 3,

      stagePadding: 112,
    },
  },
});


$(".news-slider").owlCarousel({
  margin: 30,

  loop: true,

  dots: false,
  autoplay: true, 
  autoplaySpeed: 2000, 
  autoplayHoverPause: true,
  smartSpeed: 1200,

  nav: true,

  navText: [
    "<img alt='prev-arrow' src='" +
    site_url +
    "/wp-content/themes/academie-culinaire/assets/img/left-arrow.png'>",

    "<img alt='next-arrow' src='" +
    site_url +
    "/wp-content/themes/academie-culinaire/assets/img/next-arrow.png'>",
  ],

  responsive: {
    0: {
      items: 1,
      margin: 10,
      stagePadding: 50,
    },

    600: {
      items: 1,

      stagePadding: 112,
    },

    1000: {
      items: 3,

      stagePadding: 112,
    },
  },
});



$(document).ready(() => {
  const backToTop = $("#backToTop");

  const amountScrolled = 300;

  $(window).scroll(() => {
    $(window).scrollTop() >= amountScrolled
      ? backToTop.fadeIn("fast")
      : backToTop.fadeOut("fast");
  });

  backToTop.click(() => {
    $("body, html").animate(
      {
        scrollTop: 0,
      },

      600
    );

    return false;
  });
});


/*$(document).ready(function() {
  const optionMenu = $(".select-menu");
  const selectBtn = optionMenu.find(".select-btn");
  const options = optionMenu.find(".option");

  selectBtn.on("click", function() {
    optionMenu.toggleClass("active");
  });

  options.each(function() {
    $(this).on("click", function() {
      let selectedOption = $(this).find(".option-text").text();
      const selectBtnText = selectBtn.find("span:first-child"); // Corrected selector
      selectBtnText.text(selectedOption);
      optionMenu.removeClass("active");
    });
  });
});*/


// $(document).ready(function(){
//     $('.select-btn').click(function(){
//         $('.dropdown-text').html('All')  
//         $('.select-menu').toggleClass('active');
//         $('.options').toggle();
//     });

//     $('.select-btn').dblclick(function() {
//         $('.options').hide();
//         $('.select-menu').removeClass('active');
//     });

//     $('.option').click(function(){
//         $('.select-menu').addClass('active')  
//         var target = $(this).attr('data-target');
//         let selectedOption = $(this).find(".option-text").text();
//         selectedOption = selectedOption.charAt(0).toUpperCase() + selectedOption.slice(1);
//         $('.dropdown-text').html(selectedOption)
//         $('.boardMember').hide();      
//         $('#'+target).show();
//         $('.options').hide();  
//     });

//     $(document).click(function(event) { 
//         if(!$(event.target).closest('.select-menu').length) {
//             $('.options').hide();
//             $('.select-menu').removeClass('active');
//         }        
//     });
// });



$(document).ready(function () {
  $(document).click(function (event) {
    if (!$(event.target).closest('.select-menu').length) {
      $('.options').hide();
      $('.select-menu').removeClass('active');
    }
  });

  $('.select-btn').click(function () {
    $('.dropdown-text').html('All')
    $('.select-menu').addClass('active')
    $('.options').show();
    $('.select-menu').removeClass('active')
  });


  $('.option').click(function () {
    $('.select-menu').addClass('active')
    var target = $(this).attr('data-target');   
    if(target=='all'){
      $('.dropdown-text').html('All')     
      $('.boardMember').show();     
    } else {

      let selectedOption = $(this).find(".option-text").text();
      selectedOption = selectedOption.charAt(0).toUpperCase() + selectedOption.slice(1);
      $('.dropdown-text').html(selectedOption)
      $('.boardMember').hide();
      $('#' + target).show();
      $('.options').hide();

    }
   
  });


  // tab click
  
   $('#pills-tab .nav-item').click(function () {
    console.log('asd')
    $('.dropdown-text').html('All')
    $('.select-menu').addClass('active')
    $('.options').show();
    $('.select-menu').removeClass('active');
    $('.boardMember').show();
  });

});



var string =
  "Defend, Improve, Transmit French Culinary Art in the world, these are the vocations of this Academy."; /* type your text here */

var array = string.split("");

var timer;

function frameLooper() {
  if (array.length > 0) {
    document.getElementById("quote").innerHTML += array.shift();
  } else {
    clearTimeout(timer);
  }

  loopTimer = setTimeout("frameLooper()", 60); /* change 70 for speed */
}

frameLooper();




