<?php wp_enqueue_script( 'flipjs', get_stylesheet_directory_uri() . '/includes/themes/assets/js/flip.js', array( 'jquery' ), null, true ); ?>
<?php wp_enqueue_script( 'pvflipjs', get_stylesheet_directory_uri() . '/includes/themes/assets/js/pvflip.js', array( 'flipjs' ), null, true ); ?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Anaglyph_Theme
 * @since Anaglyph Theme 1.0
 */

get_header(); ?>
<?php
		// Start the Loop.
		while ( have_posts() ) : the_post();
		?>
			<div class="container-fluid">
				<?php the_content();?>
				<div class="row">
					<div class="col-xs-12">
							<?php
								$args = array( 'post_type' => 'card', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC' );
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
									?>
									
									
									<div id="<?php the_ID()?>" class="card">
								      <div class="front">
								        <img src="<?php echo get_post_meta( get_the_ID(), 'wpcf-front', true); ?>" alt="Tip-front" onclick="jQuery('#<?php the_ID()?>').flip('toggle');">
								      </div>
								      <div class="back">
								        <img src="<?php echo get_post_meta( get_the_ID(), 'wpcf-back', true); ?>" alt="Tip-back" onclick="jQuery('#<?php the_ID()?>').flip('toggle');">
								      </div>
								    </div>
									
									<?php
								endwhile;
							?>
					</div>
				</div>
			</div>
		<?php 
		endwhile;
	?>	
<?php
   get_footer();
