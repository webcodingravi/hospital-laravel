@extends('layouts.app')
@section('content')
<div class="page-title-area page-title-four">
  <div class="d-table">
  <div class="d-table-cell">
  <div class="page-title-item">
  <h2>Service Details</h2>
  <ul>
  <li>
  <a href="{{route('front.home')}}">Home</a>
  </li>
  <li>
  <i class="icofont-simple-right"></i>
  </li>
  <li>Service Details</li>
  </ul>
  </div>
  </div>
  </div>
  </div>
  
  
  <div class="service-details-area ptb-100">
  <div class="container">
  <div class="services-details-img">
  <img src="{{asset('assets/img/service-details-bg.jpg')}}" alt="Service Details">
  <h2>Our hospital always provide good services</h2>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
  <blockquote>
  <i class="icofont-quote-left"></i>
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint optio rem magni, dolorum aut vel nostrum quae, fugit necessitatibus eius perferendis. Quia optio tenetur pariatur aliquam obcaecati enim quam eum?Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint optio rem magni, dolorum aut vel nostrum quae, fugit necessitatibus eius perferendis. Quia optio tenetur pariatur aliquam obcaecati enim quam eum?
  </blockquote>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
  </div>
  <div class="row justify-content-center">
  <div class="col-lg-5">
  <div class="service-details-inner-left">
  <img src="{{asset('assets/img/signup-bg.jpg')}}" alt="Service">
  </div>
  </div>
  <div class="col-lg-7">
  <div class="service-details-inner">
  <h2>We always take care our patient</h2>
  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto blanditiis obcaecati veritatis magnam pariatur molestiae in maxime. Animi quae vitae in inventore. Totam mollitia aspernatur provident veniam aperiam placeat impedit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem natus nobis, dolorum nam excepturi iure autem nemo ducimus temporibus facere, est eum voluptatem, culpa optio fugit assumenda quod? Praesentium.</p>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, laudantium ullam, iure distinctio officia libero voluptatem obcaecati vero deleniti minima nemo itaque alias nisi eveniet soluta architecto quae laboriosam unde.</p>
  </div>
  </div>
  </div>
  </div>
  </div>
  
  
  <section class="blog-area pt-100 pb-70">
  <div class="container">
  <div class="section-title">
  <h2>Our Latest Blogs</h2>
  </div>
  <div class="row justify-content-center">
  <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
  <div class="blog-item">
  <div class="blog-top">
  <a href="{{route('front.BlogDetail')}}">
  <img src="{{asset('assets/img/home-one/11.jpg')}}" alt="Blog">
  </a>
  </div>
  <div class="blog-bottom">
  <h3>
  <a href="{{route('front.BlogDetail')}}">In this hospital there are special surgeon.</a>
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
  <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".5s">
  <div class="blog-item">
  <div class="blog-top">
  <a href="{{route('front.BlogDetail')}}">
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
  <a href="{{route('front.BlogDetail')}}">More than 80 clinical trials launch to test coronavirus.</a>
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