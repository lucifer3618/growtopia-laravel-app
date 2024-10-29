<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/news', [NewsController::class, 'index'])->name('news');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'authenticate']);

Route::post('/register', [AuthController::class, 'store'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profile/user/{user}', [UserController::class, 'profile'])->name('profile')->middleware('auth');

Route::post('/profile/user/{user}/update', [UserController::class, 'update'])->name('profile.update')->middleware('auth');

Route::post('/profile/user/{user}/destroy', [UserController::class, 'destroy'])->name('profile.destroy')->middleware('auth');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');

Route::get('/cart', [CartController::class, 'index'])->name('cart')->middleware('auth');
