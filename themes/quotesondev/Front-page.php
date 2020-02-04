<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

		

			
			<?php
				//Create WordPress Query with 'orderby' set to 'rand' (Random)
				$args = array( 'orderby' => 'rand', 'posts_per_page' => '1' );
				$posts = get_posts( $args ); // returns an array of posts
				// output the random post
				if ( have_posts() ) : the_post();
				?>
				<div class="entry-content quote-pages"><?php the_content()?></div>
				<div class="entry-meta"><h2 class="entry-title"><?php the_title();?></h2></div>
				<?php
					endif;
					// Reset Post Data
					wp_reset_postdata();
				?>





		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		
		<div class= buttom-container>
			<button class="principal" type="button" id="close-comments" type="submit">Show Me Another!</button>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
