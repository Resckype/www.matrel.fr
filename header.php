<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon.png">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="top-header row">
			<div class="header-logo small-12 large-2 columns">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/matrel-logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
			</div>
			<div class="header-catalogue large-10 columns hide-for-small-only">
				<a href="#">Télécharger notre catalogue <i class="fa fa-download"></i></a>
			</div>
		</div>
		<div class="nav-header row">
			<div class="top-bar">
				<div class="top-bar-title">
					<span data-responsive-toggle="responsive-menu" data-hide-for="medium">
						<span class="menu-icon dark" data-toggle></span>
					</span>
				</div>
				<div id="responsive-menu">
					<ul class="dropdown menu" data-dropdown-menu>
						<li class="active"><a href="#">Accueil</a></li>
						<li><a href="#">Qui sommes-nous ?</a></li>
						<li><a href="#">Produits</a>
							<ul class="menu vertical hide-for-small-only">
								<li><a href="#">One</a></li>
								<li><a href="#">Two</a></li>
								<li><a href="#">Three</a></li>
							</ul>
						</li>
						<li><a href="#">Documentations</a></li>
						<li><a href="#">Contact</a></li>
						<li class="show-for-small-only"><a href="#">Télécharger notre catalogue</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
