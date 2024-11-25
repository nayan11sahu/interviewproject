<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

// Home route that displays all products
Route::get('/', [ProductController::class, 'index'])->name('home');

// View a single product's details
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

// View the shopping cart
Route::get('/cart', [ProductController::class, 'viewCart'])->name('cart.view');

// Add product to cart
Route::post('/cart/{productId}', [ProductController::class, 'addToCart'])->name('cart.add');

// User registration (view)
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register.form');

// User registration (post)
Route::post('/register', [AuthController::class, 'register'])->name('register');

// User login (view)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');

// User login (post)
Route::post('/login', [AuthController::class, 'login'])->name('login');

// User logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
