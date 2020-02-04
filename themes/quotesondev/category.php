<?php
/**
 * The quote archives.
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area archive">
		<main id="main" class="site-main" role="main">

                <header>
				<h1 class="page-title"><?php the_archive_title(); ?></h1>

				</header>


		<?php while ( have_posts() ) : the_post(); ?>
			<?php
				//Create WordPress Query with 'orderby' set to 'rand' (Random)
				// output the random post
                ?>
                
                <div class="archive-container">
                    <div class="entry-content"><?php the_content();?></div>
                    <div class="entry-meta"><h2 class="entry-title base"><?php the_title();?></h2></div>
                </div>
                    <?php
					// Reset Post Data
					wp_reset_postdata();
				?>
				<?php endwhile; // End of the loop. ?>


		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>