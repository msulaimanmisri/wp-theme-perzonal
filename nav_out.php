<?php

/**
 * This is the page that showing your menu if user has logout.
 * 
 * Right now, it's only support 2 level of depth. 
 * 
 * If you wish to change, please do that using Elementor or just hardcode it here
 * 
 * @package elemes
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
};

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light py-3 mb-3">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/"><?php echo bloginfo(); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <!-- <a class="nav-link active" aria-current="page" href="#"> -->
                    <?php wp_nav_menu(
                        [
                            'theme_location' => 'elemes_main_menu',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                            'depth' => 2,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ]
                    ); ?>
                    <!-- </a> -->
                </li>
            </ul>

            <form class="d-flex">
                <input class="form-control me-2 shadow-sm" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>