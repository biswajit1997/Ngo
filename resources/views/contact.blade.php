<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kovid </title>
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>
  <!--header-->
  @include('header')

  <!--/header-->
  <!-- breadcrumb -->
  <section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      <div class="container py-lg-5 py-md-4">
        <div class="w3breadcrumb-gids">
          <div class="w3breadcrumb-left text-left">
            <h2 class="title AboutPageBanner">
              Contact Us </h2>
            <p class="inner-page-para mt-2">
              Prevent the Spread
              Stay at Home, Stay Safe </p>
          </div>
          <div class="w3breadcrumb-right">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Contact Us</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="hero-overlay"></div>
    </div>
  </section>
  <!--//breadcrumb-->
  <!-- contact-form 2 -->
  <section class="w3l-contact-2 py-5" id="contact">
    <div class="container py-lg-4 py-md-3 py-2">
      <div class="title-content text-center">
        <span class="title-subw3hny">Get in touch</span>
        <h3 class="title-w3l mb-lg-4">Contact with our support <br>
          during emergency!</h3>

      </div>
      <div class="contact-grids d-grid mt-5 mx-lg-5">
        <div class="contact-left">
          <div class="cont-details">
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fas fa-map-marked-alt"></span>
              </div>
              <div class="cont-right">
                <h6>Our head office address:</h6>
                <p>Lorem ipsum Agency, 343 marketing, #4148 Honey street, NY - 62617.</p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fas fa-blender-phone"></span>
              </div>
              <div class="cont-right">
                <h6>Call for help :</h6>
                <p><a href="tel:+1(21) 234 4567">+1(21) 234 557 4567</a></p>
                <p><a href="tel:+1(21) 234 4567">+1(21) 234 557 4568</a></p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fas fa-envelope-open-text"></span>
              </div>
              <div class="cont-right">
                <h6>
                  Mail us:</h6>
                <p><a href="mailto:support@mail.com" class="mail">support@mail.com</a></p>
                <p><a href="mailto:contact@mail.com" class="mail">contact@mail.com</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="contact-right">
        @if(session()->has('message'))
        <div class="alert {{session('alert') ?? 'alert-info'}}">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
          <form action="{{ route('enquiry') }}" method="post" >
          @csrf
            <div class="input-grids">
              <input type="text" name="name" placeholder="Your Name*" class="contact-input" required="" />
              <input type="email" name="email" placeholder="Your Email*" class="contact-input" required="" />
              <input type="tel" name="mobile" placeholder="Enter mobile number*" class="contact-input" required="" />
              <select class="contact-input" id="" name="district">
                        <option value="" disabled selected>Select District</option>
                        <option value="Cuttack">Cuttack</option>
                        <option value="Dhenkanal">Dhenkanal</option>
                        <option value="Angul">Angul</option>
                        <option value="Khordha">Khordha</option>
                        <option value="Kendrapada">Kendrapada</option>
                    </select>
            </div>
            <div class="form-input">
              <textarea name="massage" placeholder="Type your message here*" required=""></textarea>
            </div>
            <div class="submit-w3l-button text-lg-right">
              <button type="submit" class="btn btn-style btn-primary">Send Message</button>
            </div>
          </form>
        </div>
      </div>
  </section>
  <!-- /contact-form-2 -->
  <div class="map-iframe">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl" width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
  </div>
  <!-- /contact1 -->
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
  @include('footer')
  
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
  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>