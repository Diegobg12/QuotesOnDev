<?php
/**
 * The quote archives.
 * @package QOD_Starter_Theme
 */

get_header(); ?>



<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'template-parts/content', 'page' ); ?>

<?php endwhile; // End of the loop. ?>


<?php 
// $titles = get_terms('post_name');
?>



<?php 
$terms = get_categories('Categories');
?>

<h2 class="archive-title">Categories</h2>
<ul class="type-list">
    <?php foreach($terms as $term):?>
        <li> <a href="<?php echo esc_url(get_term_link($term));?>"><?php echo $term->name;?></a></li>
    <?php endforeach; ?>
</ul>

<h2 class="archive-title">Tags</h2>

<?php 
$tags = get_terms('post_tag');
?>

<ul class="type-list">
    <?php foreach($tags as $tag):?>
        <li> <a href="<?php echo esc_url(get_term_link($tag));?>"><?php echo $tag->name;?></a></li>
    <?php endforeach; ?>
</ul>



<?php get_footer(); ?>
