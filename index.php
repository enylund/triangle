<?php the_post() ?>

<section class="news">
  <?php

    $news_array = array(
      'category_name' => 'news'
    );

    $news_items = new WP_Query($news_array);
    if($news_items->have_posts()) {
      while($news_items->have_posts()) {
        $news_items->the_post(); ?>

        <div class="news_item_wrapper">
          <a href="<?php the_field('link'); ?>">
            <?php the_field('content'); ?>
          </a>
        </div>

     <?php }
      wp_reset_postdata();
    }?>
</section>
<div class="content">
  <div id="post">
  <h2>People</h2>
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
        $artists->the_post();
        $images = get_field('artwork_images'); ?>

        <h3 class='artist__name'>
          <?php the_field('first_name'); ?> <?php the_field('last_name'); ?>
        </h3>
        <p class='artist__bio'>
          <?php the_field('bio'); ?>
        </p>

        <?php if( $images ): ?>
          <ul>
            <?php foreach( $images as $image ): ?>
              <li>
                <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>



      <?php }
      wp_reset_postdata();
    }?>
  </div><!-- .post -->
</div><!-- .content -->