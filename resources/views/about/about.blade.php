@extends('layouts.app')
@section('content')
<div class="page-title-area page-title-four">
  <div class="d-table">
  <div class="d-table-cell">
  <div class="page-title-item">
  <h2>About</h2>
  <ul>
  <li>
  <a href="{{route('front.home')}}">Home</a>
  </li>
  <li>
  <i class="icofont-simple-right"></i>
  </li>
  <li>About</li>
  </ul>
  </div>
  </div>
  </div>
  </div>
  
  
  <div class="about-area pt-100 pb-70">
  <div class="container">
  <div class="row align-items-center justify-content-center">
  <div class="col-lg-6">
  <div class="about-item">
  <div class="about-left">
  <img src="{{asset('assets/img/home-one/4.jpg')}}" alt="About">
  </div>
  </div>
  </div>
  <div class="col-lg-6">
  <div class="about-item about-right">
  <img src="{{asset('assets/img/home-one/5.png')}}" alt="About">
  <h2>About Our Hospital</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
  <ul>
  <li>
  <i class="icofont-check-circled"></i>
  Browse Our Website
  </li>
  <li>
  <i class="icofont-check-circled"></i>
  Choose Service
  </li>
  <li>
  <i class="icofont-check-circled"></i>
  Send Messege
  </li>
  </ul>

  </div>
  </div>
  </div>
  </div>
  </div>
  
  
  <div class="counter-area counter-bg counter-area-four">
  <div class="container">
  <div class="row justify-content-center">
  <div class="col-sm-6 col-md-3 col-lg-3">
  <div class="counter-item">
  <i class="icofont-patient-bed"></i>
  <h3>
  <span class="odometer" data-count="850">00</span>
  </h3>
  <p>Patients Beds</p>
  </div>
  </div>
  <div class="col-sm-6 col-md-3 col-lg-3">
  <div class="counter-item">
  <i class="icofont-people"></i>
  <h3>
  <span class="odometer" data-count="2500">00</span>
  <span class="target">+</span>
  </h3>
  <p>Happy Patients</p>
  </div>
  </div>
  <div class="col-sm-6 col-md-3 col-lg-3">
  <div class="counter-item">
  <i class="icofont-doctor-alt"></i>
  <h3>
  <span class="odometer" data-count="750">00</span>
  </h3>
  <p>Doctors & Nurse</p>
  </div>
  </div>
  <div class="col-sm-6 col-md-3 col-lg-3">
  <div class="counter-item">
  <i class="icofont-badge"></i>
  <h3>
  <span class="odometer" data-count="18">00</span>
  </h3>
  <p>Year Experience</p>
  </div>
  </div>
  </div>
  </div>
  </div>
  
  
  <section class="speciality-area pb-100">
  <div class="container-fluid p-0">
  <div class="row m-0">
  <div class="col-lg-7">
  <div class="speciality-left">
  <div class="section-title-two">
  <span>Speciality</span>
  <h2>Our Expertise</h2>
  </div>
  <div class="speciality-item">
  <div class="row m-0">
  <div class="col-sm-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
  <div class="speciality-inner">
  <i class="icofont-check-circled"></i>
  <h3>Child Care</h3>
  <p>Lorem ipsum dolor sit amet, is consectetur adipiscing</p>
  </div>
  </div>
  <div class="col-sm-6 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
  <div class="speciality-inner">
  <i class="icofont-check-circled"></i>
  <h3>More Stuff</h3>
  <p>Lorem ipsum dolor sit amet, is consectetur adipiscing</p>
  </div>
  </div>
  <div class="col-sm-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
  <div class="speciality-inner">
  <i class="icofont-check-circled"></i>
  <h3>Enough Lab</h3>
  <p>Lorem ipsum dolor sit amet, is consectetur adipiscing</p>
  </div>
  </div>
  <div class="col-sm-6 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
  <div class="speciality-inner">
  <i class="icofont-check-circled"></i>
  <h3>24 Hour Doctor</h3>
  <p>Lorem ipsum dolor sit amet, is consectetur adipiscing</p>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="col-lg-5 pr-0">
  <div class="speciality-item speciality-right">
  <img src="{{asset('assets/img/home-two/4.jpg')}}" alt="Speciality">
  <div class="speciality-emergency">
  <div class="speciality-icon">
  <i class="icofont-ui-call"></i>
  </div>
  <h3>Emergency Call</h3>
  <a href="tel:+07554332322">+07 554 332 322</a>
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  
  
  <section class="services-area pb-70">
  <div class="container">
  <div class="section-title-two">
  <span>Services</span>
  <h2>Our Hospital Services</h2>
  </div>
  <div class="row justify-content-center">
  <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".3s">
  <div class="service-item">
  <div class="d-table">
  <div class="d-table-cell">
  <div class="service-front">
  <i class="icofont-doctor"></i>
  <h3>Expert Doctor</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
  </div>
  <div class="service-end">
  <i class="icofont-doctor"></i>
  <h3>Expert Doctor</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
  <a href="service-details.html">Read More</a>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".5s">
  <div class="service-item">
  <div class="d-table">
  <div class="d-table-cell">
  <div class="service-front">
  <i class="icofont-prescription"></i>
  <h3>Diagnosis</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
  </div>
  <div class="service-end">
  <i class="icofont-prescription"></i>
  <h3>Diagnosis</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
  <a href="service-details.html">Read More</a>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".7s">
  <div class="service-item">
  <div class="d-table">
  <div class="d-table-cell">
  <div class="service-front">
  <i class="icofont-patient-file"></i>
  <h3>Pathology</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
  </div>
  <div class="service-end">
  <i class="icofont-patient-file"></i>
  <h3>Pathology</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
  <a href="{{route('front.ServiceDetail')}}">Read More</a>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".9s">
  <div class="service-item">
  <div class="d-table">
  <div class="d-table-cell">
  <div class="service-front">
  <i class="icofont-tooth"></i>
  <h3>Dental Care</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
  </div>
  <div class="service-end">
  <i class="icofont-tooth"></i>
  <h3>Dental Care</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
  <a href="{{route('front.ServiceDetail')}}">Read More</a>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".3s">
  <div class="service-item">
  <div class="d-table">
  <div class="d-table-cell">
  <div class="service-front">
  <i class="icofont-heart-beat-alt"></i>
  <h3>Cardiology</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
  </div>
  <div class="service-end">
  <i class="icofont-heart-beat-alt"></i>
  <h3>Cardiology</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
  <a href="{{route('front.ServiceDetail')}}">Read More</a>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".5s">
  <div class="service-item">
  <div class="d-table">
  <div class="d-table-cell">
  <div class="service-front">
  <i class="icofont-drug"></i>
  <h3>Medicine</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
  </div>
  <div class="service-end">
  <i class="icofont-drug"></i>
  <h3>Medicine</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
  <a href="{{route('front.ServiceDetail')}}">Read More</a>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".7s">
  <div class="service-item">
  <div class="d-table">
  <div class="d-table-cell">
  <div class="service-front">
  <i class="icofont-dna-alt-1"></i>
  <h3>Neurology</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
  </div>
  <div class="service-end">
  <i class="icofont-dna-alt-1"></i>
  <h3>Neurology</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
  <a href="{{route('front.ServiceDetail')}}">Read More</a>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".9s">
  <div class="service-item">
  <div class="d-table">
  <div class="d-table-cell">
  <div class="service-front">
  <i class="icofont-ambulance-cross"></i>
  <h3>Ambulance</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
  </div>
  <div class="service-end">
  <i class="icofont-ambulance-cross"></i>
  <h3>Ambulance</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
  <a href="{{route('front.ServiceDetail')}}">Read More</a>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  
  
  <section class="testimonial-area ptb-100">
  <div class="container">
  <div class="testimonial-wrap">
  <h2>What our patient say</h2>
  <div class="testimonial-slider owl-theme owl-carousel">
  <div class="testimonial-item">
  <img src="{{asset('assets/img/home-three/7.png')}}" alt="Testimonial">
  <h3>John Mic</h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam id labore vitae cupiditate dolorum voluptates dicta delectus quibusdam excepturi, veniam deserunt magni ipsam mollitia optio, quas quis rem non reprehenderit.</p>
  </div>
  <div class="testimonial-item">
  <img src="{{asset('assets/img/home-three/8.png')}}" alt="Testimonial">
  <h3>Adam Smith</h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam id labore vitae cupiditate dolorum voluptates dicta delectus quibusdam excepturi, veniam deserunt magni ipsam mollitia optio, quas quis rem non reprehenderit.</p>
  </div>
  <div class="testimonial-item">
  <img src="{{asset('assets/img/home-three/9.png')}}" alt="Testimonial">
  <h3>Jac Jacson</h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam id labore vitae cupiditate dolorum voluptates dicta delectus quibusdam excepturi, veniam deserunt magni ipsam mollitia optio, quas quis rem non reprehenderit.</p>
  </div>
  </div>
  </div>
  </div>
  </section>
  
  
  <section class="blog-area pt-100 pb-70">
  <div class="container">
  <div class="section-title-two">
  <span>Blogs</span>
  <h2>Our latest blogs</h2>
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