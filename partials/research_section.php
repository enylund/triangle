<?php
  //the query
  $args = array(
    'category_name' => 'research',
  );

  $events = new WP_Query($args);

  if($events->have_posts()) { ?>
    <section class="research">
      <div class='row'>
        <h2 class="col-sm-offset-1 col-sm-10 site-wide__headline">
          Research
        </h2>

        <?php while($events->have_posts()) {
          $events->the_post();
          $research_topic = get_field('title'); ?>

          <div class="research__topic col-sm-12">
            <?php echo $research_topic; ?>
          </div>
      <?php } ?>
      </div>
    </section>
    <?php wp_reset_postdata();
}?>