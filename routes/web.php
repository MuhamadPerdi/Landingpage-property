<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\PropertyController;

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





Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('home');
Route::prefix('')->middleware(['auth'])->group(function () {
    // Dashboard Route
    Route::get('/dashboard', [ContentController::class, 'dashboard'])->name('admin.dashboard');
    
    // Resource Routes untuk Artikel
    Route::resource('artikel', ArtikelController::class);

    // Resource Routes untuk Property
    Route::resource('property', PropertyController::class);

    // Resource Routes untuk Slider
    Route::resource('slider', SliderController::class);

    // Route untuk About
    Route::get('/about', [ContentController::class, 'about'])->name('admin.about');
    Route::put('/about/{id}', [ContentController::class, 'about_update'])->name('admin.about.update');

    // Route untuk Fasilitas
    Route::get('/fasilitas', [ContentController::class, 'fasilitas'])->name('admin.fasilitas');
    Route::put('/fasilitas/{id}', [ContentController::class, 'fasilitas_update'])->name('admin.fasilitas.update');
});

Auth::routes();