<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HelloLaravelController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\CastController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route untuk tugas intro laravel
//route untuk HomeController
// Route::get('/', [HomeController::class, 'index']);

// //route untuk AuthController
// Route::get('/register', [AuthController::class, 'index']);
// Route::post('/welcome', [AuthController::class, 'welcome']);

//Route untuk belajar
// Route::get('/admin', function() {
//     return view('layout.master');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [HelloLaravelController::class, 'index']);

// //Route::get('/biodata', [HelloLaravelController::class, 'biodata']);

// Route::get('table', [HelloLaravelController::class, 'table']);

// Route::get('data-tables', [HelloLaravelController::class, 'dataTables']);

//post route
//Route::post('kirim', [HelloLaravelController::class, 'kirim']);



// Route::get('hello-laravel', function() {
//     echo "Ini adalah halaman baru <br/>";

//     return "Hello Laravel";
// });

// CRUD
// KATEGORI
// CREATE
Route::get('/', [KategoriController::class, 'index']);
Route::get('/kategori/tambah', [KategoriController::class, 'create']);
// INSERT
Route::post('/kategori/store', [KategoriController::class, 'store']);
// READ
Route::get('/kategori', [KategoriController::class, 'index']);
//KATEGORI ID
Route::get('/kategori/{kategori_id}', [KategoriController::class, 'show']);
//EDIT
Route::get('/kategori/{kategori_id}/edit', [KategoriController::class, 'edit']);
//UPDATE
Route::PUT('/kategori/{kategori_id}', [KategoriController::class, 'update']);
// DELETE
Route::DELETE('/kategori/{kategori_id}', [KategoriController::class, 'destroy']);

// CRUD
// CAST
Route::get('/cast/tambah', [CastController::class, 'create']);
// INSERT
Route::post('/cast/store', [CastController::class, 'store']);
// READ
Route::get('/cast', [CastController::class, 'index']);
//KATEGORI ID
Route::get('/cast/{cast_id}', [CastController::class, 'show']);
//EDIT
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']);
//UPDATE
Route::PUT('/cast/{cast_id}', [CastController::class, 'update']);
// DELETE
Route::DELETE('/cast/{cast_id}', [CastController::class, 'destroy']);