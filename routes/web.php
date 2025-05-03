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


Route::get('/', [ReviewsController::class, 'index']);

Route::get('/komentaras', [ReviewsController::class, 'create']);
Route::post('/komentaras/create', [ReviewsController::class, 'store']);