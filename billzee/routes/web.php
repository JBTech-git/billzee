<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'home'])->name('home');

// API routes
Route::post('/api/login', [\App\Http\Controllers\Api\AuthController::class, 'login'])->middleware(['api'])->name('api.login');

// Authentication routes
Route::get('/signIn', function () {
    return view('signIn');
})->name('signIn');
Route::get('/signUp', function() {
    return view('signUp');
})->name('signUp');

Route::post('signIn', [UserController::class, 'userLogin']);
Route::post('signUp', [UserController::class, 'userRegister']);

// Protected routes
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/settings', [UserController::class, 'settings'])->name('settings');
    Route::post('logout', [UserController::class, 'logout'])->name('logout');
});