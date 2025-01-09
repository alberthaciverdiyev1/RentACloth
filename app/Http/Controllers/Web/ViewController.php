<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
        $categoryRequest = Request::create('/api/categories', 'GET');
        $categoryResponse = app()->handle($categoryRequest);
        $categories = json_decode($categoryResponse->getContent(), true);

        $colorRequest = Request::create('/api/colors', 'GET');
        $colorResponse = app()->handle($colorRequest);
        $colors = json_decode($colorResponse->getContent(), true);

        $brandRequest = Request::create('/api/brands', 'GET');
        $brandResponse = app()->handle($brandRequest);
        $brands = json_decode($brandResponse->getContent(), true);

        return view('shop/shopList', [
            'categories' => $categories['data'],
            'colors' => $colors['data'],
            'brands' => $brands['data']
        ]);
    }

//    public function shop()
//    {
//        $categoriesResponse = Http::get('/api/categories');
//        $categories = $categoriesResponse->json();
//
//        $colorsResponse = Http::get('/api/colors');
//        $colors = $colorsResponse->json();
//
//        return view('shop/shopList', [
//            'categories' => $categories['data'],
//            'colors' => $colors['data']
//        ]);
//    }

}
