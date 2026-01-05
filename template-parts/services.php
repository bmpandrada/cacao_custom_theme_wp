<!-- Service Start -->
<div class="container-fluid pt-5">
  <div class="container">
    <div class="section-title">
      <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;"><?php the_field('services_header_title') ?></h4>
      <h1 class="display-4"><?php the_field('services_header_subtitle') ?></h1>
    </div>
    <div class="row">
      <?php
      $services = ['services_1', 'services_2', 'services_3', 'services_4'];

      foreach ($services as $service_key) :
        $service = get_field($service_key);

        if ($service) :
      ?>
          <div class="col-lg-6 mb-5">
            <div class="row align-items-center">

              <?php if (!empty($service['service_image'])) : ?>
                <div class="col-sm-5">
                  <img
                    class="img-fluid mb-3 mb-sm-0"
                    src="<?php echo esc_url($service['service_image']); ?>"
                    alt="<?php echo esc_attr($service['service_main_title']); ?>">
                </div>
              <?php endif; ?>


              <!-- CONTENT -->
              <div class="col-sm-7">
                <h4>
                  <i class="<?php echo esc_attr($service['services_icon']); ?> service-icon"></i>
                  <?php echo esc_html($service['service_main_title']); ?>
                </h4>

                <p class="m-0">
                  <?php echo wp_kses_post($service['services_content']); ?>
                </p>
              </div>

            </div>
          </div>
      <?php
        endif;
      endforeach;
      ?>
    </div>

  </div>
</div>
<!-- Service End -->