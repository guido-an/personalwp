<?php get_header(); ?>

<?php
    get_header();
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();

    endwhile;
    else :
        esc_html( 'Sorry, no posts matched your criteria.');
    endif;

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    get_sidebar();
    get_footer();

?>

<?php get_footer(); ?>
