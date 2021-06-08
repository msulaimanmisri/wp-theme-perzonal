<?php

/**
 * This is the page that showing 404 Error.
 * 
 * If you wish to change, please do that using Elementor or just hardcode it here
 * 
 * @package perzonal
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();
?>

<div class="container">
    <?php the_content(); ?>

    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card p-5 text-center  shadow-sm">
                <h4 class="">Nope! I don't understand what are you trying to search bro..</h4>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>