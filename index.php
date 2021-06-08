<?php

/**
 * The main template file. This will printed out when there's no static page selected as Homepage
 *
 * @package elemes
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) {; ?>
					<?php the_post(); ?>
					<div class="card p-3 m-2">
						<h1><?php htmlspecialchars(the_title()); ?></h1>
						<?php htmlspecialchars(the_content()); ?>
						<a href="<?php get_the_permalink() ?>" class="btn btn-primary" rel="nofollow"> Read More </a>
					</div>
				<?php }; ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<div class="container">
	<div class="col-lg-4">
		<div class="card">
			Category
		</div>
	</div>
</div>

<?php get_footer(); ?>