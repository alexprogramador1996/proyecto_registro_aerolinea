<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VuelosController;
use App\Http\Controllers\PasajerosController;
use App\Http\Controllers\DestinosController;
use App\Http\Controllers\ReservacionesController;
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


Route::get('/', function () {
    return view('welcome');
    //return "BIENVENIDO AL SITIO WEB DE REGISTRO DE VUELOS";
});

/*
Route::get('/vuelos', function () { 
    return view('vuelos'); 
});
*/

/*
Route::get('/main', function () {
    return view('main');
    //return "BIENVENIDO AL SITIO WEB DE REGISTRO DE VUELOS";
});

*/
Route::get('/inicio', function () {
    return view('inicio');
    //return "BIENVENIDO AL SITIO WEB DE REGISTRO DE VUELOS";
});


Route::get('/vuelos', function () { 
    return view('vuelos'); 
});
Route::post('guardar', [VuelosController::class,'store'])->name('guardar') ;
Route::get('consulta', [VuelosController::class,'index'])->name('consulta') ;
Route::get('actualizar{id}', [VuelosController::class,'editar'])->name('actualizar');
Route::post('update{vuelo}', [VuelosController::class,'update'])->name('update') ;
Route::delete('eliminar{id}', [VuelosController::class,'delete'])->name('eliminar');

Route::get('/pasajeros', function () { 
    return view('pasajeros'); 
});

Route::post('guardarp', [PasajerosController::class, 'store'])->name('guardarp');
Route::get('consultap', [PasajerosController::class, 'index'])->name('consultap');
Route::get('actualizarp/{id}', [PasajerosController::class, 'editarp'])->name('actualizarp');
Route::post('updatep/{pasajero}', [PasajerosController::class, 'updatep'])->name('updatep');
Route::delete('eliminarp/{id}', [PasajerosController::class, 'deletep'])->name('eliminarp');

Route::get('/destinos', function () { 
    return view('destinos'); 
});


Route::post('guardarde', [DestinosController::class, 'store'])->name('guardarde');
Route::get('consultade', [DestinosController::class, 'index'])->name('consultade');
Route::get('actualizarde/{id}', [DestinosController::class, 'editarde'])->name('actualizarde');
Route::post('updatede/{destino}', [DestinosController::class, 'updatede'])->name('updatede');
Route::delete('eliminarde/{id}', [DestinosController::class, 'deletede'])->name('eliminarde');


Route::get('/reservaciones', function () { 
    return view('reservaciones'); 
});

Route::post('guardarrese', [ReservacionesController::class, 'store'])->name('guardarrese');
Route::get('consultarese', [ReservacionesController::class, 'index'])->name('consultarese');
Route::get('actualizarrese/{id}', [ReservacionesController::class, 'editarrese'])->name('actualizarrese');
Route::post('updaterese/{reservacion}', [ReservacionesController::class, 'updaterese'])->name('updaterese');
Route::delete('eliminarese/{id}', [ReservacionesController::class, 'deleterese'])->name('eliminarese');



Route::get('/acerca', function () { 
    return view('acerca'); 
});