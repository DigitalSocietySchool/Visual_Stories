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
								$args = array( 'post_type' => 'pv-tool', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC' );
								$loop = new WP_Query( $args );
								// Start the Loop.
								while ( $loop->have_posts() ) : $loop->the_post();
								?>
									<a href="<?php the_permalink();?>">
										<div class="tool-icon">
											<div class="inner">
												<img src="<?php echo get_post_meta( get_the_ID(), 'wpcf-icon', true); ?>" alt="<?php the_title();?>"></img>
												<h3><?php the_title();?></h3>
											</div>
										</div>
									</a>
								<?php
									//get_template_part( 'content', 'page' );
									//do_action('anaglyph_comments_template');
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
