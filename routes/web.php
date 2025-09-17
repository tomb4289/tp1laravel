<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);
Route::get('/home', [ProductController::class, 'index']);
Route::get('/about', [ProductController::class, 'about']);
Route::get('/features', [ProductController::class, 'features']);
Route::get('/contact', [ProductController::class, 'contact']);
Route::post('/contact', [ProductController::class, 'contactForm']);
