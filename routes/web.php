<?php

use App\Http\Controllers\ReviewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('index');
});
Route::get('/kainoraštis', function(){
    return view('pricing');
});

Route::get('/kontaktai', function(){
    return view('kontaktai');
});
Route::get('/apie', function(){
    return view('/about');
});

Route::get('/', [ReviewsController::class, 'index']);

Route::get('/review', [ReviewsController::class, 'create']);
Route::post('/review/create', [ReviewsController::class, 'store']);

Route::get('/review/edit/{review}', [ReviewsController::class, 'edit']);
Route::patch('/review/edit/{review}', [ReviewsController::class, 'update']);

Route::delete('/review/edit/{review}' , [ReviewsController::class, 'delete']);


Route::get('/login', [SessionController::class, 'index']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
