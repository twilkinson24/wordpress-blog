<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

if(class_exists('ACF')) {
 	$reading_time = get_field('post_reading_time');
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-roll-post'); ?>>
	<?php if($reading_time) : ?>
		<p class="post-read-time">
			<?php echo $reading_time; ?>
		</p>
	<?php endif; ?>
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
				_s_posted_by_blog();
				_s_posted_on_blog_roll();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

    <?php if(has_post_thumbnail($post->ID)) : ?>
        <div class="post-thumbnail">
            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                    $thumb_id = get_post_thumbnail_id(get_the_ID());
                    $featured_img_alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
            ?>

            <a href="<?php echo the_permalink(); ?>">
                <img src="<?php echo $featured_img_url; ?>" alt="<?php echo $featured_img_alt; ?>" class="post-thumbnail-img" loading="lazy">
            </a>
        </div>

    <?php else : ?>
        <div class="post-thumbnail">
            <a href="<?php echo the_permalink(); ?>">
                <img src="<?php echo get_template_directory_uri() . '/img/home-banner.svg'; ?>" alt="<?php echo get_the_title(); ?>" class="post-thumbnail-img" loading="lazy">
            </a>
        </div>
    <?php endif; ?>

	<div class="entry-content">
		<?php
		the_excerpt();

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

