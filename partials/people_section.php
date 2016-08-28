<section class="people">
  <div class="row">
    <h2 class='site-wide__headline col-sm-offset-1 col-sm-10'>
      People
    </h2>
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

        <div class='person-item__wrapper'>
          <h3 class='artist__name col-sm-offset-1 col-sm-10'>
            <?php the_field('first_name'); ?> <?php the_field('last_name'); ?>
          </h3>
          <div class='artist__bio col-sm-offset-1 col-sm-10'>
            <?php the_field('bio'); ?>
          </div>

          <?php if( $images ): ?>
              <?php if(count($images) > 1): ?>
                <div class="col-sm-offset-2 col-sm-8">
                  <div class='artist__image-wrapper' data-artist-image-carousel>
                    <?php foreach( $images as $image ): ?>
                      <div class="artist__image">
                        <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              <?php else: ?>
                <div class="col-sm-offset-2 col-sm-8">
                  <div class='artist__image-wrapper'>
                    <?php foreach( $images as $image ): ?>
                      <div class="artist__image">
                        <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              <?php endif; ?>

          <?php endif; ?>
          </div>


      <?php }
      wp_reset_postdata();
    }?>
  </div><!-- .post -->
</section><!-- .content -->