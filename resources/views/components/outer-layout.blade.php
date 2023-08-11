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
    <header class="site-header site-header--menu-left site-header--transparent site-header--sticky" style="display: none;">
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