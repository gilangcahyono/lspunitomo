<?php

use App\Http\Controllers\SchemeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('schemes', [SchemeController::class, 'search'])->name('schemes.search');

// Route::get('students', function (Request $request) {
//   $students = [];

//   $total = 100;

//   $limit = intval($request->limit ?? 30);

//   if ($limit > $total) {
//     $limit = $total;
//   }
//   // $skip = $request->skip ?? 0;

//   for ($i = 0; $i < $limit; $i++) {
//     $students[$i]['nim'] = fake()->isbn10();
//     $students[$i]['pin'] = fake()->password();
//     $students[$i]['name'] = fake()->name();
//   }

//   return response([
//     'data' => $students,
//     'total' => $total,
//     // 'skip' => $skip,
//     'limit' => $limit,
//   ], 200);
// });
