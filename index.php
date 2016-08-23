<?php the_post() ?>
<div class="content">
  <div id="post">
    <?php
    //the query
    $artists = new WP_Query( array( 'category_name=person' ) );

    if($artists->have_posts()) {
      while($artists->have_posts()) {
        $artists->the_post(); ?>

        <div class='artist__name'><?php the_field('first_name'); ?> <?php the_field('last_name'); ?></p>
        <p class='artist__bio'><?php the_field('bio'); ?></p>

      <?php }
      wp_reset_postdata();
    }?>
  </div><!-- .post -->
</div><!-- .content -->