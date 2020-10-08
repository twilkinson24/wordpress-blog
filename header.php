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
   	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/Merriweather/Merriweather-Bold.ttf" as="font" type="font/ttf" crossorigin> 
	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/Merriweather/Merriweather-Regular.ttf" as="font" type="font/ttf" crossorigin> 
	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/Merriweather/Merriweather-Light.ttf" as="font" type="font/ttf" crossorigin> 
	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/Montserrat/Montserrat-Bold.ttf" as="font" type="font/ttf" crossorigin> 
	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/Montserrat/Montserrat-Medium.ttf" as="font" type="font/ttf" crossorigin> 

	
	<?php wp_head(); ?>


	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WTXFC4');</script>
	<!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WTXFC4"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

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
