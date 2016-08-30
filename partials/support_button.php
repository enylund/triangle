
<div class="col-sm-10 col-sm-offset-1 support-button-wrapper">
  <a href="<?php the_field('support_button_link', 'option') ?>">
    <img class='svg' src="<?php echo get_bloginfo('template_url'); ?>/images/svg/support_blob.svg" type="image/svg+xml" />
    <div class="support-button-link">
      <?php the_field('support_button_text', 'option') ?>
    </div>
  </a>
</div>