<?php

use App\Http\Controllers\ElementController;
use App\Http\Controllers\KukController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SchemeController;
use App\Http\Controllers\SelfAssessmentController;
use App\Http\Controllers\UnitController;
use App\Models\Scheme;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//   $users = DB::connection()->getDatabaseName();
//   echo $users;
//   Auth::attempt(['email' => $email, 'password' => $password]);
// });


Route::prefix('master')->group(function () {
  Route::resources([
    'schemes' => SchemeController::class,
    'units' => UnitController::class,
    'elements' => ElementController::class,
    'kuks' => KukController::class
  ]);
});

Route::resources([
  'registration' => RegistrationController::class,
  'self-assessment' => SelfAssessmentController::class
]);

// Route::get('skemas', function () {
//   return Scheme::latest()->paginate(5);
// });

// Route::controller(LoginController::class)->group(function () {
//     Route::get('/login', 'login')->name('login');
//     Route::post('/login', 'authenticate');
// });

// Route::controller(SkemaController::class)->group(function () {
//   Route::get('/skemas', 'index')->name('skema');
//   Route::post('/skemas', 'store');
// });

// Route::get('/skema', [SkemaController::class, 'index'])->name('skema');

Route::view('/', 'index');

// Route::view('/login', 'auth.login')->name('login');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');

Route::view('/register', 'auth.register')->name('register');

Route::view('/dashboard', 'dashboard')->name('dashboard');
