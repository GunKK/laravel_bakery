@extends('customers.layouts.app')
@section('title', 'home')
@section('content')
<!-- ======= Hero Section ======= -->
@include('customers.layouts.slider')
<!-- End Hero Section -->
<main id="main">

  <!-- ======= Menu Section ======= -->
  <section id="menu" class="menu">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Menu</h2>
        <p>Check Our <span>Yummy Menu</span></p>
      </div>

      <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

        <li class="nav-item">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
            <h4>Starters</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
            <h4>Breakfast</h4>
          </a><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
            <h4>Lunch</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
            <h4>Dinner</h4>
          </a>
        </li><!-- End tab nav item -->

      </ul>

      <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

        <div class="tab-pane fade active show" id="menu-starters">

          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Starters</h3>
          </div>

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
              <h4>Magnam Tiste</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $5.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
              <h4>Aut Luia</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $14.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
              <h4>Est Eligendi</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $8.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $12.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $12.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
              <h4>Laboriosam Direva</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $9.95
              </p>
            </div><!-- Menu Item -->

          </div>
        </div><!-- End Starter Menu Content -->

        <div class="tab-pane fade" id="menu-breakfast">

          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Breakfast</h3>
          </div>

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
              <h4>Magnam Tiste</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $5.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
              <h4>Aut Luia</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $14.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
              <h4>Est Eligendi</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $8.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $12.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $12.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
              <h4>Laboriosam Direva</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $9.95
              </p>
            </div><!-- Menu Item -->

          </div>
        </div><!-- End Breakfast Menu Content -->

        <div class="tab-pane fade" id="menu-lunch">

          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Lunch</h3>
          </div>

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
              <h4>Magnam Tiste</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $5.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
              <h4>Aut Luia</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $14.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
              <h4>Est Eligendi</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $8.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $12.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $12.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
              <h4>Laboriosam Direva</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $9.95
              </p>
            </div><!-- Menu Item -->

          </div>
        </div><!-- End Lunch Menu Content -->

        <div class="tab-pane fade" id="menu-dinner">

          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Dinner</h3>
          </div>

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
              <h4>Magnam Tiste</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $5.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
              <h4>Aut Luia</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $14.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
              <h4>Est Eligendi</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $8.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $12.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $12.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
              <h4>Laboriosam Direva</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $9.95
              </p>
            </div><!-- Menu Item -->

          </div>
        </div><!-- End Dinner Menu Content -->

      </div>

    </div>
  </section><!-- End Menu Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Testimonials</h2>
        <p>What Are They <span>Saying About Us</span></p>
      </div>

      <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="row gy-4 justify-content-center">
                <div class="col-lg-6">
                  <div class="testimonial-content">
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 text-center">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="img-fluid testimonial-img" alt="">
                </div>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="row gy-4 justify-content-center">
                <div class="col-lg-6">
                  <div class="testimonial-content">
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 text-center">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="img-fluid testimonial-img" alt="">
                </div>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="row gy-4 justify-content-center">
                <div class="col-lg-6">
                  <div class="testimonial-content">
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 text-center">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="img-fluid testimonial-img" alt="">
                </div>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="row gy-4 justify-content-center">
                <div class="col-lg-6">
                  <div class="testimonial-content">
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 text-center">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="img-fluid testimonial-img" alt="">
                </div>
              </div>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

  <!-- ======= Events Section ======= -->
  <section id="events" class="events">
    <div class="container-fluid" data-aos="fade-up">

      <div class="section-header">
        <h2>Events</h2>
        <p>Share <span>Your Moments</span> In Our Restaurant</p>
      </div>

      <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-1.jpg)">
            <h3>Custom Parties</h3>
            <div class="price align-self-start">$99</div>
            <p class="description">
              Quo corporis voluptas ea ad. Consectetur inventore sapiente ipsum voluptas eos omnis facere. Enim facilis veritatis id est rem repudiandae nulla expedita quas.
            </p>
          </div><!-- End Event item -->

          <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-2.jpg)">
            <h3>Private Parties</h3>
            <div class="price align-self-start">$289</div>
            <p class="description">
              In delectus sint qui et enim. Et ab repudiandae inventore quaerat doloribus. Facere nemo vero est ut dolores ea assumenda et. Delectus saepe accusamus aspernatur.
            </p>
          </div><!-- End Event item -->

          <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/events-3.jpg)">
            <h3>Birthday Parties</h3>
            <div class="price align-self-start">$499</div>
            <p class="description">
              Laborum aperiam atque omnis minus omnis est qui assumenda quos. Quis id sit quibusdam. Esse quisquam ducimus officia ipsum ut quibusdam maxime. Non enim perspiciatis.
            </p>
          </div><!-- End Event item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Events Section -->

</main>

@endsection