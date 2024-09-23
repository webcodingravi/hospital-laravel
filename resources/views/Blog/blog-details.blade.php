@extends('layouts.app')
@section('content')
<div class="page-title-area page-title-four">
  <div class="d-table">
  <div class="d-table-cell">
  <div class="page-title-item">
  <h2>Blog Details</h2>
  <ul>
  <li>
  <a href="{{route('front.blog')}}">Home</a>
  </li>
  <li>
  <i class="icofont-simple-right"></i>
  </li>
  <li>Blog Details</li>
  </ul>
  </div>
  </div>
  </div>
  </div>
  
  
  <div class="blog-details-area pt-100">
  <div class="container">
  <div class="row justify-content-center">
  <div class="col-lg-8">
  <div class="blog-details-item">
  <div class="blog-details-img">
  <img src="{{asset('assets/img/blog/2.jpg')}}" alt="Blog">
  <h2>More than 80 clinical trials launch to test of the coronavirus</h2>
  <ul>
  <li>
  <a href="{{route('front.BlogDetail')}}">
  <i class="icofont-businessman"></i>
  Admin
  </a>
  </li>
  <li>
  <i class="icofont-calendar"></i>
  Jan 03, 2024
  </li>
  </ul>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
  <p>Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
  </div>
  <div class="blog-details-previous">
  <h3>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h3>
  <ul>
  <li>1. Donec a purus at tellus rhoncus semper non sed tortor.</li>
  <li>2. Etiam ut est laoreet, accumsan erat sed, ullamcorper magna.</li>
  <li>3. Nullam sit amet magna cursus, consectetur magna in, faucibus erat.</li>
  <li>4. Aenean vitae tortor pretium, sollicitudin urna at, sollicitudin dui.</li>
  <li>5. Phasellus tempor velit sed leo viverra lacinia.</li>
  <li>6. Suspendisse quis sapien dapibus, sagittis ligula a, rhoncus justo.</li>
  </ul>
  <div class="prev-next">
  <ul>
  <li>
  <a href="{{route('front.BlogDetail')}}">Previous</a>
  </li>
  <li>
  <a href="{{route('front.BlogDetail')}}">Next</a>
  </li>
  </ul>
  </div>
  </div>
  </div>
  </div>
  <div class="col-lg-4">
  <div class="blog-details-item">
  <div class="blog-details-search">
  <form>
  <input type="text" class="form-control" placeholder="Search">
  <button type="submit" class="btn blog-details-btn">
  <i class="icofont-search-1"></i>
  </button>
  </form>
  </div>
  <div class="blog-details-recent">
  <h3>Recent Blogs</h3>
  <ul>
  <li>
  <img src="assets/img/blog/3.jpg" alt="Recent">
  <a href="{{route('front.BlogDetail')}}">World AIDS Day, designated on 1 December.</a>
  <ul>
  <li>
  <a href="{{route('front.BlogDetail')}}">
  <i class="icofont-businessman"></i>
  Admin
  </a>
  </li>
  <li>
  <i class="icofont-calendar"></i>
  Jan 03, 2024
  </li>
  </ul>
  </li>
  <li>
  <img src="{{asset('assets/img/blog/4.jpg')}}" alt="Recent">
  <a href="{{route('front.BlogDetail')}}">World AIDS Day, designated on 1 December.</a>
  <ul>
  <li>
  <a href="{{route('front.BlogDetail')}}">
  <i class="icofont-businessman"></i>
  Admin
  </a>
  </li>
  <li>
  <i class="icofont-calendar"></i>
  Jan 03, 2024
  </li>
  </ul>
  </li>
  <li>
  <img src="assets/img/blog/5.jpg" alt="Recent">
  <a href="{{route('front.BlogDetail')}}l">World AIDS Day, designated on 1 December.</a>
  <ul>
  <li>
  <a href="{{route('front.BlogDetail')}}">
  <i class="icofont-businessman"></i>
  Admin
  </a>
  </li>
  <li>
  <i class="icofont-calendar"></i>
  Jan 03, 2024
  </li>
  </ul>
  </li>
  </ul>
  </div>
  <div class="blog-details-category">
  <h3>Category</h3>
  <ul>
  <li>
  <a href="{{route('front.BlogDetail')}}">Health Care</a>
  </li>
  <li>
  <a href="{{route('front.BlogDetail')}}">Medical science</a>
  </li>
  <li>
  <a href="blog-details.html">Daily lifestyle</a>
  </li>
  <li>
  <a href="{{route('front.ServiceDetail')}}">Medicine</a>
  </li>
  <li>
  <a href="{{route('front.BlogDetail')}}">Mordern Technology</a>
  </li>
  <li>
  <a href="{{route('front.BlogDetail')}}">Cancer Research</a>
  </li>
  <li>
  <a href="{{route('front.BlogDetail')}}">BioInformatics</a>
  </li>
  <li>
  <a href="{{route('front.BlogDetail')}}">Hospital Events</a>
  </li>
  <li>
  <a href="{{route('front.BlogDetail')}}">Student Succses</a>
  </li>
  </ul>
  </div>
  <div class="blog-details-tags">
  <h3>Tags</h3>
  <ul>
  <li>
  <a href="{{route('front.BlogDetail')}}">Dental</a>
  </li>
  <li>
  <a href="{{route('front.BlogDetail')}}">Health</a>
  </li>
  <li>
  <a href="{{route('front.BlogDetail')}}">Child</a>
  </li>
  <li>
  <a href="{{route('front.ServiceDetail')}}">Medicine</a>
  </li>
  <li>
  <a href="{{route('front.BlogDetail')}}">Caveti</a>
  </li>
  <li>
  <a href="{{route('front.BlogDetail')}}">AIDS</a>
  </li>
  <li>
  <a href="{{route('front.BlogDetail')}}">Dental</a>
  </li>
  <li>
  <a href="{{route('front.BlogDetail')}}">Health</a>
  </li>
  </ul>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  
  
  <div class="blog-details-form pb-100">
  <div class="blog-details-shape">
  <img src="{{asset('assets/img/blog/6.png')}}" alt="Shape">
  </div>
  <div class="container">
  <div class="blog-details-form-wrap">
  <h2>Drop your coomment</h2>
  <form>
  <div class="form-group">
  <textarea class="form-control" id="your_comments" rows="8" placeholder="Your Comments"></textarea>
  </div>
  <div class="row justify-content-center">
  <div class="col-lg-6">
  <div class="form-group">
  <input type="text" class="form-control" placeholder="Name">
  </div>
  </div>
  <div class="col-lg-6">
  <div class="form-group">
  <input type="email" class="form-control" placeholder="Email">
  </div>
  </div>
  <div class="col-lg-6">
  <div class="form-group">
  <input type="text" class="form-control" placeholder="Phone">
  </div>
  </div>
  <div class="col-lg-6">
  <div class="form-group">
  <input type="text" class="form-control" placeholder="Subject">
  </div>
  </div>
  </div>
  <div class="text-left">
  <button type="submit" class="btn blog-details-form-btn">Post A Comment</button>
  </div>
  </form>
  </div>
  </div>
  </div>
  
  
  <section class="blog-area-two">
  <div class="container">
  <div class="section-title">
  <h2>Our Latest Blogs</h2>
  </div>
  <div class="row justify-content-center">
  <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
  <div class="blog-item">
  <div class="blog-top">
  <a href="blog-details.html">
  <img src="{{asset('assets/img/home-one/11.jpg')}}" alt="Blog">
  </a>
  </div>
  <div class="blog-bottom">
  <h3>
  <a href="blog-details.html">In this hospital there are special surgeon.</a>
  </h3>
  <p>Lorem ipsum is dolor sit amet, csectetur adipiscing elit, dolore smod tempor incididunt ut labore et....</p>
  <ul>
  <li>
  <a href="blog-details.html">
  Read More
  <i class="icofont-long-arrow-right"></i>
  </a>
  </li>
  <li>
  <i class="icofont-calendar"></i>
  Jan 03, 2024
  </li>
  </ul>
  </div>
  </div>
  </div>
  <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".5s">
  <div class="blog-item">
  <div class="blog-top">
  <a href="blog-details.html">
  <img src="{{asset('assets/img/home-one/12.jpg')}}" alt="Blog">
  </a>
  </div>
  <div class="blog-bottom">
  <h3>
  <a href="{{route('front.BlogDetail')}}">World AIDS Day, designated on 1 December.</a>
  </h3>
  <p>Lorem ipsum is dolor sit amet, csectetur adipiscing elit, dolore smod tempor incididunt ut labore et....</p>
  <ul>
  <li>
  <a href="{{route('front.BlogDetail')}}">
  Read More
  <i class="icofont-long-arrow-right"></i>
  </a>
  </li>
  <li>
  <i class="icofont-calendar"></i>
  Jan 03, 2024
  </li>
  </ul>
  </div>
  </div>
  </div>
  <div class="col-sm-6   col-lg-4 wow fadeInUp" data-wow-delay=".7s">
  <div class="blog-item">
  <div class="blog-top">
  <a href="{{route('front.BlogDetail')}}">
  <img src="{{asset('assets/img/home-one/13.jpg')}}" alt="Blog">
  </a>
  </div>
  <div class="blog-bottom">
  <h3>
  <a href="blog-details.html">More than 80 clinical trials launch to test coronavirus.</a>
  </h3>
  <p>Lorem ipsum is dolor sit amet, csectetur adipiscing elit, dolore smod tempor incididunt ut labore et....</p>
  <ul>
  <li>
  <a href="{{route('front.BlogDetail')}}">
  Read More
  <i class="icofont-long-arrow-right"></i>
  </a>
  </li>
  <li>
  <i class="icofont-calendar"></i>
  Jan 03, 2024
  </li>
  </ul>
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  
  
@endsection