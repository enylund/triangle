<?php the_post() ?>
<div class="content">
  <div id="post">
    <?php
    //the query
    $args = array(
      'category_name' => 'person',
      'orderby' => 'last_name',
      'order'   => 'ASC',
    );

    $artists = new WP_Query($args);

    if($artists->have_posts()) {
      while($artists->have_posts()) {
        $artists->the_post(); ?>

        <h3 class='artist__name'>
          <?php the_field('first_name'); ?> <?php the_field('last_name'); ?>
        </h3>
        <p class='artist__bio'>
          <?php the_field('bio'); ?>
        </p>

      <?php }
      wp_reset_postdata();
    }?>
  </div><!-- .post -->
</div><!-- .content -->