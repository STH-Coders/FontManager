<?php

/**
 * Plugin Name.
 *
 * @see               https://github.com/STH-Coders/glyph-runner
 * @since             1.0.0
 *
 * @author            STHCoders <support@safethishome.com>
 * @copyright         2022 STHCoders
 * @license           GPL-3.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       GlyphRunner
 * Plugin URI:        https://github.com/STH-Coders/glyph-runner/
 * Description:       A simple WP plugin for hosting Google Fonts locally.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.4
 * Author:            STHCoders
 * Author URI:        https://www.linkedin.com/showcase/sthcoders/
 * Text Domain:       glyph-runner
 * License:           GPL-3.0+
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.txt
 * Update URI:        https://github.com/STH-Coders/glyph-runner/
 *
 * Portions copyright 2021 Michael Rehnert (@killshot13)
 * Other portions copyright as indicated by authors in the relevant files
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */
if (!defined('WPINC')) {
    exit;
}

define('GLYPH_RUNNER_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php.
 */
function activate_glyph_runner()
{
    require_once plugin_dir_path(__FILE__).'includes/class-glyph-runner-activator.php';
    Plugin_Name_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php.
 */
function deactivate_glyph_runner()
{
    require_once plugin_dir_path(__FILE__).'includes/class-glyph-runner-deactivator.php';
    Plugin_Name_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_glyph_runner');
register_deactivation_hook(__FILE__, 'deactivate_glyph_runner');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__).'includes/class-glyph-runner.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_glyph_runner()
{
    $plugin = new Glyph_Runner();
    $plugin->run();
}
run_glyph_runner();
