<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index() {
        $data['headingTitle'] = 'Department';
        return view('department.department',$data);
     }
}
