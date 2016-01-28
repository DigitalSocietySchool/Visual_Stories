<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Anaglyph_Theme
 * @since Anaglyph Theme 1.0
 */
wp_enqueue_script('playvisual-mainJs', get_stylesheet_directory_uri() . '/includes/themes/assets/js/custom.js', array( 'jquery','anaglyph-mainJs' ), "20160110" ,true );
?>

	</div><!-- #main -->
	<!-- Footer -->
	<footer id="page-footer" role="contentinfo">
		<?php if ( $post->post_name == "about"){ ?>
		<?php do_action('custom_footer_elements'); ?>
		<?php } ?>
	</footer>
		
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>