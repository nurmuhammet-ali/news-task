<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class, 'index'])->name('home');
Route::get('news/{news}', [NewsController::class, 'show'])->name('news.show');

Route::middleware('guest')->group(function () {
    Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('register', [AuthController::class, 'register']);

    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('profile', [ProfileController::class, 'show'])->name('profile');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('news', [NewsController::class, 'create'])->name('news.create');
    Route::post('news', [NewsController::class, 'store'])->name('news.store');
});
