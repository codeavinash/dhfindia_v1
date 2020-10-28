<?php

namespace App\Http\Controllers;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;



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
    
    Mail::to('dinbandhuhelpfoundation@gmail.com')->send(new ContactUsMail($request));
    return return redirect()->back()->with('success','we will contact you as soon as possible');
        
    }
}
