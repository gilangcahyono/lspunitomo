<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccessionController;
use App\Http\Controllers\AssessmentScheduleController;
use App\Http\Controllers\AssessorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PetaController;
use App\Models\Scheme;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Storage;

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

  require __DIR__ . '/mapa-route.php';
  require __DIR__ . '/ak-route.php';


  Route::get('/ia-01', function () {
    $scheme = Scheme::with(['accessions', 'assessors', 'jobGroups' => function ($query) {
      $query->with('units.elements.kuks');
    }])->first();

    return view('muk.ia.ia-01.index', ['scheme' => $scheme]);
  });

  Route::get('/ia-02', function () {
    $scheme = Scheme::with(['accessions', 'assessors', 'jobGroups' => function ($query) {
      $query->with('units.elements.kuks');
    }])->first();

    return view('muk.ia.ia-02.index', ['scheme' => $scheme]);
  });

  Route::get('/ia-03', function () {
    $scheme = Scheme::with(['accessions', 'assessors', 'jobGroups' => function ($query) {
      $query->with('units.elements.kuks');
    }])->first();

    return view('muk.ia.ia-03.index', ['scheme' => $scheme]);
  });

  Route::get('/ia-04a', function () {
    $scheme = Scheme::with(['accessions', 'assessors', 'jobGroups' => function ($query) {
      $query->with('units.elements.kuks');
    }])->first();

    return view('muk.ia.ia-04a.index', ['scheme' => $scheme]);
  });

  Route::get('/ia-04b', function () {
    $scheme = Scheme::with(['accessions', 'assessors', 'jobGroups' => function ($query) {
      $query->with('units.elements.kuks');
    }])->first();

    return view('muk.ia.ia-04b.index', ['scheme' => $scheme]);
  });

  Route::get('/ia-05a', function () {
    $scheme = Scheme::with(['accessions', 'assessors', 'jobGroups' => function ($query) {
      $query->with('units.elements.kuks');
    }])->first();

    return view('muk.ia.ia-05a.index', ['scheme' => $scheme]);
  });

  Route::get('/ia-05b', function () {
    $scheme = Scheme::with(['accessions', 'assessors', 'jobGroups' => function ($query) {
      $query->with('units.elements.kuks');
    }])->first();

    return view('muk.ia.ia-05b.index', ['scheme' => $scheme]);
  });

  Route::get('/ia-05c', function () {
    $scheme = Scheme::with(['accessions', 'assessors', 'jobGroups' => function ($query) {
      $query->with('units.elements.kuks');
    }])->first();

    return view('muk.ia.ia-05c.index', ['scheme' => $scheme]);
  });

  Route::get('/ia-06a', function () {
    $scheme = Scheme::with(['accessions', 'assessors', 'jobGroups' => function ($query) {
      $query->with('units.elements.kuks');
    }])->first();

    return view('muk.ia.ia-06a.index', ['scheme' => $scheme]);
  });

  Route::get('/ia-06b', function () {
    $scheme = Scheme::with(['accessions', 'assessors', 'jobGroups' => function ($query) {
      $query->with('units.elements.kuks');
    }])->first();

    return view('muk.ia.ia-06b.index', ['scheme' => $scheme]);
  });

  Route::get('/ia-06c', function () {
    $scheme = Scheme::with(['accessions', 'assessors', 'jobGroups' => function ($query) {
      $query->with('units.elements.kuks');
    }])->first();

    return view('muk.ia.ia-06c.index', ['scheme' => $scheme]);
  });

  Route::get('/ia-07', function () {
    $scheme = Scheme::with(['accessions', 'assessors', 'jobGroups' => function ($query) {
      $query->with('units.elements.kuks');
    }])->first();

    return view('muk.ia.ia-07.index', ['scheme' => $scheme]);
  });

  Route::get('/ia-08', function () {
    $scheme = Scheme::with(['accessions', 'assessors', 'jobGroups' => function ($query) {
      $query->with('units.elements.kuks');
    }])->first();

    return view('muk.ia.ia-08.index', ['scheme' => $scheme]);
  });

  Route::get('/ia-09', function () {
    $scheme = Scheme::with(['accessions', 'assessors', 'jobGroups' => function ($query) {
      $query->with('units.elements.kuks');
    }])->first();

    return view('muk.ia.ia-09.index', ['scheme' => $scheme]);
  });

  Route::get('/ia-10', function () {
    $scheme = Scheme::with(['accessions', 'assessors', 'jobGroups' => function ($query) {
      $query->with('units.elements.kuks');
    }])->first();

    return view('muk.ia.ia-10.index', ['scheme' => $scheme]);
  });

  require __DIR__ . '/peta-route.php';
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