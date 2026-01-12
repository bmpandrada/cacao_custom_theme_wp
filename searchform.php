<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">


  <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search …', 'placeholder'); ?>"
    value="<?php echo get_search_query(); ?>" name="s"
    title="<?php echo esc_attr_x('Search for:', 'label'); ?>" />

  <input type="submit" class="search-submit" value="<?php echo esc_attr_x('Search', 'submit button'); ?>" />
  <?php
  if (class_exists('WooCommerce')): ?>
    <input type="hidden" value="product" name="post_type" id="post_type">
  <?php endif;  ?>
</form>