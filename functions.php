<?php

/**
 * elemes functions and definition.
 * 
 * Please remember that this file load 1st.
 * 
 * So make sure untuk include @ require_once only functions that worked.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package elemes
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

// Load Core files
require_once("includes/core/menus.php");
require_once("includes/core/wc-support.php");

// Load Style & Scripting files
require_once("includes/enqueue/enqueue.function.php");

// Load Widget files
// require_once("includes/widgets/welcome.dashboard.php");

// Load Hook files
require_once("includes/hooks/nickname.filter.php");
require_once("includes/hooks/howdy.filter.php");
require_once("includes/hooks/wpbar.filter.php");

// Load Tutor Hooks
require_once("includes/hooks/tutor/cikgu.tutor.php");
require_once("includes/hooks/tutor/general.tutor.php");

// Load Woocommerce Hooks
require_once("includes/hooks/woocommerce/auto.php");
require_once("includes/hooks/woocommerce/redirect.php");

// require_once("includes/hooks/woocommerce/pdf.php");

// Theme Wizard setup
// require_once get_parent_theme_file_path('merlin/vendor/autoload.php');
// require_once get_parent_theme_file_path('merlin/class-merlin.php');
// require_once get_parent_theme_file_path('merlin/merlin-config.php');

// Redirect
// function ace_block_wp_admin()
// {
// 	if (is_admin() && !current_user_can('administrator') && !(defined('DOING_AJAX') && DOING_AJAX)) {
// 		wp_safe_redirect(home_url());
// 		exit;
// 	}
// }
// add_action('admin_init', 'ace_block_wp_admin');