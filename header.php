<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Anaglyph_Theme
 * @since Anaglyph Theme 1.0
 */
?>
<?php 
    global $post;
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="mobile-indicator"></div>
	<div id="page" class="hfeed site play-visual">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'anaglyph-lite' ); ?></a>
		
		<?php //if ( ! is_front_page()){ // No menu on FrontPage?>
		<div class="navigation-wrapper <?php echo $post->post_name?>" <?php if ($post->post_name == "sample-page") echo "style='position:absolute !important;'"?>>
			<div class="navigation">
				<header class="navbar" id="top" role="banner">
					<div class="container">
						<div class="navbar-header">
							<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
								<span class="sr-only"><?php _e('Toggle navigation', 'anaglyph-lite'); ?></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<?php if ( ! is_front_page()) { anaglyph_get_logo();} ?>
						</div>
						
						<div class"navbar-<?php echo $post->post_name?>">
						<nav class="primary-navigation collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation" aria-label="<?php _e( 'Primary Navigation', 'anaglyph-lite' ); ?>">
							<?php 	if ( has_nav_menu( 'primary' ) ) {
									   wp_nav_menu( array( 
														'theme_location' 	=> 'primary', 
														'menu_class' 	 	=> 'nav navbar-nav', 
														'container'		 	=> false, 
														'walker' 			=> new anaglyph_submenu_class())); 
								} else {
								?>
									<ul class="nav navbar-nav">
										<?php
											wp_list_pages(array('title_li' => '', 'sort_column' => 'menu_order, post_title', 'walker' => new Anaglyph_Page_Walker()));
										?>	
									</ul>
								<?php	
								}							  
							?>
						</nav>	
					</div><!-- /.container -->
				</header><!-- /.navbar -->
			</div><!-- /.navigation -->
		</div><!-- end Header -->
		<?php //} ?>
		<!-- For top anchor -->	
		
		<?php anaglyph_get_hslider(); ?>
	<div id="main" class="site-main <?php echo $post->post_name . ' ' . $post->post_type?>">
