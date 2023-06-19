<?php

use App\Http\Controllers\AboutController;
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

Route::redirect('/hello', '/about');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about' , [AboutController::class , 'index'])-> name('about') ;

Route::get('/contact' , function () {
    return view('contact');
});