<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : the_post(); ?>
			<?php
				//Create WordPress Query with 'orderby' set to 'rand' (Random)
				// output the random post
				?>
				<div class="entry-content quote-pages"><?php the_content();?></div>
				<div class="entry-meta"><h2 class="entry-title"><?php the_title();?></h2></div>
				<?php
					// Reset Post Data
					wp_reset_postdata();
				?>
				<?php endif; // End of the loop. ?>

		<div class= buttom-container>
			<button class="principal" type="button" id="close-comments" type="submit">Show Me Another!</button>
		</div>

		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
