<?php

/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type')
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
	<?php do_action('wp_body_open'); ?>
	<div class="site" id="page">

		<!-- ******************* The Navbar Area ******************* -->
		<div id="wrapper-navbar">
			<nav id="main-nav" class="navbar navbar-expand-lg navbar-dark bg-primary" aria-labelledby="main-nav-label">
				<div class="container">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary menu',
							'container_class' => 'collapse navbar-collapse',
							'container_id' => 'navbarNavDropdown',
							'menu_class' => 'navbar-nav ml-auto',
							'fallback_cb' => '',
							'menu_id' => 'main-menu',
							'depth' => 2,
							'walker' => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>
				</div>
			</nav>
		</div>

		<!-- #wrapper-navbar end -->