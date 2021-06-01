<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>NGO</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body class="antialiased">
  <!-- <div> -->
  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">NGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/about') }}">Enquiry</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/asociate') }}">Asociate NGOs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">COVID Help</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
              @if (Route::has('login'))
              <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
                @endauth
              </div>
              @endif
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div> -->
  <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div> -->

  <!--header-->
  @include('header')
  
  <!--/header-->

  <!-- hero slider Start -->
  <div class="banner-wrap">
    <div class="banner-slider">
      <!-- hero slide start -->
      <div class="banner-slide bg1">
        <div class="container">
          <div class="hero-content">
            <h1 data-animation="flipInX" data-delay="0.8s" data-color="#fff">
              Prevent the Spread
              Stay at Home, Stay Safe</h1>
            <p data-animation="fadeInDown" class="mt-4">Lorem ipsum dolor sit amet, elit, sed do eiusmod ut
              labore et dolore magna aliqua.
              <span class="dis-none">Ut enim ad minim veniam, quis nisi ut ea.</span>
            </p>
            <div class="cta-btn" data-animation="fadeInUp" data-delay="1s">
              <a href="#url" class="btn btn-style btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="hero-overlay"></div>
      </div>
      <!-- hero slide end -->

    </div>
  </div>
  <!-- hero slider end -->
  <!--/home-stats-->
  <section class="w3l-stats-main py-5">
    <div class="container py-lg-5 py-2">
      <div class="row stats-con">
        <div class="col-lg-3 col-6 stats_info counter_grid text-left mt-lg-0 mt-5">
          <div class="icon stat-icon">
            <i class="fab fa-keycdn"></i>
          </div>
          <p class="counter">1233100</p>
          <h4>Active Cases</h4>
        </div>
        <div class="col-lg-3 col-6 stats_info counter_grid1 text-left mt-lg-0 mt-5">
          <div class="icon stat-icon">
            <i class="fas fa-users"></i>
          </div>
          <p class="counter">182020</p>
          <h4>Recovered Cases</h4>
        </div>
        <div class="col-lg-3 col-6 stats_info counter_grid text-left mt-lg-0 mt-5">
          <div class="icon stat-icon">
            <i class="fas fa-skull-crossbones"></i>
          </div>
          <p class="counter">71912</p>
          <h4>Total Deaths</h4>
        </div>
        <div class="col-lg-3 col-6 stats_info counter_grid text-left mt-lg-0 mt-5">
          <div class="icon stat-icon">
            <i class="fas fa-crutch"></i>
          </div>
          <p class="counter">11912</p>
          <h4>Vaccination</h4>
        </div>
      </div>
    </div>
  </section>
  <!--//home-stats-->
  <!-- home page about section -->
  <section class="w3l-homeblock1" id="about">
    <div class="midd-w3 py-5">
      <div class="container py-lg-5 py-md-3">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <span class="title-subw3hny">About the disease</span>
            <h3 class="title-w3l">Coronavirus Disease
              Outbreak Situation</h3>
            <p class="mt-md-4 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
              ullamco laboris nisi ut ex ea. </p>
            <ul class="service-list pt-lg-2 mt-4">
              <li class="service-link"><a href="#url"><span class="fas fa-check"></span> Avoid touching your face.</a></li>
              <li class="service-link"><a href="#url"><span class="fas fa-check"></span> Cover your mouth and nose when coughing.</a></li>
              <li class="service-link"><a href="#url"><span class="fas fa-check"></span> Stay home if you feel unwell.</a></li>
            </ul>
          </div>
          <div class="HomeAboutImages col-lg-6 mt-lg-0 mt-5 pl-lg-5">
            <div class="row position-relative">
              <div class="col-6">
                <img src="{{url('images/1.jpg')}}" alt="" class="radius-image img-fluid">
              </div>
              <div class="col-6">
                <img src="{{url('images/2.jpg')}}" alt="" class="radius-image img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //home page about section -->
  <!-- features-section -->
  <section class="w3l-features py-5" id="work">
    <div class="container py-lg-5 py-md-4 py-2">
      <div class="row main-cont-wthree-2 align-items-center">
        <div class="col-lg-6 feature-grid-left pr-lg-5">
          <h5 class="title-subw3hny">How to Protect Yourself?</h5>
          <h3 class="title-w3l mb-4">Prevention & advice</h3>
          <p class="text-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fusce eget ex fermentum, ultricies nisi ac sed,
            lacinia est. Quisque ut lectus consequat, venenatis eros et, sed commodo risus. Nullam sit
            amet laoreet elit. Suspendisse non init magnaa velit efficitur.
          </p>
          <a href="about.html" class="btn btn-style btn-primary mt-lg-5 mt-4">Read More</a>
        </div>
        <div class="col-lg-6 feature-grid-right mt-lg-0 mt-5 pl-lg-5">
          <div class="call-grids-w3 d-grid">
            <div class="grids-1 box-wrap">
              <div class="icon">
                <i class="fas fa-hands-wash"></i>
              </div>
              <h4><a href="about.html" class="title-head">Wash your hands frequently</a></h4>
            </div>
            <div class="grids-1 box-wrap">
              <div class="icon">
                <i class="fas fa-people-arrows"></i>
              </div>
              <h4><a href="about.html" class="title-head">Maintain social distancing</a></h4>
            </div>
            <div class="grids-1 box-wrap">
              <div class="icon">
                <i class="fas fa-surprise"></i>
              </div>
              <h4><a href="about.html" class="title-head">Avoid touching on your face</a></h4>
            </div>
            <div class="grids-1 box-wrap">
              <div class="icon">
                <i class="fas fa-temperature-high"></i>
              </div>
              <h4><a href="about.html" class="title-head">Practice respiratory hygiene</a></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- features section -->
  <!--  services section -->
  <div class="w3l-servicesblock2" id="services">
    <section id="grids5-block" class="py-5">
      <div class="container py-lg-5 py-md-4 py-2">
        <h5 class="title-subw3hny text-center">Protect Yourself?</h5>
        <h3 class="title-w3l text-center">Take Steps To Protect
          Yourself</h3>
        <div class="row mt-lg-5 mt-4 text-center">
          <div class="col-lg-4 col-md-6">
            <div class="grids5-info">
              <a href="#service" class="d-block zoom"><img src="{{url('images/s1.jpg')}}" alt="" class="img-fluid" /></a>
              <div class="blog-info">
                <a href="#service" class="title">Wear A Face Mask</a>
                <p class="text-para"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. </p>
              </div>

            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
            <div class="grids5-info">
              <a href="#service" class="d-block zoom"><img src="{{url('images/s2.jpg')}}" alt="" class="img-fluid" /></a>
              <div class="blog-info">
                <a href="#service" class="title">Wash Your Hands</a>
                <p class="text-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. </p>
              </div>

            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
            <div class="grids5-info">
              <a href="#service" class="d-block zoom"><img src="{{url('images/s3.jpg')}}" alt="" class="img-fluid" /></a>
              <div class="blog-info">
                <a href="#service" class="title">Avoid Close Contact</a>
                <p class="text-para"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. </p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!--//services-section-->
  <!--/testimonials-->
  <section class="w3l-testimonials" id="testimonials">
    <!-- /grids -->
    <div class="cusrtomer-layout py-5">
      <div class="container py-lg-4 py-md-3 py-2 pb-lg-0">
        <h5 class="title-subw3hny text-center mb-1">Happy Clients</h5>
        <h3 class="title-w3l two text-center mb-sm-5 mb-4">Reviews and Testimonials</h3>
        <!-- /grids -->
        <div class="testimonial-width">
          <div id="owl-demo1" class="owl-two owl-carousel owl-theme">
            <div class="item">
              <div class="testimonial-content">
                <div class="testimonial">
                  <i class="fas fa-quote-right"></i>
                  <blockquote>
                    <q>Lorem ipsum dolor sit amet elit. Velit beatae
                      laudantium voluptate rem ullam dolore nisi voluptatibus esse quasi,
                      doloribus tempora.
                      Dolores molestias adipisci dolo amet!. Lorem ipsum dolor sit amet
                      consectetur
                      adipisicing elit. Esse architecto est ea sunt eligendi cum?</q>
                  </blockquote>
                  <div class="testi-des">
                    <div class="test-img"><img src="{{url('images/team1.jpg')}}" class="img-fluid" alt="client-img">
                    </div>
                    <div class="peopl align-self">
                      <h3>John wilson</h3>
                      <p class="indentity">Example City</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- /grids -->
    </div>
    <!-- //grids -->
  </section>
  <!-- //testimonials -->

  <!--/subscribe-->
  <section class="w3l-project py-5" id="subscribe">
    <div class="container py-md-5 py-sm-4 py-2">
      <div class="bottom-info">
        <div class="header-section text-center">
          <h5 class="title-subw3hny text-center mb-1">Join With Us</h5>
          <h3 class="title-w3l">Subscribe to our Newsletter</h3>
          <p class="mt-3 pr-lg-5">Lorem ipsum dolor sit amet elit. Velit beatae
            rem ullam dolore nisi esse quasi, sit amet. Lorem ipsum dolor sit
            amet elit.</p>
        </div>
        <form action="#" class="subscribe mt-5" method="post">
          <input type="email" name="email" placeholder="Your Email Address" required="">
          <button class="btn btn-style btn-primary"><i class="fas fa-paper-plane"></i></button>
        </form>
      </div>
    </div>
  </section>
  <!--//subscribe-->
  <!--/footer-->
  <section class="w3l-footer-29-main">
    <div class="footer-29 py-5">
      <div class="container py-lg-3">
        <div class="row footer-top-29">
          <div class="col-lg-3 col-sm-6 footer-list-29 footer-2 mt-lg-0 mt-md-5 mt-4">
            <ul>
              <h6 class="footer-title-29">Our Info</h6>
              <li><a href="about.html">About Us</a></li>
              <li><a href="blog.html"> Blog Posts</a></li>
              <li><a href="services.html">Services</a></li>

              <li><a href="about.html">Team</a></li>
              <li><a href="contact.html">Contact us</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-sm-6 footer-list-29 footer-2 mt-lg-0 mt-md-5 mt-4">
            <h6 class="footer-title-29">Quick Link</h6>
            <ul>
              <li><a href="#syn">Symptoms</a></li>

              <li><a href="#vention">Prevention</a></li>
              <li><a href="#protect">Protect Youself</a></li>
              <li><a href="#our">Our Doctors</a></li>
              <li><a href="#pack">About Corona</a></li>

            </ul>
          </div>
          <div class="col-lg-3 col-sm-6 footer-list-29 footer-2 mt-lg-0 mt-md-5 mt-4">
            <h6 class="footer-title-29">Helpfull link</h6>
            <ul>
              <li><a href="#terms">Terms of service</a></li>
              <li><a href="#privacy"> Privacy policy</a></li>
              <li><a href="#doc"> Documentation</a></li>
              <li><a href="#support"> Support</a></li>
              <li><a href="#changelog"> Changelog</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-sm-6 footer-list-29 footer-2 mt-lg-0 mt-md-5 mt-4">
            <div class="footer-logo mb-3">
              <h2>
                <a class="navbar-brand" href="index.html">
                  K<i class="fab fa-keycdn"></i>vid</a>
              </h2>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur ipsum elit.</p>

            <div class="cont-details">
              <div class="cont-top margin-up">
                <div class="cont-left text-center">
                  <span class="fas fa-map-marked-alt"></span>
                </div>
                <div class="cont-right">
                  <p> Kovid, #2214 Honey street, NY - 62617.</p>
                </div>
              </div>
              <div class="cont-top margin-up">
                <div class="cont-left text-center">
                  <span class="fas fa-blender-phone"></span>
                </div>
                <div class="cont-right">
                  <p><a href="tel:+(21) 255 999 8888"> +(21) 255 999
                      8888</a></p>
                </div>
              </div>
              <div class="cont-top margin-up">
                <div class="cont-left text-center">
                  <span class="fas fa-envelope-open-text"></span>
                </div>
                <div class="cont-right">
                  <p><a href="mailto:example@mail.com" class="mail">
                      example@mail.com</a></p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //footer -->
  <!-- copyright -->
  <section class="w3l-copyright">
    <div class="container">
      <div class="row bottom-copies">
        <p class="col-lg-8 copy-footer-29">© 2021 Kovid. All rights reserved.Design by<a href="https://w3layouts.com/" target="_blank">
            W3layouts</a></p>
        <div class="col-lg-4 main-social-footer-29">
          <a href="#facebook" class="facebook"><span class="fab fa-facebook-f"></span></a>
          <a href="#twitter" class="twitter"><span class="fab fa-twitter"></span></a>
          <a href="#pinterest"><span class="fab fa-pinterest-p"></span></a>
          <a href="#instagram" class="instagram"><span class="fab fa-instagram"></span></a>

        </div>
      </div>
    </div>
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      <i class="fas fa-level-up-alt"></i>
    </button>


    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
  </section>
  <!-- //copyright -->
  <!--//footer-->
  <!-- Template JavaScript -->
  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>

  <script src="{{asset('js/theme-change.js')}}"></script>


  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function() {
      $('.navbar-toggler').click(function() {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function() {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function() {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function() {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function() {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>


  <!--//MENU-JS-->


</body>

</html>