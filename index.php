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

		<?php 
			/** 
			 * Use featured image for hero if we have one
			 *  - if not, show the title with default hero
			 */

			$page_id = get_query_var('page_id'); 
		
			if (has_post_thumbnail( $page_id ) ) : 
				
				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'large');
				$ft_image_arr = wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), 'large' ); 
				$ft_image = $ft_image_arr[0];
			?>
				<div class="hero position-relative">
					<div class="hero-overlay h-100 w-100" style="background-image: url('<?php echo $ft_image; ?>">
						<div class="container">
							<h1 class="page-title"><?php single_post_title(); ?></h1> 
						</div>
					</div>
				</div>

		<?php else : ?>

				<div class="hero position-relative">
					<div class="hero-overlay h-100 w-100">
						<div class="container">
							<h1 class="page-title"><?php single_post_title(); ?></h1>
						</div>
					</div>
				</div>

		<?php endif; ?>


			<div class="container">
			<?php
			if ( have_posts() ) :

					?>

			<div class="row">

			<?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
				<div class="col-lg-8 content-wrap">
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
				
				repx_numeric_posts_nav();
				?>

			</div> <!-- end col -->


			<?php 	if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
						<aside class="blog-sidebar col-lg-4">

							<?php dynamic_sidebar( 'blog-sidebar' ); ?>
							
						</aside>
						
			<?php endif; ?>

		</div><!-- end .row -->

		<?php else : // if no posts

			get_template_part( 'template-parts/content', 'none' );

		endif;
			?>
			</div><!-- end .container -->

<?php
get_footer();
?>


