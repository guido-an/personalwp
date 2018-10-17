

  <div class="comments-list">
   <?php wp_list_comments( ); ?>
  </div>

    <div class="comment-form">

      <?php comment_form(); ?>



     <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>

    </div>


 <?php paginate_comments_links(); ?>
  <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
</div>
