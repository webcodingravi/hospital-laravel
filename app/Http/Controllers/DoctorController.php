<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index() {
        $data['headingTitle'] = 'Doctor';
        return view('doctor.doctor',$data);
     }


     public function DoctorDetail() {
        $data['headingTitle'] = 'Doctor Detail';
        return view('doctor.doctor-detail',$data);
     }
}
