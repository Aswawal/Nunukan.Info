<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome',[
        "title" => "index",
    ]);
});


Route::get('/about', function () {
    return view('about',[
        "title" => "about",
    ]);
});

Route::get('/contact', function () {
    return view('contact',[
        "title" => "contact",
    ]);
});

Route::get('/get-a-quote', function () {
    return view('get-a-quote',[
        "title" => "get-a-quote",
    ]);
});

Route::get('/pricing', function () {
    return view('pricing',[
        "title" => "pricing",
    ]);
});

Route::get('/sample-inner-page', function () {
    return view('sample-inner-page',[
        "title" => "sample-inner-page",
    ]);
});

Route::get('/service-details', function () {
    return view('service-details',[
        "title" => "service-details",
    ]);
});

Route::get('/services', function () {
    return view('services',[
        "title" => "services",
    ]);
});