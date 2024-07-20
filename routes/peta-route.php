<?php

use App\Http\Controllers\PetaController;
use Illuminate\Support\Facades\Route;


Route::controller(PetaController::class)->group(function () {
  Route::get('/peta', 'index')->middleware('auth');
  Route::post('/peta', 'store')->middleware('auth');
  Route::get('/peta/{schemeId}', 'show')->middleware('auth');
});
