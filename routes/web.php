<?php

use App\Http\Controllers\PortofolioController;
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
//     return view('welcome');
// });

// Route::get('/login', function () {
//     return view('landing.login');
// });

// Route::get('/register', function () {
//     return view('landing.register');
// });


Route::get('/', [PortofolioController::class, 'index']);
Route::get('/regis', [PortofolioController::class, 'register']);
Route::get('/log', [PortofolioController::class, 'masuk']);


Route::post('/login', [PortofolioController::class, 'login']);
