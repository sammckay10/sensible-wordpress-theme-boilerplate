<?php

// Define get_template_directory_uri as a constant to clean up templates
define('THEME_URI', get_template_directory_uri());

// Define is_woocommerce as a constant to clean up templates
define('WC_ACTIVE', function_exists('is_woocommerce'));

// Get our hashed asset paths
$assetPaths = json_decode(file_get_contents(get_template_directory() . "/dist/hashed-assets.json"));

// Tell WordPress which features our theme supports
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('woocommerce');
    add_theme_support('post-thumbnails');
});

// Automatically add header.php and footer.php to each template
add_filter('template_include', function ($template) {
    setup_postdata(get_post());

    get_header();
    include $template;
    get_footer();

    return false;
});

// Register navigation menus
register_nav_menus([
    'primary' => __('Primary Navigation'),
    'secondary' => __('Secondary Navigation')
]);

// Enqueue front end scripts & styles
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('app', get_template_directory_uri() . '/dist/' . $GLOBALS['assetPaths']->main->css, null, null, null);

    // Include in footer is set to false because we're deferring scripts in the header
    wp_enqueue_script('app', get_template_directory_uri() . '/dist/' . $GLOBALS['assetPaths']->main->js, null, null, false);
});

// Add defer attribute to our app.js file
add_filter('script_loader_tag', function ($url) {
    if (!strpos($url, $GLOBALS['assetPaths']->main->js)) {
        return $url;
    }
    return str_replace(' src', ' defer src', $url);
}, 10);

// Add extra image sizes
add_image_size('extra-large', 1920, 1080);

// Register theme options page if ACF is enabled
if (function_exists('acf_add_options_page')) {
    acf_add_options_page('Theme Options');
}
