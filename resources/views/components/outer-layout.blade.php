<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="color-scheme" content="dark light">

  <title>Verify emails quickly </title>

  <link rel="shortcut icon" href="{{asset('favicon.png')}}" type="image/x-icon">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" type="text/css" href="{{asset('outer/fonts/typography/fonts.css')}}">
  <link rel="stylesheet" href="{{asset('outer/fonts/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('outer/plugins/aos/aos.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('outer/plugins/fancybox/jquery.fancybox.min.css')}}">
  <!-- Vendor stylesheets  -->
  <link rel="stylesheet" type="text/css" href="{{asset('outer/plugins/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('outer/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('outer/css/demo.css')}}">



  <style>
    @import url('https://fonts.cdnfonts.com/css/clash-display');
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Syne:wght@500;600;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Public+Sans:wght@500;600;700;800;900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Cabin:wght@500;600;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap');
    @import url('https://fonts.cdnfonts.com/css/clash-display');
  </style>


</head>

<body>
  <div class="preloader-wrapper">
    <div class="lds-ellipsis">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <div class="page-wrapper overflow-hidden">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~
     Header Area
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <header class="site-header site-header--menu-left site-header--transparent site-header--sticky">
      <div class="container">
        <nav class="navbar site-navbar">
          <!--~~~~~~~~~~~~~~~~~~~~~~~~
            Brand Logo
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
          <div class="brand-logo">
            <a href="/">
              <!-- light version logo (logo must be black)-->
              <img class="logo-light logo-dark" src="{{asset('main-logo.png')}}" alt="brand logo">
              <!-- Dark version logo (logo must be White)-->
              {{-- <img class="logo-dark" src="./image/logo.png" alt="brand logo"> --}}
            </a>
          </div>
          <div class="menu-block-wrapper ">
            <div class="menu-overlay"></div>
            <nav class="menu-block" id="append-menu-header">
              <div class="mobile-menu-head">
                <a href="/">
                  <img src="{{asset('main-logo.png')}}" alt="brand logo">
                </a>
                <div class="current-menu-title"></div>
                <div class="mobile-menu-close">&times;</div>
              </div>
              <ul class="site-menu-main">
                <li class="nav-item">
                  <a href="#hero" class="nav-link-item">Home</i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#about" class="nav-link-item">About Us</i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#services" class="nav-link-item">Services</i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#testimonial" class="nav-link-item">Testimonial</i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#faq" class="nav-link-item">Faq</i>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <!--~~~~~~~~~~~~~~~~~~~~~~~~
          mobile menu trigger
         ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
          <div class="mobile-menu-trigger">
            <span></span>
          </div>
          <!--~~~~~~~~~~~~~~~~~~~~~~~~
            Mobile Menu Hamburger Ends
          ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
          <div class="header-cta-btn-wrapper">
            <a href="#" class="btn-masco btn-masco--header btn-masco--header-secondary">
              <span>Login</span>
            </a>
            <a href="#" class="btn-masco btn-masco btn-masco btn-masco--header btn-fill--up">
              <span>Sign up free</span></a>
          </div>
        </nav>
      </div>
    </header>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~
     navbar-
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    

        {{$slot}}

      
      <br>
      <br>


    <div class="home-6_process-section section-padding-120">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10">
            <div class="section-heading">
              <h2 class="section-heading__title heading-md heading-md--general-sans text-white">A simple process to use is a cold email drip campaign</h2>
            </div>
          </div>
        </div>
        <div class="row row--custom">
          <div class="col-xl-4 col-md-6 col-sm-10 col-auto" data-aos="fade-left" data-aos-delay="100">
            <div class="process-card h-100">
              <div class="process-card__icon-block">
                <img src="{{asset('outer/image/home-6/service-1.png')}}" alt="process card icon">
              </div>
              <div class="process-card__text-block">
                <span class="process-card__step">Step 1</span>
                <h4 class="process-card__heading">Import perfect audience</h4>
                <p>Create manually, use a contact form, or import bulk prospects using CSV or using Google Drive spreadsheets. Maximize of your workflow by automatically importing.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-10 col-auto" data-aos="fade-left" data-aos-delay="200">
            <div class="process-card h-100">
              <div class="process-card__icon-block">
                <img src="{{asset('outer/image/home-6/service-2.png')}}" alt="process card icon">
              </div>
              <div class="process-card__text-block">
                <span class="process-card__step">Step 2</span>
                <h4 class="process-card__heading">Write unique messages</h4>
                <p>Maximize your open &amp; reply rate making every email stand with a personalization. Create your own attributes/merge tag &amp; Add variations with A/B Testing.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 col-sm-10 col-auto" data-aos="fade-left" data-aos-delay="300">
            <div class="process-card h-100">
              <div class="process-card__icon-block">
                <img src="{{asset('outer/image/home-6/service-3.png')}}" alt="process card icon">
              </div>
              <div class="process-card__text-block">
                <span class="process-card__step">Step 3</span>
                <h4 class="process-card__heading">Turn on automation</h4>
                <p>Wake up each day to find leads, directly in your inbox, by building a predictable pipeline. We take prospects who replied automatically out of the campaign.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="cta-home-6 padding-bottom-100">
      <div class="container">
        <div class="cta-home-6-wrapper">
          <div class="cta-home-6-shape-wrapper">
            <div class="cta-home-6-shape">
              <img src="{{asset('outer/image/cta/cta-6-shape.png')}}" alt="image alt">
            </div>
          </div>
          <div class="cta-content-block">
            <div class="cta-text-block">
              <h2 class="cta-home-6-title heading-md heading-md--general-sans text-white">Download now and build brand awareness through cold email</h2>
            </div>
            <div class="cta-button-group">
              <a href="#">
                <img src="{{asset('outer/image/common/app-store.png')}}" alt="image alt">
              </a>
              <a href="#">
                <img src="{{asset('outer/image/common/play-store.png')}}" alt="image alt">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <footer class="footer-v3   footer-padding-default footer--dark-v1">
      <div class="container">
        <div class="row row--footer-main">
          <!-- Footer List -->
          <div class="col-auto order-md-1">
            <h3 class="footer-title">Company</h3>
            <ul class="footer-list">
              <li>
                <a href="#">About </a>
              </li>
              <li>
                <a href="#">Features </a>
              </li>
              <li>
                <a href="#">Works </a>
              </li>
              <li>
                <a href="#">Career </a>
              </li>
            </ul>
          </div>
          <!-- Footer List -->
          <div class="col-auto order-md-2">
            <h3 class="footer-title">Help</h3>
            <ul class="footer-list">
              <li>
                <a href="#">Customer Support </a>
              </li>
              <li>
                <a href="#"> Delivery Details </a>
              </li>
              <li>
                <a href="#"> Terms & Conditions</a>
              </li>
              <li>
                <a href="#"> Privacy Policy </a>
              </li>
            </ul>
          </div>
          <!-- Footer List -->
          <div class="col-auto order-md-3">
            <h3 class="footer-title">Resources</h3>
            <ul class="footer-list">
              <li>
                <a href="#">Free eBooks </a>
              </li>
              <li>
                <a href="#"> Development Tutorial </a>
              </li>
              <li>
                <a href="#"> How to - Blog </a>
              </li>
              <li>
                <a href="#"> Youtube Playlist </a>
              </li>
            </ul>
          </div>
          <!-- Footer List -->
          <div class="col-auto order-md-3">
            <h3 class="footer-title">Resources</h3>
            <ul class="footer-list">
              <li>
                <a href="#">Free eBooks </a>
              </li>
              <li>
                <a href="#"> Development Tutorial </a>
              </li>
              <li>
                <a href="#"> How to - Blog </a>
              </li>
              <li>
                <a href="#"> Youtube Playlist </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-v3__copyright-section copyright-border">
          <!-- Footer Brand -->
          <div class="footer-brand-wrapper">
            <a href="/" class="footer-brand">
              <img src="{{asset('main-logo.png')}}" alt="logo" class="footer-brand__logo" style="width: 200px;">
            </a>
          </div>
          <!-- Copyright -->
          <div class="footer-copyright">
            <p>© Copyright 2023, All Rights Reserved by Mthemeus</p>
          </div>
          <div class="footer-social">
            <!-- Copyright -->
            <ul class="list-social">
              <li>
                <a href="#">
                  <i class="fa-brands fa-facebook-f"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa-brands fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa-brands fa-instagram"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa-brands fa-github"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- Vendor Scripts -->
  <script src="{{asset('outer/plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('outer/plugins/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('outer/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Plugin's Scripts -->
  <script src="{{asset('outer/plugins/inlineSvg/inlineSvg.min.js')}}"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="{{asset('outer/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
  <script src="{{asset('outer/plugins/aos/aos.min.js')}}"></script>
  <script src="{{asset('outer/plugins/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset("outer/plugins/isotope/packery.pkgd.min.js")}}"></script>
  <script src="{{asset('outer/plugins/isotope/image.loaded.js')}}"></script>
  <script src="{{asset('outer/plugins/slick/slick.min.js')}}"></script>
  <script src="{{asset('outer/plugins/countdown/jquery.countdown.js')}}" defer></script>
  <script src="{{asset('outer/js/menu.js')}}"></script>
  <script src="{{asset('outer/js/custom.js')}}"></script>
  <!-- Activation Script -->
</body>

</html>