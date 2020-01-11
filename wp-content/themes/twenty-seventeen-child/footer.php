<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-inner">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) :
					?>
					<nav class="social-navigation1" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'social',
									'menu_class'     => 'social-links-menu',
									'depth'          => 1
								)
							);
						?>
					</nav><!-- .social-navigation -->
					<?php
				endif;

				?>
			</div><!-- .Footer Inner -->
			<div class="wrapper-sitinfo">
				<?php
				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div>
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script>
	jQuery(document).ready(function($) {
		$(window).scroll(function(){
			var scrollTop	= parseInt($(document).scrollTop());
			if(scrollTop > 50) {
				$('.header').addClass("fixed-top");
			} else {
				$('.header').removeClass("fixed-top");
			}
	    });
	   $(".menu-wrapper .icon").click(function(){
	   		$(".menu-toggle-wrapper").slideToggle(300);
	   });	
	});
</script>		
</body>
</html>
