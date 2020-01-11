<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<div class="menu-wrapper">
	<?php
		echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) );
		_e( '', 'twentyseventeen' );
		?>
</div>
<nav id="site-navigation" class="" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'top',
				'menu_id'        => 'top-menu',
			)
		);
	?>
</nav>
<!-- #site-navigation -->
