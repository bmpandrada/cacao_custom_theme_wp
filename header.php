<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="<?php bloginfo('charset'); ?>">
  <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
  <!-- Navbar Start -->
  <div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
      <a class="navbar-brand px-lg-4 m-0" href="<?php echo home_url('/'); ?>">

        <picture>
          <?php if (get_theme_mod('mobile_logo')) : ?>
            <source media="(max-width: 991px)"
              srcset="<?php echo esc_url(get_theme_mod('mobile_logo')); ?>">
          <?php endif; ?>

          <?php
          if (has_custom_logo()) {
            echo wp_get_attachment_image(
              get_theme_mod('custom_logo'),
              'full',
              false,
              ['class' => 'img-fluid custom-logo', 'alt' => get_bloginfo('name')]
            );
          }
          ?>
        </picture>



      </a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">

        <?php

        wp_nav_menu([
          'theme_location' => 'headerMenu',
          'container' => false,
          'menu_class' => 'navbar-nav ml-auto p-4',
          'depth' => 2,
          'walker' => new WP_Bootstrap_Navwalker()
        ]);
        ?>

      </div>
    </nav>
  </div>
  <!-- Navbar End -->


  <?php
  if (
    !is_front_page()
  ):
  ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
      <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase"><?php single_post_title() ?></h1>
        <div class="d-inline-flex mb-lg-5">

          <div class="d-inline-flex mb-lg-5 text-white">

            <?php
            if (function_exists('woocommerce_breadcrumb')) {
              woocommerce_breadcrumb([
                'delimiter'   => ' / ',
                'wrap_before' => '<p class="m-0 text-white">',
                'wrap_after'  => '</p>',
                'before'      => '<span class="text-white">',
                'after'       => '</span>',
              ]);
            }
            ?>

          </div>


        </div>
      </div>
    </div>
    <!-- Page Header End -->
  <?php endif; ?>