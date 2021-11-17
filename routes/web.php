<?php

use App\Http\Controllers\Airline_City;
use App\Http\Controllers\AirlineController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class)->name('home');

Route::resource('airlines', AirlineController::class);

Route::resource('cities',CityController::class);


Route::resource('airlinecity',Airline_City::class);

/*
Route::get('cities', [CityController::class , 'index'])->name('cities.index');
Route::get('cities/create', [CityController::class , 'create'])->name('cities.create');
Route::post('cities', [CityController::class , 'store'])->name('cities.store');
Route::get('airlines/{airline}', [AirlineController::class , 'show'])->name('airlines.show');
*/