
<div class="col-sm-10 col-sm-offset-1 parent">
  <object data="<?php echo get_bloginfo('template_url'); ?>/images/svg/support_blob.svg" type="image/svg+xml"></object>
  <a class='child' href="<?php the_field('support_button_link', 'option') ?>">
    <?php the_field('support_button_text', 'option') ?>
  </a>
</div>