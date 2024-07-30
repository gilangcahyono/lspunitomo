<?php

use App\Http\Controllers\PetaController;
use Illuminate\Support\Facades\Route;


Route::controller(PetaController::class)->group(function () {
  Route::get('/peta', 'index')->name('peta.index');
  Route::post('/peta', 'store')->name('peta.store');
  Route::get('/peta/{schemeId}', 'show')->name('peta.show');
});
