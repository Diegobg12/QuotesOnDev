<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>


			</div><!-- #content -->



			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div class="menu-main-navigation-container">
						<?php wp_nav_menu( array( 'container'=> 'ul','theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class'=> 'footer-navigation' ) ); ?>
					</div>
					<p>Brought to you by <a href="http://www.redacademy.com/">RED Academy</a></p>

				</div>
			</footer><!-- #colophon -->

		</div><!-- #page -->

		<?php wp_footer(); ?>


	</body>
</html>
