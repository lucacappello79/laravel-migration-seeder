<?php

use App\Http\Controllers\Guest\CustomerController;
use App\Http\Controllers\Guest\FlightController;
use App\Http\Controllers\Guest\Pagecontroller;
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

Route::get('/', [PageController::class, 'index'])->name('home');

// Route::get('/', [FlightController::class, 'index'])->name('flights');
// Route::get('/', [CustomerController::class, 'index'])->name('customers');
