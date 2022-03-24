<?php

// use App\Http\Controllers\ControladorApartament;
// use App\Http\Controllers\ControladorTreballador;
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

Route::resource('treballadors', ControladorTreballador::class);
Route::resource('apartaments', ControladorApartament::class);