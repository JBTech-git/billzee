<?php

use Illuminate\Http\Request;
use Illuminate\Supports\Facades\Route;

Route::post('/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);