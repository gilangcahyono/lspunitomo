<?php

use App\Http\Controllers\Ak01Controller;
use App\Http\Controllers\Ak02Controller;
use App\Http\Controllers\Ak03Controller;
use App\Http\Controllers\Ak04Controller;
use App\Http\Controllers\Ak05Controller;
use App\Http\Controllers\Ak06Controller;
use App\Http\Controllers\Ak07Controller;
use Illuminate\Support\Facades\Route;

Route::controller(Ak01Controller::class)->group(function () {
  Route::get('/ak-01', 'index')->name('ak-01.index');
  // Route::post('/ak-01', 'store')->name('ak-01.store');
  Route::get('/ak-01/{schemeId}', 'accessions')->name('ak-01.accessions');
  Route::get('/ak-01/{schemeId}/accessions/{accessionId}', 'show')->name('ak-01.show');
  Route::get('/ak-01/export/{accessionId}', 'export')->name('ak-01.export');
});

Route::controller(Ak02Controller::class)->group(function () {
  Route::get('/ak-02', 'index')->name('ak-02.index');
  // Route::post('/ak-02', 'store')->name('ak-02.store');
  Route::get('/ak-02/{schemeId}', 'accessions')->name('ak-02.accessions');
  Route::get('/ak-02/{schemeId}/accessions/{accessionId}', 'show')->name('ak-02.show');
  Route::get('/ak-02/export/{accessionId}', 'export')->name('ak-02.export');
});

Route::controller(Ak03Controller::class)->group(function () {
  Route::get('/ak-03', 'index')->name('ak-03.index');
  // Route::post('/ak-03', 'store')->name('ak-03.store');
  Route::get('/ak-03/{schemeId}', 'accessions')->name('ak-03.accessions');
  Route::get('/ak-03/{schemeId}/accessions/{accessionId}', 'show')->name('ak-03.show');
  Route::get('/ak-03/export/{accessionId}', 'export')->name('ak-03.export');
});

Route::controller(Ak04Controller::class)->group(function () {
  Route::get('/ak-04', 'index')->name('ak-04.index');
  // Route::post('/ak-04', 'store')->name('ak-04.store');
  Route::get('/ak-04/{schemeId}', 'accessions')->name('ak-04.accessions');
  Route::get('/ak-04/{schemeId}/accessions/{accessionId}', 'show')->name('ak-04.show');
  Route::get('/ak-04/export/{accessionId}', 'export')->name('ak-04.export');
});

Route::controller(Ak05Controller::class)->group(function () {
  Route::get('/ak-05', 'index')->name('ak-05.index');
  // Route::post('/ak-05', 'store')->name('ak-05.store');
  Route::get('/ak-05/{schemeId}', 'assessors')->name('ak-05.assessors');
  Route::get('/ak-05/{schemeId}/assessors/{assessorId}', 'show')->name('ak-05.show');
  Route::get('/ak-05/export/{assessorId}', 'export')->name('ak-05.export');
});

Route::controller(Ak06Controller::class)->group(function () {
  Route::get('/ak-06', 'index')->name('ak-06.index');
  // Route::post('/ak-06', 'store')->name('ak-06.store');
  Route::get('/ak-06/{schemeId}', 'assessors')->name('ak-06.assessors');
  Route::get('/ak-06/{schemeId}/assessors/{assessorId}', 'show')->name('ak-06.show');
  Route::get('/ak-06/export/{assessorId}', 'export')->name('ak-06.export');
});

Route::controller(Ak07Controller::class)->group(function () {
  Route::get('/ak-07', 'index')->name('ak-07.index');
  // Route::post('/ak-07', 'store')->name('ak-07.store');
  Route::get('/ak-07/{schemeId}', 'accessions')->name('ak-07.accessions');
  Route::get('/ak-07/{schemeId}/accessions/{accessionId}', 'show')->name('ak-07.show');
  Route::get('/ak-07/export/{accessionId}', 'export')->name('ak-07.export');
});
