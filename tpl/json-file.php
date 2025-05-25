<?php

define('JSON_PATH', '/home/acfusao1/public_html/demo/json');

// Utility functions
function format_menu_item($menu_item, $headless_url) {
    return array(
        'ID' => $menu_item->ID,
        'title' => $menu_item->title,
        'url' => str_replace(get_bloginfo('url'), $headless_url, $menu_item->url),
        'parent' => $menu_item->menu_item_parent,
        'children' => array()
    );
}

function build_menu_tree(array $elements, $parent_id = 0) {
    $branch = array();
    foreach ($elements as &$element) {
        if ($element['parent'] == $parent_id) {
            $element['children'] = build_menu_tree($elements, $element['ID']);
            $branch[] = $element;
        }
    }
    return $branch;
}

function fetch_formatted_menu($menu_name, $headless_url) {
    $menu_items = wp_get_nav_menu_items($menu_name);
    if (!$menu_items) return array();
    
    $formatted_menu_items = array_map(function ($item) use ($headless_url) {
        return format_menu_item($item, $headless_url);
    }, $menu_items);

    return build_menu_tree($formatted_menu_items);
}

function update_acf_options_json() {
    
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
    
 
    
    // Example usage
    $headless_url = '';
    
    $primary_menu_tree = fetch_formatted_menu('primary-menu', $headless_url);
    $secondary_menu_tree = fetch_formatted_menu('secondary-menu', $headless_url);

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
        'primary_menu' => $primary_menu_tree,
        'secondary_menu' => $secondary_menu_tree,
    );

    // Write to JSON file
    $json_file_path = JSON_PATH . '/header-options.json';
    $result = file_put_contents($json_file_path, json_encode($options, JSON_PRETTY_PRINT));
    if ($result === false) {
        error_log('Failed to write ACF options JSON file');
    }
}

add_action('acf/save_post', 'update_acf_options_json', 20);
add_action('wp_update_nav_menu', 'update_acf_options_json', 10, 2);
