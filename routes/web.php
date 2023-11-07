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
Route::post('/login', [PortofolioController::class, 'login']);


Route::get('/update' , [PortofolioController::class, "create"])->name('create');
Route::get("/{id}/edit", [PortofolioController::class,"edit"])->name("edit");
Route::put("/{id}", [PortofolioController::class,"update"])->name("update");

Route::get('/imageres', [PortofolioController::class, "image"])->middleware('auth');


Route::get('/logout', [PortofolioController::class, 'logout']);


// Route::get('/send-email', [SendEmailController::class, 'index'])->name('send-email');
// Route::post('/post-email', [SendEmailController::class, 'store'])->name('post-email');