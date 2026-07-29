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

	<!-- CSS -->
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

	<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?>

	<style type="text/tailwindcss">
		@theme {
			--font-title: "montserrat", "sans-serif";
			--font-body: "quicksand", "sans-serif"; 

		}

	</style>


</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page">
	<!-- <a href="#content" class="sr-only"><?php esc_html_e( 'Skip to content', 'travel-republiq' ); ?></a> -->

	<div id="topbar" class="h-10 text-nowrap flex items-center fixed-top header-bg font-body" style=" background: linear-gradient(to right, #15717B,#80915A); color: white;">
		<div class="container flex justify-between">
			<div class="contact-info flex items-center">
                <span class="">
                    <i class="fa fa-phone" style="color: white;"></i> &nbsp;<a href="tel:+960 7562222" style="color: white;"><span dir="ltr">+960 7562222</span></a>
                </span>
                <span class="top-email d-none d-lg-block">
                    &nbsp; | &nbsp;
                	<i class="fa fa-envelope" style="color: white;"></i> &nbsp;<a href="mailto:sales@trmaldives.com" style="color: white;">sales@trmaldives.com</a>
                </span>
            </div>
			<div class="privacy-text d-none d-sm-block">
				<div class="social-links flex text-center text-md-right pt-3 pt-md-0">
    
                	<a href="#" title="Instagram" data-bs-placement="top" target="_blank" class="social-instagram me-3" style="background-color: #FFFFFF36 ;"><i class="bi bi-instagram" style="color:#ffffff;"></i></a>
    
					<a href="#" title="Telegram" data-bs-placement="top" target="_blank" class="social-telegram me-3" style="background-color: #FFFFFF36;">
        				<img src="https://aquamarine-hippopotamus-184653.hostingersite.com/wp-content/uploads/2026/07/telegram.png" alt="Telegram" style="width: 20px;">
    				</a>
    				<a href="#" title="Bottom" data-bs-placement="top" target="_blank" class="social-bottom me-3" style="background-color: #FFFFFF36;">
        				<img src="https://aquamarine-hippopotamus-184653.hostingersite.com/wp-content/uploads/2026/07/botim-1.webp" alt="Bottom" style="width: 20px;">
    				</a>

				</div>
        	</div>

        </div>
	</div>

	<style>
		#topbar {
			height: 40px;
			transition: .5s;
			z-index: 998;
			box-shadow: 0 0 1px rgba(0, 0, 0, .4);
			text-wrap: nowrap;
			transition: .5s;
			z-index: 998;
			box-shadow: 0 0 1px rgba(0, 0, 0, .4);
		}

		.fixed-top {
			position: fixed;
			top: 0;
			right: 0;
			left: 0;
			z-index: 1030;
		}

		@media (min-width: 576px) {
			.d-sm-block {
				display: block !important;
			}
		}

		@media (min-width: 576px) {
			.d-sm-block {
				display: block !important;
			}
		}

		@media (min-width: 768px) {
			.pt-md-0 {
				padding-top: 0 !important;
			}
		}

		#topbar .social-links a:first-child {
			border-left: 0;
		}

		#topbar .social-links a {
			width: 28px;
			height: 28px;
			padding: 7px;
			font-size: 14px;
			display: inline-block;
			line-height: 1px;
			transition: .3s;

			color: #2e3e4e;
			display: inline-block;
			line-height: 1px;
			transition: .3s;
		}
		.social-links .social-instagram {
			background: #8134af;
		}
	</style>

	<?php get_template_part( 'template-parts/layout/header', 'content' ); ?>

	

	<div id="content">
