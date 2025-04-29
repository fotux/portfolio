<?php

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
