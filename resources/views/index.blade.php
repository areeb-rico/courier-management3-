

@extends('layout')
@section('content3')

  

        <section style="background: linear-gradient(to right, #e0f7fa, #e8f5e9); padding: 60px 0;">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Image Section (Right Side) -->
      <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end">
        <img class="pt-5 pt-md-0 w-100 rounded shadow" src="{{ asset('images/images.png') }}" alt="hero-header" />
      </div>

      <!-- Text Section (Left Side) -->
      <div class="col-md-7 col-xl-6 col-xxl-5 text-md-start text-center py-5">
        <h1 class="fw-bold text-primary fs-4">Fast & Secure</h1>
        <h1 class="fw-bolder text-success fs-2 mb-3">Courier Services at Your Doorstep</h1>
        <p class="text-dark fs-5 mb-4">
          We deliver parcels quickly, safely, and on time. <br>
          Manage pickups, track shipments & more.
        </p>
        <a class="btn btn-success me-2" href="#!" role="button">
          Get Started <i class="fas fa-arrow-right ms-2"></i>
        </a>
      </div>

    </div>
  </div>
</section>



      <!-- ============================================-->
      <!-- <section> begin ============================-->
  <section class="py-7" id="services">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-5 text-center mb-3">
        <h5 class="text-success" data-aos="fade-down">OUR SERVICES</h5>
        <h2 class="text-primary" data-aos="fade-up">What We Offer</h2>
      </div>
    </div>

    <div class="row h-100 justify-content-center">

      <!-- Business Deliveries -->
      <div class="col-md-4 pt-4 px-md-2 px-lg-3" data-aos="fade-up" data-aos-delay="100">
        <div class="card card-hover h-100 px-lg-5 border-success border-2">
          <div class="card-body d-flex flex-column justify-content-around">
            <div class="text-center pt-5">
              <img class="img-fluid" src="assets/img/icons/services-1.svg" alt="Business Services" />
              <h5 class="my-4 text-primary">Business Deliveries</h5>
            </div>
            <p>Reliable door-to-door delivery for corporate clients with secure package handling.</p>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fas fa-circle text-success me-2" style="font-size:.5rem"></i>Corporate Shipments</li>
              <li class="mb-2"><i class="fas fa-circle text-success me-2" style="font-size:.5rem"></i>Bulk Packages</li>
              <li class="mb-2"><i class="fas fa-circle text-success me-2" style="font-size:.5rem"></i>Fragile Items</li>
            </ul>
            <div class="text-center my-5">
              <div class="d-grid">
                <button class="btn btn-outline-success btn-glow" type="button">Learn More</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- City-wide Services -->
      <div class="col-md-4 pt-4 px-md-2 px-lg-3" data-aos="fade-up" data-aos-delay="200">
        <div class="card card-hover h-100 px-lg-5 border-primary border-2">
          <div class="card-body d-flex flex-column justify-content-around">
            <div class="text-center pt-5">
              <img class="img-fluid" src="assets/img/icons/services-2.svg" alt="Citywide Services" />
              <h5 class="my-4 text-primary">City-wide Delivery</h5>
            </div>
            <p>Same-day delivery services across the city, with live tracking and express handling.</p>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fas fa-circle text-primary me-2" style="font-size:.5rem"></i>Same-Day Delivery</li>
              <li class="mb-2"><i class="fas fa-circle text-primary me-2" style="font-size:.5rem"></i>Live Tracking</li>
              <li class="mb-2"><i class="fas fa-circle text-primary me-2" style="font-size:.5rem"></i>Express Packages</li>
            </ul>
            <div class="text-center my-5">
              <div class="d-grid">
                <button class="btn btn-outline-success btn-glow" type="button">Learn More</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Personal Couriers -->
      <div class="col-md-4 pt-4 px-md-2 px-lg-3" data-aos="fade-up" data-aos-delay="300">
        <div class="card card-hover h-100 px-lg-5 border-success border-2">
          <div class="card-body d-flex flex-column justify-content-around">
            <div class="text-center pt-5">
              <img class="img-fluid" src="assets/img/icons/services-3.svg" alt="Personal Services" />
              <h5 class="my-4 text-primary">Personal Couriers</h5>
            </div>
            <p>Deliver documents, gifts, and sensitive items securely to any doorstep in record time.</p>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="fas fa-circle text-success me-2" style="font-size:.5rem"></i>Secure Documents</li>
              <li class="mb-2"><i class="fas fa-circle text-success me-2" style="font-size:.5rem"></i>Real-Time Status</li>
              <li class="mb-2"><i class="fas fa-circle text-success me-2" style="font-size:.5rem"></i>24/7 Support</li>
            </ul>
            <div class="text-center my-5">
              <div class="d-grid">
                <button class="btn btn-outline-success btn-glow" type="button">Learn More</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</section>

        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-7 pb-0" style="background: linear-gradient(to right, #e0f7fa, #e8f5e9);">
  <div class="container">
    <div class="row text-center">

      <!-- Awards -->
      <div class="col-6 col-lg mb-5" data-aos="zoom-in" data-aos-delay="50">
        <div class="p-3 rounded shadow-sm bg-white h-100">
          <img src="assets/img/icons/awards.png" alt="Awards" />
          <h1 class="text-success mt-4">26+</h1>
          <h5 class="text-secondary">Awards Won</h5>
        </div>
      </div>

      <!-- States -->
      <div class="col-6 col-lg mb-5" data-aos="zoom-in" data-aos-delay="100">
        <div class="p-3 rounded shadow-sm bg-white h-100">
          <img src="assets/img/icons/states.png" alt="States Covered" />
          <h1 class="text-primary mt-4">65+</h1>
          <h5 class="text-secondary">States Covered</h5>
        </div>
      </div>

      <!-- Clients -->
      <div class="col-6 col-lg mb-5" data-aos="zoom-in" data-aos-delay="150">
        <div class="p-3 rounded shadow-sm bg-white h-100">
          <img src="assets/img/icons/clients.png" alt="Happy Clients" />
          <h1 class="text-success mt-4">689K+</h1>
          <h5 class="text-secondary">Happy Clients</h5>
        </div>
      </div>

      <!-- Goods -->
      <div class="col-6 col-lg mb-5" data-aos="zoom-in" data-aos-delay="200">
        <div class="p-3 rounded shadow-sm bg-white h-100">
          <img src="assets/img/icons/goods.png" alt="Goods Delivered" />
          <h1 class="text-primary mt-4">130M+</h1>
          <h5 class="text-secondary">Goods Delivered</h5>
        </div>
      </div>

      <!-- Business Hours -->
      <div class="col-6 col-lg mb-5" data-aos="zoom-in" data-aos-delay="250">
        <div class="p-3 rounded shadow-sm bg-white h-100">
          <img src="assets/img/icons/business.png" alt="Business Hours" />
          <h1 class="text-success mt-4">130M+</h1>
          <h5 class="text-secondary">Business Hours</h5>
        </div>
      </div>

    </div>
  </div>
</section>

        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

<!-- ============================================-->
      <!-- <section> begin ============================-->

<section class="py-6" style="background: #f0fbff;">
  <div class="container">
    <div class="row">
      <div class="col-12" data-aos="fade-up">
      
        <div class="card bg-dark text-white overflow-hidden shadow-lg">
          <img class="w-100 opacity-75" src="assets/img/gallery/video.png" alt="video" />
          
          <!-- Overlay -->
          <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center text-center bg-dark bg-opacity-50">
            <img src="assets/img/icons/play.png" width="80" alt="play" class="mb-3" />
            
            <h5 class="text-success fw-bold mb-2">FASTEST DELIVERY</h5>
            <p class="text-white fs-5 px-2">
              Get your valuable items delivered <strong>quickly and safely</strong>.<br class="d-none d-sm-block" />
              Your urgency is <span class="text-primary">our top priority</span>.
            </p>
            
            <!-- Invisible link for modal trigger -->
            <a class="stretched-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"></a>
          </div>
          
        </div>

        <!-- Video Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content overflow-hidden">
              <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/TlcP2aTOp-Q" title="Courier Delivery Video" allowfullscreen></iframe>
              </div>
              <div class="modal-footer bg-light">
                <button class="btn btn-success" type="button" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>


      <!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
   <section class="py-7" style="background-color: #f0f9ff;">
  <div class="container-fluid">
    <div class="row flex-center">
      <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/quote.png);background-position:top;background-size:auto;margin-left:-270px;margin-top:-45px;">
      </div>

      <div class="col-md-8 col-lg-5 text-center mb-4">
        <h5 class="text-success">TESTIMONIAL</h5>
        <h2 class="text-primary">Our Awesome Clients</h2>
      </div>
    </div>

    <div class="carousel slide pt-6" id="carouselExampleDark" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <div class="row h-100">

            <!-- Card 1 -->
            <div class="col-md-4 mb-3 mb-md-0">
              <div class="card h-100 card-span p-3" style="background-color: #e0f7fa;">
                <div class="card-body">
                  <h5 class="mb-0 text-primary">Quick and professional</h5>
                  <p class="card-text pt-3">My parcel arrived within hours. The team is efficient and super responsive. 5-star service!</p>
                  <div class="d-xl-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center mb-3">
                      @for($i = 0; $i < 5; $i++)
                        <i class="fas fa-star text-success me-1"></i>
                      @endfor
                    </div>
                    <div class="d-flex align-items-center">
                      <img class="img-fluid" src="assets/img/icons/avatar.png" alt="" />
                      <div class="flex-1 ms-3">
                        <h6 class="mb-0 fs--1 text-1000 fw-medium">Ali Hassan</h6>
                        <p class="fs--2 fw-normal mb-0">Online Retailer</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-3 mb-md-0">
              <div class="card h-100 card-span p-3" style="background-color: #dcedc8;">
                <div class="card-body">
                  <h5 class="mb-0 text-primary">Trusted Courier Partner</h5>
                  <p class="card-text pt-3">We’ve been using this company for over a year — fast, affordable, and always on time!</p>
                  <div class="d-xl-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center mb-3">
                      @for($i = 0; $i < 5; $i++)
                        <i class="fas fa-star text-success me-1"></i>
                      @endfor
                    </div>
                    <div class="d-flex align-items-center">
                     <img class="img-fluid" src="assets/img/icons/testimonial-1.jpg" alt="" />
                      <div class="flex-1 ms-3">
                        <h6 class="mb-0 fs--1 text-1000 fw-medium">Sarah Ahmed</h6>
                        <p class="fs--2 fw-normal mb-0">Business Owner</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-3 mb-md-0">
              <div class="card h-100 card-span p-3" style="background-color: #e1f5fe;">
                <div class="card-body">
                  <h5 class="mb-0 text-primary">Excellent tracking system</h5>
                  <p class="card-text pt-3">Their live tracking is amazing! I could see every step of my parcel’s journey.</p>
                  <div class="d-xl-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center mb-3">
                      @for($i = 0; $i < 5; $i++)
                        <i class="fas fa-star text-success me-1"></i>
                      @endfor
                    </div>
                    <div class="d-flex align-items-center">
                      <img class="img-fluid" src="assets/img/icons/testimonial-2.jpg" alt="" />
                      <div class="flex-1 ms-3">
                        <h6 class="mb-0 fs--1 text-1000 fw-medium">Haider Shah</h6>
                        <p class="fs--2 fw-normal mb-0">Interior Designer</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- You can copy this structure to add another carousel-item for more reviews -->

      </div>

      <!-- Carousel Indicators -->
      <!-- Carousel Indicators -->
<div class="row px-3 px-md-0 mt-6">
  <div class="col-12 position-relative">
    <ol class="carousel-indicators">
      <li class="active" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"></li>
      <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
    </ol>
  </div>
</div>



      


      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
   <section style="background-color: #012b3c; padding: 60px 0; border-radius: 20px;">
  <div class="container">
    <div class="row justify-content-center align-items-center g-5">

      <!-- Left Image and Info -->
      <div class="col-md-6 text-center text-md-start">
        <img src="assets/img/illustrations/callback.png" alt="..." class="img-fluid mb-4" />
        <h5 class="text-success">REQUEST A CALLBACK</h5>
        <h2 class="text-light">We’ll contact you shortly.</h2>
        <p class="text-muted">Monday to Friday, 9am–5pm.</p>
      </div>

      <!-- Form Section -->
      <div class="col-md-6">
        <form action="https://formspree.io/f/mzzgkjvg" method="POST">
  <!-- Redirect after successful submission -->
  <input type="hidden" name="_next" value="https://yourwebsite.com/thank-you.html" />

  <div class="mb-3">
    <input class="form-control shadow-sm border-0" style="background-color:#f0f4ff;" id="inputName" name="name" type="text" placeholder="Your Name" required />
  </div>
  <div class="mb-3">
    <input class="form-control shadow-sm border-0" style="background-color:#f0fdf4;" id="inputEmail" name="email" type="email" placeholder="Your Email" required />
  </div>
  <div class="mb-4">
    <textarea class="form-control shadow-sm border-0" style="background-color:#f9fff1; height: 150px;" id="validationTextarea" name="message" placeholder="Your Message" required></textarea>
  </div>
  <div class="d-grid">
    <button class="btn btn-success" type="submit">Send Message <i class="fas fa-paper-plane ms-2"></i></button>
  </div>
</form>

</section>

</section>


        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
     <section id="findUs" class="py-6" style="background-color: #e8f9f8;">
  <div class="container">
    <div class="row justify-content-center mb-4">
      <div class="col-md-8 col-lg-5 text-center">
        <h5 class="text-success">FIND US</h5>
        <h2 class="text-primary">Access Us Easily</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card card-span rounded-3 border-0 shadow-sm" style="background-color: #ffffff;">
          <div class="row g-0">
            <!-- Map Column -->
            <div class="col-md-6 col-lg-7">
              <img class="w-100 h-100 rounded-start" src="{{ asset('assets/img/gallery/map.png') }}" alt="map" style="object-fit: cover;" />
            </div>

            <!-- Contact Info -->
            <div class="col-md-6 col-lg-5 d-flex align-items-center p-4">
              <div class="card-body">
                <h5 class="text-primary">Contact With Us</h5>
                <p class="text-muted mt-3"><i class="fas fa-map-marker-alt text-success me-2"></i> Aptech scheme 33</p>
                <p class="text-muted"><i class="fas fa-phone-alt text-success me-2"></i> Mon - Fri: 10 AM – 10 PM<br><span class="ps-4">Sun: 11 AM – 9 PM</span></p>
                <p class="text-muted"><i class="fas fa-envelope text-success me-2"></i><a class="text-decoration-none text-muted" href="mailto:mustafaayesha552@gmail.com">mustafaayesha552@gmail.com </a></p>

                
          </div>
        </div>

        <!-- Call Button -->
        <div class="text-center mt-4">
          <a href="tel:03242517272" class="btn btn-success btn-lg px-5 shadow">
            <i class="fas fa-phone-alt me-2"></i> Call us to Deliver: 03242517272
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5" style="background-color: #0a1f33;"> <!-- Dark Blue Background -->
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Left Column: Text -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <h2 class="fw-bold text-white">Get an update every week</h2>
        <p class="text-light">
          We ensure your package is delivered with care,<br />
          on time, every time.
        </p>
      </div>

      <!-- Right Column: Form -->
     <!-- Right Column: Form -->
      <div class="col-lg-6">
        <h5 class="text-success mb-3">SUBSCRIBE TO NEWSLETTER</h5>
        <form class="row gx-2 gy-2 align-items-center">
          <div class="col">
            <div class="input-group-icon">
              <label class="visually-hidden" for="inputEmailCta">Email</label>
              <input
                class="form-control form-quriar-control bg-dark text-light border-success"
                id="inputEmailCta"
                type="email"
                placeholder="Enter your email"
              />
            </div>
          </div>
          <div class="d-grid gap-3 col-sm-auto">
            <button class="btn btn-success text-white shadow" type="submit">
              Subscribe
            </button>
          </div>
        </form>
      </div>

    </div>
  </div>
</section>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->
@endsection


