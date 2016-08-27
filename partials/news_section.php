<section class="news row">
  <?php

    $news_array = array(
      'category_name' => 'news',
      'meta_key'  => 'user_date',
      'orderby' => 'user_date',
      'order'   => 'DESC'
    );

    $news_items = new WP_Query($news_array);
    if($news_items->have_posts()) {
      $counter = 0;
      while($news_items->have_posts() && $counter < 3) {
        $news_items->the_post();
        ?>

        <div class="col-sm-4 news_item_wrapper">
          <?php if( get_field('link') ): ?>
            <a href="<?php the_field('link'); ?>">
              <?php the_field('content'); ?>
            </a>
          <?php else: ?>
          <div class=''>
            <?php the_field('content'); ?>
          </div>
          <?php endif; ?>
        </div>

        <?php $counter++;
      }
      wp_reset_postdata();
    }?>
</section>