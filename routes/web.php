<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Entry Page Route
Route::get('/', function () {
    return view('entry');
})->name('entry');

// Authentication Routes
Route::get('/register', function() {
    return view('auth.register');
})->middleware('guest');

Route::post('/register', [UserAuthController::class, 'register']);

Route::get('/login', function() {
    return view('auth.login');
})->name('login')->middleware('guest');

Route::post('/login', [UserAuthController::class, 'login']);

Route::post('/logout', [UserAuthController::class, 'logout'])->middleware('auth');

// User and Animal Routes
Route::resource('/user', UserController::class)->middleware('auth');
Route::resource('animals', AnimalController::class);
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/queryBuilderExample',function(){
    return view('query_builder_examples');
})->name('queryBuilderExample');

Route::get('/query-builder-advanced-examples', function () {
    return view('query_builder_advanced_examples');
});


// Additional Routes
Route::get('/testlogin', function() {
    return view('auth.login2');
});


// about page
Route::get('/about', function () {
    return view('about');
});
