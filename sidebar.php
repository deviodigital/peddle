<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Peddle
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="col-lg-3 widget-area" role="complementary">
	<?php do_action('peddle_sidebar_top'); ?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php do_action('peddle_sidebar_bottom'); ?>
</div><!-- #secondary -->
