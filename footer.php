<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package meldale
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php bloginfo('url'); ?>/manifesto"><img src="<?php get_template_directory(); ?>/banner.svg" alt="<?php bloginfo('description'); ?>" role="img" class="coat-of-arms"></a>
			<div class="copyright">Content Copyright &copy; <?php echo date('Y'); ?> Mel Dale & Mediocre Productions</div>
			<div class"made-by"><?php printf( esc_html__( 'Hand Built by %2$s.', 'meldale' ), 'meldale', '<a href="http://glasgowshipyard.com" rel="designer">Glasgow Shipyard</a>' ); ?></div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
			<!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
