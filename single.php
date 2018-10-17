<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="background-image" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);"><h1 class="blog-title-background"><?php the_title(); ?></h1></div>

 <div class="blog-post-container">
   <h2 id="single-post-title"><?php the_title(); ?></h2>
    <p class="blog-date"><?php the_date(); ?></p>
    <p><em>This article was written by <?php the_author_posts_link(); ?></em></p>
    <p class="blog-content"><?php the_content(); ?></p>
 <hr>
<p><?php the_tags(); ?></p>

  <p><a href="<?php bloginfo ('url'); ?>/blog">Back to the Blog</a></p><br>
  <p><strong>Previous Post: </strong><?php previous_post_link(); ?></p>
  <p><strong>Next Post: </strong><?php next_post_link(); ?></p>

  <p><?php wp_link_pages(); ?></p>

<?php endwhile; else : ?>

  <p><?php esc_html( 'Sorry, no posts matched your criteria.' ); ?></p>

  <?php endif; ?>

   <?php if ( comments_open() || get_comments_number() ) : // If comments are open or we have at least one comment, load up the comment template.
     comments_template();
    endif;
     ?>

</div>

<?php get_footer(); ?>
