<?php

use App\Http\Controllers\Airline_City;
use App\Http\Controllers\AirlineController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class)->name('home');

Route::resource('airlines', AirlineController::class);

Route::resource('cities',CityController::class);

/*
Route::get('cities', [CityController::class , 'index'])->name('cities.index');
Route::get('cities/create', [CityController::class , 'create'])->name('cities.create');
Route::post('cities', [CityController::class , 'store'])->name('cities.store');
Route::get('airlines/{airline}', [AirlineController::class , 'show'])->name('airlines.show');
*/