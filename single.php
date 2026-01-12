<?php get_header(); ?>

<div class="container shop-content">
  <div class="row">
    <?php if (has_post_thumbnail()) : ?>
      <div class="col-sm-12 col-lg-4 col-md-6 order-2 order-md-1 mb-2">
        <?php the_post_thumbnail('large', ['class' => 'img-fluid mb-3 mb-sm-0']); ?>
      </div>
    <?php endif; ?>

    <div class="col order-1 order-md-2 ">
      <h2><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>
    </div>

  </div>
</div>

<?php get_footer(); ?>