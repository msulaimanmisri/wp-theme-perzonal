<?php

/**
 * This is page that display static content. For example Page that you create in Pages
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
</div>

<?php get_footer(); ?>