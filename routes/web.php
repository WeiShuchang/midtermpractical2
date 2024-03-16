<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanchezReservation;
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

Route::get('/', [SanchezReservation::class, 'index']);

Route::post('/calculate', [SanchezReservation::class, 'calculate'])->name("sanchezReserve.calculate");