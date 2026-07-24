<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class,'index'])->name('home');
Route::get('/articles/{id}', [ArticleController::class,'index'])->name('article');
Route::get('/about', [AboutController::class,'index'])->name('about');
