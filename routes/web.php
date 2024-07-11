<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccessionController;
use App\Http\Controllers\AssessmentScheduleController;
use App\Http\Controllers\AssessorController;
use App\Http\Controllers\DashboardController;
use App\Models\Scheme;

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

  Route::get('/mapa-01', function () {
    $scheme = Scheme::with(['jobGroups' => function ($query) {
      $query->with('units');
    }])->first();

    return view('muk.mapa.mapa-01.index', ['scheme' => $scheme]);
  });

  Route::get('/mapa-02', function () {
    $scheme = Scheme::with(['assessors', 'jobGroups' => function ($query) {
      $query->with('units');
    }])->first();

    return view('muk.mapa.mapa-02.index', ['scheme' => $scheme]);
  });

  Route::get('/ak-01', function () {
    $scheme = Scheme::with(['accessions', 'assessors', 'jobGroups' => function ($query) {
      $query->with('units');
    }])->first();

    return view('muk.ak.ak-01.index', ['scheme' => $scheme]);
  });

  Route::get('/ak-04', function () {
    $scheme = Scheme::with(['accessions', 'assessors', 'jobGroups' => function ($query) {
      $query->with('units');
    }])->first();

    return view('muk.ak.ak-04.index', ['scheme' => $scheme]);
  });

  Route::get('/ak-07', function () {
    $scheme = Scheme::with(['accessions', 'assessors', 'jobGroups' => function ($query) {
      $query->with('units');
    }])->first();

    return view('muk.ak.ak-07.index', ['scheme' => $scheme]);
  });

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