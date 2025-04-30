<?php

use App\Http\Controllers\ReviewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/kainoraštis', function(){
    return view('pricing');
});

Route::get('/kontaktai', function(){
    return view('kontaktai');
});

Route::get('/kontaktai', [ReviewsController::class, 'index']);