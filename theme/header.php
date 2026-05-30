<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package travel-republiq
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

	<!-- JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<style>

	.carousel-cell {
	width: 28%;
	height: 200px;
	margin-right: 10px;
	border-radius: 5px;
	counter-increment: carousel-cell;
	}

	/* cell number */
	.carousel-cell:before {
	display: block;
	text-align: center;
	content: counter(carousel-cell);
	line-height: 200px;
	font-size: 80px;
	color: white;
	}
</style>

<div id="page">
	<a href="#content" class="sr-only"><?php esc_html_e( 'Skip to content', 'travel-republiq' ); ?></a>

	<?php get_template_part( 'template-parts/layout/header', 'content' ); ?>

	<div id="content">
