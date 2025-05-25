<?php
/**
 * The template for displaying all pages
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ACF
 */

get_header();
if (!is_page('cart') &&  !is_page('checkout')) {
require 'tpl/inner.php';
}
?>



<?php if (!is_page('cart') &&  !is_page('checkout') && !is_page('my-account')) { ?>
<section class="blog-detail-sec">
  <div class="container">
    <div class="row justify-content-center">
      <div class="white-detail-stripe"></div>
      <div class="col-lg-11">
        <div class="content-box">
		<?php } ?>
          <?php
                    // Start the Loop
                    while (have_posts()) : the_post();
                        // Display post content
                        the_content();
                    endwhile; // End of the loop.
                    ?>
   <?php if (!is_page('cart') &&  !is_page('checkout') & !is_page('my-account')) { ?>     </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>
<?php require 'tpl/donation_bottom.php'; ?>


<?php
get_sidebar();
get_footer();
