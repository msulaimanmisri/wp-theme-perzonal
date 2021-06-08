<?php

/**
 * This is page that display and serve header template
 * 
 * @package elemes
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11" />

    <style>
    .tutor-dashboard-header {
        display: none !important;
    }
    </style>

    <?php wp_head(); ?>
</head>

<nav>
    <?php
    if (is_admin()) {
        require_once("nav_out.php");
    }

    if (is_user_logged_in() &&  !current_user_can('administrator')) {
        require_once("nav_in.php");
    } else {
        require_once("nav_out.php");
    }; ?>

</nav>

<body <?php body_class(); ?>>