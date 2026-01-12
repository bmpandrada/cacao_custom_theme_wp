<?php get_header(); ?>

<div class="container my-5">

  <?php the_archive_title('<h1>', '</h1>'); ?>
  <?php the_archive_description('<p>', '</p>'); ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h3><?php the_title(); ?></h3>
      <p><?php the_excerpt(); ?></p>
  <?php endwhile;
  endif; ?>

</div>

<?php get_footer(); ?>