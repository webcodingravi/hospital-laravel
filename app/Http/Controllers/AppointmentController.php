<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
   public function index() {
    $data['headingTitle'] = 'Appointment';
    return view('appointment.appointment',$data);
   }
}
