<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloLaravelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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
Route::get('/', [HomeController::class, 'index']);

//route untuk AuthController
Route::get('/register', [AuthController::class, 'index']);
Route::post('/welcome', [AuthController::class, 'welcome']);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello-laravel', [HelloLaravelController::class, 'index']);

// Route::get('/biodata', [HelloLaravelController::class, 'biodata']);

// //post route
// Route::post('kirim', [HelloLaravelController::class, 'kirim']);

// Route::get('hello-laravel', function() {
//     echo "Ini adalah halaman baru <br/>";

//     return "Hello Laravel";
// });