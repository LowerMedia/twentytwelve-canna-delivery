<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="masthead" class="site-header" role="banner">

	<nav id="site-navigation" class="main-navigation" role="navigation">
		<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
		<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
	</nav><!-- #site-navigation -->
	
	<section class='header-meta-container'>

		<picture class="site-logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			   <source media="(min-width: 1000px)" src="<?php echo get_stylesheet_directory_uri(); ?>/img/georgetown-cannabis-weed-pot-medicinal-medicine-delivery-service-west-seattle-king-county.png">
			   <source media="(min-width: 500px)" src="<?php echo get_stylesheet_directory_uri(); ?>/img/georgetown-cannabis-weed-pot-medicinal-medicine-delivery-service-west-seattle-king-county.png">
			   <source src="<?php echo get_stylesheet_directory_uri(); ?>/img/seattle-cannabis-weed-pot-medicinal-medicine-delivery-service-west-seattle-king-county.png">
			   <img alt="This picture loads on non-supporting browsers." src="<?php echo get_stylesheet_directory_uri(); ?>/img/seattle-cannabis-weed-pot-medicinal-medicine-delivery-service-west-seattle-king-county.png">
			</a>
		</picture>
		
		<hgroup class='header-hgroup'>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			<h3 class="site-description">Delivery Times Scheduled between 9am - 10pm</h2>
			<div class='dark-green btn'><?php echo do_shortcode( '[phonenumber]' )?>
		</div>
		</hgroup>

	</section>

</header><!-- #masthead -->

<div id="page" class="hfeed site">
	<div id="main" class="wrapper">