<?php
/**
 * Template part for displaying style-10 posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package monstroid2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'posts-list__item grid-item' ); ?>>
	<?php monstroid2_post_thumbnail( 'monstroid2-thumb-m-2' ); ?>
	<div class="grid-item-inner">
		<header class="entry-header">
			<div class="entry-meta">
				<?php
				monstroid2_posted_by();
				monstroid2_posted_in( array(
					'prefix' => __( 'In', 'monstroid2' ),
					'delimiter' => ', '
				) ); 
				monstroid2_posted_on( array(
					'prefix' => __( 'Posted', 'monstroid2' ),
				) ); 
				?>
			</div><!-- .entry-meta -->
			<h4 class="entry-title"><?php 
				monstroid2_sticky_label();
				the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
			?></h4>
		</header><!-- .entry-header -->
		<?php monstroid2_post_excerpt(); ?>

		<footer class="entry-footer">
			<div class="entry-meta">
				<?php
				monstroid2_post_tags();

				$post_more_btn_enabled = strlen( monstroid2_theme()->customizer->get_value( 'blog_read_more_text' ) ) > 0 ? true : false;
				$post_comments_enabled = monstroid2_theme()->customizer->get_value( 'blog_post_comments' );

				if( $post_more_btn_enabled || $post_comments_enabled ) {
					?><div class="space-between-content"><?php
					monstroid2_post_link();
					monstroid2_post_comments();
					?></div><?php
				}
				?>
			</div>
		</footer><!-- .entry-footer -->
	</div><!-- .grid-item-inner -->
	<?php monstroid2_edit_link(); ?>
</article><!-- #post-<?php the_ID(); ?> -->
