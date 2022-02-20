<?php
/**
 * Font Manager plugin for WordPress.
 *
 * @see      https://github.com/STH-Coders/font-manager/
 *
 * @author    STHCoders <support@safethishome.com>
 * @copyright 2021-2022 STHCoders
 * @license   GPLv3 or later
 *
 * Plugin Name:  Font Manager
 * Description: A Simple Way to Host Google Fonts Locally & Reduce Page Load Speed.
 * Version:      2.1.0
 * Plugin URI:   https://github.com/STH-Coders/font-manager/
 * Author:       STHCoders
 * Author URI:   https://www.linkedin.com/showcase/sthcoders/
 *
 * Portions copyright 2011-22 Michael Rehnert (@killshot13)
 * Other portions copyright as indicated by authors in the relevant files
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */
if (!defined('ABSPATH')) {
    exit;
}

define('FONT_MANAGER_VERSION', '2.1.0');

// add or update plugin version to database.
function fm_font_save_manager_version()
{
    $font_manager_version = get_option('font_manager_version');
    if (!$font_manager_version) {
        add_option('font_manager_version', FONT_MANAGER_VERSION);
    } else {
        update_option('font_manager_version', FONT_MANAGER_VERSION);
    }
}

// primary function call
function font_manager_styles()
{
    $fm_dir = dirname(__FILE__);
    // Apply CSS in Turn
    wp_enqueue_style('font_manager_css', "{$fm_dir}/assets/css/font-manager.css");
}
// Render Fonts Usable/Visible to WordPress/Browser
add_action('wp_enqueue_scripts', 'font_manager_styles');
