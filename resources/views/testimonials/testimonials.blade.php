@extends('layouts.app')
@section('content')
<div class="page-title-area page-title-four">
  <div class="d-table">
  <div class="d-table-cell">
  <div class="page-title-item">
  <h2>Testimonials</h2>
  <ul>
  <li>
  <a href="{{route('front.home')}}">Home</a>
  </li>
  <li>
  <i class="icofont-simple-right"></i>
  </li>
  <li>Testimonials</li>
  </ul>
  </div>
  </div>
  </div>
  </div>
  
  
  <section class="expertise-area pt-100 pb-70">
  <div class="container">
  <div class="row align-items-center justify-content-center">
  <div class="col-lg-6 expertise-item">
  <div class="row justify-content-center">
  <div class="col-sm-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
  <a href="{{route('front.BlogDetail')}}">
  <div class="expertise-inner">
  <i class="icofont-doctor-alt"></i>
  <h3>Certified Doctors</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
  </a>
  </div>
  <div class="col-sm-6 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
  <a href="{{route('front.BlogDetail')}}">
  <div class="expertise-inner">
  <i class="icofont-stretcher"></i>
  <h3>Emergency</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
  </a>
  </div>
  <div class="col-sm-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
  <a href="{{route('front.BlogDetail')}}">
  <div class="expertise-inner">
  <i class="icofont-network"></i>
  <h3>Teachnology</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
  </a>
  </div>
  <div class="col-sm-6 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
  <a href="{{route('front.BlogDetail')}}">
  <div class="expertise-inner">
  <i class="icofont-ambulance-cross"></i>
  <h3>Ambulance</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
  </a>
  </div>
  </div>
  </div>
  <div class="col-lg-6 expertise-item">
  <div class="expertise-right">
  <img src="{{asset('assets/img/home-one/6.jpg')}}" alt="Expertise">
  </div>
  </div>
  </div>
  </div>
  </section>
  
  
  <section class="testimonial-area ptb-100">
  <div class="container">
  <div class="testimonial-wrap">
  <h2>What our patients say</h2>
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
  
  
  <section class="doctors-area ptb-100">
  <div class="container">
  <div class="section-title">
  <h2>Meet Our Doctors</h2>
  </div>
  <div class="row justify-content-center">
  <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
  <div class="doctor-item">
  <div class="doctor-top">
  <img src="{{asset('assets/img/home-one/doctor/1.jpg')}}" alt="Doctor">
  <a href="{{route('front.appointment')}}">Get Appointment</a>
  </div>
  <div class="doctor-bottom">
  <h3>
  <a href="{{route('front.DoctorDetail')}}">Dr. Babatunde</a>
  </h3>
  <span>Neurosurgeon</span>
  </div>
  </div>
  </div>
  <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".5s">
  <div class="doctor-item">
  <div class="doctor-top">
  <img src="{{asset('assets/img/home-one/doctor/2.jpg')}}" alt="Doctor">
  <a href="{{route('front.appointment')}}">Get Appointment</a>
  </div>
  <div class="doctor-bottom">
  <h3>
  <a href="{{route('front.DoctorDetail')}}">Dr. Addition Smith</a>
  </h3>
  <span>Neurosurgeon</span>
  </div>
  </div>
  </div>
  <div class="col-sm-6   col-lg-4 wow fadeInUp" data-wow-delay=".7s">
  <div class="doctor-item">
  <div class="doctor-top">
  <img src="{{asset('assets/img/home-one/doctor/3.jpg')}}" alt="Doctor">
  <a href="{{route('front.appointment')}}">Get Appointment</a>
  </div>
  <div class="doctor-bottom">
  <h3>
  <a href="{{route('front.DoctorDetail')}}">Dr. Sarah Taylor</a>
  </h3>
  <span>Dental Surgeon</span>
  </div>
  </div>
  </div>
  </div>
  <div class="doctor-btn">
  <a href="{{route('front.doctor')}}">See All</a>
  </div>
  </div>
  </section>
  
@endsection