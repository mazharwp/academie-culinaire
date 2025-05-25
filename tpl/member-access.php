<?php
/*
Template Name: Member Acess
*/
get_header(); 

require 'inner.php';
?>




<section class="our-members position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 col-12">
                <div class="about-content our-member-content">
                    <div class="desc">
                        <p><?php the_field('description'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="watermark-img">
        <img loading="lazy" alt="<?php echo $image['alt']; ?>" src="<?php echo get_template_directory_uri(); ?>/assets/img/watermarkacf.png"
            class="img-fluid">
    </div>
</section>

<section class="member-info section-gap mb-5 about-company-quotes-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="usaMembers-tab" data-bs-toggle="pill"
                            data-bs-target="#usaMembers" type="button" role="tab" aria-controls="usaMembers"
                            aria-selected="true"><span class="pe-3"> <img loading="lazy" alt="<?php echo $image['alt']; ?>"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/our-members/usa-flage.png"
                                    alt="<?php echo $image['alt']; ?>">
                            </span> <?php the_field('usa__tab'); ?></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="canadaMembers-tab" data-bs-toggle="pill"
                            data-bs-target="#canadaMembers" type="button" role="tab" aria-controls="canadaMembers"
                            aria-selected="false"><span class="pe-3"> <img loading="lazy" alt="<?php echo $image['alt']; ?>"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/our-members/canada-flage.png"
                                    alt="<?php echo $image['alt']; ?>">
                            </span> <?php the_field('canada__tab'); ?></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="retiredMembers-tab" data-bs-toggle="pill"
                            data-bs-target="#retiredMembers" type="button" role="tab" aria-controls="retiredMembers"
                            aria-selected="false"><span class="pe-3"> <img loading="lazy" alt="<?php echo $image['alt']; ?>"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/our-members/retired.png"
                                    alt="<?php echo $image['alt']; ?>">
                            </span> <?php the_field('retired_tab'); ?></button>
                    </li>
                </ul>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="usaMembers" role="tabpanel"
                        aria-labelledby="usaMembers-tab" tabindex="0">

                        <section class="member-chefs">
                            <div class="container">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-lg-3 col-md-8 col-8">
                                        <div class="member-chefs-title">
                                            <h2><?php the_field('usa_title_name'); ?></h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-4 d-flex justify-content-end">
                                        <div class="select-menu active">
                                            <div class="select-btn">
                                                <span class="dropdown-text" id="usa_state_name">All</span>
                                                <span><img loading="lazy" alt="<?php echo $image['alt']; ?>"
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/our-members/down-arrow.svg"></span>
                                            </div>

                                            <ul class="options" id="usa_state_list">
                                               

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <?php if( have_rows('member_chefs_usa') ): ?>
                                <?php
                                    
                                    $state_list_html = '<li class="option" data-target="all"><span><img loading="lazy" alt="image" src="'.get_template_directory_uri().'/assets/img/right-arrow.svg"></span><span class="option-text">All</span></li>';

                                ?>    
                                <?php while( have_rows('member_chefs_usa') ): the_row(); ?>

                                    <?php

                                        $state_list_html .= '<li class="option" data-target="'.strtolower(str_replace(" ","_",get_sub_field('usa_state'))).'"><span><img loading="lazy" alt="image" src="'.get_template_directory_uri().'/assets/img/right-arrow.svg"></span><span class="option-text">'.get_sub_field('usa_state').'</span></li>';

                                    ?>
                                <div class="boardMember" id="<?php echo strtolower(str_replace(" ","_",get_sub_field('usa_state'))); ?>">
                                
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="sec-title position-relative">
                                                <p><?php the_sub_field('usa_state'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chefs-main">
                                        <div class="row">
                                            <?php if( have_rows('member_chefs') ): ?>
                                            <?php while( have_rows('member_chefs') ): the_row(); ?>
                                            <div class="col-lg-6">
                                                <div class="member-chef-box">
                                                    <div class="card light-red">
                                                        <div class="row g-0">
                                                            <div class="col-md-6 chefs-card-img">
                                                                <?php $image = get_sub_field('member_chefs_image'); ?>
                                                                <img loading="lazy" src="<?php echo $image['url']; ?>"
                                                                    class="img-fluid"
                                                                    alt="<?php echo $image['alt']; ?>">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card-body">
                                                                    <div class="chefs-card-content">
                                                                        <h5><?php the_sub_field('member_chefs_title'); ?>
                                                                        </h5>
                                                                        <p><?php the_sub_field('sub_title'); ?></p>
                                                                        <h2><?php the_sub_field('member_chefs_text'); ?>
                                                                        </h2>
                                                                    </div>
                                                                    <div class="custom-btn-3">
                                                                        <a href="<?php the_sub_field('member_chefs_button_link'); ?>"
                                                                            target="_blank">


                                                                            <button class="btnDefault">
                                                                                <span><?php the_sub_field('member_chefs_button'); ?></span>
                                                                                <span class="ps-2">
                                                                                    <img loading="lazy" alt="<?php echo $image['alt']; ?>"
                                                                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg"
                                                                                        class="right-arrow">
                                                                                </span>
                                                                            </button>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                                <?php endif; ?>


                            </div>
                        </section>

                    </div>


                    <div class="tab-pane fade" id="canadaMembers" role="tabpanel" aria-labelledby="canadaMembers-tab"
                        tabindex="0">

                        <section class="member-chefs">
                            <div class="container">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-lg-3">
                                        <div class="member-chefs-title">
                                            <h2><?php the_field('canada_title_name'); ?></h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 d-flex justify-content-end">
                                        <div class="select-menu active">
                                            <div class="select-btn">
                                                <span class="dropdown-text">All</span>
                                                <span><img loading="lazy" alt="<?php echo $image['alt']; ?>"
                                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/our-members/down-arrow.svg"></span>
                                            </div>

                                            <ul class="options" id="canada_state_list">
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php if( have_rows('member_chefs_canada') ): ?>
                                <?php
                                    
                                    $state_list_html1 = '<li class="option" data-target="all"><span><img loading="lazy" alt="" src="'.get_template_directory_uri().'/assets/img/right-arrow.svg"></span><span class="option-text">All</span></li>';

                                ?>    
                                <?php while( have_rows('member_chefs_canada') ): the_row(); ?>

                                    <?php

                                        $state_list_html1 .= '<li class="option" data-target="'.strtolower(str_replace(" ","_",get_sub_field('canada_state'))).'"><span><img loading="lazy" alt="image" src="'.get_template_directory_uri().'/assets/img/right-arrow.svg"></span><span class="option-text">'.get_sub_field('canada_state').'</span></li>';

                                    ?>
                                <div class="boardMember" id="<?php echo strtolower(str_replace(" ","_",get_sub_field('canada_state'))); ?>">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="sec-title position-relative">
                                                <p><?php the_sub_field('canada_state'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chefs-main">
                                        <div class="row">
                                            <?php if( have_rows('canada_member_chefs') ): ?>
                                            <?php while( have_rows('canada_member_chefs') ): the_row(); ?>
                                            <div class="col-lg-6">
                                                <div class="member-chef-box">
                                                    <div class="card  light-red">
                                                        <div class="row g-0">
                                                            <div class="col-md-6 chefs-card-img">
                                                                <?php $image = get_sub_field('canada_chefs_image'); ?>
                                                                <img loading="lazy" alt="image"
                                                                    src="<?php echo $image['url']; ?>" class="img-fluid"
                                                                    alt="<?php echo $image['alt']; ?>">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card-body">
                                                                    <div class="chefs-card-content">
                                                                        <h5><?php the_sub_field('canada_member_chefs_title'); ?>
                                                                        </h5>
                                                                        <p><?php the_sub_field('sub_title'); ?></p>
                                                                        <h2><?php the_sub_field('canada_member_chefs_text'); ?>
                                                                        </h2>
                                                                    </div>
                                                                    <div class="custom-btn-3">
                                                                        <a href="<?php the_sub_field('canada_member_chefs_button_link'); ?>"
                                                                            target="_blank">
                                                                            <button class="btnDefault">
                                                                                <span><?php the_sub_field('canada_member_chefs_button'); ?></span>
                                                                                <span class="ps-2">
                                                                                    <img loading="lazy" alt="<?php echo $image['alt']; ?>"
                                                                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg"
                                                                                        class="right-arrow">
                                                                                </span>
                                                                            </button>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </section>
                    </div>

                    <div class="tab-pane fade" id="retiredMembers" role="tabpanel" aria-labelledby="retiredMembers-tab"
                        tabindex="0">

                        <section class="member-chefs">
                            <div class="container">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-lg-3">
                                        <div class="member-chefs-title">
                                            <h2><?php the_field('retired_title_name'); ?></h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 d-flex justify-content-end">
                                        <!-- <div class="dropdown-btn">
                                            <span>All</span>
                                            <span><img loading="lazy" alt="<?php echo $image['alt']; ?>"
                                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/our-members/down-arrow.svg"></span>
                                        </div> -->
                                    </div>
                                </div>
                                <?php if( have_rows('member_chefs_retired') ): ?>
                                <?php while( have_rows('member_chefs_retired') ): the_row(); ?>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="sec-title position-relative">
                                            <p><?php the_sub_field('retired_chefs'); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chefs-main">
                                    <div class="row">
                                        <?php if( have_rows('retired_member_chefs') ): ?>
                                        <?php while( have_rows('retired_member_chefs') ): the_row(); ?>
                                        <div class="col-lg-6">
                                            <div class="member-chef-box">
                                                <div class="card light-red">
                                                    <div class="row g-0">
                                                        <div class="col-md-6 chefs-card-img">
                                                            <?php $image = get_sub_field('retired_chefs_image'); ?>
                                                            <img loading="lazy" alt="<?php echo $image['alt']; ?>"
                                                                src="<?php echo $image['url']; ?>" class="img-fluid"
                                                                alt="<?php echo $image['alt']; ?>">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="card-body">
                                                                <div class="chefs-card-content">
                                                                    <h5><?php the_sub_field('retired_member_chefs_title'); ?>
                                                                    </h5>
                                                                    <p><?php the_sub_field('sub_title'); ?></p>
                                                                    <h2><?php the_sub_field('retired_member_chefs_text'); ?>
                                                                    </h2>
                                                                </div>
                                                                <!-- <div class="custom-btn-3">
                                                                    <a
                                                                        href="<?php the_sub_field('retired_member_chefs_button_link'); ?>" target="_blank">
                                                                        <button class="btnDefault">
                                                                            <span><?php the_sub_field('retired_member_chefs_button'); ?></span>
                                                                            <span class="ps-2">
                                                                                <img loading="lazy" alt="<?php echo $image['alt']; ?>"
                                                                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg"
                                                                                    class="right-arrow">
                                                                            </span>
                                                                        </button>
                                                                    </a>
                                                                </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </section>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php require 'botton-news.php'; ?>

<?php get_footer(); ?>

<script>
    
    var state_list_html = '<?php echo $state_list_html; ?>';
    console.log(state_list_html);
   
    document.getElementById('usa_state_list').innerHTML=state_list_html;
</script>

<script>
    
    var state_list_html1 = '<?php echo $state_list_html1; ?>';
    console.log(state_list_html1);
   
    document.getElementById('canada_state_list').innerHTML=state_list_html1;
</script>


