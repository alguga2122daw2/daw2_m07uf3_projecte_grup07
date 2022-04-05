<?php

// use App\Http\Controllers\ControladorApartament;
// use App\Http\Controllers\ControladorTreballador;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PDFController;

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
    return view('login');
});

Route::get('/autentica','ControladorLogin@autentica')->name('autenticacio');

Route::get('/inici', function () {
    return view('index');
});

Route::resource('treballadors', ControladorTreballador::class);
Route::resource('apartaments', ControladorApartament::class);
Route::resource('clients', ControladorClient::class);
Route::resource('lloguers', ControladorLloguer::class);

Route::get('generate-pdf', [PDFController::class, 'generatePDF']);