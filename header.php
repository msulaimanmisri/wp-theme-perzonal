<?php

/**
 * This is page that display and serve header template
 * 
 * @package perzonal
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

    <?php echo wp_head(); ?>
</head>

<nav>
    <?php require_once("layout/nav.php"); ?>
</nav>

<body <?php body_class(); ?>>