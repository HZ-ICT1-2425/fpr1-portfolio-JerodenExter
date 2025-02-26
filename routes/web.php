<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogController;

// Home & Static Pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/home', [PageController::class, 'home']);
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

// Blog Routes
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/blog/1', [BlogController::class, 'blog1'])->name('blog1');
Route::get('/blog/2', [BlogController::class, 'blog2'])->name('blog2');
Route::get('/blog/3', [BlogController::class, 'blog3'])->name('blog3');
Route::get('/blog/4', [BlogController::class, 'blog4'])->name('blog4');
Route::get('/blog/5', [BlogController::class, 'blog5'])->name('blog5');
