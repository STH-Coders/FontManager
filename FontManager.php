<?php
/*
Plugin Name: font-manager
Description: A Simple, Site-Specific WordPress Plugin to Host Google Fonts Locally and Reduce Page Load Speed.
Version: 0.1.0
Author: STHCoders
Author URI: https://www.linkedin.com/showcase/sthcoders/
*/

// Initial Function Call
function LocalFontsPlugin_styles()
{
    // Apply CSS in Turn
    wp_enqueue_style('FontManagerCSS', plugin_dir_url(__FILE__).'assets/css/FontManager.css');
}
// Render Fonts Usable/Visible to WordPress/Browser
add_action('wp_enqueue_scripts', 'FontManager_styles');
