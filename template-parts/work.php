<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package meldale
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section id="design">
		<?php 
		 if (has_post_thumbnail() ) { ?>
		 <?php the_post_thumbnail('large', array('id' => 'design')); ?><?php }
			 ?>
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'meldale' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'meldale' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php meldale_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
