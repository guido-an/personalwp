<?php get_header();?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="page-wrap"> <!-- Page Wrap -->

  <h1><?php the_title(); ?></h1>
	<p><?php the_content(); ?></p>


<?php if ( comments_open() || get_comments_number() ) : // If comments are open or we have at least one comment, load up the comment template.
  comments_template();
endif;
?>

</div> <!-- End Page Wrap -->

<?php endwhile; else : ?>
<p><?php esc_html( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>




<?php get_footer();?>
