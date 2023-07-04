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



    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
  Home 6 : Hero Section
 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    

        {{$slot}}


    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~
    Home 6 : Brand Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    {{-- <div class="brand-section">
      <div class="container">
        <div class="brands-wrapper-inner">
          <div class="brand-heading-2">
            <h3 class="brand-heading__title ">Trusted by the most innovative companies worldwide</h3>
          </div>
          <div class="brands-wrapper ">
            <div class="single-brand-2" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="800">
              <img src="./image/home-6/brand-1.png" alt="brand-logo">
            </div>
            <div class="single-brand-2" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="700">
              <img src="./image/home-6/brand-2.png" alt="brand-logo">
            </div>
            <div class="single-brand-2" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="600">
              <img src="./image/home-6/brand-3.png" alt="brand-logo">
            </div>
            <div class="single-brand-2" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="500">
              <img src="./image/home-6/brand-4.png" alt="brand-logo">
            </div>
            <div class="single-brand-2" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="400">
              <img src="./image/home-6/brand-5.png" alt="brand-logo">
            </div>
            <div class="single-brand-2" data-aos-duration="1000" data-aos="fade-left" data-aos-delay="400">
              <img src="./image/home-6/brand-6.png" alt="brand-logo">
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 6  : Process Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
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
                <img src="./image/home-6/service-1.png" alt="process card icon">
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
                <img src="./image/home-6/service-2.png" alt="process card icon">
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
                <img src="./image/home-6/service-3.png" alt="process card icon">
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
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 6  : Content Section 1
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-6_content-section-1 section-padding-120" id="about">
      <div class="container">
        <div class="row row--custom ">
          <div class="col-xl-6 col-lg-6 col-md-6 col-7" data-aos-duration="1000" data-aos="fade-right">
            <div class="home-6_content-image-1-block ">
              <div class="home-6_content-image-1 content-image--mobile-width">
                <img src="./image/home-6/content-image-1.png" alt="alternative text">
              </div>
              <div class="home-6_content-image-1-card">
                <img src="./image/home-6/content-image-1-card.png" alt="alternative text">
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-10 col-auto" data-aos-duration="1000" data-aos="fade-left">
            <div class="content">
              <div class="content-text-block">
                <h2 class="content-title heading-md heading-md--general-sans text-l5-secondary">Masco cold email outreach that drives meetings with your dream clients</h2>
                <p>
                  Turn Masco's cold email outreach into a lead-converting sales
                  machine. Our simple-to-use features combined with our done-for-you
                  services will enable you to generate and close deals faster.
                </p>
              </div>
              <div class="content-divider"></div>
              <div class="content__stats-block">
                <div class="stat-single">
                  <span class="stat-single__count "> 80%</span>
                  <span class="stat-single__text">
                        Increase in Monthly Meetings
                    </span>
                </div>
                <div class="stat-single">
                  <span class="stat-single__count"> $50M</span>
                  <span class="stat-single__text"> Recurring Revenue Generated</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 6  : Content Section 2
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-6_content-section-2 padding-bottom-120">
      <div class="container">
        <div class="row row--custom ">
          <div class=" col-xl-6 col-lg-6 col-md-6 col-7" data-aos-duration="1000" data-aos="fade-left">
            <div class="home-6_content-image-1-block ">
              <div class="home-6_content-image-2 content-image--mobile-width">
                <img src="./image/home-6/content-image-2.png" alt="alternative text">
              </div>
              <div class="home-6_content-image-2-card">
                <img src="./image/home-6/content-image-2-card.png" alt="alternative text">
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-10 col-auto" data-aos-duration="1000" data-aos="fade-right">
            <div class="content">
              <div class="content-text-block">
                <h2 class="content-title heading-md heading-md--general-sans text-l5-secondary">Achieve more productivity and revenue for every rep</h2>
                <p>
                  Creating an effective cold email outreach strategy takes
                  continuous optimization. Our cold email experts help so you can do more deals.
                </p>
              </div>
              <div class="content-widget-2__wrapper">
                <div class="content-widget-2">
                  <h3 class="content-widget-2__title"><img src="./image/icons/icon-check-blue.svg" alt="icon">All clients in one place</h3>
                  <p>
                    Have all your clients under one roof and shift between client
                    profiles with just one click. Invite as many co-workers as you need to get the job done.
                  </p>
                </div>
                <div class="content-widget-2">
                  <h3 class="content-widget-2__title"><img src="./image/icons/icon-check-blue.svg" alt="icon">Easily scale campaigns</h3>
                  <p>
                    Ready to send more volume? Just add an inbox (or five) to your existing campaign
                    and we’ll start sending the same campaign from multiple inboxes.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 6  : Service Section
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-6_service-section section-padding-120" id="services">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-6 col-xl-7 col-lg-8">
            <div class="section-heading text-center">
              <h2 class="section-heading__title heading-md heading-md--general-sans text-l5-secondary">Our cold email software has many benefits to help you</h2>
            </div>
          </div>
        </div>
        <div class="row gutter-y-default justify-content-center">
          <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10">
            <a href="" class="service-card  undefined" data-aos-duration="1000" data-aos="fade-right">
              <div class="service-card__icon">
                <img src="./image/home-6/service-card-icon-1.svg" alt="image alt" class="inline-svg">
              </div>
              <div class="service-card__body">
                <h3 class="service-card__title">Email Targeting &amp; List Building</h3>
                <p>This is where we help you clearly define your target audience &amp; break it up into specific ways</p>
                <span class="service-card__link btn-link btn-arrow">Discover More</span>
              </div>
            </a>
          </div>
          <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10">
            <a href="" class="service-card  undefined" data-aos-duration="1000" data-aos="fade-left">
              <div class="service-card__icon">
                <img src="./image/home-6/service-card-icon-2.svg" alt="image alt" class="inline-svg">
              </div>
              <div class="service-card__body">
                <h3 class="service-card__title">A/B Testing &amp; Experimentation</h3>
                <p>Once messaging and the audience is decided we begin experimenting and results in a qualitative</p>
                <span class="service-card__link btn-link btn-arrow">Discover More</span>
              </div>
            </a>
          </div>
          <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10">
            <a href="" class="service-card  undefined" data-aos-duration="1000" data-aos="fade-right">
              <div class="service-card__icon">
                <img src="./image/home-6/service-card-icon-3.svg" alt="image alt" class="inline-svg">
              </div>
              <div class="service-card__body">
                <h3 class="service-card__title">Scale Email Hyper-personalization</h3>
                <p>One size doesn&#39;t fit all &amp; without personalization, your emails will look like nothing but SPAM</p>
                <span class="service-card__link btn-link btn-arrow">Discover More</span>
              </div>
            </a>
          </div>
          <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10">
            <a href="" class="service-card  undefined" data-aos-duration="1000" data-aos="fade-left">
              <div class="service-card__icon">
                <img src="./image/home-6/service-card-icon-4.svg" alt="image alt" class="inline-svg">
              </div>
              <div class="service-card__body">
                <h3 class="service-card__title">Email Drip Campaign Optimization</h3>
                <p>We optimize and measure for one metric, and a prospects that are interested in a conversation</p>
                <span class="service-card__link btn-link btn-arrow">Discover More</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="home-6_topic-section section-padding-120">
      <div class="container">
        <div class="section-heading section-heading--row">
          <div class="row justify-content-center text-center text-lg-initial justify-content-lg-between">
            <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9 ">
              <h2 class="section-heading__title heading-md heading-md--general-sans text-l5-secondary">We automate cold outreach across multiple channels</h2>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4">
              <div class="section-heading__button">
                <a href="#" class="btn-masco btn btn-primary btn-fill--up">
                  <span>See All Integrations</span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="ticker-03_section">
          <div class="ticker-03_wrapper">
            <div class="ticker-03_content">
              <div class="ticker-item">
                <img src="./image/brand-logo/discord.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/spotify.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/slack.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/dropbox.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/mailchimp.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/whatsapp.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/skype.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/gmail.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/zoom.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/figma.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/snapchat.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/shopify.png" alt="image alt">
              </div>
            </div>
            <div class="ticker-03_content">
              <div class="ticker-item">
                <img src="./image/brand-logo/discord.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/spotify.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/slack.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/dropbox.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/mailchimp.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/whatsapp.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/skype.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/gmail.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/zoom.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/figma.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/snapchat.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/shopify.png" alt="image alt">
              </div>
            </div>
            <div class="ticker-03_content">
              <div class="ticker-item">
                <img src="./image/brand-logo/discord.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/spotify.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/slack.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/dropbox.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/mailchimp.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/whatsapp.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/skype.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/gmail.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/zoom.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/figma.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/snapchat.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/shopify.png" alt="image alt">
              </div>
            </div>
            <div class="ticker-03_content">
              <div class="ticker-item">
                <img src="./image/brand-logo/discord.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/spotify.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/slack.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/dropbox.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/mailchimp.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/whatsapp.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/skype.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/gmail.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/zoom.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/figma.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/snapchat.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/shopify.png" alt="image alt">
              </div>
            </div>
            <div class="ticker-03_content">
              <div class="ticker-item">
                <img src="./image/brand-logo/discord.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/spotify.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/slack.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/dropbox.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/mailchimp.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/whatsapp.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/skype.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/gmail.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/zoom.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/figma.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/snapchat.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/shopify.png" alt="image alt">
              </div>
            </div>
            <div class="ticker-03_content">
              <div class="ticker-item">
                <img src="./image/brand-logo/discord.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/spotify.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/slack.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/dropbox.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/mailchimp.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/whatsapp.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/skype.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/gmail.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/zoom.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/figma.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/snapchat.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/shopify.png" alt="image alt">
              </div>
            </div>
          </div>
          <div class="ticker-03_wrapper">
            <div class="ticker-03_content ticker-03_content--reverse">
              <div class="ticker-item">
                <img src="./image/brand-logo/discord.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/spotify.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/slack.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/dropbox.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/mailchimp.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/whatsapp.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/skype.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/gmail.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/zoom.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/figma.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/snapchat.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/shopify.png" alt="image alt">
              </div>
            </div>
            <div class="ticker-03_content ticker-03_content--reverse">
              <div class="ticker-item">
                <img src="./image/brand-logo/discord.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/spotify.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/slack.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/dropbox.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/mailchimp.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/whatsapp.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/skype.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/gmail.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/zoom.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/figma.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/snapchat.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/shopify.png" alt="image alt">
              </div>
            </div>
            <div class="ticker-03_content ticker-03_content--reverse">
              <div class="ticker-item">
                <img src="./image/brand-logo/discord.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/spotify.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/slack.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/dropbox.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/mailchimp.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/whatsapp.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/skype.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/gmail.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/zoom.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/figma.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/snapchat.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/shopify.png" alt="image alt">
              </div>
            </div>
            <div class="ticker-03_content ticker-03_content--reverse">
              <div class="ticker-item">
                <img src="./image/brand-logo/discord.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/spotify.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/slack.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/dropbox.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/mailchimp.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/whatsapp.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/skype.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/gmail.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/zoom.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/figma.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/snapchat.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/shopify.png" alt="image alt">
              </div>
            </div>
            <div class="ticker-03_content ticker-03_content--reverse">
              <div class="ticker-item">
                <img src="./image/brand-logo/discord.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/spotify.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/slack.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/dropbox.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/mailchimp.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/whatsapp.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/skype.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/gmail.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/zoom.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/figma.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/snapchat.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/shopify.png" alt="image alt">
              </div>
            </div>
            <div class="ticker-03_content ticker-03_content--reverse">
              <div class="ticker-item">
                <img src="./image/brand-logo/discord.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/spotify.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/slack.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/dropbox.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/mailchimp.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/whatsapp.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/skype.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/gmail.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/zoom.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/figma.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/snapchat.png" alt="image alt">
              </div>
              <div class="ticker-item">
                <img src="./image/brand-logo/shopify.png" alt="image alt">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 6  : Testimonial Section 
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-6_testimonial section-padding-120" id="testimonial">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10">
            <div class="section-heading">
              <h2 class="section-heading__title heading-md heading-md--general-sans text-l5-secondary">Our clients have shared their experiences using Masco</h2>
            </div>
          </div>
        </div>
        <div class="testimonial-masonry">
          <div class="testimonial-masonry-item">
            <div class="testimonial-card" data-aos="fade-left" data-aos-delay="100">
              <img src="./image/icons/star-five.svg" class="testimonial-card__star" alt="image alt">
              <h3 class="testimonial-card__title">
                Great value home exercise 💪🏼
              </h3>
              <p>
                I was recommended masco from a dear friend and WOW!!! Gives energy, strength &amp; mostly your motivation and you helped me grow beyond my expectations.
              </p>
              <div class="testimonial-card__author">
                <div class="testimonial-card__author-image">
                  <img src="./image/home-6/testimonial-author-1.png" alt="image alt">
                </div>
                <div class="testimonial-card__author-info">
                  <h4>Karen Lynn</h4>
                  <span>Founder @ Company</span>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-masonry-item">
            <div class="testimonial-card" data-aos="fade-left" data-aos-delay="200">
              <img src="./image/icons/star-five.svg" class="testimonial-card__star" alt="image alt">
              <h3 class="testimonial-card__title">
                Such a wonderful fitness app ❤
              </h3>
              <p>
                After a hiatus from the gym I needed some encouragement to help me get my confidence back😍
              </p>
              <div class="testimonial-card__author">
                <div class="testimonial-card__author-image">
                  <img src="./image/home-6/testimonial-author-2.png" alt="image alt">
                </div>
                <div class="testimonial-card__author-info">
                  <h4>Dianne Russell</h4>
                  <span>Developer</span>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-masonry-item">
            <div class="testimonial-card" data-aos="fade-left" data-aos-delay="300">
              <img src="./image/icons/star-five.svg" class="testimonial-card__star" alt="image alt">
              <h3 class="testimonial-card__title">
                Love the home fitness tips
              </h3>
              <p>
                Such a wonderful fitness plan! Someone who trains regularly but does not have any access to equipment, this plan has been a lifesaver. You don’t need anything but still get a great workout. The recipes are great and I love the guidance about when to eat what.
              </p>
              <div class="testimonial-card__author">
                <div class="testimonial-card__author-image">
                  <img src="./image/home-6/testimonial-author-3.png" alt="image alt">
                </div>
                <div class="testimonial-card__author-info">
                  <h4>Marvin McKinney</h4>
                  <span>College Student</span>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-masonry-item">
            <div class="testimonial-card" data-aos="fade-left" data-aos-delay="400">
              <img src="./image/icons/star-five.svg" class="testimonial-card__star" alt="image alt">
              <h3 class="testimonial-card__title">
                I can honestly say that I’ve enjoyed
              </h3>
              <p>
                oth the workouts and the delicious receipts are easy to follow and to finish.It’s great to be part of a community.These times when so much has changed❤
              </p>
              <div class="testimonial-card__author">
                <div class="testimonial-card__author-image">
                  <img src="./image/home-6/testimonial-author-4.png" alt="image alt">
                </div>
                <div class="testimonial-card__author-info">
                  <h4>Ronald Richards</h4>
                  <span>Businessman</span>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-masonry-item">
            <div class="testimonial-card" data-aos="fade-left" data-aos-delay="500">
              <img src="./image/icons/star-five.svg" class="testimonial-card__star" alt="image alt">
              <h3 class="testimonial-card__title">
                10/10 would recommend👌🏼
              </h3>
              <p>
                The workouts are fun to do but still make you sweat! I’m so grateful for the two of you for starting this amazing app️
              </p>
              <div class="testimonial-card__author">
                <div class="testimonial-card__author-image">
                  <img src="./image/home-6/testimonial-author-5.png" alt="image alt">
                </div>
                <div class="testimonial-card__author-info">
                  <h4>Kristin Watson</h4>
                  <span>Social Influencer</span>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-masonry-item">
            <div class="testimonial-card" data-aos="fade-left" data-aos-delay="600">
              <img src="./image/icons/star-five.svg" class="testimonial-card__star" alt="image alt">
              <h3 class="testimonial-card__title">
                Just completed week 3 and love the app
              </h3>
              <p>
                As someone who has not exercised for a few years, it is great to be getting back into it with such accessible exercises and daily tips. Would recommend to anyone whatever fitness level, The workouts are really fun and my family are loving it too! Wonderful job guys 😍
              </p>
              <div class="testimonial-card__author">
                <div class="testimonial-card__author-image">
                  <img src="./image/home-6/testimonial-author-6.png" alt="image alt">
                </div>
                <div class="testimonial-card__author-info">
                  <h4>Guy Hawkins</h4>
                  <span>Web Developer</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center">
          <div class="btn-masco link-box btn-fill--up spacer-top-80">
            <span>Read all the reviews on Trustpilot.com</span>
          </div>
        </div>
      </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Home 6 : FAQ Section 
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="home-6_faq-section section-padding-100" id="faq">
      <div class="container">
        <div class="row row--custom">
          <div class="col-lg-6 col-md-10">
            <div class="section-heading">
              <h2 class="section-heading__title fw-600 heading-md heading-md--general-sans text-l5-secondary">Need more information about cold email? Just ask</h2>
              <p>Creating an effective cold email outreach strategy takes continuous optimization. Our cold email experts help so you can do more deals.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="accordion-style-6" id="home-6_faq">
              <div class="accordion-item">
                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#home-6-faq-item" aria-expanded="true" aria-controls="home-6-faq-item">
                  <i class="fa-solid fa-question"></i>
                  What exactly is a cold email?
                </button>
                <div id="home-6-faq-item" class="accordion-collapse collapse show" data-bs-parent="#home-6_faq">
                  <div class="accordion-item__body">
                    A cold email is an initial email that is sent to a receiver in order to gain a benefit
                    in terms of favor, sales, opportunity or any other dual-sided gain.
                    In simple words, when you email someone you don’t know for some particular reason is cold emailing.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#home-6-faq-item-2" aria-expanded="false" aria-controls="home-6-faq-item-2">
                  <i class="fa-solid fa-question"></i>
                  Why is cold emailing important?
                </button>
                <div id="home-6-faq-item-2" class="accordion-collapse collapse" data-bs-parent="#home-6_faq">
                  <div class="accordion-item__body">
                    A cold email is an initial email that is sent to a receiver in order to gain a benefit
                    in terms of favor, sales, opportunity or any other dual-sided gain.
                    In simple words, when you email someone you don’t know for some particular reason is cold emailing.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#home-6-faq-item-3" aria-expanded="false" aria-controls="home-6-faq-item-3">
                  <i class="fa-solid fa-question"></i>
                  Is cold email effective for the next generation?
                </button>
                <div id="home-6-faq-item-3" class="accordion-collapse collapse" data-bs-parent="#home-6_faq">
                  <div class="accordion-item__body">
                    A cold email is an initial email that is sent to a receiver in order to gain a benefit
                    in terms of favor, sales, opportunity or any other dual-sided gain.
                    In simple words, when you email someone you don’t know for some particular reason is cold emailing.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~
    Home 6 : CTA 
~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="cta-home-6 padding-bottom-100">
      <div class="container">
        <div class="cta-home-6-wrapper">
          <div class="cta-home-6-shape-wrapper">
            <div class="cta-home-6-shape">
              <img src="./image/cta/cta-6-shape.png" alt="image alt">
            </div>
          </div>
          <div class="cta-content-block">
            <div class="cta-text-block">
              <h2 class="cta-home-6-title heading-md heading-md--general-sans text-white">Download now and build brand awareness through cold email</h2>
            </div>
            <div class="cta-button-group">
              <a href="#">
                <img src="./image/common/app-store.png" alt="image alt">
              </a>
              <a href="#">
                <img src="./image/common/play-store.png" alt="image alt">
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
            <a href="./index.html" class="footer-brand">
              <img src="./image/logo-white.svg" alt="logo" class="footer-brand__logo">
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