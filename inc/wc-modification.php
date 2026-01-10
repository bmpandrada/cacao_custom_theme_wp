<?php

function cacao_modify_function()
{

  // woocommerce container
  function cacao_container_start_row()
  {
    echo '<div class="container shop-content"><div class="row">';
  }

  add_action('woocommerce_before_main_content', 'cacao_container_start_row', 5);

  function cacao_container_end_row()
  {
    echo '</div></div>';
  }

  add_action("woocommerce_after_main_content", 'cacao_container_end_row', 5);

  //remove sidebar
  remove_action("woocommerce_sidebar", "woocommerce_get_sidebar");


  if (is_shop()) {
    // content shop
    add_action('woocommerce_shop_loop_item_title', 'the_excerpt');

    //wrap container open
    function cacao_wrap_container_start()
    {
      echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
    }
    add_action('woocommerce_before_main_content', 'cacao_wrap_container_start', 6);

    //add and set priority woocomerce_get_sidebar
    add_action('woocommerce_before_main_content', 'woocommerce_get_sidebar', 7);

    //wrap container close
    function cacao_wrap_container_end()
    {
      echo '</div>';
    }
    add_action('woocommerce_before_main_content', 'cacao_wrap_container_end', 8);
  }



  //wrap container main open
  function main_container_start()
  {
    if (is_shop()) {
      echo '<div class="col-lg-9 col-md-8 order-1 order-md-2">';
    } else
      echo '<div class="col">';
  }

  add_action('woocommerce_before_main_content', 'main_container_start', 9);


  //wrap container main close
  function main_container_close()
  {
    echo '</div>';
  }

  add_action('woocommerce_after_main_content', 'main_container_close', 4);


  //filter
  function cacao_remove_shop_title()
  {
    return false;
  }
  add_filter('woocommerce_show_page_title', 'cacao_remove_shop_title');
}


add_action('wp', 'cacao_modify_function');
