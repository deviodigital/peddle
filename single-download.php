<?php
/**
 * The template for displaying all single downloads.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Peddle
 */

get_header(); ?>

	<div id="primary" class="col-lg-9 content-area">
		<?php do_action('peddle_eddsingle_top'); ?>
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'download' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
		<?php do_action('peddle_eddsingle_bottom'); ?>
	</div><!-- #primary -->

<?php get_sidebar('edd'); ?>
<?php get_footer(); ?>
