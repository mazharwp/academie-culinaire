<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academie Culinaire De FrAnce USA & Canada Delegation</title>
  
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/responsive.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/inner.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/inner-responsive.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/my-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owl.theme.green.min.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/animate.min.css" />
	<?php if(is_shop()) { ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/shop.css" />
	<?php } ?>
	<?php if(is_product()) { ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/single-product.css" />
	<?php } ?>
	
	<?php if(is_cart()) { ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/cart.css" />
	<?php } ?>

    <?php if (is_checkout()) { ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/checkout.css" />
    <?php } ?>

    <script>
        const site_url = '<?php bloginfo('url');?>';
    </script> 

   <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get reference to the menu button
            var menuButton = document.querySelector('.navbar-toggler');

            // Get reference to the menu content
            var menuContent = document.querySelector('#navbarSupportedContent');

            // Event listener for clicks on the document
            document.addEventListener('click', function(event) {
                // Check if the menu is open and if the click occurred outside of it
                if (menuContent.classList.contains('show') && !menuButton.contains(event.target) && !menuContent.contains(event.target)) {
                    // Close the menu
                    var bootstrapMenu = new bootstrap.Collapse(menuContent);
                    bootstrapMenu.hide();
                    // Rotate the close icon
                    menuButton.querySelector('.hamburger').classList.remove('is-active');
                }
            });
        });
   </script>
   
      <?php wp_head(); ?>
	    <script>
        // List of blocked domains/extensions
        const blockedDomains = [
            'shop',   // .shop
            'site',   // .site
            'pl',     // .pl
            'online', // .online
            'ru',     // .ru (Russian domain, often associated with spam)
            'store',  // .store
            'xyz',    // Can be used in spam campaigns
            'top',    // Frequently used by spam-related domains
            'cc',     // Colombia or spam-related
            'tk',     // Tokelau, often used in spam
            'cf',     // Cloudflare, can sometimes be used for malicious proxies
            'ga',     // Google Analytics subdomains, can be abused
            'cn',     // China, frequently associated with suspicious emails
            'club',   // Often used by spam senders
            'pw',     // Often used by phishing sites
            'in'      // India, frequently linked to spam emails
        ];

        // Function to check if an email has a blocked domain
        function isBlockedEmail(email) {
            const emailParts = email.split('@');
            if (emailParts.length !== 2) {
                return false; // Invalid email format, do nothing
            }
            const domain = emailParts[1].toLowerCase();
            const domainExtension = domain.split('.').pop(); // Get the domain extension

            // Check if the domain or extension is in the blocked list
            return blockedDomains.includes(domainExtension);
        }

        // Function to handle email input changes
        function handleEmailChange(event) {
            const emailInput = event.target;
            const emailValue = emailInput.value.trim();

            // Check if the email contains a blocked domain or extension
            if (isBlockedEmail(emailValue)) {
                // Reset the email input field
                emailInput.value = '';
                
                // Show error message
                alert('The email domain you entered is not allowed. Please enter a valid email address.');
            }
        }

        // Add event listener to the email input field
        document.addEventListener('DOMContentLoaded', function() {
            const emailField = document.querySelector('input[name="email-1"]');
            if (emailField) {
                emailField.addEventListener('input', handleEmailChange);
            }
        });
        </script>
</head>

<body <?php if(function_exists("body_class") && !is_404()){body_class();} else echo 'class="page default"'?>>
<?php if (!is_page('cart') &&  !is_page('checkout')) { ?>
    <div class="preloader" style="display: block;">
        <div class="loader-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/loader.png" class="img-responsive" alt="Loader Img">
        
        </div>
    </div>
<?php } ?>
<div class="sticky-top">
    <header class="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="top-left justify-content-start">
                    <?php if (have_rows('header_social_icons', 'option')): ?>
                        <div class="social-media">
                            <ul class="list-unstyled social-item">
                                <?php while (have_rows('header_social_icons', 'option')) : the_row(); ?>
                                    <li><a href="<?php the_sub_field('fb_link'); ?>" target="_blank" class="btnIcon" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="<?php the_sub_field('ld_link'); ?>" target="_blank" class="btnIcon" aria-label="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="<?php the_sub_field('tw_link'); ?>" target="_blank" class="btnIcon" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="<?php the_sub_field('istagram_link'); ?>" target="_blank" class="btnIcon" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="<?php the_sub_field('envelope_link'); ?>" target="_blank" class="btnIcon" aria-label="Envelope"><i class="fas fa-envelope"></i></a></li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    <?php endif; ?>


                        
                       <div class="top-mail">
                            <div class="mail-icon"><i class="far fa-envelope"></i></div>
                           <a href="<?php the_field('email_link', 'option');?>"><div class="mail-text">
                           <?php the_field('email_address', 'option');?></div></a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="top-right justify-content-end">
                        <div class="donate-btn">
                            <a href="<?php the_field('donate_here_link', 'option');?>">
                                <button class=""><?php the_field('donate_here_text', 'option');?></button>
                            </a>
                        </div>
                        
                        <div class="login-btn">
                            <a href="javascript:void(0)">
                                <button class="" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                    <div class="user-icon"><img src="<?php echo get_field('my_member_area_icone', 'option')['url'];?>" alt="<?php echo get_field('header_logo', 'option')['alt'];?>" class="img-fluid"></div>        
                                    <div class="user-name">
                                    <p>
                                        <?php the_field('my_member_area_text', 'option');?></p>
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </header>

    <div class="navigation-bar">
        <div class="container-fluid">
            <nav class="navbar py-0 navbar-expand-lg custom-navbar">
                <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <div class="hamburger" id="hamburger-6">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </button>
                    <div class="navbar-logo">
                        <a href="<?php echo home_url(); ?>" aria-label="Home"><img src="<?php echo get_field('header_logo', 'option')['url'];?>" loading="lazy" class="img-fluid mx-300" alt="<?php echo get_field('header_logo', 'option')['alt'];?>"/></a>
                    </div>
                   
                    <div class="collapse navbar-collapse siteNav" id="navbarSupportedContent">
                     
                            <?php
                          wp_nav_menu(array(
                                'theme_location' => 'primary-menu', // Matches the menu location registered in functions.php
                                'container' => false, // No container wrapping the ul
                                'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0 left-menu-items', // Your ul class
                                'add_li_class' => 'nav-item', // Custom argument for adding class to li
                                'link_class' => 'nav-link menu-link', // Custom argument for adding class to a links
                            ));


                            ?>
                     
                        <div class="right-nav siteNav">
                           
                              <?php
                          wp_nav_menu(array(
                                'theme_location' => 'secondary-menu', // Matches the menu location registered in functions.php
                                'container' => false, // No container wrapping the ul
                                'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0 left-menu-items', // Your ul class
                                'add_li_class' => 'nav-item', // Custom argument for adding class to li
                                'link_class' => 'nav-link menu-link', // Custom argument for adding class to a links
                            ));


                            ?>
                        </div>
                    </div>
                        <div class="mobile-icon">
                            <div class="login-btn">
                                <a href="javascript:void(0)">
                                    <button class="" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                        <div class="user-icon"><img loading="lazy" alt="image" src="<?php echo get_field('my_member_area_icone', 'option')['url'];?>" class="img-fluid w-19"></div>
                                    </button>
                                </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>


<!-- OFFCANVAS -->
    <div class="form-offcanvas">
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close custom-close-btn" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body offcanvas-login">
                <h6>Member Area</h6>
                 <?php if ( is_user_logged_in() ) { ?>
                 
                     <p>Welcome back to our Members-only section! We’re thrilled to have you here. Please explore our premium content and resources.</p>
                    <div class="form-container-members">
                        <ul class="nav nav-pills mb-3 pills-tab-hide" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="<?php bloginfo('url')?>/member-access/">Member Access</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a  class="nav-link" href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a>
                            </li>
                        </ul>
                      
    
                    </div>
                        
                <?php } else { ?>
                
                    <p>“Welcome to our Members-only section! We’re thrilled to have you join our community. Please take a
                        moment to fill out the registration form below to begin accessing valuable and useful information.”
                    </p>
                    <div class="form-container-members">
                        <ul class="nav nav-pills mb-3 pills-tab-hide" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Log In</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                    aria-selected="false">Register Now</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="form-container-inner-1">
                                    <?php echo do_shortcode('[forminator_form id="1931"]'); ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                <div class="form-container-inner-1">
                                    <?php echo do_shortcode('[forminator_form id="1870"]'); ?>
                                </div>
                            </div>
                        </div>
    
                    </div>
                <?php } ?>
                
                <!-- img -->
                <div class="filler-img-offcanavas">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/form-sun.svg" alt="filler">
                </div>
            </div>
        </div>
    </div>



