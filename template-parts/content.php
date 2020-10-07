<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>


<?php 
	/** 
			 * Use featured image for hero if we have one
			 *  - if not, show the title with default hero
			 */


if(class_exists('ACF')) {
	$reading_time = get_field('post_reading_time');
}

if(has_post_thumbnail($post->ID)) :

$featured_img_url = get_the_post_thumbnail_url($post->ID,'large');
?>
<div class="hero position-relative">
	<div class="hero-overlay h-100 w-100" style="background-image: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),url('<?php echo $featured_img_url; ?>');">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="page-title"><?php the_title(); ?></h1> 
				</div>
			</div>
		</div>
	</div>
</div>

<?php else : ?>

<div class="hero position-relative">
	<div class="hero-overlay h-100 w-100">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="page-title"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>

<?php endif; ?>


			<div class="container">
				<div class="row">

				<?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
					<div class="col-md-8 content-wrap">
				<?php else : ?>
					<div class="col-12">
				<?php endif; ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


							<header class="entry-header">
								<?php if($reading_time) : ?>
									<p class="post-read-time">
										<?php echo $reading_time; ?>
									</p>
								<?php endif; ?>
								<?php
								if ( is_singular() ) :
									the_title( '<h2 class="entry-title">', '</h2>' );
								else :
									the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
								endif;

								if ( 'post' === get_post_type() ) :
									?>
									<div class="entry-meta">
										<?php
										_s_posted_on();
										_s_posted_by();
										?>
									</div><!-- .entry-meta -->
								<?php endif; ?>
							</header><!-- .entry-header -->


							<div class="entry-content">
								<?php
								the_content(
									sprintf(
										wp_kses(
											/* translators: %s: Name of current post. Only visible to screen readers */
											__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', '_s' ),
											array(
												'span' => array(
													'class' => array(),
												),
											)
										),
										wp_kses_post( get_the_title() )
									)
								);

								wp_link_pages(
									array(
										'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
										'after'  => '</div>',
									)
								);
								?>
							</div><!-- .entry-content -->

							<footer class="entry-footer">
								<?php _s_entry_footer(); ?>

							</footer><!-- .entry-footer -->
						</article><!-- #post -->

						<?php 

						// leave commented out for now
						// the_post_navigation(
						// 	array(
						// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', '_s' ) . '</span> <span class="nav-title">%title</span>',
						// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', '_s' ) . '</span> <span class="nav-title">%title</span>',
						// 	)
						// );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif; 
						?>

					</div> <!-- end .col -->

					<!-- sidebar -->
					<?php 	if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
						<aside class="blog-sidebar col-md-4">
							<?php dynamic_sidebar( 'blog-sidebar' ); ?>
						</aside>						
					<?php endif; ?>

				</div> <!-- end .row -->
			</div> <!-- end .container -->
<?php 
