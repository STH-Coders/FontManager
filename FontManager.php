<?php
/*
Plugin Name: Font Manager
Description: A Simple, Site-Specific WordPress Plugin to Host Google Fonts Locally and Reduce Page Load Speed.
Version: 0.2.0
Author: STHCoders
Author URI: https://www.linkedin.com/showcase/sthcoders/
*/

// Initial Function Call
function FontManager_styles()
{
    // Apply CSS in Turn
    wp_enqueue_style('FontManagerCSS', plugin_dir_url(__FILE__).'assets/css/FontManager.css');
}
// Render Fonts Usable/Visible to WordPress/Browser
add_action('wp_enqueue_scripts', 'FontManager_styles');
