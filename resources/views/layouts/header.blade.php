<div class="header-top">
  <div class="container">
  <div class="row align-items-center justify-content-center">
  <div class="col-sm-9 col-lg-9">
  <div class="header-top-item">
  <div class="header-top-left">
  <ul>
  <li>
  <a href="tel:+07554332322">
  <i class="icofont-ui-call"></i>
  Call : +07 554 332 322
  </a>
  </li>
  <li>
  <a href="/cdn-cgi/l/email-protection#0c64696060634c6169687f697a226f6361">
  <i class="icofont-ui-message"></i>
  <span class="__cf_email__">[email&#160;protected]</span>
  </a>
  </li>
  <li>
  <i class="icofont-location-pin"></i>
  210-27 Quadra, Canada
  </li>
  </ul>
  </div>
  </div>
  </div>
  <div class="col-sm-3 col-lg-3">
  <div class="header-top-item">
  <div class="header-top-right">
  <ul>
  <li>
  <a href="https://www.facebook.com/login/" target="_blank">
  <i class="icofont-facebook"></i>
  </a>
  </li>
  <li>
  <a href="https://twitter.com/login/" target="_blank">
  <i class="icofont-twitter"></i>
  </a>
  </li>
  <li>
  <a href="https://www.pinterest.com/" target="_blank">
  <i class="icofont-pinterest"></i>
  </a>
  </li>
  </ul>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="navbar-area sticky-top">
  
  <div class="mobile-nav">
  <a href="{{route('front.home')}}" class="logo">
  <img src="{{asset('assets/img/logo-two.png')}}" alt="Logo">
  </a>
  </div>
  
  <div class="main-nav">
  <div class="container">
  <nav class="navbar navbar-expand-md navbar-light">
  <a class="navbar-brand" href="{{route('front.home')}}">
  <img src="{{asset('assets/img/logo.png')}}" alt="Logo">
  </a>
  <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
  <ul class="navbar-nav">
  <li class="nav-item">
  <a href="{{route('front.home')}}" class="nav-link {{(Request::segment(1) == '') ? 'active' : ''}}">Home</a>
  </li>
  <li class="nav-item">
  <a href="{{route('front.about')}}" class="nav-link {{(Request::segment(1) == 'about') ? 'active' : ''}}">About</a>
  </li>
  
  <li class="nav-item">
  <a href="{{route('front.service')}}" class="nav-link {{(Request::segment(1) == 'service') ? 'active' : ''}}">Services</a>
  </li>
  <li class="nav-item">
  <a href="{{route('front.doctor')}}" class="nav-link {{(Request::segment(1) == 'doctor') ? 'active' : ''}}">Doctor</a>
  </li>

  <li class="nav-item">
    <a href="{{route('front.appointment')}}" class="nav-link {{(Request::segment(1) == 'appointment') ? 'active' : ''}}">Appointment</a>
    </li>

    <li class="nav-item">
      <a href="{{route('front.department')}}" class="nav-link {{(Request::segment(1) == 'department') ? 'active' : ''}}">Department</a>
      </li>

      <li class="nav-item">
        <a href="{{route('front.testimonials')}}" class="nav-link {{(Request::segment(1) == 'testimonials') ? 'active' : ''}}">Testimonials</a>
        </li>
  

 
  
  <li class="nav-item">
  <a href="{{route('front.blog')}}" class="nav-link {{(Request::segment(1) == 'blog') ? 'active' : ''}}">Blog</a>
  
  </li>
  <li class="nav-item">
  <a href="{{route('front.contact')}}" class="nav-link {{(Request::segment(1) == 'contact') ? 'active' : ''}}">Contact Us</a>
  </li>
  </ul>
  <div class="nav-srh">
  <div class="search-toggle">
  <button class="search-icon icon-search"><i class="icofont-search-1"></i></button>
  <button class="search-icon icon-close"><i class="icofont-close"></i></button>
  </div>
  <div class="search-area">
  <form>
  <input type="text" class="src-input" id="search-terms" placeholder="Search here...">
  <button type="submit" name="submit" value="Go" class="search-icon"><i class="icofont-search-1"></i></button>
  </form>
  </div>
  </div>
  </div>
  </nav>
  </div>
  </div>
  </div>