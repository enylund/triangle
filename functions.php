<?php

// CSS and JS script enqueues
require_once('functions/enqueue_scripts.php');

// Register custom image sizes
require_once('functions/custom_image_sizes.php');

// Security
foreach (glob(get_stylesheet_directory() . '/functions/wordpress_security/*.php') as $filename) {
  require_once $filename;
}

// Enable wordpress behaviors, like adding theme support for menus
foreach (glob(get_stylesheet_directory() . '/functions/wordpress_enables/*.php') as $filename) {
  require_once $filename;
}

// Disable unwanted default wordpress behaviors
foreach (glob(get_stylesheet_directory() . '/functions/wordpress_disables/*.php') as $filename) {
  require_once $filename;
}

// Include all functions
foreach (glob(get_stylesheet_directory() . '/functions/functions/*.php') as $filename) {
  require_once $filename;
}

// Include all filters
foreach (glob(get_stylesheet_directory() . '/functions/filters/*.php') as $filename) {
  require_once $filename;
}

// Include all shortcodes
foreach (glob(get_stylesheet_directory() . '/functions/shortcodes/*.php') as $filename) {
  require_once $filename;
}

// Navigation Menus
register_nav_menus(array(

  'primary' => __('Primary Menu'),
  'footer' => __('Footer Menu')

));

// Add options page for address
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
    'page_title'  => 'General Contact Info',
    'menu_title'  => 'Contact Info',
    'menu_slug'   => 'contact-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));

  acf_add_options_page(array(
    'page_title'  => 'Support Info',
    'menu_title'  => 'Support Info',
    'menu_slug'   => 'support-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));

}
