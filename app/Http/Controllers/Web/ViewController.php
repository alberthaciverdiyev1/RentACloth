<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Category;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home()
    {
        return view('home/index');
    }

    public function contactUs()
    {
        return view('contact/index');
    }

    public function aboutUs()
    {
        $about = AboutUs::first();
        return view('about/index', compact('about'));
    }

    public function login()
    {
        return view('auth/login');
    }

    public function shop()
    {
        $request = Request::create('/api/categories', 'GET');

        $response = app()->handle($request);
        $categories = json_decode($response->getContent(), true);
        return view('shop/shopList', ['categories' => $categories['data']]);
    }
}
