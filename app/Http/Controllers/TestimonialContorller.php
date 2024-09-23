<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialContorller extends Controller
{
   public function index() {
    $data['headingTitle'] = 'Testimonials';
    return view('testimonials.testimonials',$data);
   }
}
