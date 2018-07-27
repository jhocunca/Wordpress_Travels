<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hexo Lite
 */ 
$hexo_lite_option = new Hexo_Lite_Options();
get_header(); ?>

	<?php $hexo_lite_option->hexo_lite_about_realestate(); ?>
	<?php $hexo_lite_option->hexo_lite_booking_area(); ?>
	<?php $hexo_lite_option->hexo_lite_gmap(); ?>



<?php get_footer();
