<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;

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

Route::get('/obtenerArtistas', [BackendController::class, 'obtenerArtistas']);

Route::get('/obtenerPC', [BackendController::class, 'obtenerPC']);

Route::post('/Artista', [BackendController::class, 'guardarArtista']);

Route::get('/ConsultarArtista/{id}', [BackendController::class, 'consultarArtista']);

Route::delete('/Artista/{id}', [BackendController::class, 'eliminarArtista']);

Route::patch('/actualizarArtista/{id}', [BackendController::class, 'actualizarArtista']);
