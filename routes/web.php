<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\LaporanController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/galeri', [HomeController::class, 'portfolio']);
Route::get('/karir', [HomeController::class, 'services']);
Route::get('/kelola', [HomeController::class, 'team']);
Route::get('/publikasi', [HomeController::class, 'testimonials']);
Route::get('/client', [ClientController::class, 'index']);

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

// Dashboard
Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('sliders', SliderController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('portfolios', PortfolioController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('teams', TeamController::class);

    Route::get('contact', [ContactController::class, 'index']);
    Route::put('contact/{id}', [ContactController::class, 'update']);

    Route::get('about', [AboutController::class, 'index']);
    Route::put('about/{id}', [AboutController::class, 'update']);

    // routes/web.php
    Route::get('/career', [CareerController::class, 'index'])->name('career.index');
    Route::post('/career', [CareerController::class, 'store'])->name('career.store');
    Route::get('/news/{id}', [NewsController::class, 'show']);
    // routes/web.php
    Route::post('/send-message', [ContactController::class, 'sendMessage'])->name('send.message');
    Route::resource('admin/testimonial', TestimonialController::class);
  });
    Route::get('berita', function () {
        return view('berita');
    })->name('berita');

    Route::get('/laporan', function () {
    return view('laporan');
    })->name(name: 'laporan');
    Route::get('/laporan', [LaporanController::class, 'showLaporan']);


