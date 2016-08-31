<div class="row">
  <div class="col-sm-12">
  <header class="header">
    <nav class="main-nav">
      <div class="main-nav__inner-wrapper">
        <h1 class="site-title">
          <a href="<?php bloginfo('url'); ?>/" rel="home"><?php bloginfo('name'); ?></a>
        </h1>
        <?php
          $args = array(
            'theme_location' => 'primary'
          );
        ?>
        <?php wp_nav_menu($args); ?>
      </div>
    </nav>
  </header>
  </div>
</div>