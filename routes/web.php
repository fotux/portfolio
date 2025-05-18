<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReviewsController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/apie', function () {
    return view('/about');
})->name('about');


Route::get('/', [ReviewsController::class, 'index'])->name('home');
Route::get('/review', [ReviewsController::class, 'create'])->name('review.create');
Route::post('/review/create', [ReviewsController::class, 'store'])->name('review.store');
Route::get('/review/edit/{review}', [ReviewsController::class, 'edit'])->name('review.edit');
Route::patch('/review/edit/{review}', [ReviewsController::class, 'update'])->name('review.update');
Route::delete('/review/edit/{review}', [ReviewsController::class, 'delete'])->name('review.delete');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog/{blog}', [BlogController::class, 'view'])->name('blog.view');
Route::delete('/blog/{blog}', [BlogController::class, 'delete'])->name('blog.delete');

Route::post('/contact', [ContactController::class, 'send'])->name('send.email');
