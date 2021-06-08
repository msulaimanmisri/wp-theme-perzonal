<?php

/**
 * perzonal functions and definition.
 * 
 * Please remember that this file load 1st.
 * 
 * So make sure untuk include @ require_once only functions that worked.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package perzonal
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

// Load Core files
require_once("includes/core/menus.php");

// Load Style & Scripting files
require_once("includes/enqueue/enqueue.function.php");
