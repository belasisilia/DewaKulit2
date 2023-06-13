<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'loginView');
    Route::post('/login', 'login');

    Route::get('/register', 'registerView');
    Route::post('/register', 'register');
});


Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/new-arrival', function () {
    return view('new-arrival');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/sale', function () {
    return view('sale');
});


Route::group(['middleware' => 'isAuth'], function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/profile', 'index');
    });
    Route::controller(AuthController::class)->group(function () {
        Route::get('/logout', 'logout');
    });
});
