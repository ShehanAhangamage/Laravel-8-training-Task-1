<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LoginController;


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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [LoginController::class, 'logout']);

    Route::get('/list', [BookingController::class, 'index']);
    Route::get('/add', [BookingController::class, 'add']);
    Route::post('/create', [BookingController::class, 'create']);
    Route::get('/edit/{booking}', [BookingController::class, 'edit']);
    Route::post('/update/{booking}', [BookingController::class, 'update']);
    Route::get('/delete/{booking}', [BookingController::class, 'delete']);
});
