<?php get_header(); ?>

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

<!-- About Start -->
<!-- <div class="container-fluid py-5">
  <div class="container">
    <div class="section-title">
      <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h4>
      <h1 class="display-4">Serving Since 1950</h1>
    </div>
    <?php
    while (have_posts()) {
      the_post(); ?>

      <div class="row">
        <div class="col-lg-4 py-0 py-lg-5">

          <p><?php the_content(); ?></p>
          <a href="" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Learn More</a>
        </div>
        <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
          <div class="position-relative h-100">
            <img class="position-absolute w-100 h-100" src="img/about.png" style="object-fit: cover;">
          </div>
        </div>
        <div class="col-lg-4 py-0 py-lg-5">
          <h1 class="mb-3">Our Vision</h1>
          <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor</p>
          <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Lorem ipsum dolor sit amet</h5>
          <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Lorem ipsum dolor sit amet</h5>
          <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Lorem ipsum dolor sit amet</h5>
          <a href="" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Learn More</a>
        </div>
      </div>


    <?php }
    ?>

  </div>
</div> -->
<!-- About End -->

<?php get_footer(); ?>