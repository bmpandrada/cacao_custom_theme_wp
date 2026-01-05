<?php get_header(); ?>

<?php get_template_part('template-parts/carousel') ?>

<!-- About Start -->
<?php get_template_part('template-parts/about') ?>
<!-- About End -->

<!-- Service Start -->
<?php get_template_part('template-parts/services') ?>
<!-- Service End -->

<!-- Offer Start -->
<div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom">
  <div class="container py-5">
    <h1 class="display-3 text-primary mt-3">50% OFF</h1>
    <h1 class="text-white mb-3">Sunday Special Offer</h1>
    <h4 class="text-white font-weight-normal mb-4 pb-3">Only for Sunday from 1st Jan to 30th Jan 2045</h4>
    <form class="form-inline justify-content-center mb-4">
      <div class="input-group">
        <input type="text" class="form-control p-4" placeholder="Your Email" style="height: 60px;">
        <div class="input-group-append">
          <button class="btn btn-primary font-weight-bold px-4" type="submit">Sign Up</button>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- Offer End -->

<!-- Menu Start -->
<div class="container-fluid pt-5">
  <div class="container">
    <div class="section-title">
      <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menu & Pricing</h4>
      <h1 class="display-4">Competitive Pricing</h1>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <h1 class="mb-5">Hot Coffee</h1>
        <div class="row align-items-center mb-5">
          <div class="col-4 col-sm-3">
            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="<?php echo get_theme_file_uri('assets/img/menu-1.jpg') ?>" alt="">
            <h5 class="menu-price">$5</h5>
          </div>
          <div class="col-8 col-sm-9">
            <h4>Black Coffee</h4>
            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor</p>
          </div>
        </div>
        <div class="row align-items-center mb-5">
          <div class="col-4 col-sm-3">
            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="<?php echo get_theme_file_uri('assets/img/menu-2.jpg') ?>" alt="">
            <h5 class="menu-price">$7</h5>
          </div>
          <div class="col-8 col-sm-9">
            <h4>Chocolete Coffee</h4>
            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor</p>
          </div>
        </div>
        <div class="row align-items-center mb-5">
          <div class="col-4 col-sm-3">
            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="<?php echo get_theme_file_uri('assets/img/menu-3.jpg') ?>" alt="">
            <h5 class="menu-price">$9</h5>
          </div>
          <div class="col-8 col-sm-9">
            <h4>Coffee With Milk</h4>
            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <h1 class="mb-5">Cold Coffee</h1>
        <div class="row align-items-center mb-5">
          <div class="col-4 col-sm-3">
            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="<?php echo get_theme_file_uri('assets/img/menu-1.jpg') ?>" alt="">
            <h5 class="menu-price">$5</h5>
          </div>
          <div class="col-8 col-sm-9">
            <h4>Black Coffee</h4>
            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor</p>
          </div>
        </div>
        <div class="row align-items-center mb-5">
          <div class="col-4 col-sm-3">
            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="<?php echo get_theme_file_uri('assets/img/menu-2.jpg') ?>" alt="">
            <h5 class="menu-price">$7</h5>
          </div>
          <div class="col-8 col-sm-9">
            <h4>Chocolete Coffee</h4>
            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor</p>
          </div>
        </div>
        <div class="row align-items-center mb-5">
          <div class="col-4 col-sm-3">
            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="<?php echo get_theme_file_uri('assets/img/menu-3.jpg') ?>" alt="">
            <h5 class="menu-price">$9</h5>
          </div>
          <div class="col-8 col-sm-9">
            <h4>Coffee With Milk</h4>
            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Menu End -->

<!-- Reservation Start -->
<div class="container-fluid my-5">
  <div class="container">
    <div class="reservation position-relative overlay-top overlay-bottom">
      <div class="row align-items-center">
        <div class="col-lg-6 my-5 my-lg-0">
          <div class="p-5">
            <div class="mb-4">
              <h1 class="display-3 text-primary">30% OFF</h1>
              <h1 class="text-white">For Online Reservation</h1>
            </div>
            <p class="text-white">Lorem justo clita erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
              ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea</p>
            <ul class="list-inline text-white m-0">
              <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Lorem ipsum dolor sit amet</li>
              <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Lorem ipsum dolor sit amet</li>
              <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Lorem ipsum dolor sit amet</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="text-center p-5" style="background: rgba(51, 33, 29, .8);">
            <h1 class="text-white mb-4 mt-5">Book Your Table</h1>
            <form class="mb-5">
              <div class="form-group">
                <input type="text" class="form-control bg-transparent border-primary p-4" placeholder="Name"
                  required="required" />
              </div>
              <div class="form-group">
                <input type="email" class="form-control bg-transparent border-primary p-4" placeholder="Email"
                  required="required" />
              </div>
              <div class="form-group">
                <div class="date" id="date" data-target-input="nearest">
                  <input type="text" class="form-control bg-transparent border-primary p-4 datetimepicker-input" placeholder="Date" data-target="#date" data-toggle="datetimepicker" />
                </div>
              </div>
              <div class="form-group">
                <div class="time" id="time" data-target-input="nearest">
                  <input type="text" class="form-control bg-transparent border-primary p-4 datetimepicker-input" placeholder="Time" data-target="#time" data-toggle="datetimepicker" />
                </div>
              </div>
              <div class="form-group">
                <select class="custom-select bg-transparent border-primary px-4" style="height: 49px;">
                  <option selected>Person</option>
                  <option value="1">Person 1</option>
                  <option value="2">Person 2</option>
                  <option value="3">Person 3</option>
                  <option value="3">Person 4</option>
                </select>
              </div>

              <div>
                <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Book Now</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Reservation End -->


<?php get_template_part('template-parts/testimonial') ?>

<?php get_footer(); ?>