<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
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
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/favicon.ico" type="image/x-icon">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css">
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site grid">
	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<h1 class="menu-toggle"><?php _e( 'Menu', 'twentyfourteen' ); ?></h1>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>

			<nav id="secondary-navigation" role="navigation" class="navigation site-navigation secondary-navigation">
				<div class="menu-social-container">
					<ul id="menu-social" class="nav-menu">
						<li id="menu-item-248" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-248"><a href="https://www.facebook.com/fosscomm"><i class="fa fa-facebook"></i></a></li>
						<li id="menu-item-250" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-250"><a href="https://twitter.com/FOSSCOMM2014"><i class="fa fa-twitter"></i></a></li>
						<li id="menu-item-249" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-249"><a href="https://plus.google.com/103327935852759692880"><i class="fa fa-google-plus"></i>+</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</header><!-- #masthead -->

	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
	</div>
	<?php endif; ?>
	<?php
	if (is_home()) {
		?>
		<div id="main" class="site-main">
		<?php
	} else {
		?>
		<div id="main" class="site-main row">
		<?php
	}
