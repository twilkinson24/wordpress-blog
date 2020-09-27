<?php
/**
 * Template part for displaying page content in page.php
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


if(has_post_thumbnail($post->ID)) :

$featured_img_url = get_the_post_thumbnail_url($post->ID,'large');
?>
<div class="hero position-relative">
	<div class="hero-overlay h-100 w-100" style="background-image: url('<?php echo $featured_img_url; ?>">
		<div class="container">
			<h1 class="page-title"><?php the_title(); ?></h1> 
		</div>
	</div>
</div>

<?php else : ?>

<div class="hero position-relative">
	<div class="hero-overlay h-100 w-100">
		<div class="container">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</div>
	</div>
</div>

<?php endif; ?>




<div class="container">
	<div class="row">
		<div class="col-12">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<?php echo 'original ft image was here'; // _s_post_thumbnail(); ?>

				<div class="entry-content">
					<?php
					the_content();

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
							'after'  => '</div>',
						)
					);
					?>
				</div><!-- .entry-content -->

				<?php if ( get_edit_post_link() ) : ?>
					<footer class="entry-footer">
						<?php
						edit_post_link(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Edit <span class="screen-reader-text">%s</span>', '_s' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								wp_kses_post( get_the_title() )
							),
							'<span class="edit-link">',
							'</span>'
						);
						?>
					</footer><!-- .entry-footer -->
				<?php endif; ?>
			</article><!-- #post-<?php the_ID(); ?> -->

		</div> <!-- end .col -->
	</div><!-- end .row -->
</div> <!-- end .container -->
