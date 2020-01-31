<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

			</div><!-- #content -->

			<div>
				<a href="" type="button" id="close-comments">Get another random design quote</a>
			</div>

			<footer id="colophon" class="site-footer" role="contentinfo">

						<nav id="site-navigation" class="main-navigation" role="navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</nav><!-- #site-navigation -->
			</footer><!-- #colophon -->
		</div><!-- #page -->
		<script></script>
		<script></script>
		<?php wp_footer(); ?>


	</body>
</html>
