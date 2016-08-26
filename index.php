<?php the_post() ?>

<?php get_template_part('partials/news_section'); ?>
<?php get_template_part('partials/people_section'); ?>

<h2>Programs</h2>

<?php
    //the query
    $args = array(
      'category_name' => 'event',
      'meta_key'  => 'user_date',
      'orderby' => 'user_date',
      'order'   => 'DESC'
    );

    $events = new WP_Query($args);

    if($events->have_posts()) {
      while($events->have_posts()) {
        $events->the_post();
        $field = get_field_object('event_type');
        $value = get_field('event_type');
        $event_category = $field['choices'][ $value ];
        $event_title = get_field('title');
        $event_date = get_field('user_date'); ?>
        <div class="program">
          <div class='program_category'>
            <?php echo $event_category; ?>
          </div>
          <div class="">
            <?php echo $event_title; ?>
          </div>
          <div class="">
          <?php echo $event_date; ?>
          </div>
        </div>
      <?php }
              wp_reset_postdata();
    }?>
