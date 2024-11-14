<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
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

// Route::post('/login', [UserAuthController::class, 'login'])->middleware('throttle:3,1'); Default way
Route::post('/login', [UserAuthController::class, 'login'])->middleware('throttle:custom-login'); // custom throttle

Route::post('/logout', [UserAuthController::class, 'logout'])->middleware('auth');

// User and Animal Routes Resource controllers
Route::resource('/user', UserController::class)->middleware('auth');
Route::resource('animals', AnimalController::class);

// !
// GET /user:                 index() method to show all user
// GET /user/create:          create() method to show a form for creating a new student
// POST /user:                store() method to save a new student
// GET /user/{student}:       show() method to display a single student
// GET /user/{student}/edit:  edit() method to show a form for editing a student
// PUT/PATCH /user/{student}: update() method to update a student
// DELETE /user/{student}:    destroy() method to delete a student

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
})->name('persoanl.about');
