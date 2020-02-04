<?php
/**
 * The template for displaying all single posts.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); 
			echo '<p class="entry-content">';
			the_content();
			echo '</p>';

			echo '<div class="entry-meta"><h2 class="entry-title">-';
			the_title();
			echo '</div></h2>';
	
			 endwhile; // End of the loop. ?>

		</main><!-- #main -->

	</div><!-- #primary -->

		<div>
			<a class="principal" href="" type="button" id="close-comments" type="submit">Show Me Another!</a>
		</div>

<?php get_footer(); ?>
