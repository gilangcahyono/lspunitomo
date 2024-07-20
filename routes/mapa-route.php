<?php

use App\Http\Controllers\MapaController;
use App\Models\Scheme;
use Illuminate\Support\Facades\Route;

Route::controller(MapaController::class)->group(function () {
  Route::get('/mapa-01', 'getMapa01')->name('mapa-01.index');
  Route::post('/mapa-01', 'postMapa01')->name('mapa-01.store');
  Route::get('/mapa-01/{schemeId}', 'showMapa01')->name('mapa-01.show');
  Route::get('/mapa-01/export/{schemeId}', 'exportMapa01')->name('mapa-01.export');

  Route::get('/mapa-02', 'getMapa02')->name('mapa-02.index');
  Route::post('/mapa', 'postMapa02')->name('mapa-02.store');
  Route::get('/mapa-02/{schemeId}', 'showMapa02')->name('mapa-02.show');
  Route::get('/mapa-02/export/{schemeId}', 'exportMapa02')->name('mapa-02.export');
});
