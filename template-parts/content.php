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


if(has_post_thumbnail($post->ID)) :

$featured_img_url = get_the_post_thumbnail_url($post->ID,'large');
?>
<div class="hero position-relative">
	<div class="hero-overlay h-100 w-100" style="background-image: url('<?php echo $featured_img_url; ?>');'">
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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
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

	<?php echo 'original featured image was here'; //_s_post_thumbnail(); ?>

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
</article><!-- #post-<?php the_ID(); ?> -->

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
			<h1 class="page-title"><?php the_title(); ?></h1> -->
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
