<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kovid</title>
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
              About Us </h2>
            <p class="inner-page-para mt-2">
              Prevent the Spread
              Stay at Home, Stay Safe </p>
          </div>
          <div class="w3breadcrumb-right">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li class="active"><span class="fas fa-angle-double-right mx-2"></span> About Us</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="hero-overlay"></div>
    </div>
  </section>
  <!--//breadcrumb-->
  <!--/w3l-aboutblock1-->
  <section class="w3l-aboutblock1" id="about">
    <div class="midd-w3 py-5">
      <div class="container py-lg-5 py-md-4 py-2">
        <div class="row">
          <div class="col-lg-6 left-wthree-img pr-lg-5">
            <div class="position-relative">
              <img src="{{url('images/banner5.jpg')}}" alt="" class="img-fluid radius-image">
            </div>
          </div>
          <div class="col-lg-6 mt-lg-0 mt-5 about-right-faq align-self">
            <h5 class="title-subw3hny mb-1">About Us</h5>
            <h3 class="title-w3l">Life doesn’t get easier or more forgiving, we get stronger and more resilient.</h3>
            <p class="mt-4">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
              ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
              elit. Non quae, fugiat consequatur voluptatem ad.</p>
            <a class="btn btn-primary btn-style mt-md-5 mt-4 mr-md-4 mr-3" href="#url">
              Read More </a>
          </div>
        </div>
        <!--/Features-->
        <div class="row justify-content-center mt-5 pt-lg-5 AboutFeatures">
          <div class="col-lg-4 col-md-6 grids-feature">
            <div class="area-box">
              <i class="fas fa-theater-masks" aria-hidden="true"></i>
              <div class="area-box-info">
                <h4><a href="#url" class="title-head">
                    Wear A Face Mask</a></h4>
                <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,adipisicing
                  elit.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
            <div class="area-box">
              <i class="fas fa-hands-wash" aria-hidden="true"></i>
              <div class="area-box-info">
                <h4><a href="#url" class="title-head">
                    Wash Your Hands</a></h4>
                <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,adipisicing
                  elit.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
            <div class="area-box">
              <i class="fas fa-people-arrows" aria-hidden="true"></i>
              <div class="area-box-info">
                <h4><a href="#url" class="title-head">
                    Avoid Close Contact</a></h4>
                <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,adipisicing
                  elit.</p>
              </div>
            </div>
          </div>
        </div>
        <!--//Features-->
      </div>
    </div>
  </section>
  <!--//w3l-aboutblock1-->
  <!--/team-sec-->
  <section class="w3l-team-main team py-5" id="team">
    <div class="container py-lg-5">
      <h5 class="title-subw3hny mb-1 text-center">Our Team</h5>
      <h3 class="title-w3l text-center">Amazing Team</h3>
      <div class="row team-row mt-md-5 mt-4">
        <div class="col-lg-4 col-6 team-wrap">
          <div class="team-member text-center">
            <div class="team-img">
              <img src="{{url('images/team1.jpg')}}" alt="" class="radius-image">
              <div class="overlay-team">
                <div class="team-details text-center">
                  <div class="socials mt-20">
                    <a href="#url">
                      <span class="fab fa-facebook-f"></span>
                    </a>
                    <a href="#url">
                      <span class="fab fa-twitter"></span>
                    </a>
                    <a href="#url">
                      <span class="fab fa-linkedin-in"></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <a href="#url" class="team-title">Luke jacobs</a>
            <p>Doctor</p>
          </div>
        </div>
        <!-- end team member -->
        <div class="col-lg-4 col-6 team-wrap">
          <div class="team-member text-center">
            <div class="team-img">
              <img src="{{url('images/team3.jpg')}}" alt="" class="radius-image">
              <div class="overlay-team">
                <div class="team-details text-center">
                  <div class="socials mt-20">
                    <a href="#url">
                      <span class="fab fa-facebook-f"></span>
                    </a>
                    <a href="#url">
                      <span class="fab fa-twitter"></span>
                    </a>
                    <a href="#url">
                      <span class="fab fa-linkedin-in"></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <a href="#url" class="team-title">Claire olson</a>
            <p>Doctor</p>
          </div>
        </div>
        <!-- end team member -->
        <div class="col-lg-4 col-6 team-wrap mt-lg-0 mt-5">
          <div class="team-member last text-center">
            <div class="team-img">
              <img src="{{url('images/team2.jpg')}}" alt="" class="radius-image">
              <div class="overlay-team">
                <div class="team-details text-center">
                  <div class="socials mt-20">
                    <a href="#url">
                      <span class="fab fa-facebook-f"></span>
                    </a>
                    <a href="#url">
                      <span class="fab fa-twitter"></span>
                    </a>
                    <a href="#url">
                      <span class="fab fa-linkedin-in"></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <a href="#url" class="team-title">Phillip hunt</a>
            <p>Doctor</p>
          </div>
        </div>
      </div>
  </section>
  <!--//team-sec-->
  <!--/w3l-about2-->
  <section class="w3l-about2 py-5">
    <div class="container py-lg-5 py-md-4 py-2 AboutPageStats">
      <div class="row cwp23-content align-items-center">
        <div class="col-lg-6 pr-lg-5">
          <h5 class="title-subw3hny mb-3">Why Choose Us</h5>
          <h3 class="title-w3l">Safety brings first aid to the uninjured.</h3>
          <div class="cwp23-text-cols mt-lg-5 mt-4">
            <div class="column">
              <div class="icon mb-4">
                <span class="fas fa-crutch"></span>
              </div>
              <h4>Vaccination</h4>
              <p>Lorem ipsum viverra feugiat. Pellen tesque libero justo.</p>
            </div>
            <div class="column">
              <div class="icon mb-4">
                <span class="far fa-smile-beam"></span>
              </div>
              <h4>Happy Clients</h4>
              <p>Lorem ipsum viverra feugiat. Pellen tesque libero justo.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6 cwp23-text align-self mt-lg-0 mt-5 pr-md-3 pr-2">
          <img src="{{url('images/1.jpg')}}" alt="" class="radius-image img-fluid">
        </div>
        <div class="col-lg-3 col-6  cwp23-text align-self mt-lg-0 mt-5 pl-md-3 pl-2">
          <img src="{{url('images/2.jpg')}}" alt="" class="radius-image img-fluid">
        </div>
      </div>
    </div>
  </section>
  <!--//w3l-about2-->
  <!--/w3l-project-->
  <section class="w3l-project-main py-5">
    <div class="container py-md-5 py-2">
      <div class="w3l-project-in">
        <div class="row">
          <div class="col-lg-8">
            <div class="bottom-info">
              <div class="header-section pr-lg-5">
                <h5 class="title-subw3hny mb-3">Free Consultation</h5>
                <h3 class="title-w3l mb-3">Request Free Consultation <br>and <span class="span-bold">Lets Do It!</span>
                </h3>
                <p>Lorem ipsum dolor sit amet elit. Velit beatae rem ullam dolore nisi esse quasi, sit amet. Lorem ipsum dolor sit amet elit.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 align-self text-lg-right mt-lg-0 mt-sm-5 mt-4">
            <a href="#" class="btn btn-primary btn-white  btn-style mr-2"> Contact Now </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//w3l-project-->
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