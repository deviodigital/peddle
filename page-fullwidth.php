<?php
/**
 * Template Name: Full Width
 *
 * @package Peddle
 */

get_header(); ?>

	<div id="primary" class="col-lg-12 content-area">
		<?php do_action('peddle_pagefullwidth_top'); ?>
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
		<?php do_action('peddle_pagefullwidth_bottom'); ?>
	</div><!-- #primary -->

<?php get_footer(); ?>
