<?php
/*
 * This file adds the custom footer links to the Divi child theme.
 * Author:   Brad Dalton http://wpsites.net
 * @example   http://wpsites.net/
 * @package Divi Parent Theme by Elegant Themes
*/
if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>


		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; ?>

				<div id="footer-bottom">
					<div class="container clearfix">
				<?php
					if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
						get_template_part( 'includes/social_icons', 'footer' );
					}
				?>

							<!-- Footer Info -->
			<p id="footer-info"><?php printf( __( 'Designed by %1$s | Powered by %2$s | Childtheme created by %3$s', 'extra' ), '<a href="https://creativolandia.com/vamos/divi/" title="Premium WordPress Themes">Elegant Themes</a>', '<a href="https://creativolandia.com/servicio-sastre-web/">Diseño Web a medida</a>' , '<a href="https://creativolandia.com" title="Premium WordPress Themes">Creativolandia</a>'); ?></p>
					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>
</body>
</html>
