// Our Partners--page--sliders

  
// Get all video elements and play buttons
var videoPlayers = document.querySelectorAll(".videoPlayer");
var playBtns = document.querySelectorAll(".play-btn");

// Function to toggle play button visibility
function togglePlayBtnVisibility(videoPlayer, playBtn) {
    if (videoPlayer.paused) {
        playBtn.style.display = "block";
    } else {
        playBtn.style.display = "none";
    }
}

// Attach event listeners for each video
videoPlayers.forEach(function(videoPlayer, index) {
    var playBtn = playBtns[index];

    // Event listener for the play button
    playBtn.addEventListener("click", function() {
        videoPlayer.play();
        togglePlayBtnVisibility(videoPlayer, playBtn);
    });

    // Event listeners for the video play and pause events
    videoPlayer.addEventListener("play", function() {
        togglePlayBtnVisibility(videoPlayer, playBtn);
    });
    videoPlayer.addEventListener("pause", function() {
        togglePlayBtnVisibility(videoPlayer, playBtn);
    });
});



$(document).ready(function() {
    // Initially hide all content rows except the first few in each tab
    $('.donate-platinum-box').slice(3).hide();

    // Add click event listener for "Load More" button within each tab
    $('.tab-content').on('click', '.loadMoreBtn', function() {
        var $container = $(this).closest('.tab-pane'); // Find the closest tab container
        var $hiddenContent = $container.find('.donate-platinum-box:hidden'); // Find hidden content within the current tab

        // Show additional content rows within the current tab when the button is clicked
        $hiddenContent.slice(0, 3).slideDown();

        // Check if there are any hidden content rows left in the current tab
        if ($hiddenContent.length === 0) {
            $(this).hide(); // Hide the "Load More" button in the current tab if there's no more content to show
        }
    });
});

$(document).ready(function() {
    // Initially hide all content rows except the first few in each tab
    $('.donate-premium-box').slice(3).hide();

    // Add click event listener for "Load More" button within each tab
    $('.tab-content').on('click', '.loadMoreBtn', function() {
        var $container = $(this).closest('.tab-pane'); // Find the closest tab container
        var $hiddenContent = $container.find('.donate-premium-box:hidden'); // Find hidden content within the current tab

        // Show additional content rows within the current tab when the button is clicked
        $hiddenContent.slice(0, 3).slideDown();

        // Check if there are any hidden content rows left in the current tab
        if ($hiddenContent.length === 0) {
            $(this).hide(); // Hide the "Load More" button in the current tab if there's no more content to show
        }
    });
});

$(document).ready(function() {
    // Initially hide all content rows except the first few in each tab
    $('.donate-box-silver').slice(3).hide();

    // Add click event listener for "Load More" button within each tab
    $('.tab-content').on('click', '.loadMoreBtn', function() {
        var $container = $(this).closest('.tab-pane'); // Find the closest tab container
        var $hiddenContent = $container.find('.donate-box-silver:hidden'); // Find hidden content within the current tab

        // Show additional content rows within the current tab when the button is clicked
        $hiddenContent.slice(0, 3).slideDown();

        // Check if there are any hidden content rows left in the current tab
        if ($hiddenContent.length === 0) {
            $(this).hide(); // Hide the "Load More" button in the current tab if there's no more content to show
        }
    });
});





$(".francois-chef-slider").owlCarousel({
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
  

  $(".passion-news-slider").owlCarousel({
    margin: 30,
    loop: true,
    autoplay: false,
    dots: false,
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
        stagePadding: 112,
        dots:true,
      },
      600: {
        items: 1,
        stagePadding: 112,
        dots:true,
      },
      1000: {
        items: 3,
        stagePadding: 112,
      },
    },
  });
  
  
  $(".passion-news-slider2").owlCarousel({
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
    