<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\TestimonialContorller;


Route::get('/', [HomeController::class, 'index'])->name('front.home');
Route::get('/about', [AboutController::class, 'index'])->name('front.about');
Route::get('/service', [ServiceController::class, 'index'])->name('front.service');
Route::get('/service-detail', [ServiceController::class, 'ServiceDetails'])->name('front.ServiceDetail');
Route::get('/doctor', [DoctorController::class, 'index'])->name('front.doctor');
Route::get('/doctor-detail', [DoctorController::class, 'DoctorDetail'])->name('front.DoctorDetail');
Route::get('/blog', [BlogController::class, 'index'])->name('front.blog');
Route::get('/blog-detail', [BlogController::class, 'BlogDetails'])->name('front.BlogDetail');
Route::get('/contactUs', [ContactController::class, 'index'])->name('front.contact');
Route::get('/appointment', [AppointmentController::class, 'index'])->name('front.appointment');
Route::get('/testimonial', [TestimonialContorller::class, 'index'])->name('front.testimonials');
Route::get('/department', [DepartmentController::class, 'index'])->name('front.department');


// Route Error
Route::fallback(function() {
  return view('404');
});