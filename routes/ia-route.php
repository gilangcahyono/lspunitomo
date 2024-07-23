<?php

use App\Http\Controllers\Ia01Controller;
use App\Http\Controllers\Ia02Controller;
use App\Http\Controllers\Ia03Controller;
use App\Http\Controllers\Ia04aController;
use App\Http\Controllers\Ia04bController;
use App\Http\Controllers\Ia05aController;
use App\Http\Controllers\Ia05bController;
use App\Http\Controllers\Ia05cController;
use App\Http\Controllers\Ia06aController;
use App\Http\Controllers\Ia06bController;
use App\Http\Controllers\Ia06cController;
use App\Http\Controllers\Ia07Controller;
use App\Http\Controllers\Ia08Controller;
use App\Http\Controllers\Ia09Controller;
use App\Http\Controllers\Ia10Controller;
use App\Http\Controllers\Ia11Controller;
use Illuminate\Support\Facades\Route;

Route::controller(Ia01Controller::class)->group(function () {
  Route::get('/ia-01', 'index')->name('ia-01.index');
  // Route::post('/ia-01', 'store')->name('ia-01.store');
  Route::get('/ia-01/{schemeId}', 'accessions')->name('ia-01.accessions');
  Route::get('/ia-01/{schemeId}/accessions/{accessionId}', 'show')->name('ia-01.show');
  Route::get('/ia-01/export/{accessionId}', 'export')->name('ia-01.export');
});

Route::controller(Ia02Controller::class)->group(function () {
  Route::get('/ia-02', 'index')->name('ia-02.index');
  // Route::post('/ia-02', 'store')->name('ia-02.store');
  Route::get('/ia-02/{schemeId}', 'accessions')->name('ia-02.accessions');
  Route::get('/ia-02/{schemeId}/accessions/{accessionId}', 'show')->name('ia-02.show');
  Route::get('/ia-02/export/{accessionId}', 'export')->name('ia-02.export');
});

Route::controller(Ia03Controller::class)->group(function () {
  Route::get('/ia-03', 'index')->name('ia-03.index');
  // Route::post('/ia-03', 'store')->name('ia-03.store');
  Route::get('/ia-03/{schemeId}', 'accessions')->name('ia-03.accessions');
  Route::get('/ia-03/{schemeId}/accessions/{accessionId}', 'show')->name('ia-03.show');
  Route::get('/ia-03/export/{accessionId}', 'export')->name('ia-03.export');
});

Route::controller(Ia04aController::class)->group(function () {
  Route::get('/ia-04a', 'index')->name('ia-04a.index');
  // Route::post('/ia-04a', 'store')->name('ia-04a.store');
  Route::get('/ia-04a/{schemeId}', 'accessions')->name('ia-04a.accessions');
  Route::get('/ia-04a/{schemeId}/accessions/{accessionId}', 'show')->name('ia-04a.show');
  Route::get('/ia-04a/export/{accessionId}', 'export')->name('ia-04a.export');
});

Route::controller(Ia04bController::class)->group(function () {
  Route::get('/ia-04b', 'index')->name('ia-04b.index');
  // Route::post('/ia-04b', 'store')->name('ia-04b.store');
  Route::get('/ia-04b/{schemeId}', 'accessions')->name('ia-04b.accessions');
  Route::get('/ia-04b/{schemeId}/accessions/{accessionId}', 'show')->name('ia-04b.show');
  Route::get('/ia-04b/export/{accessionId}', 'export')->name('ia-04b.export');
});

Route::controller(Ia05aController::class)->group(function () {
  Route::get('/ia-05a', 'index')->name('ia-05a.index');
  // Route::post('/ia-05a', 'store')->name('ia-05a.store');
  Route::get('/ia-05a/{schemeId}', 'accessions')->name('ia-05a.accessions');
  Route::get('/ia-05a/{schemeId}/accessions/{accessionId}', 'show')->name('ia-05a.show');
  Route::get('/ia-05a/export/{accessionId}', 'export')->name('ia-05a.export');
});

Route::controller(Ia05bController::class)->group(function () {
  Route::get('/ia-05b', 'index')->name('ia-05b.index');
  // Route::post('/ia-05b', 'store')->name('ia-05b.store');
  Route::get('/ia-05b/{schemeId}', 'show')->name('ia-05b.show');
  Route::get('/ia-05b/{schemeId}/export', 'export')->name('ia-05b.export');
});

Route::controller(Ia05cController::class)->group(function () {
  Route::get('/ia-05c', 'index')->name('ia-05c.index');
  // Route::post('/ia-05c', 'store')->name('ia-05c.store');
  Route::get('/ia-05c/{schemeId}', 'accessions')->name('ia-05c.accessions');
  Route::get('/ia-05c/{schemeId}/accessions/{accessionId}', 'show')->name('ia-05c.show');
  Route::get('/ia-05c/export/{accessionId}', 'export')->name('ia-05c.export');
});

Route::controller(Ia06aController::class)->group(function () {
  Route::get('/ia-06a', 'index')->name('ia-06a.index');
  // Route::post('/ia-06a', 'store')->name('ia-06a.store');
  Route::get('/ia-06a/{schemeId}', 'accessions')->name('ia-06a.accessions');
  Route::get('/ia-06a/{schemeId}/accessions/{accessionId}', 'show')->name('ia-06a.show');
  Route::get('/ia-06a/export/{accessionId}', 'export')->name('ia-06a.export');
});

Route::controller(Ia06bController::class)->group(function () {
  Route::get('/ia-06b', 'index')->name('ia-06b.index');
  // Route::post('/ia-06b', 'store')->name('ia-06b.store');
  Route::get('/ia-06b/{schemeId}', 'accessions')->name('ia-06b.accessions');
  Route::get('/ia-06b/{schemeId}/accessions/{accessionId}', 'show')->name('ia-06b.show');
  Route::get('/ia-06b/export/{accessionId}', 'export')->name('ia-06b.export');
});

Route::controller(Ia06cController::class)->group(function () {
  Route::get('/ia-06c', 'index')->name('ia-06c.index');
  // Route::post('/ia-06c', 'store')->name('ia-06c.store');
  Route::get('/ia-06c/{schemeId}', 'accessions')->name('ia-06c.accessions');
  Route::get('/ia-06c/{schemeId}/accessions/{accessionId}', 'show')->name('ia-06c.show');
  Route::get('/ia-06c/export/{accessionId}', 'export')->name('ia-06c.export');
});

Route::controller(Ia07Controller::class)->group(function () {
  Route::get('/ia-07', 'index')->name('ia-07.index');
  // Route::post('/ia-07', 'store')->name('ia-07.store');
  Route::get('/ia-07/{schemeId}', 'accessions')->name('ia-07.accessions');
  Route::get('/ia-07/{schemeId}/accessions/{accessionId}', 'show')->name('ia-07.show');
  Route::get('/ia-07/export/{accessionId}', 'export')->name('ia-07.export');
});

Route::controller(Ia08Controller::class)->group(function () {
  Route::get('/ia-08', 'index')->name('ia-08.index');
  // Route::post('/ia-08', 'store')->name('ia-08.store');
  Route::get('/ia-08/{schemeId}', 'accessions')->name('ia-08.accessions');
  Route::get('/ia-08/{schemeId}/accessions/{accessionId}', 'show')->name('ia-08.show');
  Route::get('/ia-08/export/{accessionId}', 'export')->name('ia-08.export');
});

Route::controller(Ia09Controller::class)->group(function () {
  Route::get('/ia-09', 'index')->name('ia-09.index');
  // Route::post('/ia-09', 'store')->name('ia-09.store');
  Route::get('/ia-09/{schemeId}', 'accessions')->name('ia-09.accessions');
  Route::get('/ia-09/{schemeId}/accessions/{accessionId}', 'show')->name('ia-09.show');
  Route::get('/ia-09/export/{accessionId}', 'export')->name('ia-09.export');
});

Route::controller(Ia10Controller::class)->group(function () {
  Route::get('/ia-10', 'index')->name('ia-10.index');
  // Route::post('/ia-10', 'store')->name('ia-10.store');
  Route::get('/ia-10/{schemeId}', 'accessions')->name('ia-10.accessions');
  Route::get('/ia-10/{schemeId}/accessions/{accessionId}', 'show')->name('ia-10.show');
  Route::get('/ia-10/export/{accessionId}', 'export')->name('ia-10.export');
});

Route::controller(Ia11Controller::class)->group(function () {
  Route::get('/ia-11', 'index')->name('ia-11.index');
  // Route::post('/ia-11', 'store')->name('ia-11.store');
  Route::get('/ia-11/{schemeId}', 'accessions')->name('ia-11.accessions');
  Route::get('/ia-11/{schemeId}/accessions/{accessionId}', 'show')->name('ia-11.show');
  Route::get('/ia-11/export/{accessionId}', 'export')->name('ia-11.export');
});
