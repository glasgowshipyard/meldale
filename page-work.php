<?php
/**
 * Template Name: Design Portfolio Template for Mel Dale
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package meldale
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="mel-dale-design">
					<?php 
					$args = array(
						//'posts_per_page' => 3,
						'category_name'	=> 'mel dale design'
					);
					$query = new WP_Query( $args );
					// The Loop
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();
							echo '<div class="designs">';
							echo '<a href="' . get_permalink() . '">';
							if (has_post_thumbnail()) {
							the_post_thumbnail('mel-dale-design-pic');
							echo '</a>';
							echo '</div>';
							}
						}
					}
					/* Restore original Post Data */
					wp_reset_postdata();
					?>
			</section><!-- #mel-dale-design -->
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();