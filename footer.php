</section> <!-- end main section -->


<footer>
  <div class="footer-container">
     <div class="footer-item">

       <h3>About</h3>
       <p>Lorem ipsum dolor sit amet, minim verear no eos, est et ubique expetendis. In quod ancillae scripserit qui, at ipsum graece vidisse usu. Lorem ipsum dolor sit amet, minim verear no eos.</p>

     </div>

     <div class="footer-item">
       <h3>Contact</h3>
       <p><strong>Telephone: </strong></p>
          <p>+44 20 7123 1234</p><br>
       <p><strong>Address: </strong></p>
          <p>56 Guild Street, N8 3XY, London</p><br>
       <p><strong>Email: </strong></p>
          <p>janeaustin@gmail.com</p>
     </div>

     <div class="footer-item">
       <h3>Social</h3>
       <span><a href="https://facebook.com/"><i class="fa fa-facebook-f"></i></a></span>
       <span><a href="https://instagram.com/"><i class="fa fa-instagram"></i></a></span>
       <span><a href="https://linkedin.com/"><i class="fa fa-linkedin"></i></a></span>
       <span><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></span>

     </div>

      <div class="footer-item">
        <h3>Recent Posts</h3>
            <ul>
            <?php
                $args = array( 'numberposts' => '3' );
                $recent_posts = wp_get_recent_posts( $args );
                foreach( $recent_posts as $recent ){
                    echo '<p><li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.$recent["post_title"].'" >' .   $recent["post_title"].'</a> </li></p> ';
                }
            ?>
            </ul>
      </div>
   </div>
</footer>

<?php wp_footer(); ?> <!-- Where you put any code before the closing body tag. Such as JavaScripts -->
</body>
</html>
