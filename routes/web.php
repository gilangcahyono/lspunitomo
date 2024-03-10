<?php

use App\Http\Controllers\ElementController;
use App\Http\Controllers\KukController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AssesmentRegistrationController;
use App\Http\Controllers\SchemeController;
use App\Http\Controllers\SelfAssessmentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
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

Route::view('/dashboard', 'dashboard')->name('dashboard');

Route::prefix('master')->group(function () {
  Route::resources([
    'schemes' => SchemeController::class,
    'units' => UnitController::class,
    'elements' => ElementController::class,
    'kuks' => KukController::class
  ]);
});

Route::resources([
  'assesment-registration' => AssesmentRegistrationController::class,
  'self-assessment' => SelfAssessmentController::class
]);

Route::view('/', 'index')->name('home');
// Route::redirect('/', '/dashboard', 301);

Route::controller(LoginController::class)->group(function () {
  Route::get('/login', 'create')->name('login');
  Route::post('/login', 'store');
  Route::delete('/logout', 'destroy')->name('logout');
});

Route::view('/register', 'auth.register')->name('register');

// Route::resource('/users', UserController::class);
// Route::resource('/students', StudentController::class);

Route::get('coeg', function () {
  // return url('/scripts/coeg.js');
  return auth()->user();
})->name('coeg');
