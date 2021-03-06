<?php
/**
 * The sidebar containing the EDD widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Peddle
 */
?>

<div id="secondary" class="col-lg-3 widget-area" role="complementary">
<?php if ( is_active_sidebar( 'sidebar-edd' ) ) { ?>
	<?php do_action('peddle_eddsidebar_top'); ?>
	<?php dynamic_sidebar( 'sidebar-edd' ); ?>
	<?php do_action('peddle_eddsidebar_bottom'); ?>
<?php } elseif ( ! dynamic_sidebar( 'sidebar-1' ) ) { ?>
	<?php do_action('peddle_sidebar_top'); ?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php do_action('peddle_sidebar_bottom'); ?>
<?php } ?>
</div><!-- #secondary -->
