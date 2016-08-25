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