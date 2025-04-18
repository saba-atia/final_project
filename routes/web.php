<?php

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

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});
Route::get('/faq', function () {
  return view('faq');
});

Route::get('/contact', function () {

    return view('contact');

});

Route::get('/login', function () {
    return view('login');
    
});

Route::get('/services', function () {
    return view('service');
})->name('services');