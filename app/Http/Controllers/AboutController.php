<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $data['headingTitle'] = 'About';
       return view('about.about',$data);
    }
}
