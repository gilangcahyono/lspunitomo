<?php

use App\Http\Controllers\VaController;
use Illuminate\Support\Facades\Route;

Route::controller(VaController::class)->group(function () {
  Route::get('/va', 'index')->name('va.index');
  // Route::post('/va', 'store')->name('va.store');
  Route::get('/va/{schemeId}', 'show')->name('va.show');
  Route::get('/va/{schemeId}/export', 'export')->name('va.export');
});
