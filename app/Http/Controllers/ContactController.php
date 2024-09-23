<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function index() {
      $data['headingTitle'] = 'Contact Us';
    return view('contact.contact',$data);
   }
}
