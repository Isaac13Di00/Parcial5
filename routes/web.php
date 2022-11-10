<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use App\Models\Client;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
Route::get('/', function (){
    return view('welcome');
});
Route::get('users/', [ UserController::class, 'index' ]);
Route::get('users/create', [ UserController::class, 'create' ]);
Route::get('users/{id}', [ UserController::class, 'show' ]);
Route::post('users/', [ UserController::class, 'store' ]);

Route::get('clients/', [ ClientController::class, 'index' ]);
Route::get('clients/{id}', [ ClientController::class, 'show' ]);

Route::get('reservations/', [ ReservationController::class, 'index' ]);
Route::get('reservations/{id}', [ ReservationController::class, 'show' ]);

Route::get('login/', function(){
    return view('login');
})->name('login');

Route::get('home/', function(){
    return view('home');
})->name('home');