<?php

use App\Http\Controllers\Web\ViewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ViewController::class, 'home'])->name('home');
Route::get('/contact-us', [ViewController::class, 'contactUs'])->name('contact_us');
Route::get('/about-us', [ViewController::class, 'aboutUs'])->name('about_us');
Route::get('/login', [ViewController::class, 'login'])->name('login');
Route::get('/register', [ViewController::class, 'register'])->name('register');
Route::get('/shop', [ViewController::class, 'shop'])->name('shop');
//Route::get('/example/{id}', [ExampleController::class, 'show']);

//Route::get('/user/{id}', function ($id) {
//    return "User ID: " . $id;
//})->name('user.profile');
