<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccessionController;
use App\Http\Controllers\AssessmentScheduleController;
use App\Http\Controllers\AssessorController;
use App\Http\Controllers\DashboardController;

Route::middleware('auth')->group(function () {

  Route::get('/', fn () => to_route('dashboard'))->name('home');
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

  Route::resources([
    '/assessors' => AssessorController::class,
    '/accessions' => AccessionController::class,
    '/assessment-schedules' => AssessmentScheduleController::class,
  ]);

  Route::put('/recommend-accession', [AccessionController::class, 'recommend'])->name('accessions.recommend');

  require __DIR__ . '/master-route.php';
  require __DIR__ . '/assessment-registration-route.php';

  require __DIR__ . '/self-assessment-route.php';
});

require __DIR__ . '/login-route.php';
require __DIR__ . '/testing-route.php';




























/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/