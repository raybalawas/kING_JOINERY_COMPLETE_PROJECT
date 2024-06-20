  <footer class="footer">
      <div class="container">
          <div class="row g-4">
              <div class="col-lg-2">
                  <img src="{{ 'assets/images/footer-logo.png' }}" alt="">
              </div>
              <div class="col-lg-3 col-md-12 col-sm-6">
                  <div class="footer-column">
                      <h4>Office Address</h4>

                      <p>Unit 6 , 17 Brumby street, <br>
                          Seven Hills , NSW 2147
                      </p>
                      <p class="mb-0">
                          Phone: <a href="tel:+61 2 8529 3666">+61 2 8529 3666</a>
                      </p>
                      <p>
                          Email: <a href="mailto:sales@kingjoinery.com.au">sales@kingjoinery.com.au</a>
                      </p>
                  </div>

              </div>
              <div class="col-lg-3 col-md-4 col-sm-6">
                  <div class="footer-column">
                      <h4>expertise</h4>

                      <ul>
                          <a href="{{ url('entertainment') }}">Entertainment</a>
                          <a href="{{ url('kitchen') }}">Kitchen</a>
                          <a href="{{ url('offices') }}">Offices</a>
                          <a href="{{ url('outdoorKitche') }}">Out Door Kitche</a>
                          <a href="{{ url('laundries') }}">Laundries</a>
                          <a href="{{ url('vanities') }}">Vanities</a>
                          <a href="{{ url('wardrobes') }}">Wardrobes</a>

                      </ul>
                  </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-6">
                  <div class="footer-column">
                      <h4>about</h4>

                      <ul>
                          <li>
                              <a href="{{ url('about_Us') }}">Who we are</a>
                          </li>
                          <li>
                              <a href="{{ url('services') }}">Areas We Cover</a>
                          </li>
                          <li>
                              <a href="{{ url('kitchen') }}">Kitchen Design Process</a>
                          </li>
                          <li>
                              <a href="{{ url('contact') }}">Contact Us</a>
                          </li>
                          {{-- <li>
                                <a href="{{route('blog')}}">Blog</a>
                            </li> --}}
                          <li class="nav-item">
                              <a class="nav-link" href="{{ url('privacy') }}">Privacy</a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-6">
                  <div class="footer-column">
                      <h4>opening hours</h4>

                      <p>Monday to Friday <br>
                          9:00 AM - 9:00 PM</p>
                  </div>
              </div>

          </div>

          <div class="row">
              <div class="col-lg-2"></div>
              <div class="col-lg-5 col-md-6">
                  <div class="social-links">
                      <p>Find us on
                          <a href="https://www.instagram.com/king_joinery?igsh=MW1samg3d3F6Y3p2ZQ=="><i
                                  class="fa fa-instagram"></i></a>
                          <a href="https://www.facebook.com/profile.php?id=61558889589346&mibextid=LQQJ4d"><i
                                  class="fa fa-facebook"></i></a>


                      </p>
                  </div>
              </div>
              <div class="col-lg-5 col-md-6">
                  <p class="mb-0 text-md-end">© Kingjoinery 2024 | <a href="privacy-policy.html">Privacy Policy</a>
                  </p>
              </div>
          </div>
      </div>
  </footer>


  <script src="assets/js/jquery-3.7.1.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl.carousel.js"></script>
  <script src="assets/js/swiper10-bundle.min.js"></script>



  <script>
      swiper = new Swiper(".slider-bottom", {
              loop: !0,
              spaceBetween: 10,
              slidesPerView: 4,
          }),
          swiper2 = new Swiper(".slider-top", {
              loop: !0,
              spaceBetween: 10,
              autoplay: !0,
              navigation: {
                  nextEl: ".swiper-button-next",
                  prevEl: ".swiper-button-prev",
              },
              thumbs: {
                  swiper: swiper
              },
          });
  </script>

  <script>
      var swiper = new Swiper(".designer-slider", {
          slidesPerView: 1,
          spaceBetween: 10,
          loop: !0,
          autoplay: !0,
          pagination: {
              el: ".swiper-pagination",
              clickable: true,
          },
          breakpoints: {
              768: {
                  slidesPerView: 2,
                  spaceBetween: 50,
              },
          },
      });

      var swiper = new Swiper(".features-slider", {
          slidesPerView: 1,
          spaceBetween: 10,
          loop: !0,
          autoplay: !0,
          pagination: {
              el: ".swiper-pagination",
              clickable: true,
          },
          breakpoints: {
              600: {
                  slidesPerView: 2,
                  spaceBetween: 50,
              },
              1024: {
                  slidesPerView: 3,
                  spaceBetween: 50,
              },
              1200: {
                  slidesPerView: 4,
                  spaceBetween: 50,
              },
          },
      });

      var swiper = new Swiper(".testimonial-slider", {
          slidesPerView: 1,
          spaceBetween: 10,
          loop: !0,
          autoplay: !0,
          pagination: {
              el: ".swiper-pagination",
              clickable: true,
          },
          breakpoints: {
              768: {
                  slidesPerView: 2,
                  spaceBetween: 40,
              },
              1200: {
                  slidesPerView: 3,
                  spaceBetween: 50,
              },
          },
      });
  </script>

  <script src="{{ asset('assets/js/simple-lightbox.js') }}"></script>
  <script>
      (function() {
          var $gallery = new SimpleLightbox('.gallery a', {});
      })();
  </script>

  </body>

  </html>
