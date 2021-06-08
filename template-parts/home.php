<?php

/**
 * Template Name: Home
 */

get_header();
?>

<div class="container text-center py-4">
    <span class="fs-4 lead">I talk About</span>
    <h1 class="display-1 fw-bold"><span style="color:#21759b">WordPress</span> . <span
            style="color:#F05340">Laravel</span></h1>

    <h1 class="display-1 fw-bold"><span style="color:#474A8A"> PHP </span> . <span class="text-muted">Life</span>
    </h1>
</div>

<hr>

<div class="container my-5">
    <div class="row">
        <div class="col-lg-4">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_post_thumbnail(); ?>
            <?php the_excerpt(); ?>
            <?php endwhile;
            else : ?> //End the while loop
            <p><?php _e('No Posts To Display.'); ?></p>
            <?php endif; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>