<?php /* Template Name: PlayVisualHome */ ?>
<?php
/**
 * The template for displaying Front Page
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
		
		if (get_option('page_on_front') != 0) { 
			while ( have_posts() ) : the_post(); ?>
			<?php $meta = get_post_meta( get_the_ID() );?>
			
				
				<div class="logo-container" onclick="playVideo()">
					<img id="play-logo" src="https://play-visual-luky83.c9users.io/wp-content/uploads/2015/12/playVisual_small.png" alt="Play Visual Logo" class="logo-fg">
				</div>
			    <div class="fullscreen-bg">
			        <video id="home-video" poster="wp-content/themes/play-visual/includes/themes/assets/img/header_16_9.png" class="fullscreen-bg__video">
			            <source src="wp-content/themes/play-visual/includes/themes/assets/video/PlayVisualPromo_mid-res.mp4" type="video/mp4">
			        </video>
			    </div>

				<section id="front-page" class="wpb_row block vc_row-fluid">
					<div class="container-fluid">
						<div class="row pv-section-2">
							<div class="col-md-1">
							</div>
							<div class="col-md-4">
								<div class='home-button'>
									<h2><?php echo $meta['wpcf-section-2-button'][0]; ?></h2>
								</div>
								<?php echo $meta['wpcf-section-2-text'][0]; ?>
							</div>
							<div class="col-md-5 col-md-offset-1">
								<img src="<?php echo $meta['wpcf-section-2-icon'][0]; ?>" alt="Think Create Share Check Reiterate" class="section-2-icon">
							</div>
							<div class="col-md-1">
							</div>
						</div>
						<div class="row pv-section-3">
							<div class="col-xs-12 pv-fullscreen">
								<img src="<?php echo $meta['wpcf-section-3-background'][0]; ?>" alt="Get Inspired" class="slider-bg">
							</div>
						</div>
						<div class="row pv-section-4">
							<div class="col-md-1">
							</div>
							<div class="col-md-5">
								<img src="<?php echo $meta['wpcf-section-4-icon'][0]; ?>" alt="Visuals Increase Engagement by 37 percent" class="section-4-icon">
							</div>
							<div class="col-md-4 col-md-offset-1">
								<div class='white-home-button'>
									<h2><?php echo $meta['wpcf-section-4-button'][0]; ?></h2>
								</div>
								<?php echo $meta['wpcf-section-4-text'][0]; ?>
							</div>
							<div class="col-md-1">
							</div>
						</div>
						<div class="row pv-section-5">
							<div class="col-xs-12 pv-fullscreen">
								<img src="<?php echo $meta['wpcf-section-5-background'][0]; ?>" alt="#playvisual" class="slider-bg">
							</div>
						</div>
						<div class="row pv-section-6">
							<div class="col-sm-3">
							</div>
							<div class="col-sm-6">
								<div class='white-home-button'>
									<h2><?php echo $meta['wpcf-section-6-button'][0]; ?></h2>
								</div>
							</div>
							<div class="col-sm-3">
							</div>
						</div>
						<div class="row pv-section-7">
							<div class="col-xs-12 pv-fullscreen">
								<img src="<?php echo $meta['wpcf-section-7-background'][0]; ?>" alt="Engage Your Crowd" class="slider-bg">
							</div>
						</div>						
						<div class="row pv-section-8 equal-columns">
							<div class="col-xs-8 pv-black">
								<?php echo $meta['wpcf-section-8-link-1'][0]; ?>
							</div>
							<div class="col-xs-8 pv-red">
								<?php echo $meta['wpcf-section-8-link-2'][0]; ?>
							</div>
						</div>
						<div class="row pv-section-9">
							<div class="col-xs-12 pv-fullscreen">
								<img src="<?php echo $meta['wpcf-section-9-background'][0]; ?>" alt="Stay Motivated" class="slider-bg">
							</div>
						</div>
						<div class="row pv-section-10">
							<div class="col-sm-3">
							</div>
							<div class="col-sm-6">
								<div class='home-button'>
									<h2><?php echo $meta['wpcf-section-10-button'][0]; ?></h2>
								</div>
							</div>
							<div class="col-sm-3">
							</div>
						</div>
						<div class="row pv-section-11">
							<div class="col-sm-3">
							</div>
							<div class="col-sm-6">
								<div class='white-home-button'>
									<h2><?php echo $meta['wpcf-section-11-button'][0]; ?></h2>
								</div>
							</div>
							<div class="col-sm-3">
							</div>
						</div>
						<div class="row pv-section-12">
							<div class="col-md-1">
							</div>
							<div class="col-md-2">
								<?php echo $meta['wpcf-section-12-link-1'][0]; ?>
							</div>
							<div class="col-md-2">
								<?php echo $meta['wpcf-section-12-link-2'][0]; ?>
							</div>
							<div class="col-md-2">
								<?php echo $meta['wpcf-section-12-link-3'][0]; ?>
							</div>
							<div class="col-md-2">
								<?php echo $meta['wpcf-section-12-link-4'][0]; ?>
							</div>
							<div class="col-md-2">
								<?php echo $meta['wpcf-section-12-link-5'][0]; ?>
							</div>
							<div class="col-md-1">
							</div>
						</div>
					</div>
				</section>

			<?php
			endwhile;
		} else {
			$blog_id = get_option( 'page_for_posts' ); 
			if (is_home()) { 
				if (!is_front_page()) {
				?>
				<section id="page-title">
					<?php 
						$title = get_the_title($blog_id);
						if (!empty($title)) {
					?>	
							<div class="title">
								<h1 class="reset-margin"><?php echo $title;?></h1>
							</div>
					<?php } ?>		
				<?php 
					if ( has_post_thumbnail($blog_id)) { 
						$title_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($blog_id), 'full');
						echo '<img src="'.$title_thumbnail[0].'" class="parallax-bg" alt="">';
					}	
				?>
				</section>
			<?php 
				} 
			} 
			?>
			<?php anaglyph_add_breadcrumbs(); ?>
			<?php anaglyph_default_page_content(); ?>

	<?php
		}		
	?>
<?php 
get_footer();
