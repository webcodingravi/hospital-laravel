<!DOCTYPE html>
<html lang="zxx">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/icofont.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/slick-theme.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/theme-dark.css')}}">
<title>Medsev - {{!empty($headingTitle) ? $headingTitle : ''}}</title>
<link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
</head>

<body>

<div class="loader">
<div class="d-table">
<div class="d-table-cell">
<div class="spinner">
<div class="double-bounce1"></div>
<div class="double-bounce2"></div>
</div>
</div>
</div>
</div>

{{-- header section --}}
@include('layouts.header')

{{-- end header section --}}

{{-- content section --}}
@yield('content')
{{-- end content section --}}

{{-- Footer section --}}
    @include('layouts.footer')
{{-- End Footer section --}}

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>

<script src="{{asset('assets/js/slick.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('assets/js/wow.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>

<script src="{{asset('assets/js/form-validator.min.js')}}"></script>

<script src="{{asset('assets/js/contact-form-script.js')}}"></script>

<script src="{{asset('assets/js/odometer.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.appear.min.js')}}"></script>

<script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>