<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
   <?php while ( have_posts() ) : the_post(); ?>

    <div id="hero"> <!-- Hero Section -->
      <h1 id="hero-title">Hello,<br>I am your <span>personal</span> Wordpress theme</h1>
      <p id="hero-subtitle">Responsive. Clean. Elegant.</p>
      <p><a href="https://github.com/guido-an/personalwp" target="_blank" class="button">Download Me</a></p>
    </div> <!-- End Hero Section -->

    <div id="services-section"> <!-- Services section -->
      <?php echo'<h2 class="section-title" >SERVICES</h2>' ?>
        <?php echo'<p class="section-subtitle" >Lorem ipsum dolor sit amet consectetur adipiscing elit malesuada, convallis nullam ullamcorper elementum et urna lobortis.</p>' ?>
          <hr>

           <div class="services-container">
             <div class="service-item">
               <img src="http://localhost:8888/temawp/wp-content/uploads/2018/10/001-rocket.png">
               <h3>Smart Solution</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor.</p>
             </div>
            <div class="service-item">
              <img src="http://localhost:8888/temawp/wp-content/uploads/2018/10/003-effort.png">
              <h3>Time Efficient</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor.</p>
            </div>
            <div class="service-item">
              <img src="http://localhost:8888/temawp/wp-content/uploads/2018/10/002-business.png">
              <h3>Great Result</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor.</p>
            </div>

        </div> <!-- End Services container CSS grid -->
      </div> <!-- End Services section -->

           <div id="about-section"> <!-- About section -->
               <div id="about-item-left" class="responsive">
               </div>

               <div id="about-item-right">
                <div id="about-item-right-container">
                <h2>ABOUT ME<hr></h2>

                <p>Lorem ipsum dolor sit amet, minim verear no eos, est et ubique expetendis. In quod ancillae scripserit qui, at ipsum graece vidisse usu. Graeco pertinacia qui ne, principes maiestatis te cum. Ut nam elit cibo deterruisset. Adhuc percipit quaestio an pri. No facer nostro consequat vim, ut habeo vidisse incorrupte eum. Ut detracto posidonium mea, meis omnis facer no duo, eum id eruditi voluptua. Vel adhuc definiebas cotidieque eu, cu volumus prodesset vix, mea cu dolorum tibique omittantur. Mea indoctum ocurreret scribentur eu, ius evertitur incorrupte et, aliquip noluisse mei ei. Vix nibh liberavisse ea.</p>

                  <div class="icons-group">
                    <p><a href="https://facebook.com/"><i class="fa fa-facebook-f"></i></a></p>
                    <p><a href="https://instagram.com/"><i class="fa fa-instagram"></i></a></p>
                    <p><a href="https://linkedin.com/"><i class="fa fa-linkedin"></i></a></p>
                    <p><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></p>
                  </div>

              </div>
            </div>
           </div> <!-- End About Section -->


           <div id="contact-section"> <!-- Contact section -->
             <?php echo'<h2 class="section-title" >GET IN TOUCH</h2>' ?>
               <?php echo'<p class="section-subtitle" >Lorem ipsum dolor sit amet consectetur adipiscing elit malesuada, convallis nullam ullamcorper elementum et urna lobortis.</p>' ?>
                 <hr>

                  <div id="contact-container">

                    <div class="contact-item">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/phone-icon.png" />
                      <h3>Telephone</h3>
                      <p>+44 20 7123 1234</p>
                    </div>

                   <div class="contact-item">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/address-icon.png" />
                     <h3>Address</h3>
                     <p>56  Guild Street, N8 3XY, London</p>
                   </div>


                   <div class="contact-item" id="address-icon">
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/email-icon.png" />
                    <i class="fa fa-envelope"></i>
                     <h3>Email</h3>
                      <p>janeaustin@gmail.com</p>
                   </div>

                 </div> <!-- End Contact container CSS grid -->
              </div> <!-- End Contact section -->

   <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>

<div id="subfooter">
 <p>Icons Designed by Freepick from Flaticon</p>
</div>
