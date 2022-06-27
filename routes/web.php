<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;


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
    return view('welcome');
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/plans', function () {
    //return view('plans');
    return Redirect::to('https://sistema.mge telecomtelecom.com.br/index.php?tipo=ecommerce&page=produtos');
});

Route::get('/coverage', function () {
    return view('coverage');
});

Route::get('/support', function () {
    return view('support');
});

Route::get('/help', function () {
    return view('help');
});

Route::get('/newsletter', function () {
    return view('newsletter');
});
