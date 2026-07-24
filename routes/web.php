<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function() {
//     echo "Haii, Selamat Datang di Website dengan Laravel";
// });
// Route::get('/article/{id}', function($id) {
//    return 'Ini adalah halaman Artikel dengan ID ' . $id;
// });
// Route::get('/about', function() {
//     return 'NIS: 25975, Nama: Bima, Kelas: XI RPA';
// });


// Route::get('/', [PageController::class, 'index']);
// Route::get('/article/{id}', [PageController::class, 'article']);
// Route::get('/about', [PageController::class, 'about']);


// Route::get('/', [IndexController::class, 'index']);
// Route::get('/article/{id}', [ArticleController::class, 'index']);
// Route::get('/about', [AboutController::class, 'index']);


Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [AboutController::class, 'index']);

Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{id}', [NewsController::class, 'news']);

Route::prefix('/category')->group(function() {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/marbel', [ProductController::class, 'marbel']);
    Route::get('/riri', [ProductController::class, 'riri']);
    Route::get('/kolak', [ProductController::class, 'kolak']);
    Route::get('/{id}', [ProductController::class, 'product']);
});
Route::prefix('/program')->group(function() {
    Route::get('/', [ProgramController::class, 'index']);
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/industri', [ProgramController::class, 'industri']);
    Route::get('/{id}', [ProgramController::class, 'program']);
});
