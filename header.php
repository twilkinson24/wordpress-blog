<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<!-- ******************* The Navbar Area ******************* -->
		<div id="wrapper-navbar">

			<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

			<header id="masthead" class="site-header position-absolute">
			
				<nav id="main-nav" class="navbar p-0" >
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', '_s' ); ?></button>

						<div class="logo-holder">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" class="logo img-fluid pl-3" alt="the reputation x logo">
						</div>
						<!-- The WordPress Menu goes here -->
						<?php wp_nav_menu(
							// array(
							// 	'theme_location'  => 'menu-1',
							// 	'container_class' => 'collapse navbar-collapse',
							// 	'container_id'    => 'navbarNavDropdown',
							// 	'menu_class'      => 'navbar-nav ml-auto pr-5',
							// 	'fallback_cb'     => '',
							// 	'menu_id'         => 'primary-menu',
							// 	'depth'           => 2
							// )

								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'menu_class'      => 'navbar d-flex',
									'depth'           => 2
								)
							
						); ?>

				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
		</div><!-- #wrapper-navbar -->
