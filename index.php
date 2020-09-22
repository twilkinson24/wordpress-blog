<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();
?>
		<header class="hero position-relative">
			<div class="hero-overlay h-100 w-100">
				<div class="container">
					<!-- <h1 class="page-title"><?php //the_title(); ?></h1> -->
					<h1 class="blog-title">The Reputation Management Blog</h1>
				</div>
			</div>
		</header>
		<main id="primary" class="site-main">
			<div class="container">
			<?php
			if ( have_posts() ) :

					?>

			<div class="row">

			<?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
				<div class="col-lg-8">
			<?php else : ?>
				<div class="col-12">
			<?php endif; 
					

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
		

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content', 'blog');

				endwhile;

				the_posts_navigation(); ?>

			</div> <!-- end col -->


			<?php 	if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
						<aside class="blog-sidebar col-lg-4">

							<?php dynamic_sidebar( 'blog-sidebar' ); ?>
							
						</aside>
						
			<?php endif; ?>

		<!-- end .row -->

		<?php else : // if no posts

			get_template_part( 'template-parts/content', 'none' );

		endif;
			?>
			</div><!-- end .container -->
		</main><!-- #main -->
	</div> <!-- End .col-lg-8 -->

<?php
get_footer();
?>


