<?php

use App\Http\Controllers\SchemeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('schemes', [SchemeController::class, 'search'])->name('schemes.search');

Route::get('users', [UserController::class, 'index']);
