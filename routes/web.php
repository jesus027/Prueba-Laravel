<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\FrontController;

Route::get('/', function () {
    return view('home');
})->Middleware('auth');

Route::post('file/upload', [FileController::class, 'store'])
    ->name('file.upload');

Route::get('/users', [RegisterController::class, 'index'])
    ->name('users.index');

    Route::resource('orders', App\Http\Controllers\OrderController::class);

    Route::resource('ordersdetails', App\Http\Controllers\OrdersDetailController::class);

Route::get('/front', [FrontController::class, 'api'])
    ->name('front.index');

Route::get('/register', [RegisterController::class, 'create'])
    ->Middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/login', [SessionController::class, 'create'])
    ->Middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionController::class, 'destroy'])
    ->Middleware('auth')
    ->name('login.destroy');

