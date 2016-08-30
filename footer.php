      <div class="footer__wrapper">
        <div class="row">
          <div class="footer__logo col-sm-6">
            <a href="<?php bloginfo('url'); ?>/" rel="home"><?php bloginfo('name'); ?></a>
          </div>
          <nav class="footer__navigation col-sm-6">
            <div class="footer-element">
              <?php the_field('address_line_1', 'option'); ?>
            </div>
            <div class="footer-element">
              <?php the_field('address_line_2', 'option'); ?>
            </div>
            <div class="footer-element">
              <?php the_field('telephone_number', 'option'); ?>
            </div>
            <div class="footer-element">
              <?php the_field('email_link', 'option'); ?>
            </div>
            <?php
              $args = array(
                'theme_location' => 'footer'
              );
            ?>
            <?php wp_nav_menu($args); ?>
          </nav>
        </div>
      </div>
    </div><!-- .container -->
    <script>
      // (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      // function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      // e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      // e.src='https://www.google-analytics.com/analytics.js';
      // r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      // ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
    <?php wp_footer(); ?>
  </body>
</html>
