<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" href="">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<!-- top header Menu Start  -->
		<div class="top-header">
			<?php
                wp_nav_menu( array(
					'theme_location' => 'top-header-menu',
					'menu_id'        => 'top-header1',
					'container'      => 'ul',
					'fallback_cb'    => 'wp_page_menu',
					'menu_class'     => 'nav navbar-nav main-nav',
					'item_wrap'      => '<ul class="%2$s">%3s</ul>'	
                ) );
              ?> 
		</div>
		<!-- top header Menu End  -->
		<!-- Header With lLgo Start  -->
		<div class="header">
			<div class="logo-wrapper">
				<h1>
					<?php the_custom_logo(); ?>
				</h1>
			</div>
			<div class="navi-wrapper">
				<?php get_template_part( 'template-parts/navigation/navigation-header', 'top' ); ?>
			</div>
			<div class="menu-toggle-wrapper">
				<nav role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'top',
								'menu_id'        => 'top-menu',
							)
						);
					?>
				</nav>
			</div>
		</div>
		<!-- Header With Logo End  -->
	</header><!-- #masthead -->
	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
