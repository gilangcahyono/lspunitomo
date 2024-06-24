<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::controller(LoginController::class)->group(function () {
  Route::get('/login', 'create')->name('login')->middleware('guest');
  Route::post('/login', 'store')->middleware('guest');
  Route::delete('/logout', 'destroy')->name('logout')->middleware('auth');
});
