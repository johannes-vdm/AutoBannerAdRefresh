<?php

/**
 * @link              https://im-inc.co.za/
 * @since             1.0.0
 * @package           RandomizingAdvertCarousel-Plugin
 * @wordpress-plugin
 * Plugin Name:       RandomizingAdvertCarousel-Plugin
 * Plugin URI:        https://im-inc.co.za/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            IM-INC ~ Johannes van der Merwe
 * Author URI:        https://im-inc.co.za/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       RandomizingAdvertCarousel-Plugin
 */

defined('ABSPATH') or die('No access.');

//require_once(plugin_dir_url(__FILE__).'admin/RandomizingAdvertCarousel-Plugin.php');
require_once(plugin_dir_path(__FILE__) . 'admin/RandomizingAdvertCarousel-Plugin-admin.php');



add_action('admin_menu', 'carousel_AdminMenu');

function advertSelect(){
    $query = "Select * FROM ";
}