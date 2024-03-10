<?php

use App\Http\Controllers\SchemeController;
use App\Models\User;
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

Route::get('students', function () {

  $students = '[{
    "nim": "714415740375",
    "pin": "2253",
    "name": "Anett Bachelari"
  }, {
    "nim": "193057339187",
    "pin": "3183",
    "name": "Matty Longman"
  }, {
    "nim": "368723847137",
    "pin": "7398",  
    "name": "Skippy Lemon"
  }, {
    "nim": "486893208671",
    "pin": "3073",
    "name": "Atlante Ovitts"
  }, {
    "nim": "802562422507",
    "pin": "6055",
    "name": "Cecilio Butterfill"
  }, {
    "nim": "370861387888",
    "pin": "7479",
    "name": "Bartram Wallbanks"
  }, {
    "nim": "401219657390",
    "pin": "7133",
    "name": "Marmaduke Berling"
  }, {
    "nim": "363749644523",
    "pin": "2563",
    "name": "Jeanine Eronie"
  }, {
    "nim": "758035805373",
    "pin": "9286",
    "name": "Aluin Gerrens"
  }, {
    "nim": "309171076180",
    "pin": "2168",
    "name": "Erena Gray"
  }]';

  return json_decode($students);
});

Route::get('lecturers', function () {
  $lecturers = '[{
    "nidn": "789617031772",
    "pin": "9732",
    "name": "Pepillo Dyas"
  }, {
    "nidn": "120131664378",
    "pin": "5307",
    "name": "Marcie Burress"
  }, {
    "nidn": "855388555792",
    "pin": "5130",
    "name": "Mickie Nys"
  }, {
    "nidn": "452221076263",
    "pin": "5978",
    "name": "Alastair Hainsworth"
  }, {
    "nidn": "991338560455",
    "pin": "8300",
    "name": "Chantal Dillistone"
  }, {
    "nidn": "495146833946",
    "pin": "6515",
    "name": "Elianore McEvon"
  }, {
    "nidn": "128870221597",
    "pin": "6511",
    "name": "Audie Glencros"
  }, {
    "nidn": "769914598284",
    "pin": "7573",
    "name": "Amery Greenhill"
  }, {
    "nidn": "592284489164",
    "pin": "7434",
    "name": "Dorey Geist"
  }, {
    "nidn": "339674836144",
    "pin": "7630",
    "name": "Evered Howood"
  }]';

  return json_decode($lecturers);
});

Route::get('users', function () {
  return User::all();
});
