<?php get_header(); ?>

<div class="container shop-content">
  <div class="row">
    <?php
    while (have_posts()) {
      the_post() ?>

      <div class="col-12 blog-main">
        <h1 class="pb-3 mb-4 font-italic border-bottom"></h1>

        <div class="blog-post">
          <h2 class="blog-post-title"><?php the_title() ?></h2>
          <p class="blog-post-meta">

            <a href="<?php echo get_day_link(
                        get_the_time('Y'),
                        get_the_time('m'),
                        get_the_time('d')
                      ); ?>">
              <?php echo get_the_date('M d, Y'); ?>
            </a>

            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
              <?php the_author(); ?>
            </a>

          </p>
          <p><?php the_content() ?></p>
          <p><a href="<?php permalink_link() ?>">Read more..</a></p>
        </div>
      </div>

    <?php }
    ?>
  </div>
</div>

<?php get_footer(); ?>