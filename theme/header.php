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
			--font-title: "cormorant", "sans-serif";
			/* --font-body: "quicksand", "sans-serif";  */
			--font-body: "cormorant", "sans-serif";

		}

	</style>


</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page">
	<!-- <a href="#content" class="sr-only"><?php esc_html_e( 'Skip to content', 'travel-republiq' ); ?></a> -->

	<div id="topbar" class="h-10 text-nowrap flex items-center fixed-top header-bg font-body" style=" background: linear-gradient(to right, #15717B,#80915A); color: white;">
		<div class="container mx-auto px-4 py-4 flex justify-between">
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
    
                	<a href="#" title="Instagram" data-bs-placement="top" target="_blank" class="social-instagram me-3" style="background-color: #FFFFFF36 ;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFFFFF" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
</svg></a>
    
					<!-- <a href="#" title="Telegram" data-bs-placement="top" target="_blank" class="social-telegram me-3" style="background-color: #FFFFFF36;">
        				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFFFFF" class="bi bi-telegram" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09"/>
</svg>
    				</a>
    				<a href="#" title="Bottom" data-bs-placement="top" target="_blank" class="social-bottom me-3" style="background-color: #FFFFFF36;">
        				<img src="https://aquamarine-hippopotamus-184653.hostingersite.com/wp-content/uploads/2026/07/botim-1.webp" alt="Bottom" style="width: 20px;">
    				</a> -->

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

		.prose{
			font-family: var(--font-body);
			font-size: 1.25rem;
			font-weight: 400;
		}
	</style>

	<?php get_template_part( 'template-parts/layout/header', 'content' ); ?>

	

	<div id="content">
