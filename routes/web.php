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


Route::get('/', [PortofolioController::class, 'index'])->middleware('auth');
Route::get('/register', [PortofolioController::class, 'register'])->middleware('guest')->name('register');
Route::post('/register', [PortofolioController::class, 'store']);
Route::get('/login', [PortofolioController::class, 'masuk'])->middleware('guest')->name('login');
Route::get('/logout', [PortofolioController::class, 'logout']);
Route::post('/login', [PortofolioController::class, 'login']);
