<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <title>KOPPEE - Coffee Shop HTML Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="<?php bloginfo('charset'); ?>">
  <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
  <!-- Navbar Start -->
  <div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
      <a href="index.html" class="navbar-brand px-lg-4 m-0">
        <h1 class="m-0 display-4 text-uppercase text-white">CacaoDeLilio</h1>
      </a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">

        <?php

        wp_nav_menu([
          'theme_location' => 'headerMenu',
          'container'      => false,
          'menu_class'     => 'navbar-nav ml-auto p-4',
          'depth'          => 2
        ]);


        ?>
      </div>
    </nav>
  </div>
  <!-- Navbar End -->
  <?php
  if (!is_front_page()): ?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
      <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase"><?php single_post_title() ?></h1>
        <div class="d-inline-flex mb-lg-5">

          <?php
          $home_id = get_option('page_on_front');
          if ($home_id):
          ?>
            <p class="m-0 text-white"><a class="text-white" href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html(get_the_title($home_id)); ?></a></p>
            <p class="m-0 text-white px-2">/</p>
          <?php endif; ?>

          <p class="m-0 text-white"><?php single_post_title(); ?></p>
        </div>
      </div>
    </div>
    <!-- Page Header End -->
  <?php endif; ?>