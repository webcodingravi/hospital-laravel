@extends('layouts.app')
@section('content')
<div class="page-title-area page-title-three">
  <div class="d-table">
  <div class="d-table-cell">
  <div class="page-title-item-two">
  <h2>Dr. Sarah Taylor</h2>
  <h3>Neurosurgeon.</h3>
  <p>MBBS in Neurology, PHD in Neurosurgeon.</p>
  </div>
  </div>
  </div>
  </div>
  
  
  <div class="doctor-details-area pb-70">
  <div class="container">
  <div class="row justify-content-center">
  <div class="col-lg-5">
  <div class="doctor-details-item doctor-details-left">\\
  <img src="assets/img/doctor/3.jpg" alt="Doctor">
  <div class="doctor-details-contact">
  <h3>Contact info</h3>
  <ul>
  <li>
  <i class="icofont-ui-call"></i>
  Call : <a href="tel:+07554332322">+07 554 332 322</a>
  </li>
  <li>
  <i class="icofont-ui-message"></i>
  <a href="/cdn-cgi/l/email-protection#a9c1ccc5c5c6e9c4cccddaccdf87cac6c4"><span class="__cf_email__" data-cfemail="09616c65656649646c6d7a6c7f276a6664">[email&#160;protected]</span></a>
  </li>
  <li>
  <i class="icofont-location-pin"></i>
  4th Floor, 408 No Chamber
  </li>
  </ul>
  </div>
  <div class="doctor-details-work">
  <h3>Working hours</h3>
  <div class="appointment-item-two-right">
  <div class="appointment-item-content">
  <div class="content-one">
  <ul>
  <li>Monday</li>
  <li>Tuesday</li>
  <li>Wednesday</li>
  <li>Sunday</li>
  </ul>
  </div>
  <div class="content-two">
  <ul>
  <li>9:00 am - 8:00 pm</li>
  <li>9:00 am - 8:00 pm</li>
  <li>9:00 am - 8:00 pm</li>
  <li>9:00 am - 8:00 pm</li>
  </ul>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="col-lg-7">
  <div class="doctor-details-item">
  <div class="doctor-details-right">
  <div class="doctor-details-biography">
  <h3>Biography</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p><br>
  <p>Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
  </div>
  <div class="doctor-details-biography">
  <h3>Education</h3>
  <ul>
  <li>PHD degree in Neorology at University of Mediserv (2006)</li>
  <li>Master of Neoro Surgery at University of Mediserv (2002)</li>
  <li>MBBS degree in Neurosciences at University of Mediserv (2002)</li>
  <li>Higher Secondary Certificate at Mediserv collage (1991)</li>
  </ul>
  </div>
  <div class="doctor-details-biography">
  <h3>Biography</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra</p>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  
  
  <div class="appointment-area-three">
  <div class="container-fluid p-0">
  <div class="row m-0">
  <div class="col-lg-7">
  <div class="appointment-item appointment-item-two">
  <div class="appointment-shape">
  <img src="{{asset('assets/img/appointment/3.png')}}" alt="Shape">
  </div>
  <h2>Book your appointment</h2>
  <span>We will confirm your appointment within 2 hours</span>
  <div class="appointment-form">
  <form>
  <div class="row justify-content-center">
  <div class="col-lg-6">
  <div class="form-group">
  <i class="icofont-business-man-alt-1"></i>
  <label>Name</label>
  <input type="text" class="form-control" placeholder="Enter Your Name">
  </div>
  </div>
  <div class="col-lg-6">
  <div class="form-group">
  <i class="icofont-ui-message"></i>
  <label>Email</label>
  <input type="email" class="form-control" placeholder="Enter Your Email">
  </div>
  </div>
  <div class="col-lg-6">
  <div class="form-group">
  <i class="icofont-ui-call"></i>
  <label>Phone</label>
  <input type="text" class="form-control" placeholder="Enter Your Number">
  </div>
  </div>
  <div class="col-lg-6">
  <div class="form-group">
  <i class="icofont-hospital"></i>
  <label>Services</label>
  <select class="form-control" id="exampleFormControlSelect1">
  <option>Dental Care</option>
  <option>Pathology</option>
  <option>Diagnosis</option>
  <option>Neurology</option>
  <option>Cardiology</option>
  </select>
  </div>
  </div>
  <div class="col-lg-6">
  <div class="form-group">
  <i class="icofont-doctor"></i>
  <label>Doctor</label>
  <input type="text" class="form-control" placeholder="Choose Your Doctor">
  </div>
  </div>
  <div class="col-lg-6">
  <div class="form-group">
  <i class="icofont-business-man"></i>
  <label>Age</label>
  <input type="text" class="form-control" placeholder="Your Age">
  </div>
  </div>
  </div>
  <div class="text-center">
  <button type="submit" class="btn appointment-btn">Submit</button>
  </div>
  </form>
  </div>
  </div>
  </div>
  <div class="col-lg-5 pr-0">
  <div class="speciality-item speciality-right speciality-right-two speciality-right-three">
  <img src="{{asset('assets/img/doctor/4.jpg')}}" alt="Doctor">
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
  </div>
  
  
@endsection