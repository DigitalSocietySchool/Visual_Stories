<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Anaglyph_Theme
 * @since Anaglyph Theme 1.0
 */

get_header(); ?>
	<?php $meta = get_post_meta( get_the_ID() );?>
	<?php //anaglyph_get_post_additional_title(); ?>
	<?php //anaglyph_add_breadcrumbs(); ?>
	<section id="blog-post" class="block">
		<div class="container-fluid">
			<div class="row equal-columns">
				<div class="col-sm-7 tool-content">
					<div class="tool-header">
							<img src="<?php echo get_post_meta( get_the_ID(), 'wpcf-icon', true); ?>" alt="<?php the_title();?>"></img>
							<h1 class="tool-title"><?php echo $post->post_title; ?></h1>
					</div>
						<div class="tool-description">
							<?php
								$content = apply_filters( 'the_content', $post->post_content );
								$content = str_replace( ']]>', ']]&gt;', $content );
								echo $content;
							?>
						</div>
				</div>	
				<div class="col-sm-5 right-col">
					<div class="row">
						<div class="col-xs-12 pv-black">
							<?php echo $meta['wpcf-tool-description'][0]; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 pv-red">
							<?php echo $meta['wpcf-when-to-use'][0]; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 pv-yellow">
							<?php echo $meta['wpcf-social-media'][0]; ?>
						</div>
					</div>
					<!--<div class="row">-->
					<!--	<div class="col-xs-12 yellow-filler">-->
					<!--	</div>-->
					<!--</div>-->
				</div>
			</div>	
		</div>	
	</section>	
<?php
	get_footer();