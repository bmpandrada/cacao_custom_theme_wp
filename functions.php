  <?php

  /**
   * Theme Functions
   * Theme Name: Cacao Theme
   */

  /**
   * Enqueue styles and scripts
   */
  function cacao_files()
  {

    /* =========================
    * GOOGLE FONTS
    * ========================= */
    wp_enqueue_style(
      'cacao-google-fonts',
      '//fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap'
    );

    wp_enqueue_style(
      'cacao-font-awesome',
      '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css'
    );

    /* =========================
    * BOOTSTRAP CSS
    * ========================= */
    wp_enqueue_style(
      'bootstrap-css',
      '//cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css'
    );

    /* =========================
    * OWL CAROUSEL CSS
    * ========================= */
    /* OWL CAROUSEL CSS */
    wp_enqueue_style(
      'owl-carousel-css',
      get_theme_file_uri('/assets/lib/owlcarousel/assets/owl.carousel.min.css')
    );

    wp_enqueue_style(
      'owl-carousel-theme',
      get_theme_file_uri('/assets/lib/owlcarousel/assets/owl.theme.default.min.css'),
      ['owl-carousel-css']
    );


    /* =========================
    * TEMPUS DOMINUS CSS
    * ========================= */
    wp_enqueue_style(
      'tempusdominus-css',
      get_theme_file_uri('/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css'),
      ['bootstrap-css']
    );

    /* =========================
    * THEME STYLE
    * ========================= */
    wp_enqueue_style(
      'cacao-style',
      get_theme_file_uri('/assets/css/style.css'),
      ['bootstrap-css'],
      filemtime(get_theme_file_path('/assets/css/style.css'))
    );


    /* =========================
    * JQUERY (WordPress built-in)
    * ========================= */
    wp_enqueue_script('jquery');

    /* =========================
    * BOOTSTRAP JS
    * ========================= */
    wp_enqueue_script(
      'bootstrap-js',
      '//cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js',
      ['jquery'],
      null,
      true
    );

    /* =========================
    * EASING JS
    * ========================= */
    wp_enqueue_script(
      'easing-js',
      get_theme_file_uri('/assets/lib/easing/easing.min.js'),
      ['jquery'],
      '1.4.1',
      true
    );

    /* =========================
    * OWL CAROUSEL JS
    * ========================= */
    wp_enqueue_script(
      'owl-carousel-js',
      get_theme_file_uri('/assets/lib/owlcarousel/owl.carousel.min.js'),
      ['jquery'],
      '2.3.4',
      true
    );

    /* =========================
    * WAYPOINTS JS
    * ========================= */
    wp_enqueue_script(
      'waypoints-js',
      get_theme_file_uri('/assets/lib/waypoints/waypoints.min.js'),
      ['jquery'],
      '4.0.1',
      true
    );


    /* =========================
    * MOMENT JS (REQUIRED)
    * ========================= */
    wp_enqueue_script(
      'moment-js',
      get_theme_file_uri('/assets/lib/tempusdominus/js/moment.min.js'),
      [],
      '2.29.4',
      true
    );

    /* =========================
    * TEMPUS DOMINUS JS
    * ========================= */
    wp_enqueue_script(
      'tempusdominus-js',
      get_theme_file_uri('/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'),
      ['bootstrap-js', 'moment-js'],
      '1.0',
      true
    );

    /* =========================
    * MAIN THEME JS (LAST)
    * ========================= */
    wp_enqueue_script(
      'cacao-main-js',
      get_theme_file_uri('/assets/js/main.js'),
      [
        'jquery',
        'bootstrap-js',
        'easing-js',
        'owl-carousel-js',
        'tempusdominus-js',
        'waypoints-js'
      ],
      '1.0',
      true
    );
  }
  add_action('wp_enqueue_scripts', 'cacao_files');


  /**
   * Theme setup
   */
  require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
  require_once get_template_directory() . './inc/customizer.php';


  function cacao_mobile_logo_customizer($wp_customize)
  {
    $wp_customize->add_setting('mobile_logo', [
      'default' => '',
      'sanitize_callback' => 'esc_url_raw'
    ]);

    $wp_customize->add_control(
      new WP_Customize_Image_Control(
        $wp_customize,
        'mobile_logo',
        [
          'label'   => 'Mobile Logo',
          'section' => 'title_tagline', // Site Identity
          'settings' => 'mobile_logo',
        ]
      )
    );
  }

  add_action('customize_register', 'cacao_mobile_logo_customizer');



  function cacao_theme_setup()
  {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    //custom logo
    add_theme_support('custom-logo', [
      'height'      => 85,
      'width'       => 160,
      'flex-height' => true,
      'flex-width'  => true,
    ]);

    // WooCommerce support (REQUIRED)
    add_theme_support('woocommerce', array(
      'thumbnail_image_width' => 255,
      'single_image_width' => 255,
      'product_grid' => array(
        'default_rows' => 10,
        'min_rows' => 5,
        'max_rows' => 10,
        'default_columns' => 1,
        'min_columns' => 1,
        'max_columns' => 1,
      )
    ));

    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    if (! isset($content_width)) {
      $content_width = 600;
    }

    register_nav_menus([
      'headerMenu' => 'Header Menu',
      'footerMenu' => 'Footer Menu',
    ]);
  }
  add_action('after_setup_theme', 'cacao_theme_setup', 0);

  if (class_exists('WooCommerce')) {
    require get_template_directory() . '/inc/wc-modification.php';
  }

  /**
   * Show cart contents / total Ajax
   */
  add_filter('woocommerce_add_to_cart_fragments', 'cacao_woocommerce_header_add_to_cart_fragment');

  function cacao_woocommerce_header_add_to_cart_fragment($fragments)
  {
    global $woocommerce;

    ob_start();

  ?>
    <span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
  <?php
    $fragments['span.items'] = ob_get_clean();
    return $fragments;
  }


  // add action count page menu and account
  function cacao_add_cart_count_to_menu($items, $args)
  {
    if ($args->theme_location === 'headerMenu' && class_exists('WooCommerce')) {
      $count = WC()->cart->get_cart_contents_count();
      $items = str_replace(
        'Cart',
        '<i class="fa fa-shopping-cart"></i> <span class="items">' . $count . '</span>',
        $items
      );
    }
    return $items;
  }
  add_filter('wp_nav_menu_items', 'cacao_add_cart_count_to_menu', 10, 2);


  function cacao_replace_myaccount_icon($items, $args)
  {
    if ($args->theme_location === 'headerMenu') {
      $items = str_replace(
        'My account',
        '<i class="fa fa-user"></i>',
        $items
      );
    }
    return $items;
  }

  add_filter('wp_nav_menu_items', 'cacao_replace_myaccount_icon', 11, 2);
