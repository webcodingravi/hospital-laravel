<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        $data['headingTitle'] = 'Service';
        return view('service.service',$data);
     }

     public function ServiceDetails() {
        $data['headingTitle'] = 'Service Detail';
        return view('service.service-details',$data);
     }
}
