<?php

use App\Http\Controllers\ElementController;
use App\Http\Controllers\JobGroupController;
use App\Http\Controllers\KukController;
use App\Http\Controllers\SchemeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;

// Route::prefix('/master')->group(function () {
Route::resources([
  '/schemes' => SchemeController::class,
  '/job-groups' => JobGroupController::class,
  '/units' => UnitController::class,
  '/elements' => ElementController::class,
  '/kuks' => KukController::class,
]);
// });
