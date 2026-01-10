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
      'https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap'
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
      'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css'
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
      'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js',
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
  function cacao_theme_setup()
  {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // WooCommerce support (REQUIRED)
    add_theme_support('woocommerce', array(
      'thumbnail_image_width' => 255,
      'single_image_width' => 255,
      'product_grid' => array(
        'default_rows' => 10,
        'min_rows' => 5,
        'max_rows' => 10,
        'default_columns' => 1,
        'min_columns' => 2,
        'max_columns' => 2,
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
