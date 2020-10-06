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
				
						<div class="logo-holder">
							<a href="/">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" class="logo" alt="the reputation x logo">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo-color.svg" class="logo sticky-logo" alt="the reputation x logo">
							</a>
						</div>
						<!-- The WordPress Menu goes here -->
						<?php wp_nav_menu(

								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'menu_class'      => 'navbar',
									'depth'           => 2
								)
							
						); ?>

						<!-- Mobile Nav Toggle Btn -->
						<button class="menu-toggle justify-content-center align-items-start" aria-controls="primary-menu" aria-expanded="false">
							<span class="sr-only">Toggle Primary Menu</span>
							<span class="mobile-toggle d-flex justify-content-center align-items-center"><span class="bars"></span></span>
						</button>

				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
		</div><!-- #wrapper-navbar -->
