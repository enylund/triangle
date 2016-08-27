<?php
    //the query
    $args = array(
      'category_name' => 'research',
    );

    $events = new WP_Query($args);

    if($events->have_posts()) { ?>

      <h2 class="research__headline col-sm-12">
        Research
      </h2>

      <?php while($events->have_posts()) {
        $events->the_post();
        $research_topic = get_field('title'); ?>

        <div class="research__topic col-sm-12">
          <?php echo $research_topic; ?>
        </div>

      <?php }
      wp_reset_postdata();
}?>