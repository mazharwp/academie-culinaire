<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header();
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2 text-center">
            <h1 class="display-4">404</h1>
            <p class="lead">Oops! Page not found.</p>
            <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
            <p>Let's get you back on track.</p>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-info">Go to Homepage</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
