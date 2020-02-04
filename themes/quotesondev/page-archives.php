<?php
/**
 * The quote archives.
 * @package QOD_Starter_Theme
 */

get_header(); ?>

<?php 
$terms = get_categories('Categories');
?>

<ul class="product-type-list">
    <?php foreach($terms as $term):?>
        <li> <a href="<?php echo esc_url(get_term_link($term));?>"><?php echo $term->name;?></a></li>
    <?php endforeach; ?>
</ul>

<?php 
$tags = get_terms('post_tag');
?>

<ul class="product-type-list">
    <?php foreach($tags as $tag):?>
        <li> <a href="<?php echo esc_url(get_term_link($tag));?>"><?php echo $tag->name;?></a></li>
    <?php endforeach; ?>
</ul>



<?php get_footer(); ?>
