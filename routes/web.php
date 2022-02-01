<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::view('/', 'enunciado');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//vista para mostrar los usuarios en admin 
Route::get('/admin', [App\Http\Controllers\adminController::class, 'lista'])->name('admin')->middleware('admin');

//mostrar los vuelos pendientes y poder reservarlos
Route::get('/listaVuelos/mostrar', [App\Http\Controllers\flightController::class, 'ListaVuelos'])->name('ListaVuelos');

//actualizar asientos libres y meter datos en la tabla pivot

Route::post('/listaVuelos/editar/{id}', [App\Http\Controllers\flightController::class, 'GuardarVuelo']);


// mostrar vuelos y aviones

Route::get('/pasajerosLista', [App\Http\Controllers\passengersController::class, 'vueloAsignar']);
