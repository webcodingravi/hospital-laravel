@extends('layouts.app')
@section('content')
<section class="error-area">
  <div class="error-item">
  <div class="d-table">
  <div class="d-table-cell">
  <div class="error-text">
  <h1>404!</h1>
  <p>Sorry! The Page Not Found</p>
  <span>Oops! The page you are looking for does not exit. it might been moved or deleted.</span>
  <a href="{{route('front.home')}}">Return to Home</a>
  </div>
  </div>
  </div>
  </div>
  </section>
@endsection