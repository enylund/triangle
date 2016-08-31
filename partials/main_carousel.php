<?php
  //the query
  $args = array(
    'category_name' => 'main-carousel',
  );

  $main_carousel_content = new WP_Query($args);

  if($main_carousel_content->have_posts()) { ?>
    <section class="main_carousel">
      <div class='row'>
        <?php while($main_carousel_content->have_posts()) {
          $main_carousel_content->the_post();
          $main_carousel_title = get_field('title');
          $main_carousel_season = get_field('season'); ?>

          <div class="blob ">
            <img src="<?php bloginfo('template_directory');?>/images/blobs/blob_test.png">
          </div>
          <div class="main-carousel-content__title">
            <?php echo $main_carousel_title ?>
          </div>

          <div class="col-sm-12 main-carousel-content__title">
            <?php echo $main_carousel_season ?>
          </div>

      <?php } ?>
      </div>
    </section>
    <?php wp_reset_postdata();
}?>