
<?php get_header();?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="blog-posts-container">

    <div><?php the_post_thumbnail(); ?></div>

    <p class="blog-date"><?php the_date(); ?></p>

    <h2><a href="<?php the_permalink(); ?>" class="blog-title"><?php the_title(); ?></a></h2>

    <p class="blog-excerpt"><?php the_excerpt(); ?></p>

    <p><a href="<?php the_permalink(); ?>" class="button">Read More</a></p>

    <hr>

</div>

<?php endwhile; else : ?>
<p><?php esc_html( 'Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<div class="blog-posts-container">
  <p><?php posts_nav_link(); ?></p>
</div>


<?php get_footer(); ?>
