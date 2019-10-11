<?php

// Add actions
add_action('after_setup_theme', 'addThemeSupports');
add_action('wp_enqueue_scripts', 'enqueueFrontEndAssets');

// Remove actions
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Tell WordPress about support
function addThemeSupports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

// Register navigation menus
register_nav_menus([
    'primary' => __('Primary Navigation'),
    'secondary' => __('Secondary Navigation')
]);

// Enqueue front end scripts & styles
function enqueueFrontEndAssets()
{
    wp_enqueue_style(
        'app',
        get_template_directory_uri() . '/dist/scss/app.css',
        null,
        null,
        null
    );

    wp_enqueue_script(
        'app',
        get_template_directory_uri() . '/dist/js/app.js',
        null,
        null,
        true
    );
}

// Add extra image sizes
add_image_size('extra-large', 1920, 1080);

// Register theme options page if ACF is enabled
if (function_exists('acf_add_options_page')) {
    acf_add_options_page('Theme Options');
}