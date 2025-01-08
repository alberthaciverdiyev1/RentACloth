<?php

namespace App\Http\Controllers;

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
        return view('about/index');
    }
}
