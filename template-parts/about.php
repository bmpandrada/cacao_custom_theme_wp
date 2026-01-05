<div class="container-fluid py-5">
  <div class="container">
    <div class="section-title">
      <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;"><?php the_field('about_main_title') ?></h4>
      <h1 class="display-4"><?php the_field('about_sub_title'); ?>"</h1>
    </div>

    <div class="row">
      <div class="col-lg-4 py-0 py-lg-5">
        <h1 class="mb-3"><?php the_field('our_story_title'); ?></h1>
        <p><?php the_field('our_story_content'); ?></p>
        <a href="" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Learn More</a>
      </div>
      <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
        <div class="position-relative h-100">
          <img class="position-absolute w-100 h-100" src="<?php the_field('about_image'); ?>" style="object-fit: cover;">
        </div>
      </div>
      <div class="col-lg-4 py-0 py-lg-5">
        <h1 class="mb-3"><?php the_field('our_vision_title'); ?></h1>
        <p><?php the_field('our_vision_content'); ?></p>

        <a href="" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Learn More</a>
      </div>
    </div>

  </div>
</div>