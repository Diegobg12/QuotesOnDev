<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main home-page" role="main">

		<?php if ( have_posts() ) : ?>
			

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<p>

			
			<?php
				//Create WordPress Query with 'orderby' set to 'rand' (Random)
				$args = array( 'orderby' => 'rand', 'posts_per_page' => '1' );
				$posts = get_posts( $args ); // returns an array of posts
				// output the random post
				if ( have_posts() ) : the_post();
					
					the_content();
					
					echo '<div class="entry-meta"><h2 class="entry-title">-';
					the_title();
					echo '</div></h2>';
				endif;
				// Reset Post Data
				wp_reset_postdata();
			?>




</p>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div>
			<a class="principal" href="" type="button" id="close-comments" type="submit">Show Me Another!</a>
		</div>

<?php get_footer(); ?>
