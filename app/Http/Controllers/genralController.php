<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class genralController extends Controller
{
    public function aboutus(){
        return view('aboutus');
    }

    public function contactUs(){
        return view('contactUs');
    }

    public function submitContactUs(Request $request){

    return $request;
    }
}
