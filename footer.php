    </div><!-- .container -->
    <script>
      // (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      // function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      // e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      // e.src='https://www.google-analytics.com/analytics.js';
      // r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      // ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
    <nav class="nav">
      <?php
        $args = array(
          'theme_location' => 'footer'
        );
      ?>
      <?php wp_nav_menu($args); ?>
    </nav>
    <?php wp_footer(); ?>
  </body>
</html>
