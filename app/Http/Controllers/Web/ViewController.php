<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

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
