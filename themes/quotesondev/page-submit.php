

<?php
/**
 * The quote submit-page.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

<?php
if ( is_user_logged_in() ) {
    echo (do_shortcode( '[contact-form-7 id="214" title="Contact form 1"]' ));

} else {

    echo '<h1>Submit a Quote</h1>';
    echo '<p>Sorry, you must be logged in to submit a quote!!</p>';
    echo '<a href="http://localhost:8888/Project5/wp-admin">Click here to login.</a>';
}
?>



<?php get_footer(); ?>