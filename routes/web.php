<?php

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
    return view('welcome');
});

Route::get('/cities', [App\Http\Controllers\CityController::class, 'index'])->name('cities');

Route::get('/city/{id}', [App\Http\Controllers\CityController::class, 'show'])->name('city');
