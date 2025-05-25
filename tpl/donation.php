<?php
/*
Template Name: Donation
*/
//get_header();
?>

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
    <link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon-32x32.png">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/aos/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<?php wp_head();?>
</head>

<style>

@import url('https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Red+Hat+Text:ital,wght@0,300..700;1,300..700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Redacted+Script:wght@300;400;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Ballet:opsz@16..72&display=swap');

* {
    padding: 0;
    margin: 0;
}


.donate-section{
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
   
}

.donate-header .navbar-logo img{
    width:148px;
}

.donate-frame{
    border:0;
    width:522px;
    min-height:598px;
    overflow: hidden;
}

.donate-slides{
    margin: 28px 0px 0px 142px;
}

.donate-slides{
    max-width: 581px;
    width:100%; 
    height: 680px;
}

.donate-footer{
    padding-bottom:51px !important
}

.donate-footer .footer-logo img{
    width: 270px !important;
}

.donate-footer-info{
    position: relative;
}

.donate-footer-info p::after {
    content: "";
    position: absolute;
    top: 0px;
    height: 96px;
    opacity: 0.2;
    border-right: 1px solid #80755C;
    right: 10px;
}


iframe .give-form-templates .give-embed-form .give-embed-receipt{
    max-width: 0 !important;
}

.give-embed-form, .give-embed-receipt {
    margin: unset !important;
}

.donate-slides a{
color: rgba(6, 143, 43, 0.96);
font-family: "Red Hat Text";
font-size: 17px;
font-style: normal;
font-weight: 500;
line-height: 25px; /* 147.059% */
}

.donate-thumbnail img{
    min-height:1010px;
}

.donate-slides a .donate-slides-back-arrow{
    width: 20px;
    height: 15.274px;
    padding-right:8px;
    }

@media (max-width:1024px){
    .donate-slides{
        margin: 0;
        display: flex;
        justify-content: unset !important;
        text-align: center;
        padding: 20px;
    }
    .donate-footer{
        text-align: center;
        padding: 20px 0;
    }

    .donate-header{ 
        display: block !important;
    }

    .donate-header .top-left, .donate-header .top-right{
        display: none !important;
    }

    .donate-section .donate-thumbnail{
        display: none;
    }

    .donate-slides{
        display: flex;
        justify-content: center;
        flex-direction: column;
        text-align: justify;
    }

    .donate-footer-info p::after {
        display: none;
    }

    .donate-footer .row{
        gap: 0 !important;
    }

    .donate-slides{
    margin: auto;
}

.donate-slides a{
    text-align: center !important;
}

.donate-footer-info{
    padding:10px !important;
}

.donate-slides-col{
    display:flex;
    justify-content:center;
    width:100%;
}

}

@media (min-width: 1024px) and (max-width:1256px) {
    .donate-slides {
    margin: 28px 0px 0px 20px;
}
}

</style>

<body>

    <!-- <div class="preloader" style="display: none;">
        <div class="loader-img">
            <img src="assets/img/loader.png" class="img-responsive">
        </div>
    </div> -->

    <div class="sticky-top">
        <header class="donate-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 d-flex align-items-center">
                        <div class="top-left justify-content-start">
                            <div class="social-media">
                                <ul class="list-unstyled social-item">
                                   <?php while (have_rows('header_social_icons', 'option')) : the_row(); ?>
                                    <li><a href="<?php the_sub_field('fb_link'); ?>" target="_blank" class="btnIcon"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="<?php the_sub_field('ld_link'); ?>" target="_blank" class="btnIcon"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="<?php the_sub_field('tw_link'); ?>" target="_blank" class="btnIcon"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="<?php the_sub_field('istagram_link'); ?>" target="_blank" class="btnIcon"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="<?php the_sub_field('envelope_link'); ?>" target="_blank" class="btnIcon"><i class="fas fa-envelope"></i></a></li>
                                <?php endwhile; ?>
                                </ul>
                            </div>
                            <div class="top-mail">
                                <div class="mail-icon"><i class="far fa-envelope"></i></div>
                               <a href="<?php the_field('email_link', 'option');?>"><div class="mail-text">
                               <?php the_field('email_address', 'option');?></div></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 d-flex justify-content-center">
                        <div class="navbar-logo">
                            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_field('header_logo', 'option')['url'];?>" loading="lazy" class="img-fluid mx-300" alt="<?php echo get_field('header_logo', 'option')['alt'];?>"/></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 d-flex align-items-center justify-content-end">
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
    </div>

<!---donate-section--strat-->
<div class="donate-section" style="background-image:url(<?php the_field('back_ground_banner'); ?>); ?>">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block px-0">
                <div class="donate-thumbnail">
                    <img src="<?php the_field('left_banner1'); ?>" alt="donation-image" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-12 px-0 donate-slides-col">
                <div class="donate-slides">
                <a href="javascript:void(0)" onclick="history.back()" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16" fill="none" class="donate-slides-back-arrow">
                <path d="M7.57031 0C7.57031 0 7.6041 6.43512 0.9994 7.70167" stroke="#068F2B" stroke-opacity="0.96" stroke-width="1.4" stroke-miterlimit="10"/>
                <path d="M20 7.69922H0" stroke="#068F2B" stroke-opacity="0.96" stroke-width="1.4" stroke-miterlimit="10"/>
                <path d="M1.00072 7.69995C1.00072 7.69995 7.22401 8.8471 7.1178 15.2737" stroke="#068F2B" stroke-opacity="0.96" stroke-width="1.4" stroke-miterlimit="10"/>
                </svg><?php echo get_field('back', 'option'); ?></a>
                   <?php the_field('shortcode'); ?>
                </div>
            </div>
        </div>
    </div>
</div>



    <footer class="section-gap pb-0 ">
        <div class="container">
            <div class="logo-info donate-footer">
                <div class="row align-items-center g-lg-5 g-0">
                    <div class="col-lg-3 col-md-12 col-sm-12 mx-auto">
                        <div class="footer-logo">
                            <a href="<?php echo home_url(); ?>">
                                <img
                                    src="<?php echo get_field('footer_logo', 'option')['url']; ?>"
                                    alt="<?php echo get_field('footer_logo', 'option')['alt']; ?>" 
                                    class="img-fluid lazyimage"/>
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mx-auto">
                        <div class="footer-info donate-footer-info">
                            <p><?php the_field('footer_heading', 'option');?></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 mx-auto">
                           <div class="footer-form">
                                <div class="form-title text-center">
                                  <p><?php the_field('subscribe_to_our_news', 'option');?></p>
                                </div>
                                <div class="registration-form">
                                      <?php the_field('subscriber'); ?>
                                    </div>
                              </div>

                    </div>
                </div>
            </div>
    
    
           
        </div>
        <div class="copy-right">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p><?php the_field('copyright', 'option');?></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    
    <div class="backTotop go-top" id="backToTop">
        <a href=""><img loading="lazy" alt="image" loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/back-to-top.png" class="goTotop-move"></a>
    </div>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/animation.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-3.7.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/js/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js" defer></script>
    
										
										
<!-- OFFCANVAS -->
    <div class="form-offcanvas">
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close custom-close-btn" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body offcanvas-login">
                
                <h6><?php the_field('my_member_area_text');?></h6>
                <?php if ( is_user_logged_in() ) { ?>
                 
                     <p><?php the_field('member_area_login');?></p>
                    <div class="form-container-members">
                        <ul class="nav nav-pills mb-3 pills-tab-hide" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="<?php bloginfo('url')?>/member-access/"><?php the_field('member_title');?></a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a  class="nav-link" href="<?php echo wp_logout_url( home_url() ); ?>"><?php the_field('logout_title');?></a>
                            </li>
                        </ul>
                      
    
                    </div>
                        
                <?php } else { ?>
                <p><?php the_field('member_area_without_login');?></p>
                <div class="form-container-members">
                    <ul class="nav nav-pills mb-3 pills-tab-hide" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true"><?php the_field('login_button');?></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false"><?php the_field('register_button');?></button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="form-container-inner-1">
                                <?php the_field('left_shortcode'); ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="form-container-inner-1">
                                <?php the_field('right_shortcode'); ?>
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
  <?php wp_footer();?>
    </body>
    
    </html>