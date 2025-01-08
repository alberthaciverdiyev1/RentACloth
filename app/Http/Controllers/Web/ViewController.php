<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;

class ViewController extends Controller
{
    public function home(){
        return view('home/index');
    }
    public function contactUs(){
        return view('contact/index');
    }
    public function aboutUs(){
        $about = AboutUs::first();
        return view('about/index', compact('about'));
    }
    public function login(){
        return view('auth/login');
    }
}
