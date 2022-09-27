<?php

use App\Http\Controllers\FlightController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('flight');
})->name('flight');

Route::get('/create', [FlightController::class, 'create']);
Route::post('/insert', [FlightController::class, 'store']);
Route::get('/delete/{id}', [FlightController::class, 'destroy']);

