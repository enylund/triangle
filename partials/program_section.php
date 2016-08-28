<section class="program">

  <div class="row">
    <h2 class="col-sm-offset-1 col-sm-10 site-wide__headline">
      Programs
    </h2>

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


            <div class="program_item col-sm-offset-2 col-sm-8">
              <div class='program_item__category'>
                <?php echo $event_category; ?>
              </div>
              <div class="program_item__title">
                <?php echo $event_title; ?>
              </div>
              <div class="program_item__date">
                <?php echo $event_date; ?>
              </div>
            </div>


          <?php }
          wp_reset_postdata();
    }?>
  </div>
</section>