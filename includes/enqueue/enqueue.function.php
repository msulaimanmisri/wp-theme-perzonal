<?php
function elemes_scripts_style()
{

    // Core Bootstrap
    wp_enqueue_style('bootstrap_core', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css');

    // Bootstrap 5 Icon
    wp_enqueue_style('bootstrap_icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css');

    // Bootstrap 5 Js Core.
    wp_enqueue_script('bootstrap_js_second', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js', true);

    // Bootstrap 5 Js Popper.
    wp_enqueue_script('bootstrap_js_primary', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js', true);

    // Bootstrap Jquery
    wp_enqueue_script('bootstrap_jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array('jquery'), '', true);

    // Bootstrap Jquery 2
    wp_enqueue_script('bootstrap_jquery2', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array('jquery'), '', true);

    // Bootstrap Jquery 3
    wp_enqueue_script('bootstrap_jquery3', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'elemes_scripts_style');