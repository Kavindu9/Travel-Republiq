<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package travel-republiq
 */

?>

<!-- <header id="masthead"> -->

	<header id="header" class="fixed-top header-bg">
    	<div class="container flex items-center">
        	<a class="logo mr-auto" href="https://aquamarine-hippopotamus-184653.hostingersite.com">
                <img alt="Travel RepubliQ Maldives" src="https://aquamarine-hippopotamus-184653.hostingersite.com/wp-content/uploads/2026/07/17549031248133.webp" class="img-fluid" width="230" height="50">
            </a>

        	<nav id="navbar" class="navbar order-last order-lg-0">
            	<ul>
    
                <style>
					.header-bg, .services .icon-box:hover .icon, .staff {
						background: #fff;
					}

					#header {
						transition: .5s;
						z-index: 997;
						padding: 15px 0 0;
						top: 40px;
						box-shadow: 0 2px 15px rgba(0, 0, 0, .1);
					}

					.fixed-top {
						position: fixed;
						top: 0;
						right: 0;
						left: 0;
						z-index: 1030;
					}
					#header.header-scrolled {
						top: 0;
						background: #fff;
					}

					#header .logo {
						font-size: 30px;
						margin: 0;
						padding: 0;
						line-height: 1;
						font-weight: 700;
					}

					#header .logo img {
						width: auto;
						height: auto;
						max-width: 100%;
						max-height: 50px;
						margin-top: -10px;
						margin-bottom: 10px;
					}

					.navbar {
    					padding: 0;
					}


					.navbar {
						--bs-navbar-padding-x: 0;
						--bs-navbar-padding-y: 0.5rem;
						--bs-navbar-color: rgba(var(--bs-emphasis-color-rgb), 0.65);
						--bs-navbar-hover-color: rgba(var(--bs-emphasis-color-rgb), 0.8);
						--bs-navbar-disabled-color: rgba(var(--bs-emphasis-color-rgb), 0.3);
						--bs-navbar-active-color: rgba(var(--bs-emphasis-color-rgb), 1);
						--bs-navbar-brand-padding-y: 0.3125rem;
						--bs-navbar-brand-margin-end: 1rem;
						--bs-navbar-brand-font-size: 1.25rem;
						--bs-navbar-brand-color: rgba(var(--bs-emphasis-color-rgb), 1);
						--bs-navbar-brand-hover-color: rgba(var(--bs-emphasis-color-rgb), 1);
						--bs-navbar-nav-link-padding-x: 0.5rem;
						--bs-navbar-toggler-padding-y: 0.25rem;
						--bs-navbar-toggler-padding-x: 0.75rem;
						--bs-navbar-toggler-font-size: 1.25rem;
						--bs-navbar-toggler-icon-bg: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2833, 37, 41, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e);
						--bs-navbar-toggler-border-color: rgba(var(--bs-emphasis-color-rgb), 0.15);
						--bs-navbar-toggler-border-radius: var(--bs-border-radius);
						--bs-navbar-toggler-focus-width: 0.25rem;
						--bs-navbar-toggler-transition: box-shadow 0.15s ease-in-out;
						position: relative;
						display: flex;
						flex-wrap: wrap;
						align-items: center;
						justify-content: space-between;
						padding: var(--bs-navbar-padding-y) var(--bs-navbar-padding-x);
					}

					.navbar ul {
						margin: 0;
						padding: 0;
						display: flex;
						list-style: none;
						align-items: center;
					}

					.mobile-nav-toggle {
						color: #2e3e4e;
						font-size: 28px;
						cursor: pointer;
						display: none;
						line-height: 0;
						transition: .5s;
						margin-top: -15px;
					}

                    /* Any of these will work */
                    .nav-link:hover {
                        color: #D32023 !important;
                    }

					@media (min-width: 992px) {
						.order-lg-0 {
							order: 0 !important;
						}
					}

					nav#navbar ul > li {
						margin-right: 70px;
					}

                    /* OR */
                    .home-link:hover {
                        color: #D32023 !important;
                    }
                     nav#navbar ul > li {
						margin-right: 70px;
					}

					nav#navbar ul > li:last-child {
						margin-right: 10px;
					}

                </style>


					<li class="dropdown" me-4="">
						<a class="nav-link " href="#" target="">
							<i class="drop-arrow bi bi-chevron-down"></i>
						</a>
						<ul>
							<li class="">
								<a class="nav-link" href="<?php echo esc_url(home_url('/travel-guide/')); ?>" target="">
									TRAVEL GUIDE
								</a>
							</li>
							<!-- <li class="">
								<a class="nav-link" href="https://travels.mobilesapplication.com/news" target="">
									NEWS
								</a>
							</li> -->
						</ul>
					</li>
					<li class="" me-4="">
						<a class="nav-link active" href="<?php echo esc_url(home_url('/services/')); ?>" target="">
							SERVICES
						</a>
					</li>
					<li class="dropdown" me-4="">
						<a class="nav-link " href="#" target="">
							EXCLUSIVE
						<i class="drop-arrow bi bi-chevron-down"></i>
						</a>

						<ul>
							<li class="">
								<a class="nav-link" href="<?php echo esc_url(home_url('/spo/')); ?>" target="">
									SPO
								</a>
							</li>
						</ul>
					</li>
					<!-- <li class="dropdown" me-4="">
						<a class="nav-link " href="#" target="">
							TRAVEL WITH US
							<i class="drop-arrow bi bi-chevron-down"></i>
						</a>

						<ul>
							<li class="">
								<a class="nav-link" href="https://travels.mobilesapplication.com/make-an-enquiry" target="">
									MAKE AN ENQUIRY
								</a>
							</li>
							<li class="">
								<a class="nav-link" href="https://travels.mobilesapplication.com/contact" target="">
									CONTACT FORM
								</a>
							</li>
						</ul>
					</li> -->
            	</ul>
            	<i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- Improved Search Bar with proper text visibility -->
    </div>

</header>

<!-- </header>#masthead -->
